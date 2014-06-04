//Use this file to enable sliders on a page

$('.control').on('click touchstart', function(){
	$('.control').removeClass('active');
	$(this).addClass('active');
	$('.slide-wrapper').attr('target', $(this).attr('data-target'));
});

jQuery('.slider-centered').flexslider({
    animationSpeed: 400,
    directionNav: true,
    pauseOnHover: true
});