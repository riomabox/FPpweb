
$(document).ready(function(){

// $(function() {
//     //caches a jQuery object containing the header element
//     var header = $(".navbar");
//     $(window).scroll(function() {
//         var scroll = $(window).scrollTop();

//         if (scroll >= 25) {
//             header.removeClass('navbar-default').addClass("navbar-inverse").addClass("navbar-fixed-top");
//         } else {
//             header.removeClass("navbar-inverse").addClass('navbar-default').removeClass("navbar-fixed-top");
//         }
//     });
// });

// buat modal signin sama register
var options = {
    backdrop : true,
    show: false,
    keyboard: true
};
$('#loginModal').modal(
	options
);

$('#registerModal').modal(
	options
);

$(document).ready(function(){
    $(window).bind('scroll', function() {
        var navHeight = $("#box1").height();
        ($(window).scrollTop() > navHeight) ? $('nav').addClass('goToTop') : $('nav').removeClass('goToTop');
    });
});

});