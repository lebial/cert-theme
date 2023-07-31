jQuery(document).ready(function ($) {

    function createGrowBookCarousel() {
        $('.grow_book_slider').slick({
            slidesToShow: 1,
            infinte: true,
            dots: true,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 4000,
        });
    }

    function removeCaseStudyImgMaxSize() {
        $('.case__study__image__container').removeClass('max-w-xs');
        $('#form_scheduledemoform').addClass('government__schedule__form');
        // icons fix
        const mobileSvgOPtion = document.querySelectorAll('.option__button');
        mobileSvgOPtion.forEach(option => {
            $(option).addClass('government__option__button');
            $(option).addClass('government__mobile__option__svg');
        });
    }

    function addStickyToFormImg() {
        const imageContainer = $('.case__study__form');
        const floatingImage = imageContainer.find('div');
        imageContainer.removeClass('flex');
        floatingImage.addClass('sticky');
        floatingImage.css('top', '25%');
    }

    const { href } = window.location;
    if (href.includes("health-plans") || href.includes('health-systems') || href.includes('solution-vendors') || href.includes('government')) {
        createGrowBookCarousel();
    }

    if (href.includes('government')) {
        removeCaseStudyImgMaxSize();
        addStickyToFormImg();
    }

});