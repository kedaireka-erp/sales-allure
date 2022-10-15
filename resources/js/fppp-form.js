(function () {
    "use strict";

    const orderStatus = $('#order_status');
    const catatanStatusOrder = $('#catatan_status_order');
    const fpppLain = $('#fppp_lain');

    if(orderStatus.length){
        const selected = orderStatus.val();

        if (selected == 'lainlain') {
            catatanStatusOrder.removeClass('hidden');

        } else if (selected == 'revisino') {
            fpppLain.removeClass('hidden');
        } else {

        }
    }

    $("body").on("change", "#order_status", function () {
        const selected = $(this).val();

        if (selected == 'lainlain') {
            catatanStatusOrder.removeClass('hidden');
            fpppLain.addClass('hidden');

        } else if(selected == 'revisino'){
            catatanStatusOrder.addClass('hidden');
            fpppLain.removeClass('hidden');
        } else {
            fpppLain.addClass('hidden');
            catatanStatusOrder.addClass('hidden');
        }
    });

})();
