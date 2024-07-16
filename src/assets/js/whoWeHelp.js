import { getParams, initNumberanimation } from "./utils/utils";

jQuery(document).ready(function ($) {

    function handleOptionClick() {
        $('.our__approach__button').click(function () {
            $('.option__content__container').hide();
            $(`.option__content__container[name="${this.name}"]`).fadeIn(400);
            $('.our__approach__button').removeClass('opacity-100').addClass('opacity-50');
            $(this).removeClass('opacity-50').addClass('opacity-100');
        });
    }
    function handleOptionsInit() {
        const params = getParams();
        let btn = params.get('btn') ?? 0;
        const button = document.querySelectorAll('.our__approach__button')[+btn];
        $(button).click();
    }

    function addSpaceOnContactUs() {
        $('section').last().css('min-height: auto');
    }

    $('.who-we-help-slider').on('init', function (slick) {
        debugger;
    });

    function createHeroSlider() {
        $('.who-we-help-slider').slick({
            infinite: true,
        });
    }

    const { location: { href } } = window;
    if (href.includes("who-we-help")) {
        createHeroSlider();
        handleOptionClick();
        handleOptionsInit();
        addSpaceOnContactUs();
    }
});
