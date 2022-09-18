(function () {
    "use strict";

    // Show code or preview
    $('#alasan_lost').hide();

    $("body").on("change", "#status_id", function () {
        const selected = $(this).val();
        if (selected == '7') {
            $('#alasan_lost').show();
        }
     else {
        $('#alasan_lost').hide();
    }
    });

$("body").on("load", "#status_id", function () {
    const selected = $(this).val();
    if (selected == '7') {
        $('#alasan_lost').show();
    }
});
}) ();
