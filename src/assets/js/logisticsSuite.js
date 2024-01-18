import { makeElementsSameHeight } from "./utils/utils";

jQuery(document).ready(function ($) {
    const insightsSliderSelector = '.data__processing__slider';
    const nextArrow = `
        <button type="button" class="slick-next !inline-block">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="69" viewBox="0 0 40 69" fill="none">'
            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.4664 1.51669C5.09958 0.149872 2.88351 0.149872 1.51669 1.51669C0.149872 2.88358 0.149872 5.09964 1.51669 6.46646L29.7027 34.6525L1.47482 62.8805C0.108002 64.2473 0.108002 66.4633 1.47482 67.8302C2.84164 69.1971 5.05771 69.1971 6.42453 67.8302L34.6521 39.6018L39.305 34.9497L39.6018 34.6521L6.4664 1.51669Z" fill="#787878"/>
        </svg>
        </button>`; 
    const prevArrow = `
    <button type="button" class="slick-prev">
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

    function setSlideVisibility() {
      //Find the visible slides i.e. where aria-hidden="false"
      const visibleSlides = $('.slick-slide[aria-hidden="false"]');
      //Make sure all of the visible slides have an opacity of 1
      $(visibleSlides).each(function () {
        $(this).css('opacity', 1);
      });
      //Set the opacity of the first and last partial slides.
      if (visibleSlides.length >= 3) {
        $(visibleSlides).first().prev().animate({ 'opacity': 0 }, 250);
        $($(visibleSlides).get(3)).next().animate({ 'opacity': 0 }, 250);
      }
  
    }

    //function calls;
    const { href } = window.location;
    if (href.includes("logistics")) {
      createDataProcessSlider();
      setSlideVisibility();
    }
    
  });