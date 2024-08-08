import { makeElementsSameHeight, getCustomArrows } from "./utils/utils";

jQuery(document).ready(function ($) {
    function makeInsightsSameHeight() {
        makeElementsSameHeight($, '.expand__body');
    }

    function createInsightsCarousel() {
        const [prevArrow, nextArrow] = getCustomArrows();
        $(".news__insights__slider").slick({
            slidesToShow: 3,
            infinte: true,
            dots: true,
            arrows: true,
            autoplay: true,
            autoplaySpeed: 4000,
            prevArrow,
            nextArrow,
            responsive: [
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ],
        });
    }

    const { href } = window.location;
    if (href.includes('total-health-management')) {
        makeInsightsSameHeight();
        createInsightsCarousel();
    }
});
