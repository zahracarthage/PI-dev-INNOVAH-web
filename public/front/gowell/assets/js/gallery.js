(function($) {
    "use strict";
	$('#lightgallery').lightGallery();
	
	
	var $commentBoxSep = $('#comment-box-sep'); 
	$commentBoxSep.lightGallery({
		addClass: 'fb-comments',
		download: false,
		galleryId: 2
	}); 
	 
	$commentBoxSep.on('onAfterAppendSubHtml.lg', function() {
		try {
			FB.XFBML.parse();
		} catch (err) {
			$(window).on('fbAsyncInit', function() {
				FB.XFBML.parse();
			});
		}
	});
})(jQuery);