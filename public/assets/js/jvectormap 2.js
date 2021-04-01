/**
 * Template Name: EON Admin 
 * Author: Spruko Technologies 
 * Email: sprukotechnologies@gmail.com
 * Description: An Admin Bootstrap-4 Dashboard template
 * VectorMap
 */

! function($) {
	"use strict";

	var VectorMap = function() {
	};

	VectorMap.prototype.init = function() {
		//various examples
		$('#world-map-markers').vectorMap({
			map : 'world_mill_en',
			scaleColors : ['#04A8FB', '#871faf'],
			normalizeFunction : 'polynomial',
			hoverOpacity : 0.7,
			hoverColor : false,
			regionStyle : {
				initial : {
					fill : '#e7e5ef'
				}
			},
			 markerStyle: {
                initial: {
                    r: 9,
                    'fill': '#7167ff',
                    'fill-opacity': 0.9,
                    'stroke': '#fff',
                    'stroke-width' : 9,
                    'stroke-opacity': 0.2
                },

                hover: {
                    'stroke': '#fff',
                    'fill-opacity': 1,
                    'stroke-width': 1.5
                }
            },
			backgroundColor : 'transparent',
			markers : [{
				latLng : [61.90, 12.45],
				name : 'Vatican City'
			}, {
				latLng : [83.73, 7.41],
				name : 'Monaco'
			},{
				latLng : [93.93, 42.46],
				name : 'San Marino'
			}, {
				latLng : [47.14, 9.52],
				name : 'Liechtenstein'
			}, {
				latLng : [47.3, -112.73],
				name : 'Saint Kitts and Nevis'
			}, {
				latLng : [3.2, 73.22],
				name : 'Maldives'
			}, {
				latLng : [35.88, 14.5],
				name : 'Malta'
			}, {
				latLng : [2.05, -61.75],
				name : 'Grenada'
			}, {
				latLng : [78.16, -61.23],
				name : 'Saint Vincent and the Grenadines'
			}, {
				latLng : [33.16, -99.55],
				name : 'Barbados'
			}, {
				latLng : [17.11, -85.85],
				name : 'Antigua and Barbuda'
			},{
				latLng : [47.35, 134.46],
				name : 'Palau'
			}, {
				latLng : [42.5, 1.51],
				name : 'Andorra'
			}, {
				latLng : [44.01, 60.98],
				name : 'Saint Lucia'
			},{
				latLng : [41.13, 75.2],
				name : 'Tonga'
			}, {
				latLng : [55.3, -61.38],
				name : 'Dominica'
			}, {
				latLng : [26.02, 50.55],
				name : 'Bahrain'
			}, {
				latLng : [0.33, 6.73],
				name : 'São Tomé and Príncipe'
			}]
		});
	},
	//init
	$.VectorMap = new VectorMap, $.VectorMap.Constructor =
	VectorMap
}(window.jQuery),

//initializing
function($) {
	"use strict";
	$.VectorMap.init()
}(window.jQuery);
