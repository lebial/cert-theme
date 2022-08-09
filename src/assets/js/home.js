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

    function handleInputChange() {
        debugger;
        $('.jumper').on('change input keyup', function() {
            let str = $(this).val();
            $('.jumper-link').text('jump to ' + str);
            $('.jumper-link').attr('href', str);
        });
    }

    window.onload = setVideoHeight;
    handleInputChange();
    setVideoHeight();
    handlePlayClick();
    $(window).resize(setVideoHeight);
    createBucketSlider();
    handleIosNativePlayerQuit();
    addArrowToSlider(".insights-carousel");
    addArrowToSlider(".bucket__slider");
});