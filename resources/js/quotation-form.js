(function () {
    "use strict";

    const alasanLost = $('#alasan_lost');
    const statusId = $('#status_id');

    // Show code or preview
    alasanLost.hide();

    $("body").on("change", "#status_id", function () {
        const selected = $(this).val();
        if (selected == '7') {
            alasanLost.show();
        }
     else {
        alasanLost.hide();
    }
    });

$("body").on("load", "#status_id", function () {
    const selected = $(this).val();
    if (selected == '7') {
        alasanLost.show();
    }
});
}) ();
