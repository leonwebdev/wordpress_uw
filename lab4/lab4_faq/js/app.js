jQuery(document).ready(function ($) {
    console.log("object");
    $(".faq_q").click(function (e) {
        console.log("onclick");
        $(this)
            .next("p")
            .slideToggle("fast", function () {
                console.log("slidedown");
            });
    });
});
