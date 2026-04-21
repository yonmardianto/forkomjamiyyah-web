document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('wec-calendar-container');
    if (!calendarEl) return;

    // ── Color Palette ─────────────────────────────────────────────────────
    // wecData.siteColors is a PHP-passed object: { "1": {bg, text}, "2": {bg, text}, ... }
    var SITE_COLORS = (wecData && wecData.siteColors) ? wecData.siteColors : {};
    var DEFAULT_COLOR = { bg: '#868e96', text: '#ffffff' };

    function getSiteColor(blogId) {
        return SITE_COLORS[blogId] || DEFAULT_COLOR;
    }

    function formatDateShort(start, end, isAllDay) {
        if (!start) return '';

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

        return startDay + '-' + endDay;
    }

    // ── Date Formatting ───────────────────────────────────────────────────
    function formatDate(dateObj) {
        if (!dateObj) return '';
        var d = String(dateObj.getDate()).padStart(2, '0');
        var m = String(dateObj.getMonth() + 1).padStart(2, '0');
        var y = dateObj.getFullYear();
        var h = String(dateObj.getHours()).padStart(2, '0');
        var min = String(dateObj.getMinutes()).padStart(2, '0');
        return d + '/' + m + '/' + y + ' ' + h + ':' + min;
    }

    function formatDateOnly(dateObj) {
        if (!dateObj) return '';
        var d = String(dateObj.getDate()).padStart(2, '0');
        var m = String(dateObj.getMonth() + 1).padStart(2, '0');
        var y = dateObj.getFullYear();
        return d + '/' + m + '/' + y;
    }

    // ── Legend Builder ────────────────────────────────────────────────────
    // Collects unique sites from visible events and renders a color legend
    function buildLegend(events) {
        var legendEl = document.getElementById('wec-calendar-legend');
        if (!legendEl) return;

        var seen = {}; // blogId → blogName
        events.forEach(function (ev) {
            var blogId = ev.extendedProps && ev.extendedProps.blogId;
            var blogName = ev.extendedProps && ev.extendedProps.blogName;
            if (blogId && !seen[blogId]) {
                seen[blogId] = blogName || ('Site ' + blogId);
            }
        });

        legendEl.innerHTML = '';

        Object.keys(seen).forEach(function (blogId) {
            var color = getSiteColor(blogId);
            var item = document.createElement('span');
            item.style.cssText = [
                'display:inline-flex',
                'align-items:center',
                'gap:6px',
                'padding:4px 10px',
                'border-radius:20px',
                'font-size:12px',
                'font-weight:600',
                'background:' + color.bg,
                'color:' + color.text,
                'box-shadow:0 1px 3px rgba(0,0,0,0.15)',
            ].join(';');
            item.innerHTML = '&#9679; ' + seen[blogId];
            legendEl.appendChild(item);
        });
    }




    function buildSidebar(events) {
        var listContainer = document.getElementById('wec-event-list-container');
        if (!listContainer) return;

        listContainer.innerHTML = '';

        if (events.length === 0) {
            listContainer.innerHTML = '<p style="color:#777;font-size:13px;">Tidak ada event di periode ini.</p>';
            return;
        }

        var sorted = events.slice().sort(function (a, b) { return a.start - b.start; });

        // Header "EVENT" matching the attachment's serif style and orange underline
        var headerHtml =
            '<div style="margin-bottom:20px;">' +
            '<span style="font-family:\'Playfair Display\', serif, \'Times New Roman\';font-size:20px;font-weight:700;text-transform:uppercase;color:#333;border-bottom:3px solid #fec42d;padding-bottom:2px;display:inline-block;line-height:1;">EVENT</span>' +
            '</div>';

        listContainer.innerHTML = headerHtml;

        sorted.forEach(function (event) {
            var blogId = event.extendedProps && event.extendedProps.blogId;
            var blogName = event.extendedProps && event.extendedProps.blogName;
            var isAllDay = event.allDay || (event.extendedProps && event.extendedProps.allDay);
            var color = getSiteColor(blogId);

            var dateLabel = formatDateShort(event.start, event.end, isAllDay);

            let siteBadge = blogName
                ? '<span style="font-size:10px;font-weight:600;background:' + color.bg + ';color:#fff;padding:2px 8px;border-radius:10px;margin-left:auto;white-space:nowrap;">' +
                blogName + '</span>'
                : '';

            if (blogId == "1") {
                siteBadge = '';
            }

            var itemHtml =
                '<div class="wec-event-item">' +
                '<span style="min-width:35px;font-size:12px;font-weight:700;color:#524c6e;">' + dateLabel + '</span>' +
                '<span style="font-size:12px;color:#5b567d;flex:1;">' + event.title + '</span>' +
                siteBadge +
                '</div>';

            listContainer.innerHTML += itemHtml;
        });
    }

    // ── Calendar Init ─────────────────────────────────────────────────────
    var calendarRendered = false;
    var calendar = null;

    function buildCalendarOptions() {
        return {
            initialView: 'dayGridMonth',
            height: 'auto',
            expandRows: true,
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            events: wecData.apiUrl,

            // Apply per-site colors when each event element is mounted
            eventDidMount: function (info) {
                var blogId = info.event.extendedProps && info.event.extendedProps.blogId;
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

            // Modal on event click
            eventClick: function (info) {
                info.jsEvent.preventDefault();

                var modal = document.getElementById('wec-event-modal');
                var titleEl = document.getElementById('wec-modal-title');
                var timeEl = document.getElementById('wec-modal-time');
                var siteEl = document.getElementById('wec-modal-site');
                var descEl = document.getElementById('wec-modal-desc');
                var imgEl = document.getElementById('wec-modal-image');

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
                    var endDisplay = '';
                    if (endRaw) {
                        var endAdj = new Date(endRaw.getTime() - 86400000);
                        var endTxt = formatDateOnly(endAdj);
                        endDisplay = startTxt !== endTxt ? startTxt + ' &ndash; ' + endTxt : startTxt;
                    } else {
                        endDisplay = startTxt;
                    }
                    timeEl.innerHTML = endDisplay + ' ';
                } else {
                    var startTime = formatDate(info.event.start);
                    var endTime = info.event.end ? ' &ndash; ' + formatDate(info.event.end) : '';
                    timeEl.innerHTML = startTime + endTime;
                }

                // Site badge in modal
                if (siteEl) {
                    siteEl.innerHTML = blogName
                        ? '&#127970; <span style="display:inline-block;background:' + color.bg + ';color:' + color.text +
                        ';font-size:11px;font-weight:700;padding:2px 8px;border-radius:10px;">' + blogName + '</span>'
                        : '';
                }

                descEl.innerHTML = info.event.extendedProps.description || '';

                if (info.event.extendedProps.imageUrl) {
                    imgEl.src = info.event.extendedProps.imageUrl;
                    imgEl.style.display = 'block';
                } else {
                    imgEl.style.display = 'none';
                }

                modal.style.display = 'block';
            }
        };
    }

    function initCalendar() {
        if (calendarRendered) return;
        if (calendarEl.offsetWidth < 50) return;

        calendarRendered = true;
        calendar = new FullCalendar.Calendar(calendarEl, buildCalendarOptions());
        calendar.render();

        if (typeof ResizeObserver !== 'undefined') {
            var ro = new ResizeObserver(function () { calendar.updateSize(); });
            ro.observe(calendarEl);
        }
    }

    // ── Strategy 1: Elementor frontend/init ──────────────────────────────
    window.addEventListener('elementor/frontend/init', function () {
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
                calendar = new FullCalendar.Calendar(calendarEl, buildCalendarOptions());
                calendar.render();

                if (typeof ResizeObserver !== 'undefined') {
                    var ro = new ResizeObserver(function (entries) {
                        if (entries[0].contentRect.width > 50) calendar.updateSize();
                    });
                    ro.observe(calendarEl);
                }
            }
        }
    }, 100);

    // ── Strategy 3: window.load safety net ───────────────────────────────
    window.addEventListener('load', function () {
        setTimeout(function () {
            if (!calendarRendered) {
                initCalendar();
            } else if (calendar) {
                calendar.updateSize();
            }
        }, 300);
    });

    // ── Modal close logic ─────────────────────────────────────────────────
    var closeBtn = document.getElementById('wec-modal-close');
    var modal = document.getElementById('wec-event-modal');
    if (closeBtn) {
        closeBtn.onclick = function () { modal.style.display = 'none'; };
    }
    window.onclick = function (event) {
        if (event.target === modal) modal.style.display = 'none';
    };
});