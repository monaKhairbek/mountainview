$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
    $('[title]').tooltip();
});
function HeaderBack() {
    var distanceY = window.pageYOffset || document.documentElement.scrollTop,
        shrinkOn = 100,
        header = $(".a-Header");
    if (distanceY > shrinkOn && $(window).width() > 767) {
        header.addClass("smaller");
    } else {
        if (header.hasClass("smaller")) {
            header.removeClass("smaller");
        }
    }

};
HeaderBack();
$(window).scroll(function () {
    HeaderBack();
    if (($(window).height() + 100) < $(document).height()) {
        $('#top-link-block').removeClass('hidden').affix({
            // how far to scroll down before link "slides" into view
            offset: { top: 100 }
        });
    }
});

//start nice scroll
$("html").niceScroll({
    cursorcolor: '#c3a537',
    cursorwidth: '7px',
    cursorborder: 'none',
    cursorborderradius: '0',
    zindex: '9999999999999',
    scrollspeed: 120,
    horizrailenabled: false,
    mousescrollstep: 30,
    preventmultitouchscrolling: false
});
//end nice scroll

//wow js
new WOW().init();
//end wow js



$("form").parsley();
var windowSize = $(window).width();


////////////////////////////////////fancybox//////////////////////
$('.fancybox-media').fancybox({
    openEffect: 'none',
    closeEffect: 'none',
    helpers: {
        media: {}
    },
    padding: 2,
    scrolling: 'auto',

    afterShow: function () {
        $('.fancybox-wrap').swipe({
            swipe: function (event, direction) {
                if (direction === 'left' || direction === 'up') {
                    $.fancybox.prev(direction);
                } else {
                    $.fancybox.next(direction);
                }
            }
        });

    },
});


