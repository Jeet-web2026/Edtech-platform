$(document).ready(function () {
    $(document).on("click", "#home-tab-btn", function () {
        $("#home-tab-content")
            .addClass("active")
            .removeClass("hidden")
            .siblings()
            .removeClass("active")
            .addClass("hidden");
    });
    $(document).on("click", "#about-tab-btn", function () {
        $("#about-tab-content")
            .addClass("active")
            .removeClass("hidden")
            .siblings()
            .removeClass("active")
            .addClass("hidden");
    });
});
