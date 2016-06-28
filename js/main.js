jQuery(document).ready(function($){

	//Smooth Scroll
	$(function() {
		$('a[href*="#"]:not([href="#"])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					$('html, body').animate({
						scrollTop: target.offset().top
					}, 1000);
					return false;
				}
			}
		});
	});

	//Unhook Elevate Zoom on Mobile
	if ($( window ).width() >= 1024) {
		$("#floorplan-image").elevateZoom({zoomType: "lens", lensShape : "round", lensSize : 300, constrainType:"width"});
	}


	$('.model').click(function(){
		var vidLink = $(this).attr('data-vidlink');
		var target = $('#modelVid').attr('src', vidLink);
		var imgLink = $(this).attr('data-imglink');
<<<<<<< HEAD
		var planName = $(this).find('h5').text();
=======
		var planName = $(this).find('h3').text();
>>>>>>> origin/master
		$('#floorplan-image').attr('src', imgLink);
		$('.floorplanName').text(planName);
		$('.zoomLens').css('background-image', 'url(' + imgLink + ')');
		$('.active').removeClass('active');
		$(this).addClass('active');

		if ($('#modelVid').hasClass('hidden')) {
			$('#modelVid').removeClass('hidden');
		}
		if (vidLink === '/?showinfo=0&rel=0&modestbranding=0') {
			$('#modelVid').addClass('hidden');
			$('.videoWrapper p').removeClass('hidden');
		}
		//console.log(vidLink);
		//console.log(target);

	});

	$('.model button').click(function(){
		var QueryString = $(this).attr('data-querylink');
		$('#myModal .button').attr('href', QueryString);
	});

	$('.slider').slick({
		infinite: false,
		slidesToShow: 3,
		slidesToScroll: 1,
		arrows: true,
		responsive: [
			{
				breakpoint: 768,
				settings: {
					arrows: true,
					centerMode: true,
					centerPadding: '40px',
					slidesToShow: 3
				}
			},
			{
				breakpoint: 480,
				settings: {
					arrows: true,
					centerMode: true,
					centerPadding: '40px',
					slidesToShow: 1
				}
			}
		]
	});


	//Look For Youtube Videos and make them responsive.

	var $allVideos = $("iframe[src^='//www.youtube.com']"),
	$fluidEl = $("body");
	$allVideos.each(function() {
		$(this)
		.data('aspectRatio', this.height / this.width)
		.removeAttr('height')
		.removeAttr('width');
	});

	// Resize Yotube videos on page resize
	$(window).resize(function() {
		var newWidth = $fluidEl.width();
		$allVideos.each(function() {
			var $el = $(this);
			$el
			.width(newWidth)
			.height(newWidth * $el.data('aspectRatio'));
		});
	}).resize();

});
