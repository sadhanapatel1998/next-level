/***************************************************
==================== JS INDEX ======================
****************************************************
Preloader js
Data js
Sticky Nav Js
Mobile Menu Js
Search Bar Js
Rating Js
Client-slider Js
Marquee slider Js
Project Slider Js
Project Slider 2 Js
Testimonial Slider Js
Testimonial Slider 2 Js
Testimonial Slider 3 Js
Hero slider Js
Service Slider Js
Blog Slider Js
Accordion Js
Project Hover active
Backtotop Js
Odometer js
VenoBox Js
Progressbar js

****************************************************/

(function ($) {
	"use strict";
	// Weave Animation Js
	const target = document.getElementById("tj-weave-anim");
	function splitTextToSpans(targetElement) {
		if (targetElement) {
			const text = targetElement.textContent;
			targetElement.innerHTML = "";

			for (let character of text) {
				const span = document.createElement("span");
				if (character === " ") {
					span.innerHTML = "&nbsp;";
				} else {
					span.textContent = character;
				}
				targetElement.appendChild(span);
			}
		}
	}
	splitTextToSpans(target);
	// Preloader js
	$(window).on("load", function () {
		const tjPreloader = $(".tj-preloader");
		if (tjPreloader?.length) {
			setTimeout(function () {
				tjPreloader.removeClass("is-loading").addClass("is-loaded");
				setTimeout(function () {
					tjPreloader.fadeOut(400);
					wowController();
					gsapController();
				}, 700);
			}, 2000);
		} else {
			wowController();
			gsapController();
		}
	});

	/* ------------- Gsap registration Js -------------*/
	gsap.registerPlugin(ScrollTrigger, ScrollSmoother, ScrollToPlugin);
	if ($("#smooth-wrapper").length && $("#smooth-content").length) {
		gsap.config({
			nullTargetWarn: false,
		});

		let smoother = ScrollSmoother.create({
			smooth: 1.5,
			effects: true,
			smoothTouch: 0.1,
			ignoreMobileResize: true,
		});
	}

	////////////////////////////////////////////////////
	// Data js
	$("[data-bg-image]").each(function () {
		var $this = $(this),
			$image = $this.data("bg-image");
		$this.css("background-image", "url(" + $image + ")");
	});

	////////////////////////////////////////////////////
	// Sticky Nav Js
	var lastScrollTop = "";
	function stickyMenu($targetMenu, $toggleClass) {
		var st = $(window).scrollTop();
		if ($(window).scrollTop() > 500) {
			if (st > lastScrollTop) {
				$targetMenu.removeClass($toggleClass);
			} else {
				$targetMenu.addClass($toggleClass);
			}
		} else {
			$targetMenu.removeClass($toggleClass);
		}

		lastScrollTop = st;
	}

	$(window).on("scroll", function () {
		if ($(".header-area").length) {
			stickyMenu($(".header-sticky"), "sticky");
		}
	});

	////////////////////////////////////////////////////
	// Mobile Menu Js
	$(".mobile_menu_bar").on("click", function () {
		$(this).toggleClass("on");
	});

	// Mobile Menu Js
	$("#mobile-menu").meanmenu({
		meanMenuContainer: ".mobile_menu",
		meanScreenWidth: "991",
		meanExpand: ['<i class="tji-arrow-down"></i>'],
	});

	// Hamburger Menu Js
	$(".mobile_menu_bar").on("click", function () {
		$(".hamburger-area").addClass("opened");
		$(".body-overlay").addClass("opened");
		$("body").toggleClass("overflow-hidden");
	});

	// Offcanvas js
	$(".menu_offcanvas").on("click", function () {
		$(".tj-offcanvas-area").toggleClass("opened");
		$(".body-overlay").addClass("opened");
		$("body").toggleClass("overflow-hidden");
	});
	$(".hamburger_close_btn").on("click", function () {
		$(".tj-offcanvas-area").removeClass("opened");
		$(".hamburger-area").removeClass("opened");
		$(".body-overlay").removeClass("opened");
		$("body").toggleClass("overflow-hidden");
	});
	$(".body-overlay").on("click", function () {
		$(".tj-offcanvas-area").removeClass("opened");
		$(".hamburger-area").removeClass("opened");
		$(".body-overlay").removeClass("opened");
		$("body").toggleClass("overflow-hidden");
	});

	////////////////////////////////////////////////////
	// Search Bar Js
	$(".header-search .search").on("click", function () {
		$(this).addClass("search-hide");
		$(".search_close_btn").addClass("close-show");
		$(".search_popup").addClass("search-opened");
		$(".search-popup-overlay").addClass("search-popup-overlay-open");
	});
	$(".search_close_btn, .search-popup-overlay").on("click", function () {
		$(".header-search .search").removeClass("search-hide");
		$(".search_popup").removeClass("search-opened");
		$(".search-popup-overlay").removeClass("search-popup-overlay-open");
		$(".search_close_btn").removeClass("close-show");
	});

	////////////////////////////////////////////////////
	// Rating Js
	if ($(".fill-ratings span").length > 0) {
		var star_rating_width = $(".fill-ratings span").width();
		$(".star-ratings").width(star_rating_width);
	}

	////////////////////////////////////////////////////
	// Nice Select Js
	if ($("select").length > 0) {
		$("select").niceSelect();
	}

	////////////////////////////////////////////////////
	// Client-slider Js
	if ($(".client-slider").length > 0) {
		var client = new Swiper(".client-slider", {
			slidesPerView: "auto",
			spaceBetween: 0,
			freemode: true,
			centeredSlides: true,
			loop: true,
			speed: 5000,
			allowTouchMove: false,
			autoplay: {
				delay: 1,
				disableOnInteraction: true,
			},
		});
	}

	////////////////////////////////////////////////////
	// Marquee slider Js
	if ($(".marquee-slider").length > 0) {
		var marquee = new Swiper(".marquee-slider", {
			slidesPerView: "auto",
			spaceBetween: 0,
			freemode: true,
			centeredSlides: true,
			loop: true,
			speed: 7000,
			allowTouchMove: false,
			autoplay: {
				delay: 1,
				disableOnInteraction: true,
			},
		});
	}
	if ($(".h7-team-marquee").length > 0) {
		var marquee = new Swiper(".h7-team-marquee", {
			slidesPerView: "auto",
			spaceBetween: 10,
			freemode: true,
			centeredSlides: true,
			loop: true,
			speed: 7000,
			allowTouchMove: false,
			autoplay: {
				delay: 1,
				disableOnInteraction: true,
			},
			breakpoints: {
				992: {
					spaceBetween: 15,
				},
			},
		});
	}

	////////////////////////////////////////////////////
	// Project Slider Js
	if ($(".project-slider").length > 0) {
		var work = new Swiper(".project-slider", {
			slidesPerView: 3,
			spaceBetween: 30,
			centeredSlides: true,
			loop: true,
			autoplay: {
				delay: 6000,
			},
			speed: 1500,
			pagination: {
				el: ".swiper-pagination-area",
				clickable: true,
			},
			breakpoints: {
				0: {
					slidesPerView: 1.2,
					spaceBetween: 15,
				},
				576: {
					slidesPerView: 1.7,
					spaceBetween: 20,
				},
				768: {
					slidesPerView: 2,
					spaceBetween: 20,
				},
				992: {
					slidesPerView: 2,
				},
				1024: {
					slidesPerView: 2.2,
				},
				1400: {
					slidesPerView: 2.31,
				},
			},
		});
	}

	// Project Slider 2 Js
	if ($(".project-slider-2").length > 0) {
		var work = new Swiper(".project-slider-2", {
			slidesPerView: 4,
			spaceBetween: 30,
			loop: true,
			speed: 1500,
			navigation: {
				nextEl: ".slider-next",
				prevEl: ".slider-prev",
			},
			pagination: {
				el: ".swiper-pagination-area",
				clickable: true,
			},
			breakpoints: {
				0: {
					slidesPerView: 1.2,
					spaceBetween: 15,
				},
				580: {
					slidesPerView: 2,
					spaceBetween: 20,
				},
				992: {
					slidesPerView: 3,
					spaceBetween: 20,
				},
				1500: {
					slidesPerView: 4,
					spaceBetween: 30,
				},
			},
		});
	}

	// Project Slider 3 Js
	if ($(".project-slider-3").length > 0) {
		var work = new Swiper(".project-slider-3", {
			slidesPerView: 3,
			spaceBetween: 30,
			centeredSlides: false,
			loop: true,
			autoplay: {
				delay: 6000,
			},
			speed: 1500,
			pagination: {
				el: ".swiper-pagination-area",
				clickable: true,
			},
			breakpoints: {
				0: {
					slidesPerView: 1.2,
					spaceBetween: 15,
				},
				576: {
					slidesPerView: 1.5,
					spaceBetween: 20,
				},
				768: {
					slidesPerView: 2,
					spaceBetween: 20,
				},
				992: {
					slidesPerView: 2.4,
				},
				1200: {
					slidesPerView: 3,
				},
			},
		});
	}

	// Project Slider 4 Js
	if ($(".h8-project-slider").length > 0) {
		var project8 = new Swiper(".h8-project-slider", {
			slidesPerView: 1,
			spaceBetween: 15,
			centeredSlides: false,
			loop: true,
			autoplay: {
				delay: 6000,
			},
			speed: 1500,
			pagination: {
				el: ".swiper-pagination-area",
				clickable: true,
			},
			navigation: {
				nextEl: ".slider-next",
				prevEl: ".slider-prev",
			},
			breakpoints: {
				576: {
					slidesPerView: 1.06,
				},
				768: {
					slidesPerView: 1.3,
				},
				992: {
					slidesPerView: 1.8,
					spaceBetween: 30,
				},
			},
		});
	}

	// h9 Project slider Js
	if ($(".h9-project-slider").length > 0) {
		var work = new Swiper(".h9-project-slider", {
			slidesPerView: 1.1,
			spaceBetween: 15,
			loop: true,
			speed: 1500,
			centeredSlides: true,
			autoplay: {
				delay: 6000,
			},
			navigation: {
				nextEl: ".slider-next",
				prevEl: ".slider-prev",
			},
			pagination: {
				el: ".swiper-pagination-area",
				clickable: true,
			},
			breakpoints: {
				0: {
					centeredSlides: false,
				},
				576: {
					slidesPerView: 1.3,
				},
				680: {
					slidesPerView: 1.5,
					spaceBetween: 20,
				},
				992: {
					slidesPerView: 2.3,
					spaceBetween: 20,
				},
				1200: {
					slidesPerView: 2.5,
					spaceBetween: 20,
				},
				1400: {
					slidesPerView: 2.5,
					spaceBetween: 20,
				},
				1500: {
					slidesPerView: 4,
					spaceBetween: 30,
				},
			},
		});
	}

	////////////////////////////////////////////////////
	// Testimonial Slider Js
	if ($(".testimonial-slider").length > 0) {
		var testimonial = new Swiper(".testimonial-slider", {
			slidesPerView: 3,
			spaceBetween: 28,
			centeredSlides: true,
			loop: true,
			speed: 1500,
			autoplay: {
				delay: 3000,
			},
			navigation: {
				nextEl: ".slider-next",
				prevEl: ".slider-prev",
			},
			pagination: {
				el: ".swiper-pagination-area",
				clickable: true,
			},
			breakpoints: {
				0: {
					slidesPerView: 1.2,
					spaceBetween: 15,
					centeredSlides: false,
				},
				576: {
					slidesPerView: 1.3,
					spaceBetween: 20,
					centeredSlides: false,
				},
				768: {
					slidesPerView: 1.4,
					spaceBetween: 20,
					centeredSlides: false,
				},
				992: {
					slidesPerView: 3,
				},
				1200: {
					slidesPerView: 3,
				},
			},
		});
	}

	// Testimonial Slider 2 Js
	if ($(".testimonial-slider-2").length > 0) {
		var testimonial = new Swiper(".testimonial-slider-2", {
			slidesPerView: 1,
			spaceBetween: 28,
			loop: true,
			speed: 1500,
			autoplay: {
				delay: 3000,
			},
			navigation: {
				nextEl: ".slider-next",
				prevEl: ".slider-prev",
			},
			pagination: {
				el: ".swiper-pagination-area",
				clickable: true,
			},
		});
	}
	let verticalTestimonialSlider8;
	//  testimonial Slider  Js
	function verticalTestimonialSlider() {
		const screenWidth = window.innerWidth;
		const direction = screenWidth >= 992 ? "vertical" : "horizontal";
		if (verticalTestimonialSlider8) {
			verticalTestimonialSlider8?.destroy(true, true);
		}
		if ($(".h6-testimonial-slider").length > 0) {
			verticalTestimonialSlider8 = new Swiper(".h6-testimonial-slider", {
				direction: direction,
				slidesPerView: 1,
				spaceBetween: 20,
				loop: true,
				speed: 1000,
				autoplay: {
					delay: 5000,
				},

				breakpoints: {
					576: {
						slidesPerView: 1.2,
					},
					992: {
						slidesPerView: "auto",
						spaceBetween: 30,
					},
				},
			});
		}
	}
	verticalTestimonialSlider();
	// Reinitialize on resize
	window.addEventListener("resize", () => {
		verticalTestimonialSlider();
	});

	// Testimonial Slider 3 Js
	if ($(".client-thumb").length > 0 && $(".testimonial-slider-3").length > 0) {
		let thumbSlider3 = new Swiper(".client-thumb", {
			slidesPerView: 3,
			spaceBetween: 12,
			loop: true,
			speed: 1500,
			centeredSlides: true,
			freeMode: true,
			watchSlidesProgress: true,
			slideToClickedSlide: true,
		});

		let testimonialSlider3 = new Swiper(".testimonial-slider-3", {
			slidesPerView: "auto",
			spaceBetween: 28,
			loop: true,
			speed: 1500,
			autoplay: {
				delay: 3000,
			},
			navigation: {
				nextEl: ".slider-next",
				prevEl: ".slider-prev",
			},
			pagination: {
				el: ".swiper-pagination-area",
				clickable: true,
			},
		});

		// Connect the sliders
		testimonialSlider3.controller.control = thumbSlider3;
		thumbSlider3.controller.control = testimonialSlider3;
	}

	// Testimonial 5 Slider Js
	if ($(".h5-testimonial-slider").length > 0) {
		var swiper = new Swiper(".h5-testimonial-slider", {
			slidesPerView: 1.2,
			spaceBetween: 20,
			centeredSlides: true,
			loop: true,
			speed: 1500,
			pagination: {
				el: ".swiper-pagination-area",
				clickable: true,
			},
			autoplay: {
				delay: 7000,
				disableOnInteraction: true,
			},

			breakpoints: {
				992: {
					centeredSlides: false,
					slidesPerView: 2,
					spaceBetween: 30,
				},
			},
		});
	}
	// Testimonial 8 Slider Js
	if ($(".h8-testimonial-slider").length > 0) {
		var swiper = new Swiper(".h8-testimonial-slider", {
			slidesPerView: 1,
			spaceBetween: 20,
			centeredSlides: true,
			loop: true,
			speed: 1500,
			pagination: {
				el: ".swiper-pagination-area",
				clickable: true,
			},

			autoplay: {
				delay: 4000,
				disableOnInteraction: true,
			},

			breakpoints: {
				576: {
					slidesPerView: 1.5,
				},
				768: {
					slidesPerView: 2,
				},
				992: {
					slidesPerView: 2.2,
					spaceBetween: 30,
				},
				1200: {
					slidesPerView: 2.8,
					spaceBetween: 30,
				},
				1400: {
					slidesPerView: 4,
					spaceBetween: 30,
				},
			},
		});
	}
	// Testimonial 8 Slider Js
	if ($(".h10-testimonial-slider").length > 0) {
		var swiper = new Swiper(".h10-testimonial-slider", {
			slidesPerView: 1,
			spaceBetween: 20,
			centeredSlides: true,
			loop: true,
			speed: 1500,
			pagination: {
				el: ".swiper-pagination-area",
				clickable: true,
			},
			navigation: {
				nextEl: ".slider-next",
				prevEl: ".slider-prev",
			},
			autoplay: {
				delay: 4000,
				disableOnInteraction: true,
			},

			breakpoints: {
				576: {
					slidesPerView: 1.5,
				},
				768: {
					slidesPerView: 2,
				},
				992: {
					slidesPerView: 2.2,
					spaceBetween: 30,
				},
				1200: {
					slidesPerView: 2.8,
					spaceBetween: 30,
				},
				1400: {
					slidesPerView: 4,
					spaceBetween: 30,
				},
			},
		});
	}

	////////////////////////////////////////////////////
	// Hero slider Js
	if ($(".hero-thumb").length > 0) {
		var swiper = new Swiper(".hero-thumb", {
			loop: false,
			spaceBetween: 15,
			slidesPerView: 3,
			freeMode: true,
			watchSlidesProgress: true,
		});
	}
	if ($(".hero-slider").length > 0) {
		var hero = new Swiper(".hero-slider", {
			slidesPerView: 1,
			spaceBetween: 0,
			effect: "fade",
			loop: true,
			speed: 1400,
			autoplay: {
				delay: 5000,
			},
			navigation: {
				nextEl: ".slider-next",
				prevEl: ".slider-prev",
			},
			thumbs: {
				swiper: swiper,
			},
		});
	}
	if ($(".h6-hero-card-slider").length > 0) {
		var heroCard = new Swiper(".h6-hero-card-slider", {
			slidesPerView: 1,
			spaceBetween: 15,

			loop: true,
			speed: 1400,
			autoplay: {
				delay: 5000,
			},
			pagination: {
				el: ".swiper-pagination-area",
				clickable: true,
			},
		});
	}

	////////////////////////////////////////////////////
	// Service Slider Js
	if ($(".service-slider").length > 0) {
		var service = new Swiper(".service-slider", {
			slidesPerView: 4.2,
			spaceBetween: 28,
			centeredSlides: true,
			loop: true,
			speed: 1500,
			autoplay: {
				delay: 2000,
			},
			navigation: {
				nextEl: ".slider-next",
				prevEl: ".slider-prev",
			},
			pagination: {
				el: ".swiper-pagination-area",
				clickable: true,
			},
			breakpoints: {
				0: {
					slidesPerView: 1.3,
					spaceBetween: 15,
				},
				576: {
					slidesPerView: 2,
					spaceBetween: 15,
				},
				768: {
					slidesPerView: 2.3,
					spaceBetween: 15,
				},
				900: {
					slidesPerView: 2.6,
					spaceBetween: 15,
				},
				1024: {
					slidesPerView: 3.2,
					spaceBetween: 15,
				},
				1200: {
					slidesPerView: 3.4,
					spaceBetween: 28,
				},
				1400: {
					slidesPerView: 4.2,
				},
			},
		});
	}

	// Service Slider 2 Js
	if ($(".service-slider-2").length > 0) {
		var service = new Swiper(".service-


			