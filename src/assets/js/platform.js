import getNavHeight from './utils/utils';

jQuery(document).ready(function($) {

    const sliderOptions = {
        inifinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
    }

    let platformsData = [];
    let currentIdx = 0;
    let cycleTimer = null;

    function setHeroMarginTop() {
        const { navHeight } = getNavHeight();
        $('.platform-hero').css('margin-top', `${navHeight}px`);
    };

    function handleOptionColapse() {
        $('.submenu__button').on('click', function(e) {
            e.preventDefault();
            const [element, arrow] = $(this).children();
            $(arrow).toggleClass('rotate__arrow');
            $(this).next().toggleClass('platforms__option--open');
            $(this).next().children(':first').toggleClass('platforms__option--open');
        });
    };

    function createQuotesSlider() {
        $('.quotes__slider').slick(sliderOptions);
    }

    function createValidationSlider() {
        $('.validation__slider').slick({...sliderOptions, dots: true });
    }

    function revealDataSlideContent() {
        $('.data__slides__content__button').click(function() {
            const parent = $(this).parent();
            parent.toggleClass('.slide__open');
            const isOpen = parent.hasClass('.slide__open');
            const overlay = parent.find('.data__slide__overlay');
            const description = parent.find('.data__slides__content__description');
            // const textHeight = !isOpen ? '40vh' : `${parent.find('.data__slide__text').height()}px`;
            const textHeight = `${parent.find('.data__slide__text').height()}px`;
            const buttonAnimation = !isOpen ? 'rotate(0deg)' : 'rotate(180deg)';

            overlay.toggle();
            description.css('height', textHeight);
            parent.find('button').css('transform', buttonAnimation);

        });
    }

    function hideArrows() {
        const leftArrow = $('.platforms__button.left');
        const rightArrow = $('.platforms__button.right');
        leftArrow.show();
        rightArrow.show();
        if (!currentIdx) leftArrow.hide();
        if (currentIdx + 1 === platformsData.length) rightArrow.hide();
    }

    function setPlatformsSlideData(idx) {
        const [leftArrow, title, icon, platformDescription, rightArrow] = $('#platforms-slide').children();
        const { icon_desktop, text, description } = platformsData[idx];
        title.innerHTML = text;
        icon.firstChild.src = icon_desktop;
        platformDescription.innerHTML = description;
        $('.active__platform').removeClass('active__platform');
        $(`[name="${text}"]`).addClass('active__platform');
        currentIdx = idx;
        hideArrows();
    }

    function populatePlatformSlide() {
        const data = JSON.parse(document.getElementById('platforms-data').innerHTML);
        const acceleratorData = Object.values(data.platform_1.buttons);
        const nucleusData = Object.values(data.platform_2.buttons);
        const newPlatformsData = [...acceleratorData, ...nucleusData].map((data, idx) => ({...data, idx }));
        platformsData = newPlatformsData;
        setPlatformsSlideData(0);
    }


    function handleSlideCycle() {
        $('.platforms__button').click(({ currentTarget: { name } }) => {
            const step = name === 'platformsNext' ? 1 : -1;
            const idxToUse = currentIdx + step;
            setPlatformsSlideData(idxToUse);
            if (name === 'platformsPrev' && !currentIdx) $(this).hide();
            if (name === 'platformsNext' && currentIdx + 1 === platformsData.length) $(this).hide();
        });
    }

    function handlePlatformClick() {
        $('.platforms__icon__button').click(({ currentTarget }) => {
            const name = $(currentTarget.lastChild.firstChild).attr('name');
            const nextPlatform = platformsData.find(platform => platform.text === name);
            setPlatformsSlideData(nextPlatform.idx);
        })
    }

    function addArrowToSlider() {
        $('.slider-prev').click(function() {
            $('.validation__slider').slick('slickPrev');
        });
        $('.slider-next').click(function() {
            $('.validation__slider').slick('slickNext');
        });
    }

    function setCycle() {
        if (currentIdx + 1 === platformsData.length) return setPlatformsSlideData(0);
        return setPlatformsSlideData(currentIdx + 1);
    }

    function handleHoverStop(selector) {
        $(selector).hover(function() {
            clearInterval(cycleTimer);
        }, function() {
            cycleTimer = setInterval(setCycle, 5000);
        });
    }

    function handleAutoCycle() {
        cycleTimer = setInterval(setCycle, 5000);
        handleHoverStop('.platforms__icon__button');
        handleHoverStop('#platforms-slide');
    };

    if (window.location.href.includes('platform')) {
        setHeroMarginTop();
        handleOptionColapse();
        revealDataSlideContent();
        createValidationSlider();
        populatePlatformSlide();
        handleSlideCycle();
        handlePlatformClick();
        addArrowToSlider();
        handleAutoCycle();
    }
});