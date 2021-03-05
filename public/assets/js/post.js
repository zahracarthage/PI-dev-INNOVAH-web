$(function() {
	'use strict'
	
	$(document).on("click", '#tour', function () {    
		if (this.checked) {
			$('body').addClass('addtour');
			$('body').removeClass('addhotel');
			$('body').removeClass('addflight');
			$('body').removeClass('addcar');
			$('body').removeClass('addcruise');
			$('body').removeClass('addbus');
			localStorage.setItem("addtour", "True");
		}
		else {
			$('body').removeClass('addtour');
			localStorage.setItem("addtour", "false");
		}
	});
	
	$(document).on("click", '#hotel', function () {    
		if (this.checked) {
			$('body').addClass('addhotel');
			$('body').removeClass('addtour');
			$('body').removeClass('addflight');
			$('body').removeClass('addcar');
			$('body').removeClass('addcruise');
			$('body').removeClass('addbus');
			localStorage.setItem("addhotel", "True");
		}
		else {
			$('body').removeClass('addhotel');
			localStorage.setItem("addhotel", "false");
		}
	});
	
	$(document).on("click", '#flight', function () {    
		if (this.checked) {
			$('body').addClass('addflight');
			$('body').removeClass('addtour');
			$('body').removeClass('addhotel');
			$('body').removeClass('addcar');
			$('body').removeClass('addcruise');
			$('body').removeClass('addbus');
			localStorage.setItem("addflight", "True");
		}
		else {
			$('body').removeClass('addflight');
			localStorage.setItem("addflight", "false");
		}
	});
	
	$(document).on("click", '#car', function () {    
		if (this.checked) {
			$('body').addClass('addcar');
			$('body').removeClass('addtour');
			$('body').removeClass('addhotel');
			$('body').removeClass('addflight');
			$('body').removeClass('addcruise');
			$('body').removeClass('addbus');
			localStorage.setItem("addcar", "True");
		}
		else {
			$('body').removeClass('addcar');
			localStorage.setItem("addcar", "false");
		}
	});
	
	$(document).on("click", '#cruise', function () {    
		if (this.checked) {
			$('body').addClass('addcruise');
			$('body').removeClass('addtour');
			$('body').removeClass('addhotel');
			$('body').removeClass('addflight');
			$('body').removeClass('addcar');
			$('body').removeClass('addbus');
			localStorage.setItem("addcruise", "True");
		}
		else {
			$('body').removeClass('addcruise');
			localStorage.setItem("addcruise", "false");
		}
	});
	
	$(document).on("click", '#bus', function () {    
		if (this.checked) {
			$('body').addClass('addbus');
			$('body').removeClass('addtour');
			$('body').removeClass('addhotel');
			$('body').removeClass('addflight');
			$('body').removeClass('addcar');
			$('body').removeClass('addcruise');
			localStorage.setItem("addbus", "True");
		}
		else {
			$('body').removeClass('addbus');
			localStorage.setItem("addbus", "false");
		}
	});
	
	$('#post-categories').change(function() {
		$('.post-content').hide();
		$('#' + $(this).val()).show();
	});
	
});
	