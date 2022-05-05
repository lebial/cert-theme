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
            clearInterval(cycleTimer);
            if (name === 'platformsPrev' && !currentIdx) $(this).hide();
            if (name === 'platformsNext' && currentIdx + 1 === platformsData.length) $(this).hide();
        });
    }

    function handlePlatformClick() {
        $('.platforms__icon__button').click(({ currentTarget }) => {
            const name = $(currentTarget.lastChild.firstChild).attr('name');
            const nextPlatform = platformsData.find(platform => platform.text === name);
            setPlatformsSlideData(nextPlatform.idx);
            clearInterval(cycleTimer);
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
            cycleTimer = setInterval(setCycle, 20000);
        });
    }

    function handleAutoCycle() {
        cycleTimer = setInterval(setCycle, 20000);
    };

    //proven solution number animation

    function hasDecimals(number) {
        return (number - Math.floor(number));
    }

    function calculateValue(number, idx) {
        return number + idx;
    }

    function calculateDecimals(idx) {
        if (idx === 0) return 1 / 10;
        return idx / 10;
    }

    function getAnimationMultiplier(endNumber) {
        let multiplier = 1;
        if (endNumber >= 200) multiplier = endNumber / 50;
        return { multiplier, speed: 20 };
    }

    function recursiveIncrease(idx, endNumber, element) {
        const newEndNumber = hasDecimals(endNumber) ? endNumber * 10 : endNumber;
        if (idx <= newEndNumber) {
            const { multiplier, speed } = getAnimationMultiplier(endNumber);
            element.textContent = hasDecimals(endNumber) ? calculateDecimals(idx) : idx;
            setTimeout(() => {
                recursiveIncrease(calculateValue(multiplier, idx), endNumber, element);
            }, speed);
        }
    }

    function animateNumberIncrease(el) {
        const endNumber = +$(el).attr('data-number');
        recursiveIncrease(0, endNumber, el);
    }


    function handleProvenNumbersIncreaseAnimation() {
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => (entry.isIntersecting) ? animateNumberIncrease(entry.target) : null)
        });
        const numberElements = document.querySelectorAll('.increase__number');
        numberElements.forEach(element => observer.observe(element));
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
        handleProvenNumbersIncreaseAnimation();
    }
});