//load in jQuery plugin dependencies (eg. flexslider, smoothScroll etc.) in this file


if(window.innerWidth >= 660) {
	$('nav a').smoothScroll({
		speed: 700
	});
}
else {
	$('nav a').smoothScroll({
		speed: 700,
		offset: -100
	});
}




