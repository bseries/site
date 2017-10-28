/*!
 * Copyright 2017 Atelier Disko. All rights reserved.
 *
 * Use of this source code is governed by a BSD-style
 * license that can be found in the LICENSE file.
 */

require([
  'domready!'
], function() {
  'use strict';

  let hasNativeScroll = 'scrollBehavior' in document.documentElement.style;
  if (hasNativeScroll) {
    let scrollHandler = function(ev) {
      ev.preventDefault();
      document.querySelector(this.hash)
        .scrollIntoView({behavior: 'smooth'});
    };
    // Unfortunately a[href^=#] is not a valid selector.
    for (let el of document.querySelectorAll('.hero__text a')) {
      // Check for local anchors, el.href returns full URL.
      if (!el.getAttribute('href').startsWith('#')) {
        continue;
      }
      el.addEventListener('click', scrollHandler);
    }
  }
});

