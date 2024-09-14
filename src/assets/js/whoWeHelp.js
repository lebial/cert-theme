import { animateCounter, getCustomArrows, getParams, initNumberanimation } from "./utils/utils";

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


    function handleDialAnimationSync(currentSlide) {
        const counterAnimation = currentSlide.find('.counter__animation');
        const pointer = counterAnimation.siblings(['#pointer']);
        animateCounter(0, 100, counterAnimation);
        $(pointer).on('animationend', function (evt) {
            const animClass = 'dial__animation--animate';
            const svg = $(this).siblings()[0];
            $(svg).removeClass(animClass);
            setTimeout(() => {
                $(svg).addClass(animClass);
                animateCounter(0, 100, counterAnimation);
            }, 500);
        });
    }

    const aniamtionExtraSteps = {
        'dial__animation': handleDialAnimationSync,
    }

    $('.who-we-help-slider').on('init', function (slick) {
        const currentSlide = $(this).find('.slick-current');
        const animation = currentSlide.find('.hero__animation').attr('name');
        currentSlide.find('svg').addClass(`${animation}--animate`);
        const extraStep = aniamtionExtraSteps[animation];
        if (extraStep) extraStep(currentSlide);
    });

    $('.who-we-help-slider').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
        const slides = slick.$slides;
        const currentAnimation = $(slides[currentSlide]).find('.hero__animation');
        const currentName = currentAnimation.attr('name');
        $(currentAnimation).find('svg').removeClass(`${currentName}--animate`);
        const nextAnimation = $(slides[nextSlide]).find('.hero__animation')
        const nextName = nextAnimation.attr('name');
        $(nextAnimation).find('svg').addClass(`${nextName}--animate`);
        const extraStep = aniamtionExtraSteps[nextName];
        if (extraStep) extraStep($(slides[nextSlide]));

    });

    function createHeroSlider() {
        $('.who-we-help-slider').slick({
            infinite: true,
            dots: true,
            // autoplay: true,
            // autoplay: false,
            autoplaySpeed: 7300
        });
    }

    function createResourcesSlider() {
        const [nextArrow, prevArrow] = getCustomArrows();
        const options = {
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
        }

        $('.resources__container').slick(options);
    }

    function makeInsightsSameHeight() {
        makeElementsSameHeight($, '.cards__container .resources_video_card .expand__body');
    }

    const allowedPages = ['health-plans', 'health-systems', 'benefit-advisors', 'employers', 'government', 'solution-vendors'];
    const { href } = window.location;
    if (allowedPages.some(el => href.includes(el))) {
        createHeroSlider();
        handleOptionClick();
        handleOptionsInit();
        addSpaceOnContactUs();
        createResourcesSlider();
        makeInsightsSameHeight();
    }
});
