document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('wec-calendar-container');

    if (!calendarEl) return;

    function formatDate(dateObj) {
        if (!dateObj) return '';
        var d = String(dateObj.getDate()).padStart(2, '0');
        var m = String(dateObj.getMonth() + 1).padStart(2, '0');
        var y = dateObj.getFullYear();
        var h = String(dateObj.getHours()).padStart(2, '0');
        var min = String(dateObj.getMinutes()).padStart(2, '0');
        return d + '/' + m + '/' + y + ' ' + h + ':' + min;
    }

    var calendarRendered = false;
    var calendar = null;

    function initCalendar() {
        if (calendarRendered) return;

        // Guard: don't render if container still has no real width
        if (calendarEl.offsetWidth < 50) return;

        calendarRendered = true;

        calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            height: 'auto',
            expandRows: true,
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            events: wecData.apiUrl,
            eventsSet: function (events) {
                var listContainer = document.getElementById('wec-event-list-container');
                if (!listContainer) return;

                listContainer.innerHTML = '';

                if (events.length === 0) {
                    listContainer.innerHTML = '<p style="color:#777;">Tidak ada event di periode ini.</p>';
                    return;
                }

                var sortedEvents = events.slice().sort(function (a, b) {
                    return a.start - b.start;
                });

                sortedEvents.forEach(function (event) {
                    var startDate = formatDate(event.start);
                    var eventUrl = event.extendedProps && event.extendedProps.url
                        ? event.extendedProps.url
                        : (event.url || '#');
                    var itemHtml = '<div class="wec-event-item" style="margin-bottom: 12px; padding-bottom: 12px; border-bottom: 1px solid #eee;">' +
                        '<h4 style="margin: 0 0 4px 0; font-size: 14px; line-height: 1.4;">' + event.title + '</h4>' +
                        '<p style="margin: 0 0 8px 0; font-size: 12px; color: #888;">📅 ' + startDate + '</p>' +
                        '<a href="' + eventUrl + '" style="display: inline-block; font-size: 12px; font-weight: 600; color: #3b5bdb; text-decoration: none; border: 1px solid #3b5bdb; border-radius: 4px; padding: 3px 10px; transition: background 0.2s;" ' +
                        'onmouseover="this.style.background=\'#3b5bdb\';this.style.color=\'#fff\';" ' +
                        'onmouseout="this.style.background=\'transparent\';this.style.color=\'#3b5bdb\';">Lihat Detail &rarr;</a>' +
                        '</div>';
                    listContainer.innerHTML += itemHtml;
                });
            },
            eventClick: function (info) {
                info.jsEvent.preventDefault();

                var modal = document.getElementById('wec-event-modal');
                var title = document.getElementById('wec-modal-title');
                var time = document.getElementById('wec-modal-time');
                var desc = document.getElementById('wec-modal-desc');
                var link = document.getElementById('wec-modal-link');
                var img = document.getElementById('wec-modal-image');

                title.innerText = info.event.title;

                var startTime = formatDate(info.event.start);
                var endTime = info.event.end ? ' - ' + formatDate(info.event.end) : '';
                time.innerText = startTime + endTime;

                desc.innerHTML = info.event.extendedProps.description || '';

                if (info.event.extendedProps.imageUrl) {
                    img.src = info.event.extendedProps.imageUrl;
                    img.style.display = 'block';
                } else {
                    img.style.display = 'none';
                }

                link.href = info.event.url || '#';
                modal.style.display = 'block';
            }
        });

        calendar.render();

        // After render, watch for size changes (e.g. sidebar collapsing, window resize)
        if (typeof ResizeObserver !== 'undefined') {
            var ro = new ResizeObserver(function () {
                calendar.updateSize();
            });
            ro.observe(calendarEl);
        }
    }

    // --- Strategy 1: Elementor's own "frontend/init" event ---
    // Elementor fires this after all widgets and sections are laid out.
    window.addEventListener('elementor/frontend/init', function () {
        setTimeout(function () {
            initCalendar();
        }, 100);
    });

    // --- Strategy 2: Polling fallback ---
    // In case the Elementor event already fired or never fires,
    // poll until the container has a real width (max 3 seconds).
    var pollAttempts = 0;
    var maxPollAttempts = 30; // 30 x 100ms = 3 seconds
    var pollInterval = setInterval(function () {
        pollAttempts++;

        if (calendarEl.offsetWidth > 50) {
            clearInterval(pollInterval);
            initCalendar();
        } else if (pollAttempts >= maxPollAttempts) {
            // Container still has no width after 3s — render anyway and let
            // ResizeObserver fix it once the width resolves.
            clearInterval(pollInterval);
            if (!calendarRendered) {
                calendarRendered = true;
                calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    height: 'auto',
                    expandRows: true,
                    headerToolbar: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'dayGridMonth,timeGridWeek,timeGridDay'
                    },
                    events: wecData.apiUrl,
                });
                calendar.render();

                if (typeof ResizeObserver !== 'undefined') {
                    var ro = new ResizeObserver(function (entries) {
                        if (entries[0].contentRect.width > 50) {
                            calendar.updateSize();
                        }
                    });
                    ro.observe(calendarEl);
                }
            }
        }
    }, 100);

    // --- Strategy 3: window.load safety net ---
    // By the time all assets are loaded, Elementor is always done laying out.
    window.addEventListener('load', function () {
        setTimeout(function () {
            if (!calendarRendered) {
                initCalendar();
            } else if (calendar) {
                calendar.updateSize();
            }
        }, 300);
    });

    // Close modal logic
    var closeBtn = document.getElementById('wec-modal-close');
    var modal = document.getElementById('wec-event-modal');
    if (closeBtn) {
        closeBtn.onclick = function () {
            modal.style.display = "none";
        };
    }
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };
});