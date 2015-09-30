(function ($) {
  $( document ).ready(function( $ ) {

   // removes anchor tag from images in body text
   $('.field-name-body .field-item div').each(function() {
      $(this).addClass('photo-container');
   }); 

   $(document).scroll(function() {
      // controls visbility of article pager
      var article_pager = false;
      // calculates height of page elements
      var current_height = $(document).scrollTop();
      var content_height = $('#main').position()["top"];

      if(current_height > content_height){
         article_pager = true;
      }

      $('.flippy li a').toggleClass('pager-visible', article_pager);
   });

    // Global slider functionality
    if($('#content-slider').length) {
      $('#content-slider').slick({
        dots: true,
        arrows: false,
        autoplay: false,
        adaptiveHeight: true,
      });
    }
  });
})(jQuery);
