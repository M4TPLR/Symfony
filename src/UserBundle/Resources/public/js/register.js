jQuery(function($){
    var baseline1 = $("#baseline1");
    var baseline2 = $("#baseline2");
    var baseline3 = $("#baseline3");
    var loginSection = $("#login-section");
    var inputGroup = $("#registerForm");
    baseline1.fadeIn(1000);
    baseline2.fadeIn(1500);
    baseline3.fadeIn(1500);
    baseline1.animate({
        paddingTop: "50px"
    }, 1000, function () {
        inputGroup.fadeIn(1000);
        loginSection.fadeIn(1500);
    });
});