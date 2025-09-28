$(document).ready(function () {
    $(window).on("scroll", function () {
        if ($(window).scrollTop() > 0) {
            $("header").addClass("bg-[#ffffff2b] border-b border-[#ffffff4f]");
        } else {
            $("header").removeClass("bg-[#ffffff2b] border-b border-[#ffffff4f]");
        }
    });
});
