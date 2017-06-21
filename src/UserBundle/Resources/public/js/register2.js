jQuery(function ($) {
    var baseline1 = $("#baseline1");
    var inputGroup = $("#register2Form");
    var nextStep = $(".nextstepBtn");
    var body = $("body");
    var hallSection = $("#hallSection");
    var hallinputGroup = $("#register3Form");

    baseline1.fadeIn(1000);
    baseline1.animate({
        paddingTop: "30px"
    }, 1000, function () {
        inputGroup.fadeIn(1000);
        nextStep.fadeIn(2500);
    });

    nextStep.hover(function () {
        nextStep.attr("src", "http://localhost:8888/Symfony/web/bundles/user/img/blackarrow.png");
    }, function () {
        nextStep.attr("src", "http://localhost:8888/Symfony/web/bundles/user/img/whitearrow.png")
    });

    $("#nextStep").click(function () {
        if ($('#userbundle_user_lastname').val() !== "" && $('#userbundle_user_firstname').val() !== "" && $('#userbundle_user_bio').val() !== "") {
            console.log('not empty');
            $("#nextStep").hide();
            inputGroup.hide(1200);
            body.css("background", "url(\"http://localhost:8888/Symfony/web/bundles/user/img/mountain.jpg\") no-repeat center fixed");
            hallSection.fadeIn(2000);

            $.ajax({
                type: inputGroup.attr('method'),
                url: inputGroup.attr('action'),
                data: inputGroup.serialize()
            }).done(function (data) {
                if (typeof data !== 'undefined') {
                    console.log(data.message);
                }
            }).fail(function (jqXHR, textStatus, errorThrown) {
                if (typeof jqXHR.responseJSON !== 'undefined') {
                    alert(errorThrown);
                }
            });
        }
    });
});

