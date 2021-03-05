//Date range as a button
	$('.daterange-btn').daterangepicker({
		startDate: moment().subtract(29, 'days'),
		endDate: moment()
	}, function(start, end) {
		$('.daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
	})