(function () {
    "use strict";

    const selected = $('#order_status').val();
    
    if (selected == 'lainlain') {
        $('#catatan_status_order').removeClass('hidden');

    } else if (selected == 'revisino') {
        $('#fppp_lain').removeClass('hidden');
    } else {

    }

    $("body").on("change", "#order_status", function () {
        const selected = $(this).val();

        if (selected == 'lainlain') {
            $('#catatan_status_order').removeClass('hidden');
            $('#fppp_lain').addClass('hidden');

        } else if(selected == 'revisino'){
            $('#catatan_status_order').addClass('hidden');
            $('#fppp_lain').removeClass('hidden');
        } else {
            $('#fppp_lain').addClass('hidden');
            $('#catatan_status_order').addClass('hidden');
        }
    });

})();
