(function($) {
	"use strict";
	
	/*---Owl-carousel----*/
	// ______________Owl-carousel-icons
	var owl = $('.owl-carousel-icons');
	owl.owlCarousel({
		padding: 20,
		loop: true,
		nav: true,
		autoplay:true,
		dots: false,
		lazyLoad: true,
		autoplayTimeout: 3500,
autoplayHoverPause: true,
transitionStyle: 'fade',
animateIn: 'fadeIn',
animateOut: 'fadeOut',
		responsive: {
			0: {
				items: 1
			},
			767: {
				items: 2
			},
			1300: {
				items: 3
			}
		}
	})
	
		
	// ______________Owl-carousel-icons2
	var owl = $('.owl-carousel-icons2');
	owl.owlCarousel({
		padding: 20,
		loop: true,
		nav: true,
		autoplay:false,
		dots: false,
		lazyLoad: true,
		responsive: {
			0: {
				items: 1,
				nav: true
			},
			767: {
				items: 2,
				nav: true
			},
			1300: {
				items: 4,
				nav: true
			}
		}
	})
	
	// ______________Owl-carousel-icons3
	var owl = $('.owl-carousel-icons3');
	owl.owlCarousel({
		padding: 25,
		loop: true,
		nav: false,
		dots: true,
		lazyLoad: true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 2
			},
			1000: {
				items: 2
			}
		}
	})
	
	// ______________Owl-carousel-icons4
	var owl = $('.owl-carousel-icons4');
	owl.owlCarousel({
		padding: 25,
		loop: true,
		nav: false,
		dots: true,
		lazyLoad: true,
		autoplay:true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 3
			},
			1000: {
				items: 4
			},
			1300: {
				items: 6
			},
		}
	})
	
	// ______________Owl-carousel-icons41
	var owl = $('.owl-carousel-icons41');
	owl.owlCarousel({
		padding: 25,
		loop: true,
		nav: false,
		dots: false,
		autoplay:true,
		lazyLoad: true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 3
			},
			1000: {
				items: 6
			}
		}
	})
	
	// ______________date-icon
	var owl = $('.date-icon');
	owl.owlCarousel({
		padding: 0,
		loop: false,
		nav: true,
		dots: false ,
		autoplay:false,
		lazyLoad: true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 2
			},
			900: {
				items: 3
			},
			1000: {
				items: 4
			},
			1300: {
				items: 6
			}
		}
	})
	
	// ______________Owl-carousel-icons5
	var owl = $('.owl-carousel-icons5');
	owl.owlCarousel({
		loop: true,
		rewind: false,
		padding: 25,
		animateIn: 'fadeInDowm',
		animateOut: 'fadeOutDown',
		autoplay: false,
		autoplayTimeout: 5000, // set value to change speed
		autoplayHoverPause: true,
		dots: true,
		nav: false,
		responsiveClass: true,
		lazyLoad: true,
		responsive: {
			0: {
				items: 1,
				nav: true
			},
			600: {
				items: 2,
				nav: true
			},
			1300: {
				items: 4,
				nav: true
			}
		}
	})
	
	// ______________Owl-carousel-icons5
	var owl = $('.owl-carousel-icons51');
	owl.owlCarousel({
		loop: true,
		rewind: false,
		padding: 25,
		animateIn: 'fadeInDowm',
		animateOut: 'fadeOutDown',
		autoplay: false,
		autoplayTimeout: 5000, // set value to change speed
		autoplayHoverPause: true,
		dots: false,
		nav: false,
		responsiveClass: true,
		lazyLoad: true,
		responsive: {
			0: {
				items: 1,
				nav: true
			},
			600: {
				items: 2,
				nav: true
			},
			1300: {
				items: 4,
				nav: true
			}
		}
	})
	
	// ______________Owl-carousel-icons5
	var owl = $('.owl-carousel-icons52');
	owl.owlCarousel({
		padding: 25,
		loop: true,
		nav: false,
		dots:false,
		lazyLoad: true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 2
			},
			1000: {
				items: 4
			}
		}
	})
	
	// ______________Owl-carousel-icons6
	var owl = $('.owl-carousel-icons6');
	owl.owlCarousel({
		padding: 25,
		loop: true,
		nav: false,
		dots: false,
		lazyLoad: true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 2
			},
			1000: {
				items: 3
			}
		}
	})
	
	// ______________Owl-carousel-icons6
	var owl = $('.owl-carousel-icons7');
	owl.owlCarousel({
		padding: 25,
		loop: true,
		nav: false,
		dots: false,
		lazyLoad: true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 2
			},
			1000: {
				items: 2
			}
		}
	})
	 
	// ______________Testimonial-owl-carousel2
	var owl = $('.testimonial-owl-carousel2');
	owl.owlCarousel({
		padding: 25,
		loop: true,
		nav: false,
		dots: false,
		animateOut: 'fadeOut',
		smartSpeed:450,
		lazyLoad: true,
		responsive: {
			0: {
				items: 1
			}
		}
	})
	
	// ______________Testimonial-owl-carousel-slide
	var owl = $('.slide-owl-carousel3');
	owl.owlCarousel({
		padding: 0,
		margin: 0,
		loop: true,
		nav: false,
		dots: false,
		autoplay: true,
		animateOut: 'fadeOut',
		smartSpeed:2000,
		Default : false,
        mouseDrag : false,
		responsive: {
			0: {
				items: 1
			}
		}
	})
	
	// ______________Testimonial-owl-carousel-slide
	var owl = $('.slide-owl-carousel2');
	owl.owlCarousel({
		padding: 0,
		margin: 0,
		loop: true,
		nav: false,
		dots: false,
		autoplay: true,
		animateIn: 'fadein', 
		animateOut: 'fadeout',
		smartSpeed:4500,
		autoplayTimeout: 8000,
		responsive: {
			0: {
				items: 1
			}
		}
	})
	
	
	
	// ______________Testimonial-owl-carousel3
	var owl = $('.testimonial-owl-carousel3');
	owl.owlCarousel({
		padding: 25,
		loop: true,
		nav: false,
		dots: true,
		responsive: {
			0: {
				items: 1
			}
		}
	})
	// ______________Testimonial-owl-carousel3
	var owl = $('.testimonial-owl-carousel31');
	owl.owlCarousel({
		padding: 0,
		loop: true,
		nav: false,
		dots: true,
		responsive: {
			0: {
				items: 1
			}
		}
	})
	
	// ______________Testimonial-owl-carousel4
	var owl = $('.testimonial-owl-carousel4');
	owl.owlCarousel({
		padding: 25,
		loop: true,
		nav: false,
		dots: true,
		responsive: {
			0: {
				items: 1
			}
		}
	})
	
	// ______________Testimonial-owl-carousel
	var owl = $('.testimonial-owl-carousel');
	owl.owlCarousel({
		loop: true,
		rewind: false,
		padding: 25,
		autoplay:false,
		animateIn: 'fadeInDowm',
		animateOut: 'fadeOutDown',
		autoplayTimeout: 5000, // set value to change speed
		autoplayHoverPause: true,
		dots: false,
		nav: true,
		responsiveClass: true,
		responsive: {
			0: {
				items: 1,
				nav: true
			}
		}
	})
	
	/*---End Owl-carousel----*/
	
})(jQuery);