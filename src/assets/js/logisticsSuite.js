jQuery(document).ready(function ($) {
  const insightsSliderSelector = '.data__processing__slider';
  const nextArrow = `
      <button type="button" class="slick-next custom__slick-arrow">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="69" viewBox="0 0 40 69" fill="none">'
            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.4664 1.51669C5.09958 0.149872 2.88351 0.149872 1.51669 1.51669C0.149872 2.88358 0.149872 5.09964 1.51669 6.46646L29.7027 34.6525L1.47482 62.8805C0.108002 64.2473 0.108002 66.4633 1.47482 67.8302C2.84164 69.1971 5.05771 69.1971 6.42453 67.8302L34.6521 39.6018L39.305 34.9497L39.6018 34.6521L6.4664 1.51669Z" fill="#787878"/>
        </svg>
      </button>`;
  const prevArrow = `
    <button type="button" class="slick-prev custom__slick-arrow">
      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="69" viewBox="0 0 40 69" fill="none">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M33.5851 67.8302C34.9519 69.1971 37.168 69.1971 38.5348 67.8302C39.9016 66.4633 39.9016 64.2473 38.5348 62.8805L10.3488 34.6944L38.5767 6.46646C39.9435 5.09964 39.9435 2.88358 38.5767 1.51675C37.2099 0.149872 34.9938 0.149871 33.627 1.51675L5.39945 29.7451L0.746493 34.3972L0.449741 34.6949L33.5851 67.8302Z" fill="#787878"/>
      </svg>
    </button>`;


  function createDataProcessSlider() {
    $(insightsSliderSelector).slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      infinite: true,
      arrows: true,
      nextArrow,
      prevArrow,
      responsive: [
        {
          breakpoint: 700,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        }
      ]
    });
  }

  const cardSelector = '.logistics__point__card';

  function handleOptionClick() {
    $(cardSelector).removeClass('is-card-active');
    $(this).addClass('is-card-active');
  }

  function handleValidationOptionSelect() {
    const cards = document.querySelectorAll(cardSelector);
    cards.forEach(card => $(card).click(handleOptionClick));
  }

  function createMobileSlider() {
    const slider = $('.validation__mobile__slider');
    const breakpoint = 1024;
    const settings = {
      mobileFirst: true,
      dots: false,
      arrows: true,
      nextArrow,
      prevArrow,
      responsive: [
        {
          breakpoint,
          settings: 'unslick',
        }
      ]
    }
    slider.slick(settings);
    slider.on('beforeChange', function (ev, slick, currentSlide, nextSlide) {
      const slides = slick.$slides;
      $(slides[currentSlide]).find('.logistics__point__card').removeClass('is-card-active');
      $(slides[nextSlide]).find('.logistics__point__card').addClass('is-card-active');
    });
  };
  
  function startVideoAtSpecificTime() {
    const video = document.getElementById("HomeBackgroundVideo");

    video.oncanplaythrough = function() {
      video.play();
    };

    video.currentTime = 49;

    const source = document.createElement('source');
    source.setAttribute('src', 'movie.mp4');
    source.setAttribute('type', 'video/mp4');
    video.appendChild(source);
  }

  //function calls;
  const { href } = window.location;
  if (href.includes("logistics")) {
    createDataProcessSlider();
    handleValidationOptionSelect();
    createMobileSlider();
    startVideoAtSpecificTime();
  }

});
