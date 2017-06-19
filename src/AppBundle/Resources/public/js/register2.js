jQuery(function ($) {
    var baseline1 = $("#baseline1");
    var inputGroup = $("#register2Form");
    var nextStep = $(".nextstepBtn");
    var body = $(".background-img");
    var hallSection = $("#hallSection");

    baseline1.fadeIn(1000);
    baseline1.animate({
        paddingTop: "80px"
    }, 1000, function () {
        inputGroup.fadeIn(1000);
        nextStep.fadeIn(2500);
    });

    nextStep.hover(function () {
        nextStep.attr("src", "blackarrow.png");
    }, function () {
        nextStep.attr("src", "whitearrow.png")
    });

    $("#nextStep").click(function () {
        console.log("click");
        $("#nextStep").hide();
        inputGroup.hide(1200);
        body.css("background", "url(\"mountain.jpg\") no-repeat center fixed");
        hallSection.fadeIn(2000);
    });
});

