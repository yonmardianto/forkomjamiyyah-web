jQuery(document).ready(function($) {
    var $startDate = $('#wec_start_date');
    var $endDate = $('#wec_end_date');

    if ($startDate.length && $endDate.length) {
        
        // When start date changes, set it as the minimum for end date
        $startDate.on('change', function() {
            var startVal = $(this).val();
            if (startVal) {
                $endDate.attr('min', startVal);
                
                var endVal = $endDate.val();
                if (endVal && endVal < startVal) {
                    $endDate.val(startVal);
                }
            }
        });

        // When end date changes directly, validate again
        $endDate.on('change', function() {
            var startVal = $startDate.val();
            var endVal = $(this).val();
            
            if (startVal && endVal && endVal < startVal) {
                alert('End Date & Time cannot be earlier than Start Date. It has been adjusted automatically.');
                $(this).val(startVal);
            }
        });

        // Run validation once on page load just in case
        if ($startDate.val()) {
            $endDate.attr('min', $startDate.val());
        }
    }
});
