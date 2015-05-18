
$(document).ready(function(){

$('a[href^="#"]').on('click', function(event) {

    var target = $( $(this).attr('href') );
	
	if( target.length ) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: target.offset().top-53
        }, 500);
    }

});
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
        // ($(window).scrollTop() > navHeight) ? $('nav').addClass('goToTop') : $('nav').removeClass('goToTop');
        ($(window).scrollTop() > navHeight) ? $('nav').attr('id','goToTop') : $('nav').attr('id','');
    });
});

});