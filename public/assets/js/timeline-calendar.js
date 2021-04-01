//Full Calendar
document.addEventListener('DOMContentLoaded', function() {
	var calendarEl = document.getElementById('calendar');

	var calendar = new FullCalendar.Calendar(calendarEl, {	 
	  initialDate: '2020-11-15',
	  navLinks: true, // can click day/week names to navigate views
	  businessHours: true, // display business hours
	  editable: true,
	  selectable: true,
	  selectMirror: true,
	  droppable: true, // this allows things to be dropped onto the calendar
	  drop: function(arg) {
		// is the "remove after drop" checkbox checked?
		if (document.getElementById('drop-remove').checked) {
		  // if so, remove the element from the "Draggable Events" list
		  arg.draggedEl.parentNode.removeChild(arg.draggedEl);
		}
	  },
	  select: function(arg) {
		var title = prompt('Event Title:');
		if (title) {
		  calendar.addEvent({
			title: title,
			start: arg.start,
			end: arg.end,
			allDay: arg.allDay
		  })
		}
		calendar.unselect()
	  },
	  eventClick: function(arg) {
		if (confirm('Are you sure you want to delete this event?')) {
		  arg.event.remove()
		}
	  },
	  editable: true,
	  dayMaxEvents: true, // allow "more" link when too many events
	  events: [ {
			title: 'Moraine Lake',
			start: '2020-11-06',
			end: '2020-11-10',
			backgroundColor: '#f3f1fa',
			borderColor: '#f3f1fa',
			textColor: '#7167ff',
		},{
			title: 'Bridge Park',
			start: '2020-11-10',
			end: '2020-11-13',
			backgroundColor: '#f3f1fa',
			borderColor: '#f3f1fa',
			textColor: '#7167ff',
		}, {
			title: 'Travel location',
			start: '2020-11-13',
			end: '2020-11-14',
			backgroundColor: '#f3f1fa',
			borderColor: '#f3f1fa',
			textColor: '#7167ff',
		}, {
			title: 'National Park',
			start: '2020-11-14',
			end: '2020-11-19',
			backgroundColor: '#f3f1fa',
			borderColor: '#f3f1fa',
			textColor: '#7167ff',
		},
		 {
			title: 'CN Tower',
			start: '2020-11-19',
			end: '2020-11-24',
			backgroundColor: '#f3f1fa',
			borderColor: '#f3f1fa',
			textColor: '#7167ff',
		}, {
			title: 'Tour location',
			start: '2020-11-24',
			end: '2020-11-27',
			backgroundColor: '#f3f1fa',
			borderColor: '#f3f1fa',
			textColor: '#7167ff',
		}, {
			title: 'Adventure Place',
			start: '2020-11-27',
			end: '2020-12-05',
			backgroundColor: '#f3f1fa',
			borderColor: '#f3f1fa',
			textColor: '#7167ff',
		}
		]
	});

	calendar.render();
});	
  
