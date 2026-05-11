document.addEventListener("DOMContentLoaded", function () {
  var calendarEl = document.getElementById("wec-calendar-container");
  if (!calendarEl) return;

  // ── Color Palette ─────────────────────────────────────────────────────
  // wecData.siteColors is a PHP-passed object: { "1": {bg, text}, "2": {bg, text}, ... }
  var SITE_COLORS = wecData && wecData.siteColors ? wecData.siteColors : {};
  var DEFAULT_COLOR = { bg: "#868e96", text: "#ffffff" };

  function getSiteColor(blogId) {
    return SITE_COLORS[blogId] || DEFAULT_COLOR;
  }

  // ── Holiday Data ──────────────────────────────────────────────────────
  var holidayMap = {}; // key: 'YYYY-MM-DD', value: localName
  var fetchedYears = {};

  function injectHolidayBadges() {
    var cells = calendarEl.querySelectorAll("[data-date]");
    cells.forEach(function (cell) {
      var key = cell.getAttribute("data-date"); // format: YYYY-MM-DD
      //   if (holidayMap[key] && !cell.querySelector(".wec-holiday-badge")) {
      //     var badge = document.createElement("div");
      //     badge.className = "wec-holiday-badge";
      //     badge.title = holidayMap[key];
      //     badge.innerText = holidayMap[key];
      //     cell.appendChild(badge);
      //     cell.classList.add("wec-is-holiday");
      //   }

      if (holidayMap[key]) {
        injectBadgeToCell(cell, holidayMap[key]);
      }
    });
  }

  function loadHolidays(year, callback) {
    if (fetchedYears[year]) {
      if (callback) callback();
      return;
    }

    var url = wecData.holidayApiUrl + "?year=" + year;
    fetch(url)
      .then(function (r) {
        return r.json();
      })
      .then(function (data) {
        data.forEach(function (h) {
          holidayMap[h.date] = h.localName;
        });
        fetchedYears[year] = true;
        injectHolidayBadges(); // ← inject langsung ke DOM
        if (callback) callback();
      })
      .catch(function (e) {
        console.warn("[WEC] Gagal load holidays:", e);
        if (callback) callback();
      });
  }

  function formatDateShort(start, end, isAllDay) {
    if (!start) return "";

    var startDate = new Date(start);
    var startDay = startDate.getDate();

    if (!end) return String(startDay);

    var endDate = new Date(end);

    if (isAllDay) {
      // FullCalendar: allDay end date is exclusive (hari setelah hari terakhir)
      // Jika beda waktunya 1 hari (tepat 24 jam), maka event hanya berlangsung 1 hari
      var timeDiff = endDate.getTime() - startDate.getTime();
      if (timeDiff <= 86400000) {
        return String(startDay);
      }
      // Kurangi 1 hari untuk mendapat hari terakhir yang sebenarnya
      endDate.setDate(endDate.getDate() - 1);
    }

    var endDay = endDate.getDate();

    // Jika start dan end sama (event 1 hari), tampilkan angka tunggal
    if (startDay === endDay && startDate.getMonth() === endDate.getMonth()) {
      return String(startDay);
    }

    return startDay + "-" + endDay;
  }

  // ── Date Formatting ───────────────────────────────────────────────────
  function formatDate(dateObj) {
    if (!dateObj) return "";
    var d = String(dateObj.getDate()).padStart(2, "0");
    var m = String(dateObj.getMonth() + 1).padStart(2, "0");
    var y = dateObj.getFullYear();
    var h = String(dateObj.getHours()).padStart(2, "0");
    var min = String(dateObj.getMinutes()).padStart(2, "0");
    return d + "/" + m + "/" + y + " " + h + ":" + min;
  }

  function formatDateOnly(dateObj) {
    if (!dateObj) return "";
    var d = String(dateObj.getDate()).padStart(2, "0");
    var m = String(dateObj.getMonth() + 1).padStart(2, "0");
    var y = dateObj.getFullYear();
    return d + "/" + m + "/" + y;
  }

  // ── Legend Builder ────────────────────────────────────────────────────
  // Collects unique sites from visible events and renders a color legend
  function buildLegend(events) {
    var legendEl = document.getElementById("wec-calendar-legend");
    if (!legendEl) return;

    var seen = {}; // blogId → blogName
    events.forEach(function (ev) {
      var blogId = ev.extendedProps && ev.extendedProps.blogId;
      var blogName = ev.extendedProps && ev.extendedProps.blogName;
      if (blogId && !seen[blogId]) {
        seen[blogId] = blogName || "Site " + blogId;
      }
    });

    legendEl.innerHTML = "";

    Object.keys(seen).forEach(function (blogId) {
      var color = getSiteColor(blogId);
      var item = document.createElement("span");
      item.style.cssText = [
        "display:inline-flex",
        "align-items:center",
        "gap:6px",
        "padding:4px 10px",
        "border-radius:20px",
        "font-size:12px",
        "font-weight:600",
        "background:" + color.bg,
        "color:" + color.text,
        "box-shadow:0 1px 3px rgba(0,0,0,0.15)",
      ].join(";");
      item.innerHTML = "&#9679; " + seen[blogId];
      legendEl.appendChild(item);
    });
  }

  function buildSidebar(events) {
    var listContainer = document.getElementById("wec-event-list-container");
    if (!listContainer || !calendar) return;

    listContainer.innerHTML = "";

    var currentDate = calendar.getDate();
    var currentYear = currentDate.getFullYear();
    var currentMonth = currentDate.getMonth();

    // Hanya tampilkan event yang benar-benar ada di bulan yang aktif (bukan hari sisa dari bulan lalu/depan)
    var filteredEvents = events.filter(function (event) {
      var d = event.start
        ? event.start.getTime
          ? event.start
          : new Date(event.start)
        : null;
      return (
        d && d.getFullYear() === currentYear && d.getMonth() === currentMonth
      );
    });

    if (filteredEvents.length === 0) {
      listContainer.innerHTML =
        '<p style="color:#777;font-size:13px;margin-bottom:20px;">Tidak ada event kegiatan di bulan ini.</p>';
    } else {
      var sorted = filteredEvents.slice().sort(function (a, b) {
        var timeA = a.start
          ? a.start.getTime
            ? a.start.getTime()
            : new Date(a.start).getTime()
          : 0;
        var timeB = b.start
          ? b.start.getTime
            ? b.start.getTime()
            : new Date(b.start).getTime()
          : 0;
        return timeA - timeB;
      });

      // Header "EVENT" matching the attachment's serif style and orange underline
      var headerHtml =
        '<div style="margin-bottom:20px;">' +
        "<span style=\"font-family:'Playfair Display', serif, 'Times New Roman';font-size:20px;font-weight:700;text-transform:uppercase;color:#333;border-bottom:3px solid #fec42d;padding-bottom:2px;display:inline-block;line-height:1;\">EVENT</span>" +
        "</div>";

      listContainer.innerHTML = headerHtml;

      sorted.forEach(function (event) {
        var blogId = event.extendedProps && event.extendedProps.blogId;
        var blogName = event.extendedProps && event.extendedProps.blogName;
        var isAllDay =
          event.allDay || (event.extendedProps && event.extendedProps.allDay);
        var color = getSiteColor(blogId);

        var dateLabel = formatDateShort(event.start, event.end, isAllDay);

        let siteBadge = blogName
          ? '<span style="font-size:10px;font-weight:600;background:' +
            color.bg +
            ';color:#fff;padding:2px 8px;border-radius:10px;margin-left:auto;white-space:nowrap;">' +
            blogName +
            "</span>"
          : "";

        if (blogId == "1") {
          siteBadge = "";
        }

        var itemHtml =
          '<div class="wec-event-item">' +
          '<span style="min-width:35px;font-size:12px;font-weight:700;color:#524c6e;">' +
          dateLabel +
          "</span>" +
          '<span style="font-size:12px;color:#5b567d;flex:1;">' +
          event.title +
          "</span>" +
          siteBadge +
          "</div>";

        listContainer.innerHTML += itemHtml;
      });
    }

    // ── Holiday Section ───────────────────────────────────────────────
    if (calendar) {
      var holidaysThisMonth = Object.keys(holidayMap)
        .filter(function (dateStr) {
          var d = new Date(dateStr + "T00:00:00");
          return (
            d.getFullYear() === currentYear && d.getMonth() === currentMonth
          );
        })
        .sort();

      if (holidaysThisMonth.length > 0) {
        listContainer.innerHTML +=
          '<div class="wec-holiday-section-header">HARI LIBUR NASIONAL</div>';

        holidaysThisMonth.forEach(function (dateStr) {
          var d = new Date(dateStr + "T00:00:00");
          var day = String(d.getDate()).padStart(2, "0");
          listContainer.innerHTML +=
            '<div class="wec-holiday-item">' +
            '<span class="wec-holiday-day">' +
            day +
            "</span>" +
            '<span class="wec-holiday-name">' +
            holidayMap[dateStr] +
            "</span>" +
            '<span class="wec-holiday-badge-inline">Libur</span>' +
            "</div>";
        });
      }
    }
  }

  function injectBadgeToCell(cell, name) {
    if (cell.querySelector(".wec-holiday-badge")) return; // sudah ada

    var dayTop = cell.querySelector(".fc-daygrid-day-top");
    var badge = document.createElement("div");
    badge.className = "wec-holiday-badge";
    badge.title = name;
    badge.innerText = name;

    if (dayTop) {
      dayTop.appendChild(badge); // ← masuk ke area angka tanggal
    } else {
      cell.appendChild(badge); // fallback
    }
    cell.classList.add("wec-is-holiday");
  }

  // ── Calendar Init ─────────────────────────────────────────────────────
  var calendarRendered = false;
  var calendar = null;

  function buildCalendarOptions() {
    return {
      locale: "id",
      initialView: "dayGridMonth",
      height: "auto",
      expandRows: true,
      headerToolbar: {
        left: "prev,next today",
        center: "title",
        right: "dayGridMonth,timeGridWeek,timeGridDay",
      },
      events: wecData.apiUrl,

      // Apply per-site colors when each event element is mounted
      eventDidMount: function (info) {
        var blogId =
          info.event.extendedProps && info.event.extendedProps.blogId;
        var color = getSiteColor(blogId);
        info.el.style.backgroundColor = color.bg;
        info.el.style.borderColor = color.bg;
        info.el.style.color = color.text;
      },

      // Rebuild sidebar + legend whenever the event set changes
      eventsSet: function (events) {
        buildSidebar(events);
        buildLegend(events);
      },

      datesSet: function (dateInfo) {
        var startYear = dateInfo.start.getFullYear();
        var endYear = dateInfo.end.getFullYear();

        for (var y = startYear; y <= endYear; y++) {
          if (!fetchedYears[y]) {
            loadHolidays(y, function () {
              if (calendar) {
                buildSidebar(calendar.getEvents());
                // Trigger a re-render of day cells to show holiday badges
                // calendar.render();
                injectHolidayBadges();
              }
            });
          }
        }
      },

      dayCellDidMount: function (info) {
        var y = info.date.getFullYear();
        var m = String(info.date.getMonth() + 1).padStart(2, "0");
        var d = String(info.date.getDate()).padStart(2, "0");
        var key = y + "-" + m + "-" + d;

        // if (holidayMap[key]) {
        //   var badge = document.createElement("div");
        //   badge.className = "wec-holiday-badge";
        //   badge.title = holidayMap[key];
        //   badge.innerText = holidayMap[key];
        //   info.el.appendChild(badge);
        //   info.el.classList.add("wec-is-holiday");
        // }

        if (holidayMap[key]) {
          injectBadgeToCell(info.el, holidayMap[key]);
        }
      },

      // Modal on event click
      eventClick: function (info) {
        info.jsEvent.preventDefault();

        var modal = document.getElementById("wec-event-modal");
        var titleEl = document.getElementById("wec-modal-title");
        var timeEl = document.getElementById("wec-modal-time");
        var siteEl = document.getElementById("wec-modal-site");
        var descEl = document.getElementById("wec-modal-desc");
        var imgEl = document.getElementById("wec-modal-image");

        var blogId = info.event.extendedProps.blogId;
        var blogName = info.event.extendedProps.blogName;
        var isAllDay = info.event.allDay;
        var color = getSiteColor(blogId);

        titleEl.innerText = info.event.title;

        // Time display
        if (isAllDay) {
          var startTxt = formatDateOnly(info.event.start);
          var endRaw = info.event.end;
          // FullCalendar allDay end is exclusive — subtract 1 day
          var endDisplay = "";
          if (endRaw) {
            var endAdj = new Date(endRaw.getTime() - 86400000);
            var endTxt = formatDateOnly(endAdj);
            endDisplay =
              startTxt !== endTxt ? startTxt + " &ndash; " + endTxt : startTxt;
          } else {
            endDisplay = startTxt;
          }
          timeEl.innerHTML = endDisplay + " ";
        } else {
          var startTime = formatDate(info.event.start);
          var endTime = info.event.end
            ? " &ndash; " + formatDate(info.event.end)
            : "";
          timeEl.innerHTML = startTime + endTime;
        }

        // Site badge in modal
        if (siteEl) {
          siteEl.innerHTML = blogName
            ? '&#127970; <span style="display:inline-block;background:' +
              color.bg +
              ";color:" +
              color.text +
              ';font-size:11px;font-weight:700;padding:2px 8px;border-radius:10px;">' +
              blogName +
              "</span>"
            : "";
        }

        descEl.innerHTML = info.event.extendedProps.description || "";

        if (info.event.extendedProps.imageUrl) {
          imgEl.src = info.event.extendedProps.imageUrl;
          imgEl.style.display = "block";
        } else {
          imgEl.style.display = "none";
        }

        modal.style.display = "block";
      },
    };
  }

  function initCalendarBackup() {
    if (calendarRendered) return;
    if (calendarEl.offsetWidth < 50) return;

    calendarRendered = true;
    calendar = new FullCalendar.Calendar(calendarEl, buildCalendarOptions());
    calendar.render();

    if (typeof ResizeObserver !== "undefined") {
      var ro = new ResizeObserver(function () {
        calendar.updateSize();
      });
      ro.observe(calendarEl);
    }
  }

  function initCalendar() {
    if (calendarRendered) return;
    if (calendarEl.offsetWidth < 50) return;

    calendarRendered = true;
    calendar = new FullCalendar.Calendar(calendarEl, buildCalendarOptions());

    var currentYear = new Date().getFullYear();

    // ✅ Pre-fetch holiday SEBELUM render, lalu inject setelah selesai
    loadHolidays(currentYear, function () {
      calendar.render();
      // injectHolidayBadges() sudah dipanggil di dalam loadHolidays
    });

    // Juga fetch tahun depan (untuk navigasi)
    loadHolidays(currentYear + 1);

    if (typeof ResizeObserver !== "undefined") {
      var ro = new ResizeObserver(function () {
        calendar.updateSize();
      });
      ro.observe(calendarEl);
    }
  }

  // ── Strategy 1: Elementor frontend/init ──────────────────────────────
  window.addEventListener("elementor/frontend/init", function () {
    setTimeout(initCalendar, 100);
  });

  // ── Strategy 2: Polling fallback (max 3 s) ────────────────────────────
  var pollAttempts = 0;
  var pollInterval = setInterval(function () {
    pollAttempts++;
    if (calendarEl.offsetWidth > 50) {
      clearInterval(pollInterval);
      initCalendar();
    } else if (pollAttempts >= 30) {
      clearInterval(pollInterval);
      if (!calendarRendered) {
        calendarRendered = true;
        calendar = new FullCalendar.Calendar(
          calendarEl,
          buildCalendarOptions(),
        );
        calendar.render();

        if (typeof ResizeObserver !== "undefined") {
          var ro = new ResizeObserver(function (entries) {
            if (entries[0].contentRect.width > 50) calendar.updateSize();
          });
          ro.observe(calendarEl);
        }
      }
    }
  }, 100);

  // ── Strategy 3: window.load safety net ───────────────────────────────
  window.addEventListener("load", function () {
    setTimeout(function () {
      if (!calendarRendered) {
        initCalendar();
      } else if (calendar) {
        calendar.updateSize();
      }
    }, 300);
  });

  // ── Modal close logic ─────────────────────────────────────────────────
  var closeBtn = document.getElementById("wec-modal-close");
  var modal = document.getElementById("wec-event-modal");
  if (closeBtn) {
    closeBtn.onclick = function () {
      modal.style.display = "none";
    };
  }
  window.onclick = function (event) {
    if (event.target === modal) modal.style.display = "none";
  };
});
