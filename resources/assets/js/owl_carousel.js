$(document).ready(function(){
	// $('.owl-carousel').owlCarousel({
	// 	loop:true,
	// 	margin:10,
	// 	nav:true,
	// 	responsive:{
	// 		0:{
	// 			items:1
	// 		},
	// 		600:{
	// 			items:3
	// 		},
	// 		1000:{
	// 			items:5
	// 		}
	// 	}
	// })

	// var owl = $('.owl-carousel');
	// owl.owlCarousel({
	// 	items:4,
	// 	loop:true,
	// 	margin:10,
	// 	autoplay:true,
	// 	autoplayTimeout:3500,
	// 	autoplayHoverPause:false
	// })

	$('.owl-one').owlCarousel({
		items:4,
		loop:true,
		margin:10,
		autoplay:true,
		autoplayTimeout:3500,
		autoplayHoverPause:false
	});

	$('.owl-two').owlCarousel({
		animateOut: 'fadeOut',
		animateIn: 'fadeIn',
		margin:30,
		stagePadding:30,
		smartSpeed:450,
		items:1,
		loop:true,
		autoplay:true,
		autoplayTimeout:5500,
		autoplayHoverPause:false
	});

});