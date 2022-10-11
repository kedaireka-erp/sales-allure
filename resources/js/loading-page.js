(function(){
    "use strict";

    function showLoadingPage() {
        //show the loading page
        $("#loading-page").fadeIn(500);
        //hide content
        $("#content").hide();
    }

    function hideLoadingPage() {
        //fade out the loading page
        $("#loading-page").fadeOut(500);
        //show content
        $("#content").show();
    }

    //show the loading page before loading html
    showLoadingPage();

    //hide the loading page after 2 seconds
    setTimeout(function () {
        hideLoadingPage();
    }, 2000);
})();