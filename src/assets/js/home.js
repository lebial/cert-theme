import { waitForElement, addArrowToSlider } from "./utils/utils";

jQuery(document).ready(function($) {
    function setVideoHeight() {
        waitForElement("#homepageVideo").then((videoElement) => {
            const videoHeight = videoElement.offsetHeight;
            $(".video__overlay").css("height", `${videoHeight + 5}px`);
        });
    }

    function handlePlayClick() {
        $('.hero__button-modal').click(function() {
            $(".video__overlay").toggle();
            $("#homepageVideo").get(0).play();
        });
    }

    function handleIosNativePlayerQuit() {
        $('video').bind('webkitendfullscreen', function() {
            $('#homepageHeroVideo')[0].webkitExitFullScreen();
            $("#homepageVideoModal").hide();
        });
    }

    function createBucketSlider() {
        $(".bucket__slider").slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
        });
    }
    function addNewTabOnScheduleMenuButton() {
        const menuItems = $('#menu-main-menu').children();
        const scheduleButton = menuItems[menuItems.length - 1];
        const link = $(scheduleButton).children();
        const careers = document.querySelectorAll('a[href*="silk"');
        $(link).attr('target', '_blank');
        $(link).attr('rel', 'noopener noreferrer');
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
    addNewTabOnScheduleMenuButton()
});