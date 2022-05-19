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

    window.onload = setVideoHeight;

    setVideoHeight();
    handlePlayClick();
    $(window).resize(setVideoHeight);
    createBucketSlider();
    handleIosNativePlayerQuit();
    addArrowToSlider(".insights-carousel");
    addArrowToSlider(".bucket__slider");
});