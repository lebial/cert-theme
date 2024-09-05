import { makeElementsSameHeight, getCustomArrows } from "./utils/utils";

jQuery(document).ready(function ($) {
    function makeInsightsSameHeight() {
        makeElementsSameHeight($, '.cards__container .resources_video_card .expand__body');
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

    const options = ['total-health-management', 'measurement-benchmarking', 'network-composition-care-delivery', 'network-reimbursement-cost-protection'];
    const { href } = window.location;
    if (options.some(el => href.includes(el))) {
        makeInsightsSameHeight();
        createInsightsCarousel();
    }
});
