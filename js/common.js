$(document).ready(function(){
    $('[name=report_action]').on('click', function(){
        var opt = $(this).val();
        $('#action').val(opt);
        switch(opt) {
            case 'REPORT':
                $('.report-box').show();
            break;
            case 'DATABASE':
                $('.report-box').hide();
            break;
        }
    });

    // Form Validation
    $('form').submit(function(e){
        var validFlag = 0;
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

        if(validFlag > 0) {
            return false;
        }
    });
});
