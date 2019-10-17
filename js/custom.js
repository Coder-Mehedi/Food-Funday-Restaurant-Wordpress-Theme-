(function(jQuery) {
    "use strict";
	
		/* ==============================================
			SMOOTH SCROLL 
		=============================================== */
		jQuery('a[href*=#]:not([href=#])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
				|| location.hostname == this.hostname) {
		
				var target = jQuery(this.hash);
				target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
				   if (target.length) {
					 jQuery('html,body').animate({
						 scrollTop: target.offset().top
					}, 1000);
					return false;
				}
			}
		});
		  // Activate scrollspy to add active class to navbar items on scroll
		  jQuery('body').scrollspy({
			target: '#mainNav',
			offset: 54
		  });
		/* =========================
            SCROLL MENU
        =========================*/
		jQuery(window).on('scroll', function () {
			if (jQuery(window).scrollTop() > 50) {
				jQuery('.header-block-top').addClass('fixed-menu');
			} else {
				jQuery('.header-block-top').removeClass('fixed-menu');
			}
		});
		
		/* =========================
            NAV MENU
        =========================*/
		jQuery('.navbar-nav li a').on("click", function(e) {
			jQuery('.navbar-nav li').removeClass('active');
			var jQueryparent = jQuery(this).parent();
			if (!jQueryparent.hasClass('active')) {
				jQueryparent.addClass('active');
			}
		});
		
		/* =========================
            CAROUSEL 
        =========================*/
		
		jQuery(document).ready(function() {
		  jQuery("#owl-demo").owlCarousel({
			  autoPlay: 3000, //Set AutoPlay to 3 seconds
			  items : 3,
			  itemsDesktop : [1199,3],
			  itemsDesktopSmall : [979,2]
		 
		  });
		});
		
		/* ========================
			SLIDER - TAB 
		=============================*/
		
		
		 jQuery('.slider-single').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			fade: false,
			adaptiveHeight: true,
			infinite: false,
			useTransform: true,
			speed: 400,
			cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
		 });
		
		 jQuery('.slider-nav')
			.on('init', function(event, slick) {
				jQuery('.slider-nav .slick-slide.slick-current').addClass('is-active');
			})
			.slick({
				slidesToShow: 4,
				slidesToScroll: 7,
				dots: false,
				focusOnSelect: false,
				infinite: false,
				responsive: [{
					breakpoint: 1024,
					settings: {
						slidesToShow: 4,
						slidesToScroll: 4,
					}
				}, {
					breakpoint: 769,
					settings: {
						slidesToShow: 4,
						slidesToScroll: 4,
					}
				}, {
					breakpoint: 420,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 3,
				}
				}]
			});
		
		 jQuery('.slider-single').on('afterChange', function(event, slick, currentSlide) {
			jQuery('.slider-nav').slick('slickGoTo', currentSlide);
			var currrentNavSlideElem = '.slider-nav .slick-slide[data-slick-index="' + currentSlide + '"]';
			jQuery('.slider-nav .slick-slide.is-active').removeClass('is-active');
			jQuery(currrentNavSlideElem).addClass('is-active');
		 });
		
		 jQuery('.slider-nav').on('click', '.slick-slide', function(event) {
			event.preventDefault();
			var goToSingleSlide = jQuery(this).data('slick-index');
		
			jQuery('.slider-single').slick('slickGoTo', goToSingleSlide);
		 });
		 
		
		/* ========================
			WOW ANIMATION
		=============================*/
		
    		new WOW().init();
			
		/* ========================
			DATE/TIME PICKER
		=============================*/
		
		var date = new Date();
		var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
		jQuery('#date-picker').datetimepicker({
			format: 'DD.MM.YYYY',
			minDate: today
		});
		jQuery('#time-picker').datetimepicker({
			format: 'LT'
		});
		
		/* ==============================================
			SELECTPICKER
		=============================================== */
		
		jQuery('.selectpicker').selectpicker();

		/* ==============================================
			PRELOADER
		=============================================== */
		
		  
		jQuery(window).load(function() { 
			jQuery("#status").fadeOut("slow"); 
			jQuery("#loader").delay(200).fadeOut(); 
		})
		
		  
		  
		/* ==============================================
			SCROLL UP
		=============================================== */
			
			jQuery(window).scroll(function(){
				if (jQuery(this).scrollTop() > 100) {
					jQuery('.scrollup').fadeIn();
				} else {
					jQuery('.scrollup').fadeOut();
				}
			}); 
			
			jQuery('.scrollup').click(function(){
				jQuery("html, body").animate({ scrollTop: 0 }, 600);
				return false;
			});
		
		/* ================================================
			COLOR PANEL OPEN/CLOSE
		================================================ */
		 
		 jQuery( "#color-panel .panel-button" ).click(function(){
			jQuery( "#color-panel" ).toggleClass( "close-color-panel", "open-color-panel", 1000 );
			jQuery( "#color-panel" ).toggleClass( "open-color-panel", "close-color-panel", 1000 );
			return false;
		});
		// Color Skins
		jQuery('.switcher').click(function(){
			var title = jQuery(this).attr('title');		
			jQuery('#changeable-colors').attr('href', 'css/colors/' + title + '.css');				
			return false;
		});	
		
		jQuery(".orange-bg").on('click',function(){
			jQuery(".logo-header img").attr("src", "images/logo.png");
			jQuery(".footer-logo .text-center img").attr("src", "images/logo.png");
			return false;
		});

		jQuery(".strong-blue-bg").on('click',function(){
			jQuery(".logo-header img").attr("src", "images/logo2.png");
			jQuery(".footer-logo .text-center img").attr("src", "images/logo2.png");
			return false;
		});

		jQuery(".moderate-green-bg").on('click',function(){
			jQuery(".logo-header img").attr("src", "images/logo3.png");
			jQuery(".footer-logo .text-center img").attr("src", "images/logo3.png");
			return false;
		});

		jQuery(".vivid-yellow-bg").on('click',function(){
			jQuery(".logo-header img").attr("src", "images/logo4.png");
			jQuery(".footer-logo .text-center img").attr("src", "images/logo4.png");
			return false;
		});

		/* ==============================================
			PARALLAX
		=============================================== */	
		
		jQuery.fn.parallax = function(options) {
 
			var windowHeight = jQuery(window).height();
	 
			// Establish default settings
			var settings = jQuery.extend({
				speed        : 0.15
			}, options);
	 
			// Iterate over each object in collection
			return this.each( function() {
	 
				// Save a reference to the element
				var jQuerythis = jQuery(this);
	 
				// Set up Scroll Handler
				jQuery(document).scroll(function(){
	 
						var scrollTop = jQuery(window).scrollTop();
							var offset = jQuerythis.offset().top;
							var height = jQuerythis.outerHeight();
	 
				// Check if above or below viewport
				if (offset + height <= scrollTop || offset >= scrollTop + windowHeight) {
					return;
				}
	 
				var yBgPosition = Math.round((offset - scrollTop) * settings.speed);
	 
					 // Apply the Y Background Position to Set the Parallax Effect
					jQuerythis.css('background-position', 'center ' + yBgPosition + 'px');
					
				});
			});
		}
	
		jQuery('.parallax').parallax({
			speed : 0.15
		});
		
		 /* ==============================================
			CONTACT FORM
		=============================================== */	
			 jQuery(document).ready(function() {
				jQuery('#contact-form').submit(function() {
					var action = jQuery(this).attr('action');
					jQuery("#message").slideUp(750, function() {
						jQuery('#message').hide();
						jQuery('#submit')
							.after('<img src="images/ajax-loader.gif" class="loader" />')
							.attr('disabled', 'disabled');
						jQuery.post(action, {
								first_name: jQuery('#first_name').val(),
								email: jQuery('#email').val(),
								phone: jQuery('#phone').val(),
								no_of_persons: jQuery('#no_of_persons').val(),
								preferred_food: jQuery('#preferred_food').val(),
								occasion: jQuery('#occasion').val(),
								verify: jQuery('#verify').val()
							},
							function(data) {
								document.getElementById('message').innerHTML = data;
								jQuery('#message').slideDown('slow');
								jQuery('#contact-form img.loader').fadeOut('slow', function() {
									jQuery(this).remove()
								});
								jQuery('#submit').removeAttr('disabled');
								if (data.match('success') != null) jQuery('#contact-form').slideUp('slow');
							}
						);
					});
					return false;
				});
			});
		 
	
})(jQuery);