jQuery(function($){
    var baseline1 = $("#baseline1");
    var baseline2 = $("#baseline2");
    var inputGroup = $("#registerForm");
    baseline1.fadeIn(1000);
    baseline2.fadeIn(1500);
    baseline1.animate({
        paddingTop: "50px"
    }, 1000, function () {
        inputGroup.fadeIn(1000);
    });
});