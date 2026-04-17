document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('wec-calendar-container');

    if (calendarEl) {
        function formatDate(dateObj) {
            if (!dateObj) return '';
            var d = String(dateObj.getDate()).padStart(2, '0');
            var m = String(dateObj.getMonth() + 1).padStart(2, '0');
            var y = dateObj.getFullYear();
            var h = String(dateObj.getHours()).padStart(2, '0');
            var min = String(dateObj.getMinutes()).padStart(2, '0');
            return d + '/' + m + '/' + y + ' ' + h + ':' + min;
        }

        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            height: 'auto',
            expandRows: true,
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            events: wecData.apiUrl, // Fetch events from REST API
            eventsSet: function (events) {
                var listContainer = document.getElementById('wec-event-list-container');
                if (!listContainer) return;

                listContainer.innerHTML = '';

                if (events.length === 0) {
                    listContainer.innerHTML = '<p style="color:#777;">Tidak ada event di periode ini.</p>';
                    return;
                }

                // Copy and sort events by start date
                var sortedEvents = events.slice().sort(function (a, b) {
                    return a.start - b.start;
                });

                sortedEvents.forEach(function (event) {
                    var startDate = formatDate(event.start);

                    var itemHtml = '<div style="margin-bottom: 15px; padding-bottom: 15px; border-bottom: 1px solid #eee;">' +
                        '<h4 style="margin: 0 0 5px 0;">' + event.title + '</h4>' +
                        '<p style="margin: 0 0 5px 0; font-size: 13px; color: #555;">📅 ' + startDate + '</p>' +
                        '<a href="' + (event.url || '#') + '" style="font-size: 13px; color: #fff; text-decoration: none;">Lihat Detail &rarr;</a>' +
                        '</div>';

                    listContainer.innerHTML += itemHtml;
                });
            },
            eventClick: function (info) {
                info.jsEvent.preventDefault(); // Don't let the browser navigate

                // Populate modal data
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

                // Show modal
                modal.style.display = 'block';
            }
        });

        // FIX: Ensure the container has an explicit width before rendering.
        // FullCalendar reads offsetWidth at render time — if it's 0 (e.g. inside
        // a flex/grid parent that hasn't laid out yet), the columns collapse.
        calendarEl.style.minWidth = '100%';

        // FIX: Use a helper that renders once then calls updateSize() at multiple
        // checkpoints so the layout self-corrects regardless of when the parent
        // container finally gets a non-zero width.
        function renderAndFix() {
            calendar.render();
            safeUpdateSize();
        }

        function safeUpdateSize() {
            // Immediately attempt a resize
            calendar.updateSize();

            // Then retry at short intervals in case the container width is still 0
            var attempts = 0;
            var maxAttempts = 10;
            var interval = setInterval(function () {
                attempts++;
                var width = calendarEl.offsetWidth;
                if (width > 50) {
                    calendar.updateSize();
                    clearInterval(interval);
                } else if (attempts >= maxAttempts) {
                    // Give up retrying but do one final resize
                    calendar.updateSize();
                    clearInterval(interval);
                }
            }, 100); // Check every 100ms, up to 1 second total
        }

        // Render inside requestAnimationFrame so the browser has completed at least
        // one layout pass before FullCalendar measures its container.
        requestAnimationFrame(function () {
            renderAndFix();

            // ResizeObserver: fires whenever the container dimensions change,
            // including the first time it gets a real width from a parent flex/grid.
            if (typeof ResizeObserver !== 'undefined') {
                var ro = new ResizeObserver(function (entries) {
                    var width = entries[0].contentRect.width;
                    if (width > 50) {
                        calendar.updateSize();
                    }
                });
                ro.observe(calendarEl);

                // FIX: Also disconnect after the window 'load' event fires —
                // by then all resources (stylesheets, fonts) are loaded and the
                // layout is truly stable, so we no longer need to watch.
                window.addEventListener('load', function () {
                    setTimeout(function () {
                        calendar.updateSize();
                        ro.disconnect();
                    }, 200);
                }, { once: true });
            } else {
                // Fallback for very old browsers
                window.addEventListener('load', function () {
                    setTimeout(function () { calendar.updateSize(); }, 300);
                });
            }
        });

        // Close modal logic
        var closeBtn = document.getElementById('wec-modal-close');
        var modal = document.getElementById('wec-event-modal');
        closeBtn.onclick = function () {
            modal.style.display = "none";
        }
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    }
});