import getNavHeight from './utils/utils';

jQuery(document).ready(function($) {
  function setHeroMarginTop() {
    const {navHeight} = getNavHeight();
    $('.platform-hero').css('margin-top', `${navHeight}px`);
  };

  function handleOptionColapse() {
    $('.submenu__button').on('click', function (e) { 
      e.preventDefault();
      const [element, arrow] = $(this).children();
      $(arrow).toggleClass('rotate__arrow');
      $(this).next().toggleClass('platforms__option--open');
      $(this).next().children(':first').toggleClass('platforms__option--open');
    });
  };

  function createQuotesSlider() {
    $('.quotes__slider').slick({
      inifinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
    });
  }

  function revealDataSlideContent() {
    $('.data__slides__content__button').click(function() {
      const parent = $(this).parent();
      const isOpen = parent.hasClass('.slide__open');
      const overlay = parent.find('.data__slide__overlay');
      const description = parent.find('.data__slides__content__description');
      const textHeight = isOpen ? '40vh' : `${parent.find('.data__slide__text').height()}px`;
      const buttonAnimation = isOpen ? 'rotate(0deg)' : 'rotate(180deg)';

      overlay.toggle();
      description.css('height', textHeight);
      parent.find('button').css('transform', buttonAnimation);

      parent.toggleClass('.slide__open');
    });
  }

  if (window.location.href.includes('platform') ) {
    setHeroMarginTop();
    handleOptionColapse();
    revealDataSlideContent();
  }
});