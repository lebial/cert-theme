import getNavHeight, { addArrowToSlider, makeElementsSameHeight, getCustomArrows } from "./utils/utils";

jQuery(document).ready(function ($) {
  function setImageMargin() {
    const { navHeight } = getNavHeight();
    $(".au__heading__image").css("margin-top", `${navHeight}px`);
  }

  // function createTimelineSlider() {
  //   $(".au__timeline__nav").slick({
  //     variableWidth: true,
  //     centerMode: true,
  //     dots: false,
  //     infinite: false,
  //     slidesToShow: 3,
  //     focusOnSelect: true,
  //     asNavFor: ".au__timeline__slider",
  //     responsive: [
  //       {
  //         breakpoint: 600,
  //         slidesToShow: 3,
  //       },
  //     ],
  //   });
  //   $(".au__timeline__slider").slick({
  //     slidesToShow: 1,
  //     slidesToScroll: 1,
  //     infinite: false,
  //     arrows: false,
  //     fade: true,
  //     draggable: false,
  //     asNavFor: ".au__timeline__nav",
  //   });
  // }

  // function createCareersSlider() {
  //   $(".au__careers__slider").slick({
  //     dots: false,
  //     infinite: true,
  //     slidesToShow: 1,
  //   });
  // }

  function createStoryCarousel() {
    $(".au__story__slider").slick({
      slidesToShow: 1,
      infinte: false,
      dots: true,
      arrows: false,
      autoplay: true,
      autoplaySpeed: 4000,
    });
  }

  function handleOurTeamOptionCollapseOnChange() {
    $('.member__description').addClass('line-clamp-3');
    $('.member__description').css('height', '95px');
    $('.member__description').removeClass('team__member--expanded');
    $('.member__mobile__button').text('Read More');
  }

  function handleStoryArrowClick() {
    const slider = ".au__story__slider";
    $(`${slider}-next`).click(() => $(slider).slick('slickNext'));
    $(`${slider}-prev`).click(() => $(slider).slick('slickPrev'));
  }

  function handleOurTeamExpand() {
    $('.team__member__button').click(function () {

      const viewPort = $(this).hasClass('member__mobile__button') ? 'mobile' : 'desktop';
      const parentElement = $(this).parent();
      const descriptionContainer = viewPort === 'mobile' ? parentElement.parent().find('.member__description') : parentElement.prev();
      const isDescriptionExpanded = descriptionContainer.hasClass('team__member--expanded');
      const descriptionTotalHeight = `${$(descriptionContainer.find('span')).height() + 10}px`;
      const constants = {
        desktop: {
          toggle: 'line-clamp-2',
          height: isDescriptionExpanded ? '65px' : descriptionTotalHeight,
        },
        mobile: {
          toggle: 'line-clamp-3',
          height: isDescriptionExpanded ? '95px' : descriptionTotalHeight,
        }
      }
      const { toggle, height } = constants[viewPort];
      const rotate = isDescriptionExpanded ? '0deg' : '180deg';
      descriptionContainer.toggleClass(`team__member--expanded ${toggle}`);
      descriptionContainer.animate({ height }, 300, "linear");
      if (viewPort === 'desktop') return $(this).animate({ rotate }, 300, "linear");
      const text = !isDescriptionExpanded ? 'Read Less' : 'Read More';
      $(this).text(text);
    });
  }

  function createOurTeamSlider() {
    $('.our__team__slider').on('init', function () {
      $('.our__team__slider-prev').css('visibility', 'hidden');
    });

    $('.our__team__slider').slick({
      slidesToShow: 1,
      infinite: false,
      dots: true,
      slidesToScroll: 1,
    });


    $('.our__team__slider').on('afterChange', function (event, slick, currentSlide) {
      if (currentSlide === 0) {
        $('.our__team__slider-prev').css('visibility', 'hidden');
      } else if (currentSlide === slick.slideCount - 1) {
        $('.our__team__slider-next').css('visibility', 'hidden');
      } else {
        $('.our__team__slider-prev').css('visibility', 'visible');
        $('.our__team__slider-next').css('visibility', 'visible');
      }
    });
  }

  function makeSlidesSameHeight() {
    makeElementsSameHeight($, '.au__quote__slide');
  }

  function handleSwipeEvent() {
    $('.our__team__slider').on('swipe', function (event, slick, direction) {
      handleOurTeamOptionCollapseOnChange();
    })
  }

  function createHeaderSliders() {
    $('.copy-carousel').slick({
      autoplay: true,
      autoplaySpeed: 4000,
      slidesToShow: 1,
      slidesToScroll: 1,
      asNavFor: '.images-carousel',
      dots: true,
      appendDots: '.carousel-dots',
      customPaging: function(slider, i) {
          return '<button>' + (i + 1) + '</button>';
      },
      fade: true,
    });

    $('.images-carousel').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: '.copy-carousel',
        arrows: false,
    });
  }

  function hideThumbnailText() {
    const video = document.getElementById('healthcareInnovation');
    const texts = document.querySelectorAll('.thumbnail__text');
    const videoContainer = document.getElementById('videoContainer')

    texts.forEach((item) => {
      video.addEventListener('play', function() {
        item.style.display = 'none';
      });

      video.addEventListener('pause', function() {
        item.style.display = 'none';
        videoContainer.style.backgroundColor = 'rgba(0, 0, 0, 0.5)';
      });

      video.addEventListener('ended', function() {
        item.style.display = 'flex';
        item.style.flexDirection = 'column';
        videoContainer.style.backgroundColor = 'transparent';
      });
    });
  }

  function executiveCarousel() {
    const [prevArrow, nextArrow] = getCustomArrows();

    $('.executive__carousel').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: true,
      arrows: true,
      nextArrow,
      prevArrow,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        }
      ]
    });
  }

  if (window.location.href.includes("about-us")) {
    executiveCarousel();
    createHeaderSliders();
    setImageMargin();
    // createTimelineSlider();
    // addArrowToSlider(".au__timeline__nav");
    // createCareersSlider();
    addArrowToSlider(".au__careers__slider");
    makeSlidesSameHeight();
    createStoryCarousel();
    handleStoryArrowClick();
    handleOurTeamExpand();
    createOurTeamSlider();
    addArrowToSlider(".our__team__slider", handleOurTeamOptionCollapseOnChange);
    handleSwipeEvent();
    hideThumbnailText();
  }
});
