
$(document).ready(function(){

$('a[href^="#"]').on('click', function(event) {

    var target = $( $(this).attr('href') );
	
	if( target.length ) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: target.offset().top-50
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

var BASE_URL = location.origin;

$(".p-menu").click(function(){
    $(".p-menu").removeClass('active');
    $(this).addClass('active');
});

$('#overview').click(function(){
    $.ajax({
        url: BASE_URL+'/FPpweb/page/stats', 
        type: 'POST',
        data: { userId: $('#userID').val()},
        dataType: 'html',
        success: function(response){
         $('.profile-body').html(response);
        }
    });
});

$('#komentar').click(function(){
    // $('.profile-body').load('page/komen');
    $.ajax({
        url: BASE_URL+'/FPpweb/page/komen',
        type: 'POST',
        dataType: 'html',
        success: function(response){
         $('.profile-body').html(response);
        }
    });
});

$('#thread').click(function(){
    // $('.profile-body').load('page/komen');
    $.ajax({
        url: BASE_URL+'/FPpweb/page/trit',
        type: 'POST',
        dataType: 'html',
        success: function(response){
         $('.profile-body').html(response);
        }
    });
});

$(document).ajaxStart(function(){
    $("#loading").css("display", "block");
});
$(document).ajaxComplete(function(){
    $("#loading").css("display", "none");
});

});