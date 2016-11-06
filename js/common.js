$(document).ready(function(){
    $('[name=report_action]').on('click', function(){
        var opt = $(this).val();
        $('#action').val(opt);
        switch(opt) {
            case 'REPORT':
                $('.report-box').show();
                $('.report-box .inputfield').addClass('required');
            break;
            case 'DATABASE':
                $('.report-box').hide();
                $('.report-box .inputfield').removeClass('required');
            break;
        }
    });

    // Form Validation
    $('form').submit(function(e){
        var validFlag = 0;

        // Required
        $(this).find('input.required').each(function(){
            var val = $.trim($(this).val());
            var id = $(this).prop('id');
            if(val === '') {
                $('#error_'+id).show();
                validFlag++;
            } else {
                $('#error_'+id).hide();
            }
        });

        // Same as
        $(this).find('.sameas').each(function(){
            var thisVal     =   $(this).val();
            var sameAsId    =   $(this).attr('data-same-as');
            var sameAsVal   =   $('#'+sameAsId).val();
            alert(thisVal);
            alert(sameAsVal);
        });
        return false;

        if(validFlag > 0) {
            return false;
        }
    });

    // Add datepicker
    if($('.hasDatepicker').length) {
        $( "#sprintDate" ).datepicker();
        $( "#startDate" ).datepicker();
        $( "#endDate" ).datepicker();
    }

    // Set timeout of 2000
    setTimeout(function(){
        $('.session_message').animate({
            'opacity': 0
        }, 1000).hide('2000');

    }, 2000);
});
