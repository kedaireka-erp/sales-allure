(function(){
    "use strict";

    const loadingPage = $("#loading-page");
    const content = $("#content");

    function showLoadingPage() {
        //show the loading page
        loadingPage.fadeIn(500);
        //hide content
        content.hide();
    }

    function hideLoadingPage() {
        //fade out the loading page
        loadingPage.fadeOut(500);
        //show content
        content.show();
    }

    //show the loading page when jQuery starts
    showLoadingPage();

    //hide the loading page after 2 seconds
    setTimeout(function () {
        hideLoadingPage();
    }, 300);
})();