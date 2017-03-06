jQuery(document).ready(function($) {
 /* shrink header */
  var shrinkHeader = 100;
  $(window).scroll(function() {
      var scroll = getCurrentScroll();
        
       if ( scroll >= shrinkHeader ) {
           $('#header').addClass('scrolled');
        }
        else {
            $('#header').removeClass('scrolled');
        }
    });

   function getCurrentScroll() {
    return window.pageYOffset || document.documentElement.scrollTop;
    }


/* scrolling bg-color change */
var $target = $('.color-wrapper');
inView('.home_section').on('enter', function(el){
  var color = $(el).attr('data-background-color');
  $target.css('background-color', color );
});



/*Video bg */
function isIE () {
    var myNav = navigator.userAgent.toLowerCase();
    return (myNav.indexOf('msie') != -1) ? parseInt(myNav.split('msie')[1]) : false;
}

window.isIEOld = isIE() && isIE() < 9;
window.isiPad = navigator.userAgent.match(/iPad/i);

var img = $('.video').data('placeholder'),
    video = $('.video').data('video'),
    noVideo = $('.video').data('src'),
    el = '';

if($(window).width() > 599 && !isIEOld && !isiPad) {
    el +=   '<video autoplay loop poster="' + img + '">';
    el +=       '<source src="' + video + '" type="video/mp4">';
    el +=   '</video>';
} else {
    el = '<div class="video-element" style="background-image: url(' + noVideo + ')"></div>';
}

$('.video').prepend(el);




//this is closing brackets for document.ready
});
 


