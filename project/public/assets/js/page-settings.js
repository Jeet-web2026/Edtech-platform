$(document).ready(function () {
    function tabToggle(btnId, contentId) {
        $(document).on("click", btnId, function () {
            $(contentId)
                .addClass("active")
                .removeClass("hidden")
                .siblings()
                .removeClass("active")
                .addClass("hidden");
        });
    }

    let ids = [
        { btn: "#about-tab-btn", content: "#about-tab-content" },
        { btn: "#home-tab-btn", content: "#home-tab-content" },
        { btn: "#notification-tab-btn", content: "#notifications-tab-content" },
    ];

    ids.forEach((item) => {
        tabToggle(item.btn, item.content);
    });
});
