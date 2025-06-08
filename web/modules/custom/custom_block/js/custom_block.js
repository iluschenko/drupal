(function ($, Drupal) {
  'use strict';

  Drupal.behaviors.customBlock = {
    attach: function (context, settings) {
      $('.greeting-button', context).once('customBlock').on('click', function () {
        const message = $('.greeting-message');
        message.text('Thanks for clicking!');
        message.css('color', '#0071b8');
      });
    }
  };
})(jQuery, Drupal);