$(document).ready(function () {
    $(window).on("scroll", function () {
        if ($(window).scrollTop() > 0) {
            $("header").addClass("backdrop-blur-sm bg-[#000000a6] border-b border-[#ffffff4f]");
        } else {
            $("header").removeClass("backdrop-blur-sm bg-[#000000a6] border-b border-[#ffffff4f]");
        }
    });
});
