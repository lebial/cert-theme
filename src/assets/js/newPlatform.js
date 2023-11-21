function initPlatform($) {
  function createHighlightSlider() {
    $('.highlight__slider').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      infinite: true,
      dots: true,
      arrows: false,
    });
  }

  createHighlightSlider();
}

export default initPlatform;