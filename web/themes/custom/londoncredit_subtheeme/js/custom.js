/**
 * @file
 * Global utilities.
 *
 */
(function($, Drupal) {

  'use strict';

  Drupal.behaviors.londoncredit_subtheeme = {
    attach: function(context, settings) {

      $(".search-icon").click(function(){
        $("#block-searchform").toggle();
        $(this).toggleClass('open');
        
      });

      $(".close-search").click(function () {
        $("#block-searchform").hide();
      });

      $(".loan").click(function () {
        $("#block-webform").toggle();
        $(this).toggleClass('open');
        document.getElementById('block-applyforloan').style.display = 'none';
      });

      $(".close-webform").click(function(){
        document.getElementById('block-webform').style.display = 'none';
        document.getElementById('block-applyforloan').style.display = 'block';
      });

      $(document).ready(function () {
        var loc = window.location.href;
        $(".link a").each(function() {
            if (loc.indexOf($(this).attr("href")) != -1) {
                $(this).parent().parent().parent().addClass("is-active");
            }
        });
    });

    $(".open-body").click(function(){
      $(".body-team").toggle();
      $(this).toggleClass('open');
      $(".headshot-position-body").toggleClass('background');
      
    });

    $(".slick__arrow").click(function(){
      $(".open-body.open").removeClass('open');
      $(".headshot-position-body").removeClass('background');
      document.querySelectorAll(".body-team").forEach(a=>a.style.display = "none");
    });

  


    }
  };

})(jQuery, Drupal);