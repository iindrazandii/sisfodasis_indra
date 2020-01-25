jQuery(function ($) {

    'use strict';


    // -------------------------------------------------------------

    // -------------------------------------------------------------

    (function () {

        $('#go-next').on('click', function(){
            $('html, body').animate({scrollTop: $(this.hash).offset().top -1}, 1000);
            return false;
        });

    }());



	
    
    // -------------------------------------------------------------
    // Testimonial Carousel
    // -------------------------------------------------------------

    (function () {

        $(".testimonial-items").owlCarousel({
        autoPlay: 5000, //Set AutoPlay to 5 seconds
        pagination : false,  
        items : 2,
        itemsDesktop : [1199,2],
        itemsDesktopSmall : [979,2],
        itemsMobile :	[479,1]
        });
         
        $(".testimonial-items-navigation .next").click(function(){
        $(".testimonial-items").trigger('owl.next');
        })

        $(".testimonial-items-navigation .prev").click(function(){
        $(".testimonial-items").trigger('owl.prev');
        })  
    
    }());



    // -------------------------------------------------------------
    // Partner Carousel
    // -------------------------------------------------------------

    (function () {

        $(".partner").owlCarousel({
        autoPlay: 3000, //Set AutoPlay to 3 seconds
        items : 4,
        itemsDesktop : [1199,4],
        itemsDesktopSmall : [979,4]
        });
         

    }());



    // -------------------------------------------------------------
    // Countdown Script
    // -------------------------------------------------------------

    //Countdown
    $('.count-wrap').bind('inview', function(event, visible, visiblePartX, visiblePartY) {
        if (visible) {
            $(this).find('.timer').each(function () {
                var $this = $(this);
                $({ Counter: 0 }).animate({ Counter: $this.text() }, {
                    duration: 2000,
                    easing: 'swing',
                    step: function () {
                        $this.text(Math.ceil(this.Counter));
                    }
                });
            });
            $(this).unbind('inview');
        }
    });






    // -------------------------------------------------------------
    //  Masonry Blog
    // -------------------------------------------------------------

    (function () {

    // Masonry
    if( $('#masonryBlog').length ){
        var container = document.querySelector('#masonryBlog');
        var msnry = new Masonry( container, {
          itemSelector: '.masonry-blog-item'
        });
    }

    }());




	
    // -------------------------------------------------------------
    //  Initialise Stellar
    // -------------------------------------------------------------
    (function () {
	
		$.stellar({
			horizontalScrolling: false
		});
	
    }());	
	
	
	
	
	

    // -------------------------------------------------------------
    // Video Script
    // -------------------------------------------------------------

    (function () {

        jQuery(function(){
            jQuery(".player").mb_YTPlayer();
        }); 
          

    }());




});

	




jQuery(document).ready(function ($) {
    //$( "#footer-two" ).append( "<a href=\'#\' class=\'back-to-top\'><i class=\'fa fa-angle-up\'></i></a>" );
    var offset = 220;
    var duration = 500;
    $(window).scroll(function () {
        if ($(this).scrollTop() > offset) {
            $('.back-to-top').fadeIn(duration);
        } else {
            $('.back-to-top').fadeOut(duration);
        }
    });

    $('.back-to-top').click(function (event) {
        event.preventDefault();
        $('html, body').animate({scrollTop: 0}, 1000);
        return false;
    })
});




// =============================================
    //  Dropdown menu
    // =============================================


    (function () {

    function getIEVersion(){
        var agent = navigator.userAgent;
        var reg = /MSIE\s?(\d+)(?:\.(\d+))?/i;
        var matches = agent.match(reg);
        if (matches != null) {
            return { major: matches[1], minor: matches[2] };
        }
        return { major: "-1", minor: "-1" };
}

        var ie_version =  getIEVersion();

        if( ie_version.major==10 ){
            $('html').addClass('ie10');
        }


        

        if( $('html').hasClass('ie9') || $('html').hasClass('ie10')  ){

            $('.submenu-wrapper').each(function(){

            $(this).addClass('no-pointer-events');

            });

        }


        var timer;

        $('li.dropdown').on('mouseenter', function (event) {


            event.stopImmediatePropagation();
            event.stopPropagation();

            $(this).removeClass('open menu-animating').addClass('menu-animating');
            var that = this;


            if (timer) {
                clearTimeout(timer);
                timer = null;
            }


            timer = setTimeout(function () {

                $(that).removeClass('menu-animating');
                $(that).addClass('open');

            }, 300);   // 300ms as animation end time


        });

        // on mouse leave

        $('li.dropdown').on('mouseleave', function (event) {

            var that = this;

            $(this).removeClass('open menu-animating').addClass('menu-animating');


            if (timer) {
                clearTimeout(timer);
                timer = null;
            }

            timer = setTimeout(function () {

                $(that).removeClass('menu-animating');
                $(that).removeClass('open');

            }, 300);  // 300ms as animation end time

        });

    }());