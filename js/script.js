$(document).ready(function() {

        $('#slider1').cycle({
            fx: 'scrollHorz', // Here you can change the effect
            speed: 'slow',
            timeout: 0,
            next: '#next',
            prev: '#prev',
            pager: '#thumb',
            pagerAnchorBuilder: function(idx, slide) {
                return '<li><a href="#"><img src="' + slide.src + '" /></a></li>';
            }
        });
    });
    window.onload = function() {

        function getScrollTop() {
            if (typeof window.pageYOffset !== 'undefined') {
                // Most browsers
                return window.pageYOffset;
            }

            var d = document.documentElement;
            if (d.clientHeight) {
                // IE in standards mode
                return d.scrollTop;
            }

            // IE in quirks mode
            return document.body.scrollTop;
        }

        window.onscroll = function() {
            var box = document.getElementById('sorting-list'),
                    scroll = getScrollTop();

            if (scroll < 5) {
                box.style.top = "0";
            }
            else {
                box.style.top = (scroll + 0) + "px";
            }
        };

    };





    jQuery(document).ready(function() {
        $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).fadeIn("fast");
                },
                function() {
                    $('.dropdown-menu', this).fadeOut("fast");
                });
    });
    window.onload = function() {

        function getScrollTop() {
            if (typeof window.pageYOffset !== 'undefined') {
                // Most browsers
                return window.pageYOffset;
            }

            var d = document.documentElement;
            if (d.clientHeight) {
                // IE in standards mode
                return d.scrollTop;
            }

            // IE in quirks mode
            return document.body.scrollTop;
        }

        window.onscroll = function() {
            var box = document.getElementById('sorting-list'),
                    scroll = getScrollTop();

            if (scroll < 5) {
                box.style.top = "0";
            }
            else {
                box.style.top = (scroll + 0) + "px";
            }
        };

    };








//    änvända senare kanske
//    $('#slideshow').cycle({
//        fx: 'scrollHorz',
//        speed: 800,
//        timeout: 3000,
//        next: '#slideshow',
//        pause: 1
//    });
//
//    $('#mobil-menu').sidr({
//        side: 'left'
//        
//    });
//    $(window).touchwipe({
//        wipeLeft: function() {
//            // Close
//            $.sidr('close', 'sidr-main');
//        },
//        wipeRight: function() {
//            // Open
//            $.sidr('open', 'sidr-main');
//        },
//        preventDefaultEvents: false
//    });

});


