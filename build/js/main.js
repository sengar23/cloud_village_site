$(document).ready(function () {

	add_talk_count();
	// smooth scroll
	$('.nav__item a').smoothScroll({
		speed: 900
	});

	$('.slider-wrap').slick({
		dots: true,
  		infinite: true
	});

	// PDF object

	//PDFObject.embed("./pdf/Exploiting_IAM.pdf", "#colinestep-pdf");
	//PDFObject.embed("./pdf/build_to_hack.pdf", "#chrisleroy-pdf");
	//PDFObject.embed("./pdf/Your_Blacklist_is_Dead.pdf", "#erickgalinkin-pdf");
	//PDFObject.embed("./pdf/pacbot.pdf", "#setuparimi-pdf");
	//PDFObject.embed("./pdf/sentinal.pdf", "#olafedoardo-pdf");
	//PDFObject.embed("./pdf/Microsoft_Cloud_Azure.pdf", "#seanmetcalf-pdf");
	//PDFObject.embed("./pdf/Here_for_a_Good_Time.pdf", "#jenkohwong-pdf");
	//PDFObject.embed("./pdf/Mining_Malevolence.pdf", "#cherylbiswas-pdf");
	//PDFObject.embed("./pdf/MozDef.pdf", "#andrewnathan-pdf");
	//PDFObject.embed("./pdf/Phishing_in_the_Cloud_Era.pdf", "#ashwinabhinav-pdf");
	//PDFObject.embed("./pdf/Pragmatic_Cloud.pdf", "#richmogull-pdf");
	//PDFObject.embed("./pdf/Security_Battle.pdf", "#janemiceli-pdf");
	//PDFObject.embed("./pdf/Splunk.pdf", "#rodjose-pdf");
	//PDFObject.embed("./pdf/Scaling_Security.pdf", "#jamesstrassburg-pdf");
	//PDFObject.embed("./pdf/Battle_in_the_Clouds.pdf", "#danimohsan-pdf");



	// animate text inside slide
	// initialize text to animate
	$('.item__text').textillate({
		in: {
			effect: 'flipInX',
			delay: 5
		},
		loop: false
	});

	$(".schedule-item").click(function () {
		var el = $(this);
		var article_id = el.data("id");
		if(article_id){
			article_id = "#" + article_id;
    		var article_parent = $(article_id).parent().parent().parent();
    		var article_opened = $("#talks .panel-collapse.collapse.in");
    		if(article_opened.length > 0){
    			article_opened.collapse("toggle");
    		}
    		var article_parent_id = article_parent.attr("id");
    		$('.nav.nav-tabs a[href="#'+article_parent_id+'"]').tab('show');
    		setTimeout(function(){
    			var t = $(article_id).siblings(".panel-btn").offset().top;
    			$.smoothScroll({
				    
				    scrollTarget: $(article_id).siblings(".panel-btn"),
				    offset: -100
				});
    			$(article_id).collapse("toggle");
    		},300);
    		
		}
    	
	});

	/*	
	//set slider
	//*************************************
	var slider = $(".slider"),
		pointerPrev = $(".pointer_prev"),
		pointerNext = $(".pointer_next");


	slider.slick({
		arrows: true,
		fade: true,
		prevArrow: $(".pointer_prev"),
		nextArrow: $(".pointer_next")
	});
	
	
	// set callbacks on swipe slider
		slider.on('init', function (event, slick, currentSlide) {

		});

		slider.on('beforeChange', function (event, slick, currentSlide, nextSlide) {
			var sliderItems = $(this).find('.slider__item');
			$(sliderItems[nextSlide]).find('.item__text').css({
				opacity: 0
			});
		});

		slider.on('afterChange', function (event, slick, currentSlide) {
			var sliderItems = $(this).find('.slider__item');
			$(sliderItems[currentSlide]).find('.item__text').css({
				opacity: 1
			});

			$('.item__text').textillate('start');
		});
	*/
	setTimeout(function () {
		$(".loading-wrap").removeClass("visible");
		setTimeout(function () {
			$('.item__text').show();
			$('.item__text').textillate('start');
		}, 300);
	}, 2000);

	//slider arrows appear
	//*************************************
	/*slider.on('mouseover', function(){
		pointerPrev.addClass("pointer_prev_show");
		pointerNext.addClass("pointer_next_show");
	});
	$(".pointer").on('mouseover', function(){
		pointerPrev.addClass("pointer_prev_show");
		pointerNext.addClass("pointer_next_show");
	});
	$(".pointer-container").on('mouseover', function(){
		pointerPrev.addClass("pointer_prev_show");
		pointerNext.addClass("pointer_next_show");
	});*/

	//slider arrows hide
	//*************************************
	/*slider.on('mouseleave', function(){
		pointerPrev.removeClass("pointer_prev_show");
		pointerNext.removeClass("pointer_next_show");
	});*/

	//	start plaing video
	//	***********************************
	/*$(".poster__play-button").on('click', function(){
		$(".video__item_poster").addClass("poster_hide");
		$("iframe.video__item").attr("src", "https://player.vimeo.com/video/212731897?	color=ffffff&title=0&byline=0&autoplay=1");
	});
	*/
	//	services owl-carousel
	//	***********************************
	/*var owl = $("#talks .owl-carousel");
	owl.each(function (index, target) {
		$(target).owlCarousel({

			margin: 20,
			responsiveClass: true,
			rewind: false,
			dots: false,
			responsive: {
				0: {
					items: 1
				},
				480: {
					items: 2
				},
				1024: {
					items: 3
				}
			}
		});
		var s = $(target).siblings(".arrow-controls");
		var next = s.find(".arrow_front");
		var prev = s.find(".arrow_back");
		// Go to the next item
		$(next).click(function (event) {
			$(target).trigger('next.owl.carousel', [300]);
		});

		// Go to the previous item
		$(prev).click(function (event) {
			// With optional speed parameter
			// Parameters has to be in square bracket '[]'
			$(target).trigger('prev.owl.carousel', [300]);
		});
		if (index == (owl.length - 1)) {
			$("#talks .tab-content .tab-pane:not(:first-child)").removeClass("active");

		}
		var count = $(target).find(".item").length;
		var id = $(target).parent().attr("id");
		$("#talks .nav-tabs a[href$='" + "#" + id + "'] span").text(count);

	});
*/

	/*
		//	clients owl-carousel setup
		//	***********************************
		var owl2 = $("#clients .owl-carousel"),
			clientsItems = $("#clients .item").length,
			clientsCurrentItem = 1;

		// get counter items
		var current = $('.clients__counter__item1'),
			allCount = $('.clients__counter__item2');

		allCount.text(clientsItems);
		current.text(clientsCurrentItem);

		owl2.owlCarousel({
			loop: true,
			margin: 10,
			responsiveClass: true,
			rewind: false,
			dots: false,
			items: 1
		});

		// Go to the next item
		$('.clients__arrow_next').click(function (event) {
			if (clientsCurrentItem == clientsItems) {
				clientsCurrentItem = 1;
				current.text(clientsCurrentItem);
				owl2.trigger('next.owl.carousel');
			} else {
				clientsCurrentItem++;
				current.text(clientsCurrentItem);
				owl2.trigger('next.owl.carousel');
			}
		});

		// Go to the previous item
		$('.clients__arrow_back').click(function (event) {
			if (clientsCurrentItem == 1) {
				clientsCurrentItem = clientsItems;
				current.text(clientsCurrentItem);
				owl2.trigger('prev.owl.carousel', [300]);
			} else {
				clientsCurrentItem--;
				current.text(clientsCurrentItem);
				// With optional speed parameter
				// Parameters has to be in square bracket '[]'
				owl2.trigger('prev.owl.carousel', [300]);
			}
		});
		*/
	//	gallery isotope filtering
	//	************************************
	var galleryContainer = $(".gallery__items"),
		isotopFilterButtons = $(".works__nav__item");

	isotopFilterButtons.on('click', function () {
		var filterValue = $(this).attr('data-filter');

		galleryContainer.isotope({
			filter: filterValue
		});

		for (var i = 0; i < isotopFilterButtons.length; i++) {
			$(isotopFilterButtons[i]).removeClass('works__nav__item_active');
		}

		$(this).addClass('works__nav__item_active');
	});
	/*
		//	gallery magnific popup
		//	************************************
		var magnificPopup = $.magnificPopup.instance;

		$('.gallery__items').magnificPopup({
			delegate: '.item__hover__zoom',
			type: 'image',
			gallery: {
				enabled: true,
				navigateByImgClick: false, // for correct counter working
				preload: [0, 2],
				tCounter: '<span class="popup-counter">%curr% / %total%</span>',
				arrowMarkup: ''
			},
			zoom: {
				enabled: true,
				duration: 300, // don't foget to change the duration also in CSS
				opener: function (element) {
					return element.find('img');
				}
			},
			image: {
				verticalFit: true,
				titleSrc: function (item) {
					return item.el.attr('title');
				}
			},
			callbacks: {
				open: function () {
					movePopup();
				},
				change: function () {
					// append popup's controls
					$(this.content).find('.mfp-counter').append('<div class="popup__arrow popup__arrow_next"><div class="popup__arrow__line-short popup__arrow__line-up"></div><div class="popup__arrow__line"></div><div class="popup__arrow__line-short popup__arrow__line-down"></div></div>');
					$(this.content).find('.mfp-counter').prepend('<div class="popup__arrow popup__arrow_back"><div class="popup__arrow__line-short popup__arrow__line-up"></div><div class="popup__arrow__line"></div><div class="popup__arrow__line-short popup__arrow__line-down"></div></div>');
				}
			}
		});

		// change image by click on arrow
		function movePopup() {
			if (magnificPopup.index + 1 == magnificPopup.items.length)
				$('.popup__arrow_next').addClass('popup__arrow_gray');
			else if (magnificPopup.index == 0)
				$('.popup__arrow_back').addClass('popup__arrow_gray');

			$('.popup__arrow_next').click(function () {
				if (magnificPopup.index + 1 == magnificPopup.items.length)
					return;
				else {
					magnificPopup.next();
					movePopup();
				}
			});

			$('.popup__arrow_back').click(function () {
				if (magnificPopup.index == 0)
					return;
				else {
					magnificPopup.prev();
					movePopup();
				}
			});
		}
		*/
});

function add_talk_count() {
	var tabs = $("#talks .tab-pane");
	tabs.each(function (index, target) {
		var count = $(target).find(".panel-default").length;
		var id = $(target).attr("id");
		$("#talks .nav-tabs a[href$='" + "#" + id + "'] span").text(count);
	});



}