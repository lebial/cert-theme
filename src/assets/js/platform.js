import getNavHeight, { createObserver, handleAutoScroll } from "./utils/utils";
import initPlatform from "./newPlatform";
handleAutoScroll($);

jQuery(document).ready(function ($) {
    const sliderOptions = {
        inifinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
    };

    let platformsData = [];
    let currentIdx = 0;
    let cycleTimer = null;

    function setHeroMarginTop() {
        const { navHeight } = getNavHeight();
        $(".platform-hero").css("margin-top", `${navHeight}px`);
    }

    function handleOptionColapse() {
        $(".submenu__button").on("click", function (e) {
            e.preventDefault();
            const [element, arrow] = $(this).children();
            $(arrow).toggleClass("rotate__arrow");
            $(this).next().toggleClass("platforms__option--open");
            $(this).next().children(":first").toggleClass("platforms__option--open");
        });
    }

    function createQuotesSlider() {
        $(".quotes__slider").slick(sliderOptions);
    }

    function createValidationSlider() {
        $(".validation__slider").slick({ ...sliderOptions, dots: false });
    }

    function revealDataSlideContent() {
        $(".data__slides__content__button").click(function () {
            const parent = $(this).parent();
            parent.toggleClass(".slide__open");
            const isOpen = parent.hasClass(".slide__open");
            const overlay = parent.find(".data__slide__overlay");
            const description = parent.find(".data__slides__content__description");
            // const textHeight = !isOpen ? '40vh' : `${parent.find('.data__slide__text').height()}px`;
            const textHeight = `${parent.find(".data__slide__text").height()}px`;
            const buttonAnimation = !isOpen ? "rotate(0deg)" : "rotate(180deg)";

            overlay.toggle();
            description.css("height", textHeight);
            parent.find("button").css("transform", buttonAnimation);
        });
    }

    function hideArrows() {
        const leftArrow = $(".platforms__button.left");
        const rightArrow = $(".platforms__button.right");
        leftArrow.show();
        rightArrow.show();
        if (!currentIdx) leftArrow.hide();
        if (currentIdx + 1 === platformsData.length) rightArrow.hide();
    }

    function setPlatformsSlideData(idx) {
        const [leftArrow, title, icon, platformDescription, rightArrow] =
            $("#platforms-slide").children();
        const { icon_desktop, text, description } = platformsData[idx];
        title.innerHTML = text;
        icon.firstChild.src = icon_desktop;
        platformDescription.innerHTML = description;
        $(".active__platform").removeClass("active__platform");
        $(`[name="${text}"]`).addClass("active__platform");
        currentIdx = idx;
        // hideArrows();
    }

    function populatePlatformSlide() {
        const data = JSON.parse(
            document.getElementById("platforms-data").innerHTML
        );
        const acceleratorData = Object.values(data.platform_1.buttons);
        const nucleusData = Object.values(data.platform_2.buttons);
        const newPlatformsData = [...acceleratorData, ...nucleusData].map(
            (data, idx) => ({ ...data, idx })
        );
        platformsData = newPlatformsData;
        setPlatformsSlideData(0);
    }

    function handleSlideCycle() {
        $(".platforms__button").click(({ currentTarget: { name } }) => {
            const step = name === "platformsNext" ? 1 : -1;
            let idxToUse = currentIdx + step;
            if (name === "platformsPrev" && !currentIdx)
                idxToUse = platformsData.length - 1;
            if (name === "platformsNext" && currentIdx + 1 === platformsData.length)
                idxToUse = 0;
            setPlatformsSlideData(idxToUse);
            clearInterval(cycleTimer);
        });
    }

    function handlePlatformClick() {
        $(".platforms__icon__button").click(({ currentTarget }) => {
            const name = $(currentTarget.lastChild.firstChild).attr("name");
            const nextPlatform = platformsData.find(
                (platform) => platform.text === name
            );
            setPlatformsSlideData(nextPlatform.idx);
            clearInterval(cycleTimer);
        });
    }

    function handlePlatformScrollObserver() {
        const options = {
            // rootMargin: "-55% 0px 0px 0px",
            rootMargin: "-80% 0px 0px 0px",
        };
        const platformButtons = document.querySelector(
            ".platforms__buttons__animated"
        );
        // const platformsSlide = document.getElementById('platforms-slide');

        const obsvElement = document.querySelector(".platforms__down__arrow__container-animation");

        const observer = createObserver(([entry]) => {
            if (entry.isIntersecting) {
                $(platformButtons).removeClass("platform-slide-animate");
                $(".platforms__down__arrow").removeClass("opacity-0");
                $('.platforms__slider__container ').addClass('opacity-0');
            } else {
                $(".platforms__down__arrow").addClass("opacity-0");
                $(platformButtons).addClass("platform-slide-animate");
                $('.platforms__slider__container ').removeClass('opacity-0');
            }
        }, options);

        observer.observe(obsvElement);
    }

    function addArrowToSlider(slider) {
        $(`${slider}-prev`).click(function () {
            $(slider).slick("slickPrev");
        });
        $(`${slider}-next`).click(function () {
            $(slider).slick("slickNext");
        });
    }

    function changeValidationHeader() {
        const words = ["Security & Infrastructure", "Validation", "Governance"];
        const element = $(".validation__headline");
        $(".validation__slider").on(
            "beforeChange",
            function (event, slick, currentSlide, nextSlide) {
                element.removeClass("aos-animate");
                element.removeClass("change-red");
                element.text(words[nextSlide]);
                setTimeout(() => {
                    element.addClass("change-red");
                }, 500);
            }
        );
    }

    function setCycle() {
        if (currentIdx + 1 === platformsData.length)
            return setPlatformsSlideData(0);
        return setPlatformsSlideData(currentIdx + 1);
    }

    function handleAutoCycle() {
        cycleTimer = setInterval(setCycle, 20000);
    }

    //proven solution animation

    function observeSolutionsData() {
        const options = {
            // threshold: 0.5,
            // rootMargin: "-45% 0px 0px 0px",
        };
        const sections = document.querySelectorAll(".proven__solution__data");
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(({ target, isIntersecting }) => {
                $(target).toggleClass("show__proven__data", isIntersecting);
            });
        }, options);
        sections.forEach((section) => observer.observe(section));
    }

    function hasDecimals(number) {
        return number - Math.floor(number);
    }

    function calculateValue(number, idx) {
        return number + idx;
    }

    function calculateDecreaseValue(number, idx) {
        return number - idx;
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
            element.textContent = hasDecimals(endNumber) ?
                calculateDecimals(idx) :
                idx;
            setTimeout(() => {
                recursiveIncrease(calculateValue(multiplier, idx), endNumber, element);
            }, speed);
        }
    }

    function recursiveDecrease(idx = 270, goalNumber, element) {
        const newGoalNumber = hasDecimals(goalNumber) ? goalNumber * 10 : goalNumber;
        if (idx >= newGoalNumber) {
            const { multiplier, speed } = getAnimationMultiplier(goalNumber);
            element.textContent = hasDecimals(goalNumber) ? calculateDecimals(idx) : idx;
            setTimeout(() => {
                recursiveDecrease(calculateDecreaseValue(idx, multiplier), goalNumber, element)
            }, speed)
        }
    }

    function animateNumberIncrease(el, reverse) {
        const endNumber = +$(el).attr("data-number");
        if (reverse) return recursiveDecrease(180, endNumber, el)
        return recursiveIncrease(0, endNumber, el);
    }

    function handleProvenNumbersIncreaseAnimation() {
        const observer = new MutationObserver((mutations, mut) => {
            mutations.forEach(({ target }) => {
                if (target.className.includes('numberAnimationHook') && !target.className.includes('hookAnimated')) {
                    const reverseAnimate = target.attributes['data-reverse'];
                    const animatedNumbers = $(target).find('.increase__number');
                    $(target).addClass('hookAnimated');
                    for (let i = 0; i <= animatedNumbers.length - 1; i++) {
                        animateNumberIncrease(animatedNumbers[i], reverseAnimate);
                    }
                }
            })
        });
        const numberElements = document.querySelectorAll(".slide__container__hook");
        numberElements.forEach((element) => observer.observe(element, { attributes: true }));
    }

    function startVideoAtSpecificTime() {
        const video = document.getElementById("HomeBackgroundVideo");

        video.oncanplaythrough = function () {
            video.play();
        };

        video.currentTime = 3;

        const source = document.createElement('source');
        source.setAttribute('src', 'movie.mp4');
        source.setAttribute('type', 'video/mp4');
        video.appendChild(source);
    }

    if (window.location.href.includes("platform")) {
        // setHeroMarginTop();
        handleOptionColapse();
        revealDataSlideContent();
        createValidationSlider();
        // populatePlatformSlide();
        handleSlideCycle();
        handlePlatformClick();
        addArrowToSlider(".validation__slider");
        addArrowToSlider(".quotes__slider");
        addArrowToSlider(".validation__slider");
        // handleAutoCycle();
        changeValidationHeader();
        // observeSolutionsData();
        handleProvenNumbersIncreaseAnimation();
        createQuotesSlider();
        // calculateOptionsGraphicHeight();
        // handlePlatformScrollObserver();
        startVideoAtSpecificTime();
    }
    (window.location.href.includes("platform") || window.location.href.includes("logistics")) && initPlatform($);
});

// handleAutoCycle();
// removeLastLineAnimation();
// setHeroMarginTop();
// populatePlatformSlide();
// calculateOptionsGraphicHeight();
// handlePlatformScrollObserver();