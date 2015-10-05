document.createElement('header');
document.createElement('footer');
document.createElement('section');
document.createElement('article');
document.createElement('aside');
document.createElement('nav');

$(document).ready(function () {
	//Grid//
	$("#array").gridalicious({
		selector: '.post-box',
		gutter: 10,
		width: 220,
		animate: true,
		animationOptions: {
		speed: 200,
		duration: 400,
		},
	});
	$('#credit').append('<a class="theme" href=\"http://cats.villaseran.com\">Yuki Theme</a>.');
});


