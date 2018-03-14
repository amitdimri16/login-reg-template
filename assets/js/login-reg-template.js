$(document).ready(function() {
    $('#fullpage').fullpage();

    var regHeight = $(".register-form").height();
    var loginHeight = $(".login-form").height();
    var animateToReg = (loginHeight - 50) * -1;

    $("#form-wrapper").height(loginHeight + 50);

    $(".tab-register").on('click', function() {
        $("#animator").animate({top: animateToReg}, 300);
        $("#form-wrapper").animate({height: regHeight + 50}, 300);
        $(".tab-login").removeClass("tab--active");
        $(this).addClass("tab--active");
    });
    $(".tab-login").on('click', function() {
        $("#animator").animate({top: '50px'}, 300);
        $("#form-wrapper").animate({height: loginHeight + 50}, 300);
        $(".tab-register").removeClass("tab--active");
        $(this).addClass("tab--active");
    });


});
