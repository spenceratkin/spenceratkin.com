$(document).ready(function() {
	//$('#about_text').fadeIn(1000);

	// Changes color of media links on hover.
	$('.invert').hover(function() {
		$(this).stop();
		$(this).css("cursor", "pointer");
    	$(this).animate({"color": "#364558"}, 'fast');
	}, function() {
		$(this).stop();
	$(this).animate({"color":"#000000"}, 'fast');
	});

	// Scrolls to 'about' section
	$("#about_button").click(function() {
		$('html, body').animate({
			scrollTop: $("#about-container").offset().top - 50
		}, 500);
	});

	// Scrolls to 'projects' section
	$("#projects_button").click(function() {
		$('html, body').animate({
			scrollTop: $("#projects-container").offset().top - 50
		}, 500);
	});

	// Scrolls to 'contact' section
	$("#contact_button").click(function() {
		$('html, body').animate({
			scrollTop: $("#contact").offset().top
		}, 500);
	});

	/*$(window).scroll(function (event) {
	    var scroll = $(window).scrollTop();

		if (scroll >= $('#about').position().top) {
			$('.header_button').css('background-color', 'inherit');
			$('.header_button').css('color', 'rgb(234, 115, 100)');
			$('#about_button').css('background-color', 'rgb(234, 115, 100)');
			$('#about_button').css('color', 'rgb(54, 69, 88)');
		}
		if (scroll >= $("#projects").position().top) {
			$('.header_button').css('background-color', 'inherit');
			$('.header_button').css('color', 'rgb(234, 115, 100)');
			$('#projects_button').css('background-color', 'rgb(234, 115, 100)');
			$('#projects_button').css('color', 'rgb(54, 69, 88)');
		}
		if (scroll >= $('#contact').position().top) {
			$('.header_button').css('background-color', 'inherit');
			$('.header_button').css('color', 'rgb(234, 115, 100)');
			$('#contact_button').css('background-color', 'rgb(234, 115, 100)');
			$('#contact_button').css('color', 'rgb(54, 69, 88)');
		}
	});*/

	/*// Fades github image on hover
	$("a#github").hover(function(){
		$("a#github img").stop();
	    $("a#github img").animate({ opacity: 0 }, 'fast');
	}, function() {
		$("a#github img").stop();
	    $("a#github img").animate({ opacity: 1 }, 'fast');
	});*/
});
