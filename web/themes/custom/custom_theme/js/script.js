(function ($, Drupal) {
  'use strict';

  Drupal.behaviors.customTheme = {
    attach: function (context, settings) {
      // Add smooth scrolling to all links
      $('a[href*="#"]', context).once('customTheme').on('click', function (event) {
        if (this.hash !== '') {
          event.preventDefault();
          const hash = this.hash;
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 800, function () {
            window.location.hash = hash;
          });
        }
      });
    }
  };
})(jQuery, Drupal); 