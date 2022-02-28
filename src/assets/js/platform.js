import getNavHeight from './utils/utils';

jQuery(document).ready(function($) {
  function setHeroMarginTop() {
    const {navHeight} = getNavHeight();
    $('.platform-hero').css('margin-top', `${navHeight}px`);
  }
  function handleOptionColapse() {
    $('.submenu__button').on('click', function (e) { 
      e.preventDefault();
      const [element, arrow] = $(this).children();
      $(arrow).toggleClass('rotate__arrow');
      $(this).next().toggleClass('platforms__option--open');
      $(this).next().children(':first').toggleClass('platforms__option--open');
    });
  }

  if (window.location.href.includes('platform') ) {
    setHeroMarginTop();
    handleOptionColapse();
    console.log('its working');
  }
});