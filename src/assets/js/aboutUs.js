import getNavHeight from './utils/utils';

jQuery(document).ready(function($) {

  function setImageMargin() {
    const { navHeight } = getNavHeight();
    $('.au__heading__image').css('margin-top', `${navHeight}px`);
  }

  if (window.location.href.includes('who-we-are')) {
    setImageMargin();
  }
});
