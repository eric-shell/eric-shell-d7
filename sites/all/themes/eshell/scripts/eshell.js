(function ($) {
  $( document ).ready(function( $ ) {

    // Removeing container from images from WYSIWYG editor
    $('.field-name-body .field-item div').each(function() {
      $(this).addClass('photo-container');
    }); 

    // Front page slider
    if($('#content-slider').length) {
      $('#content-slider').slick( {
        dots: false,
        autoplay: false,
        adaptiveHeight: true,
        swipeToSlide: true,
        centerMode: true,
        centerPadding: '64px',
        responsive: [
          {
            breakpoint: 720,
            settings: {
              centerMode: false,
            }
          }
        ]
      });
    }

  });
})(jQuery);
