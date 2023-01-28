// Preloader
$(window).on("load", function () {
    $("#status").delay(500).fadeOut("slow");
    $("#preloader").delay(1000).fadeOut("slow");
});

// Ityped Js
$(function () {
    var txtType = document.getElementById("typed-one");
    ityped.init(txtType, {
        showCursor: true,
        startDelay: 0,
        strings: ["حسین نظری", "حسین", "نظری"],
    });
});

// WOW
$(function () {
    new WOW().init();
});

$(window).on("load", function () {
    $(".fadeInDown-wow").addClass("fadeInDown");
    $(".bounceInRight-wow").addClass("bounceInRight");
    $(".bounceInLeft-wow").addClass("bounceInLeft");
    $(".pulse-animated-wow").addClass("pulse animated");
    $(".bounceInUp-wow").addClass("bounceInUp");
    $(".bounceOut-wow").addClass("bounceOut");
    $(".fadeInDown-wow").addClass("fadeInDown");
    $("flipInX-wow").addClass("fadeInDownBig");
});
