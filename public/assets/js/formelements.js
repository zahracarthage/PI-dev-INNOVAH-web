$(function(){
   'use strict'
	
	 $('.dropify').dropify({
		messages: {
			'default': 'Drag and drop a file here or click',
			'replace': 'Drag and drop or click to replace',
			'remove': 'Remove',
			'error': 'Ooops, something wrong appended.'
		},
		error: {
			'fileSize': 'The file size is too big (2M max).'
		}
	});
	
	// Input Mask
	$(":input").inputmask();

   $('#setTimeButton').on('click', function (){
	 $('#tp3').timepicker('setTime', new Date());
   });
  

});
