jQuery(document).ready(function(){

	jQuery(function() {
		jQuery('a[href*="#"]:not([href="#"])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = jQuery(this.hash);
				target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					jQuery('html, body').animate({
						scrollTop: target.offset().top
					}, 1000);
					return false;
				}
			}
		});
	});

	jQuery('.type').click(function(){
		jQuery('.type').removeClass('active');
		jQuery(this).addClass('active');
	});

	jQuery("#floorplan-image").elevateZoom({zoomType: "lens", lensShape : "round", lensSize : 300});


	jQuery('#responsive-nav .glyphicon').click(function(){
		var navPos = jQuery('#slideOut').css('right');
		if (navPos === '-320px') {
			jQuery( "#slideOut" ).animate({
				right: "0",
			}, 500, function() {
			});
		}
		else {
			jQuery( "#slideOut" ).animate({
				right: "-320",
			}, 500, function() {
			});
		}
	});


	jQuery('.model').click(function(){
		var vidLink = jQuery(this).attr('data-vidlink');
		var target = jQuery('#modelVid').attr('src', vidLink);
		var imgLink = jQuery(this).attr('data-imglink');
		var planName = jQuery(this).find('h3').text();
		jQuery('#floorplan-image').attr('src', imgLink);
		jQuery('#vidModal .planName').text(planName);
		jQuery('.zoomLens').css('background-image', 'url(' + imgLink + ')');
		//console.log(vidLink);
		//console.log(target);

	});

	jQuery('#inventory').slick({
		infinite: true,
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

	// Find all YouTube videos
	var jQueryallVideos = jQuery("iframe[src^='//www.youtube.com']"),

    // The element that is fluid width
    jQueryfluidEl = jQuery("body");

// Figure out and save aspect ratio for each video
jQueryallVideos.each(function() {

	jQuery(this)
	.data('aspectRatio', this.height / this.width)

    // and remove the hard coded width/height
    .removeAttr('height')
    .removeAttr('width');

});

// When the window is resized
jQuery(window).resize(function() {

	var newWidth = jQueryfluidEl.width();

  // Resize all videos according to their own aspect ratio
  jQueryallVideos.each(function() {

  	var jQueryel = jQuery(this);
  	jQueryel
  	.width(newWidth)
  	.height(newWidth * jQueryel.data('aspectRatio'));

  });

// Kick off one resize to fix all videos on page load
}).resize();

});