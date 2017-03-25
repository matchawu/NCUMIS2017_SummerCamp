$(document).ready(function() {
    // Put your offset checking in a function
    function checkOffset() {
        if ($(window).scrollTop() > 5) {
            //拉下來了
            // console.log(123);
            $("nav").css("height", "initial");
            $(".scroll").css("margin-top", "initial");
            $(".navbar-brand img").css("width","36px");
            $(".navbar-brand img").css("height","41px");
            $(".navbar-brand img").css("top","0px");
        } else {
            //頁面在最上面
            // console.log(321);
            $(".navbar-brand img").css("width","81px");
            $(".navbar-brand img").css("height","92px");
            $(".navbar-brand img").css("top","-55px");
            $("nav").css("height", "100px");
            $(".scroll").css("margin-top", "50px");
        }
    }
    // Run it when the page loads
    checkPosition();
    $(window).scroll(function() {
        checkPosition();
    });
    function checkPosition() {
        if (window.matchMedia('(min-width: 992px)').matches) {
            checkOffset();
        } else {
            $("nav").css("height", "initial");
            $(".scroll").css("margin-top", "initial");
        }
    }
    // Run function when scrolling
});