jQuery(document).ready(function ($) {
    var $checkbox       = $('#wec_all_day');
    var $datetimeWrap   = $('#wec-datetime-wrap');
    var $dateOnlyWrap   = $('#wec-date-only-wrap');

    var $startDatetime  = $('#wec_start_date');
    var $endDatetime    = $('#wec_end_date');
    var $startDateOnly  = $('#wec_start_date_only');
    var $endDateOnly    = $('#wec_end_date_only');

    // ── Toggle UI based on All Day state ─────────────────────────────────
    function applyAllDayState(isAllDay) {
        if (isAllDay) {
            $datetimeWrap.hide();
            $dateOnlyWrap.show();
            // Sync datetime values → date-only if date-only is empty
            if ($startDatetime.val() && !$startDateOnly.val()) {
                $startDateOnly.val($startDatetime.val().substring(0, 10));
            }
            if ($endDatetime.val() && !$endDateOnly.val()) {
                $endDateOnly.val($endDatetime.val().substring(0, 10));
            }
        } else {
            $dateOnlyWrap.hide();
            $datetimeWrap.show();
            // Sync date-only values → datetime if datetime is empty
            if ($startDateOnly.val() && !$startDatetime.val()) {
                $startDatetime.val($startDateOnly.val() + 'T00:00');
            }
            if ($endDateOnly.val() && !$endDatetime.val()) {
                $endDatetime.val($endDateOnly.val() + 'T23:59');
            }
        }
    }

    // Run on page load to restore saved state
    if ($checkbox.length) {
        applyAllDayState($checkbox.is(':checked'));
    }

    // Run whenever checkbox is toggled
    $checkbox.on('change', function () {
        applyAllDayState($(this).is(':checked'));
    });

    // ── Validation for datetime-local inputs ──────────────────────────────
    if ($startDatetime.length && $endDatetime.length) {
        $startDatetime.on('change', function () {
            var startVal = $(this).val();
            if (startVal) {
                $endDatetime.attr('min', startVal);
                if ($endDatetime.val() && $endDatetime.val() < startVal) {
                    $endDatetime.val(startVal);
                }
            }
        });

        $endDatetime.on('change', function () {
            var startVal = $startDatetime.val();
            var endVal   = $(this).val();
            if (startVal && endVal && endVal < startVal) {
                alert('End Date & Time cannot be earlier than Start Date. It has been adjusted automatically.');
                $(this).val(startVal);
            }
        });

        if ($startDatetime.val()) {
            $endDatetime.attr('min', $startDatetime.val());
        }
    }

    // ── Validation for date-only inputs ───────────────────────────────────
    if ($startDateOnly.length && $endDateOnly.length) {
        $startDateOnly.on('change', function () {
            var startVal = $(this).val();
            if (startVal) {
                $endDateOnly.attr('min', startVal);
                if ($endDateOnly.val() && $endDateOnly.val() < startVal) {
                    $endDateOnly.val(startVal);
                }
            }
        });

        $endDateOnly.on('change', function () {
            var startVal = $startDateOnly.val();
            var endVal   = $(this).val();
            if (startVal && endVal && endVal < startVal) {
                alert('Tanggal Selesai tidak boleh lebih awal dari Tanggal Mulai.');
                $(this).val(startVal);
            }
        });

        if ($startDateOnly.val()) {
            $endDateOnly.attr('min', $startDateOnly.val());
        }
    }

    // ── Form Submission Validation (Classic & Gutenberg) ──────────────────
    function checkValidity() {
        var isAllDay = $checkbox.is(':checked');
        if (isAllDay) {
            return $startDateOnly.val() && $endDateOnly.val();
        } else {
            return $startDatetime.val() && $endDatetime.val();
        }
    }

    // Classic Editor handle
    $('#post').on('submit', function (e) {
        if (!checkValidity()) {
            e.preventDefault();
            alert('Silakan isi Tanggal Mulai dan Tanggal Selesai.');
            var $publishBtn = $('#publish');
            if ($publishBtn.hasClass('disabled')) $publishBtn.removeClass('disabled');
            return false;
        }
    });

    // Gutenberg (Block Editor) handle
    if (typeof wp !== 'undefined' && wp.data && wp.data.subscribe) {
        var lockName = 'wec_date_lock';
        
        function syncLockState() {
            var isValid = checkValidity();
            var isLocked = wp.data.select('core/editor').isPostSavingLocked();
            
            if (!isValid && !isLocked) {
                wp.data.dispatch('core/editor').lockPostSaving(lockName);
            } else if (isValid && isLocked) {
                wp.data.dispatch('core/editor').unlockPostSaving(lockName);
            }
        }

        wp.data.subscribe(syncLockState);
        
        // Trigger immediately on input
        $('input[type="date"], input[type="datetime-local"], #wec_all_day').on('change input', function() {
            syncLockState();
        });
    }

    // Monitor inputs for changes to trigger validation (for Classic)
    $('input[type="date"], input[type="datetime-local"], #wec_all_day').on('change input', function() {
        // Handled specifically for Gutenberg above, Classic uses submit event
    });
});
