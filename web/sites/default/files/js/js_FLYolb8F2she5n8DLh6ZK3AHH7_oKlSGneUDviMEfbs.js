/**
 * @file
 * JavaScript behaviors for element help text (tooltip).
 */

(function ($, Drupal) {

  'use strict';

  // @see https://atomiks.github.io/tippyjs/v5/all-props/
  // @see https://atomiks.github.io/tippyjs/v6/all-props/
  Drupal.webform = Drupal.webform || {};
  Drupal.webform.elementHelpIcon = Drupal.webform.elementHelpIcon || {};
  Drupal.webform.elementHelpIcon.options = Drupal.webform.elementHelpIcon.options || {};

  /**
   * Element help icon.
   *
   * @type {Drupal~behavior}
   */
  Drupal.behaviors.webformElementHelpIcon = {
    attach: function (context) {
      if (!window.tippy) {
        return;
      }

      // Hide on escape.
      // @see https://atomiks.github.io/tippyjs/v6/plugins/#hideonesc
      //
      // Converted from ES6 to ES5.
      // @see https://babeljs.io/repl/
      var hideOnEsc = {
        name: 'hideOnEsc',
        defaultValue: true,
        fn: function fn(_ref) {
          var hide = _ref.hide;

          function onKeyDown(event) {
            if (event.keyCode === 27) {
              hide();
            }
          }

          return {
            onShow: function onShow() {
              document.addEventListener('keydown', onKeyDown);
            },
            onHide: function onHide() {
              document.removeEventListener('keydown', onKeyDown);
            }
          };
        }
      };

      $(context).find('.js-webform-element-help').once('webform-element-help').each(function () {
        var $link = $(this);

        $link.on('click', function (event) {
          // Prevent click from toggling <label>s wrapped around help.
          event.preventDefault();
        });

        var options = $.extend({
          content: $link.attr('data-webform-help'),
          delay: 100,
          allowHTML: true,
          interactive: true,
          plugins: [hideOnEsc]
        }, Drupal.webform.elementHelpIcon.options);

        tippy(this, options);
      });
    }
  };

})(jQuery, Drupal);
;
/**
 * @file
 * JavaScript behaviors for webforms.
 */

(function ($, Drupal) {

  'use strict';

  /**
   * Attach behaviors to trigger submit button from input onchange.
   *
   * @type {Drupal~behavior}
   *
   * @prop {Drupal~behaviorAttach} attach
   *   Attaches form trigger submit events.
   */
  Drupal.behaviors.webformSubmitTrigger = {
    attach: function (context) {
      $('[data-webform-trigger-submit]').once('webform-trigger-submit').on('change', function () {
        var submit = $(this).attr('data-webform-trigger-submit');
        $(submit).trigger('mousedown');
      });
    }
  };

})(jQuery, Drupal);
;
