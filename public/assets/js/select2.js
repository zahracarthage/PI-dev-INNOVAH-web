$(document).ready(function() {
   'use strict';

   $('.select2').select2({
	 minimumResultsForSearch: Infinity
   });
	$(".select2-advanced").select2({
		tags: true,
  tokenSeparators: [',', ' ']
	})
   $('#select-Categories1').select2({
	 minimumResultsForSearch: ''
   });
    $('#select-Categories2').select2({
	 minimumResultsForSearch: ''
   });
    $('#select-Categories3').select2({
	 minimumResultsForSearch: ''
   });
    $('#select-Categories4').select2({
	 minimumResultsForSearch: ''
   });
    $('#select-Categories5').select2({
	 minimumResultsForSearch: ''
   });
    $('#select-Categories6').select2({
	 minimumResultsForSearch: ''
   });
    $('#select-Categories7').select2({
	 minimumResultsForSearch: ''
   });
    $('#select-Categories8').select2({
	 minimumResultsForSearch: ''
   });
    $('#select-Categories9').select2({
	 minimumResultsForSearch: ''
   });
    $('#select-Categories10').select2({
	 minimumResultsForSearch: ''
   });

   // Select2 by showing the search
   $('.select2-show-search').select2({
	 minimumResultsForSearch: '',
	 placeholder: "Search"
   });
   
   $('.select2-no-search').select2({
		minimumResultsForSearch: Infinity,
		placeholder: 'Choose one'
   });
   

   function formatState (state) {
	  if (!state.id) { return state.text; }
	  var $state = $(
		'<span><img src="../../assets/images/flags/' +  state.element.value.toLowerCase() +
	'.svg" class="img-flag" /> ' +
	state.text +  '</span>'
	 );
	 return $state;
	};

	$(".select2-flag-search").select2({
	  templateResult: formatState,
	  templateSelection: formatState,
	   escapeMarkup: function(m) { return m; }
	});

 });