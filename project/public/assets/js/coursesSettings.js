$(document).ready(function () {
    function tabToggle(id, content) {
        $(document).on("click", id, function () {
            $(this)
                .addClass("bg-blue-700 text-white")
                .removeClass("bg-gray-100")
                .siblings()
                .addClass("bg-gray-100")
                .removeClass("bg-blue-700 text-white");

            $(content).show().siblings().hide();
        });
    }

    let Ids = [
        {
            id: "#syllabus-setting",
            content: "#syllabus-setting-content",
        },
        {
            id: "#courses-setting",
            content: "#courses-setting-content",
        },
    ];

    Ids.forEach((element) => {
        tabToggle(element.id, element.content);
    });
});
