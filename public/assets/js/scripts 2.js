(function($) {
	"use strict";
	
	// ______________ Cover-image
	$(".cover-image").each(function() {
		var attr = $(this).attr('data-image-src');
		if (typeof attr !== typeof undefined && attr !== false) {
			$(this).css('background', 'url(' + attr + ') center center');
		}
	});
	
	// ______________ Color-skin
	$(document).ready(function() {
		$("a[data-theme]").click(function() {
			$("head link#theme").attr("href", $(this).data("theme"));
			$(this).toggleClass('active').siblings().removeClass('active');
		});
		$("a[data-effect]").click(function() {
			$("head link#effect").attr("href", $(this).data("effect"));
			$(this).toggleClass('active').siblings().removeClass('active');
		});
    });
		
	// Chatpopup
	$(document).on("click", "#chat-popup", function(event) {
		event.preventDefault();
		$('.chat-message-popup').toggleClass('active');
		$('#chat-popup').removeClass('chat-popup-active');
	});	

	// ChatEnd Chat
	$(document).on("click", ".popup-minimize-normal", function(event) {
		event.preventDefault();
		$('.chat-message-popup').addClass('popup-endchat');
	});	
	
	// Go Back
	$(document).on("click", ".goback-chat", function(event) {
		event.preventDefault();
		$('.chat-message-popup').removeClass('popup-endchat');
	});	
	
	// Chat Rating
	$(document).on("click", ".end-chat-button", function(event) {
		event.preventDefault();
		$('.chat-message-popup').addClass('rating-section-body');
		$('.chat-message-popup').removeClass('popup-endchat');
	});	
	$(document).on("click", ".btn-chat-close", function(event) {
		event.preventDefault();
		$('.chat-message-popup').removeClass('card-fullscreen');
		setTimeout(function() {
			$('.chat-message-popup').removeClass('active');
		}, 500);
	});		
	
	// Chat Minimize in fullscreen
	$(document).on("click", ".popup-minimize-fullscreen", function(event) {
		event.preventDefault();
		$('.chat-message-popup').removeClass('card-fullscreen');		
		$('#chat-popup').addClass('chat-popup-active');
		setTimeout(function() {
			$('.chat-message-popup').removeClass('active');
		}, 500);
	});
	
	// Chat Minimize in Normal
	$(document).on("click", ".popup-minimize", function(event) {
		event.preventDefault();
		$('.chat-message-popup').removeClass('active');
		$('.chat-message-popup').removeClass('card-fullscreen');		
		$('#chat-popup').addClass('chat-popup-active');		
	});
})(jQuery);	
	

