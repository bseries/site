/*!
 * Copyright 2017 Atelier Disko. All rights reserved.
 *
 * Use of this source code is governed by a BSD-style
 * license that can be found in the LICENSE file.
 */

require([
  'jquery',
  'domready!'
], function(
  $
) {
  'use strict';

  // Slideshow
  $('.slideshow').each(function() {
    var $el = $(this);
    $el.addClass('swiper-wrapper');

    var $container = $el.parents('.slideshow-container');
    $container.addClass('swiper-container');

    $el.find('img').addClass('swiper-slide');

    $container.append('<div class="swiper-pagination"></div>');
    require(['swiper'], function() {
      var swiper = new Swiper($container.get(0), {
        pagination: '.swiper-pagination',
        slidesPerView: 'auto',
        loop: false,
        centeredSlides: true,
        paginationClickable: false,
        spaceBetween: 30,
        grabCursor: true,
        slideToClickedSlide: true,
        onImagesReady: function() {
          $container.removeClass('loading');
        }
      });
    });
  });
});
