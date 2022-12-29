import { waitForElement, addArrowToSlider } from "./utils/utils";

jQuery(document).ready(function ($) {
    function setVideoHeight() {
        waitForElement("#homepageVideo").then((videoElement) => {
            const videoHeight = videoElement.offsetHeight;
            $(".home__video__overlay").css("height", `${videoHeight + 5}px`);
        });
    }

    function handlePlayClick() {
        $('.hero__play__button').click(function () {
            $(".video__overlay").toggle();
            $("#homepageVideo").get(0).play();
        });
    }

    function handleIosNativePlayerQuit() {
        $('video').bind('webkitendfullscreen', function () {
            $('#homepageHeroVideo')[0].webkitExitFullScreen();
            $("#homepageVideoModal").hide();
            document.querySelectorAll('video').forEach(vid => vid.pause());
        });
    }

    function handleVidModalClose() {
        const closeButton = document.querySelector('.home__video__modal__close');
        closeButton.addEventListener('click', () => {
            $("#homepageVideoModal").hide();
            document.querySelectorAll('video').forEach(vid => vid.pause());
        })
    }

    function createBucketSlider() {
        $(".bucket__slider").slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
        });
    }

    function showSuperChargeText() {
        $('#superChargeHomePage').removeClass('invisible');
    }

    function addNewTabOnScheduleMenuButton() {
        const menuItems = $('#menu-main-menu').children();
        const scheduleButton = menuItems[menuItems.length - 1];
        const link = $(scheduleButton).children();
        const careers = document.querySelectorAll('a[href*="silk"');
        const contactUs = document.querySelector('a[href*="contact-us-now"');
        $(link).attr('target', '_blank');
        $(link).attr('rel', 'noopener noreferrer');
        $(contactUs).attr('target', '_blank');
        $(contactUs).attr('rel', 'noopener noreferrer');
        careers.forEach(element => {
            $(element).attr('target', '_blank');
            $(element).attr('rel', 'noopener noreferrer');
        });
    }

    window.onload = setVideoHeight;
    setVideoHeight();
    handlePlayClick();
    $(window).resize(setVideoHeight);
    createBucketSlider();
    handleIosNativePlayerQuit();
    addArrowToSlider(".insights-carousel");
    addArrowToSlider(".bucket__slider");
    addNewTabOnScheduleMenuButton();
    handleVidModalClose();
    showSuperChargeText();
});