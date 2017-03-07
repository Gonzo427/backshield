jQuery(document).ready(function($) {

    /* delay logo */


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

       /*  if (scroll > 150){

           $('#slide-2 img').addClass('fadeIn')
        }
        else {$('#slide-2 img').fadeOut('slow')};

          if (scroll > 300) {
        $('#slide-3 img').fadeIn({});
    }
    else {$('#slide-3 img').fadeOut('slow')};
    
    if (scroll > 450) {
        $('#slide-4 img').fadeIn({});
    }
    else {$('#slide-4 img').fadeOut('slow')};*/


    });

   function getCurrentScroll() {
    return window.pageYOffset || document.documentElement.scrollTop;
    }




    //fade images on scroll
    /*var y = $(this).scrollTop();
    if (y > 250) {
        $('#slide-2 img').fadeIn({});
    }
    else {$('#slide-2 img').fadeOut('slow')};
    
    if (y > 300) {
        $('#slide-3 img').fadeIn({});
    }
    else {$('#slide-3 img').fadeOut('slow')};
    
    if (y > 450) {
        $('#slide-4 img').fadeIn({});
    }
    else {$('#slide-4 img').fadeOut('slow')};


*/

/* scrolling bg change */
/*var $target = $('.slide-wrap');
inView('.slide').on('exit', function(el){
  var bgImg = $(el).attr('data-img-src');
  $target.css('background', 'url('+bgImg+')' );
});
*/



/* scrollMagic vertical slides */

 
    // Init ScrollMagic
  /*var controller = new ScrollMagic.Controller();
    var ourScene = new ScrollMagic.Scene({
      triggerElement: '#slide-2',
      triggerHook: 1,
      duration: '100%'
    })
    .setClassToggle('#slide-2', 'fadeIn')
    .addIndicators({
      name: 'fade scene',
      colorTrigger: 'white',
      colorStart: 'pink'
    })
    .addTo(controller);
    var controller = new ScrollMagic.Controller({
      globalSceneOptions: {
        triggerHook: 'onLeave'
      }
    });*/

    // get all slides
   var slides = document.querySelectorAll(".slide");

    // create scene for every slide
    for (var i=0; i<slides.length; i++) {
      new ScrollMagic.Scene({
          triggerElement: slides[i]
        })
        .setPin(slides[i])
        .addIndicators() // add indicators (requires plugin)
        .addTo(controller);
    }

 
 


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
 


