//Full Calendar
document.addEventListener('DOMContentLoaded', function() {
	var calendarEl = document.getElementById('calendar');

	var calendar = new FullCalendar.Calendar(calendarEl, {
	  headerToolbar: {
		left: 'prev,next today',
		center: 'title',
		right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
	  },
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
	  events: [
		 {
			title: 'New Calendar Events',
			start: '2020-11-06',
			end: '2020-11-10',
			backgroundColor: '#7167ff',
			borderColor: '#7167ff',
			textColor: '#fff',
		},{
			title: 'Birth Day Parties Events',
			start: '2020-11-10',
			end: '2020-11-13',
			backgroundColor: '#f96768',
			borderColor: '#f96768',
			textColor: '#fff',
		}, {
			title: 'Public Holidays',
			start: '2020-11-13',
			end: '2020-11-14',
			backgroundColor: '#3eb750',
			borderColor: '#3eb750',
			textColor: '#fff',
		}, {
			title: 'Working Days',
			start: '2020-11-14',
			end: '2020-11-19',
			backgroundColor: '#23bcb7',
			borderColor: '#23bcb7',
			textColor: '#fff',
		},
		 {
			title: 'CN Tower',
			start: '2020-11-19',
			end: '2020-11-24',
			backgroundColor: '#ffb609',
			borderColor: '#ffb609',
			textColor: '#fff',
		}, {
			title: 'Tour location',
			start: '2020-11-24',
			end: '2020-11-27',
			backgroundColor: '#fe6567',
			borderColor: '#fe6567',
			textColor: '#fff',
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