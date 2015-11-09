(function ($, window, document, undefined) {

  'use strict';

  $(function () {

    // PARALLAX
    $('#hero .slider').stellar({
      horizontalScrolling: true,
      verticalScrolling: false,
      positionProperty: 'position',
      parallaxBackgrounds: false,
      hideDistantElements: false,
      responsive: true
    });

    $.stellar({
      horizontalScrolling: false,
      verticalScrolling: true,
      positionProperty: 'position',
      parallaxBackgrounds: false,
      hideDistantElements: false,
      responsive: false,
      verticalOffset: 0,
      horizontalOffset: 0
    });

  });

})(jQuery, window, document);
