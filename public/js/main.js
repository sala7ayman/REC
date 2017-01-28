// Hello.
//
// This is The Scripts used for ___________ Theme
//
//

jQuery(document).ready(function($){
	var sliderContainers = $('.cd-slider-wrapper');

	if( sliderContainers.length > 0 ) initBlockSlider(sliderContainers);

	function initBlockSlider(sliderContainers) {
		sliderContainers.each(function(){
			var sliderContainer = $(this),
				slides = sliderContainer.children('.cd-slider').children('li'),
				sliderPagination = createSliderPagination(sliderContainer);

			sliderPagination.on('click', function(event){
				event.preventDefault();
				var selected = $(this),
					index = selected.index();
				updateSlider(index, sliderPagination, slides);
			});

			sliderContainer.on('swipeleft', function(){
				var bool = enableSwipe(sliderContainer),
					visibleSlide = sliderContainer.find('.is-visible').last(),
					visibleSlideIndex = visibleSlide.index();
				if(!visibleSlide.is(':last-child') && bool) {updateSlider(visibleSlideIndex + 1, sliderPagination, slides);}
			});

			sliderContainer.on('swiperight', function(){
				var bool = enableSwipe(sliderContainer),
					visibleSlide = sliderContainer.find('.is-visible').last(),
					visibleSlideIndex = visibleSlide.index();
				if(!visibleSlide.is(':first-child') && bool) {updateSlider(visibleSlideIndex - 1, sliderPagination, slides);}
			});
		});
	}

	function createSliderPagination(container){
		var wrapper = $('<ol class="cd-slider-navigation"></ol>');
		container.children('.cd-slider').find('li').each(function(index){
			var dotWrapper = (index == 0) ? $('<li class="selected"></li>') : $('<li></li>'),
				dot = $('<a href="#0"></a>').appendTo(dotWrapper);
			dotWrapper.appendTo(wrapper);
			var dotText = ( index+1 < 10 ) ? '0'+ (index+1) : index+1;
			dot.text(dotText);
		});
		wrapper.appendTo(container);
		return wrapper.children('li');
	}

	function updateSlider(n, navigation, slides) {
		navigation.removeClass('selected').eq(n).addClass('selected');
		slides.eq(n).addClass('is-visible').removeClass('covered').prevAll('li').addClass('is-visible covered').end().nextAll('li').removeClass('is-visible covered');

		//fixes a bug on Firefox with ul.cd-slider-navigation z-index
		navigation.parent('ul').addClass('slider-animating').on('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
			$(this).removeClass('slider-animating');
		});
	}

	function enableSwipe(container) {
		return ( container.parents('.touch').length > 0 );
	}
});

function main() {

(function () {
   'use strict';

    /*====================================
    Main Navigation Stick to Top when Scroll
    ======================================*/
    function sticky_relocate() {
	    var window_top = $(window).scrollTop();
	    var div_top = $('#sticky-anchor').offset().top;
	    if (window_top > div_top) {
	        $('#main-menu').addClass('stick');
	    } else {
	        $('#main-menu').removeClass('stick');
	    }
	}

	$(function () {
	    $(window).scroll(sticky_relocate);
	    sticky_relocate();
	});


	/*====================================
	//Portfolio Carousel 
	======================================*/
	var owl = $("#portfolio-items");
	  owl.owlCarousel({
	     
	      itemsCustom : [
	        [0, 1],
	        [450, 1],
	        [660, 2],
	        [700, 3],
	        [1200, 4],
	        [1600, 4]
	      ],
	      navigation : true,
	      navigationText: ["<i class='fa fa-chevron-circle-left'></i>","<i class='fa fa-chevron-circle-right'></i>"],
	      pagination: false,
	  });

	/* ==============================================
  	Testimonial Slider
  	=============================================== */ 
	 $("#testimonial").owlCarousel({
	   
	        navigation : false, // Show next and prev buttons
	        slideSpeed : 300,
	        paginationSpeed : 400,
	        singleItem:true,
	        autoHeight : true
	   
	    });

  	/*====================================
    Portfolio Isotope Filter
    ======================================*/
        var $container = $('#itemsWork');
        $container.isotope({
            filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });
        $('.cat a').click(function() {
            $('.cat .active').removeClass('active');
            $(this).addClass('active');
            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        });
        $container.imagesLoaded()
		  .progress( function() {
		    // trigger reLayout everytime an image loads
		    $container.isotope('reLayout');
		  });


    /*====================================
    Nivo Lightbox 
    ======================================*/
    // Agency Portfolio Popup
    $('#popup a').nivoLightbox({
            effect: 'slideDown',  
            keyboardNav: true,                            
        });

 	/*====================================
   	Accordion Active Calling 
    ======================================*/
    // When we click on the Panel heading
	$("#accordion3>.panel-default > .panel-heading").click(function(){
	  // If this isn't already active
	  if (!$(this).hasClass("active")) {
	    // Remove the class from anything that is active
	    $("#accordion3>.panel-default > .panel-heading.active").removeClass("active");
	    // And make this active
	    $(this).addClass("active");
	  }
	});

	// When we click on the Panel heading
	$("#accordion4>.panel-default > .panel-heading").click(function(){
	  // If this isn't already active
	  if (!$(this).hasClass("active")) {
	    // Remove the class from anything that is active
	    $("#accordion4>.panel-default > .panel-heading.active").removeClass("active");
	    // And make this active
	    $(this).addClass("active");
	  }
	});

}());


}
main();

