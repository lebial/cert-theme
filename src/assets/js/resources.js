
jQuery(document).ready(function ($) {

  function createResourcesHeroVideoSlider() {
    $('.resources__video__slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: true,
    });
  }

  const { href } = window.location;
  if (href.includes('resources')) {
    createResourcesHeroVideoSlider();
  }
});
