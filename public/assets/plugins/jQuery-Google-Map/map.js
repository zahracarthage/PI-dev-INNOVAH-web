 $(function() {
  $("#map").googleMap({
    zoom: 10,
    coords: [48.895651, 2.290569],
    type: "ROADMAP"
  });
  $("#map").addMarker({
      coords: [48.895651, 2.290569], // GPS coords
      url: 'https://www.jqueryscript.net', // Link to redirect onclick (optional)
      id: 'marker1',
      title: 'Marker n°1', // Title
      text:  '<b>Lorem ipsum</b> dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.' // HTML content
    });
  $("#map").addWay({
      start: "15 avenue des champs Elysées 75008 Paris", // Postal address for the start marker (obligatory)
    end:  [48.895651, 2.290569], // Postal Address or GPS coordinates for the end marker (obligatory)
    route : 'way', // Block's ID for the route display (optional)
    langage : 'english' // language of the route detail (optional)
  });
})
 $(function() {
    $("#map2").googleMap();
    $("#map2").addMarker({
      coords: [48.895651, 2.290569], // GPS coords
      title: 'Marker n°1', // Title
      text:  '<b>Lorem ipsum</b> dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.' // HTML content
    });
  })
  $(function() {
    $("#map3").googleMap();

    // Marker 1
    $("#map3").addMarker({
    	 coords: [51.534287, -0.033580]
    });

    // Marker 2
    $("#map3").addMarker({
    	 coords: [51.507351, -0.127758]
    });

    // Marker 3
    $("#map3").addMarker({
        coords: [37.089462, -95.710452]
    });
  })
    $(function() {
    $("#map4").googleMap();
    $("#map4").addWay({
    	start: "15 avenue des champs Elysées 75008 Paris", // Postal address for the start marker (obligatory)
		end:  [48.895651, 2.290569], // Postal Address or GPS coordinates for the end marker (obligatory)
		route : 'way', // Block's ID for the route display (optional)
		langage : 'english', // language of the route detail (optional)
		step: [ // Array of steps (optional)
		    [48.85837009999999, 2.2944813000000295], // Postal Address or GPS coordinates of the step
		    "Porte Maillot, 75017 Paris", // Postal Address or GPS coordinates of the step
		]
	});
  })
   $(function() {
    $("#map5").googleMap({
		zoom: 5
	});
    $("#map5").addWay({
    	start: "15 avenue des champs Elysées 75008 Paris", // Postal address for the start marker (obligatory)
		end:  [50.0875726, 14.4189987], // Postal Address or GPS coordinates for the end marker (obligatory)
		route : 'way', // Block's ID for the route display (optional)
		langage : 'english', // language of the route detail (optional)
		step: [ // Array of steps (optional)
		    [48.85837009999999, 2.2944813000000295], // Postal Address or GPS coordinates of the step
		    "Porte Maillot, 75017 Paris", // Postal Address or GPS coordinates of the step
		]
	});
	$('#Map-modal').on('shown', function (e) {
			google.maps.event.trigger(map, "resize");
		});

  })
