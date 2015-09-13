jQuery(document).ready(function () {

   // removes anchor tag from images in body text
   jQuery('.field-name-body .field-item div').each(function() {
      jQuery(this).addClass('photo-container');
   }); 


   jQuery(document).scroll(function() {
      // controls visbility of article pager
      var article_pager = false;
      // calculates height of page elements
      var current_height = jQuery(document).scrollTop();
      var content_height = jQuery('#main').position()["top"];

      if(current_height > content_height){
         article_pager = true;
      }

      jQuery('.flippy li a').toggleClass('pager-visible', article_pager);
   });

});

