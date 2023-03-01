import getNavHeight, { addArrowToSlider } from "./utils/utils";

jQuery(document).ready(function ($) {
  function setImageMargin() {
    const { navHeight } = getNavHeight();
    $(".au__heading__image").css("margin-top", `${navHeight}px`);
  }

  function createTimelineSlider() {
    $(".au__timeline__nav").slick({
      variableWidth: true,
      centerMode: true,
      dots: false,
      infinite: false,
      slidesToShow: 3,
      focusOnSelect: true,
      asNavFor: ".au__timeline__slider",
      responsive: [
        {
          breakpoint: 600,
          slidesToShow: 3,
        },
      ],
    });
    $(".au__timeline__slider").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: false,
      arrows: false,
      fade: true,
      draggable: false,
      asNavFor: ".au__timeline__nav",
    });
  }

  function createCareersSlider() {
    $(".au__careers__slider").slick({
      dots: false,
      infinite: true,
      slidesToShow: 1,
    });
  }

  function createStoryCarousel() {
    $(".au__story__slider").slick({
      slidesToShow: 1,
      infinte: true,
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
      const descriptionContainer = $(this).parent().prev();
      const isDescriptionExpanded = descriptionContainer.hasClass('team__member--expanded');
      const descriptionTotalHeight = `${$(descriptionContainer.children()[0].children[0]).height() + 10}px`;
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
    $('.our__team__slider').slick({
      slidesToShow: 1,
      dots: true,
      slidesToScroll: 1,
    });
  }

  if (window.location.href.includes("about-us")) {
    setImageMargin();
    createTimelineSlider();
    addArrowToSlider(".au__timeline__nav");
    createCareersSlider();
    addArrowToSlider(".au__careers__slider");
    createStoryCarousel();
    handleStoryArrowClick();
    handleOurTeamExpand();
    createOurTeamSlider();
    addArrowToSlider(".our__team__slider", handleOurTeamOptionCollapseOnChange);
  }
});
