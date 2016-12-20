jQuery(document).ready(function($) {
 /* shrink header */
  var shrinkHeader = 100;
  $(window).scroll(function() {
      var scroll = getCurrentScroll();
        
       if ( scroll >= shrinkHeader ) {
           $('#header').addClass('shrink');
        }
        else {
            $('#header').removeClass('shrink');
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


});
 



