import { makeElementsSameHeight } from "./utils/utils";

jQuery(document).ready(function ($) {
    function makeInsightsSameHeight() {
        makeElementsSameHeight($, '.expand__body');
    }

    function createInsightsCarousel() {
        $(".news__insights__slider").slick({
          slidesToShow: 1,
          infinte: true,
          dots: true,
          arrows: false,
          autoplay: true,
          autoplaySpeed: 4000,
        });
    }
    
    function handleInsightsArrowClick() {
        const slider = ".news__insights__slider";
        $(`${slider}-next`).click(() => $(slider).slick("slickNext"));
        $(`${slider}-prev`).click(() => $(slider).slick("slickPrev"));
    }

    const { href } = window.location;
    if (href.includes('total-health-management')) {
        makeInsightsSameHeight();
        createInsightsCarousel();
        handleInsightsArrowClick();
    }
});
