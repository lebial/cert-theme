import getNavHeight from './utils/utils';

jQuery(document).ready(function($) {
  function setHeroMarginTop() {
    const {navHeight} = getNavHeight();
    $('.platform-hero').css('margin-top', `${navHeight}px`);
  }

  if (window.location.href.includes('platform') ) {
    setHeroMarginTop();
  console.log('its working');
  }
});