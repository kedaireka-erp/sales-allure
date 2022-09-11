(function () {
    "use strict";

    // Show code or preview
    $('#catatan_status_order').hide();
    $('#fppp_lain').hide();

    $("body").on("change", "#order_status", function () {
        const selected = $(this).val();

        if (selected == 'lainlain') {
            $('#fppp_lain').hide();
            $('#catatan_status_order').show();

        } else if(selected == 'revisino'){
            $('#catatan_status_order').hide();
            $('#fppp_lain').show();
        } else {
            $('#catatan_status_order').hide();
            $('#fppp_lain').hide();
        }
    });
})();
