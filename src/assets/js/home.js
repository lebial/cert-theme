jQuery(document).ready(function ($) {

  function setVideoHeight() {
    const videoHeight = document.getElementById('homepageVideo').offsetHeight;
    $('.video__overlay').css('height', `${videoHeight + 60}px`);
  }

  function handlePlayClick() {
    setVideoHeight();
    $('#homeVideoButton').click(function() {
      $('.video__overlay').toggle();
      $('#homepageVideo').get(0).play();
    });
  }

  $(window).resize(setVideoHeight);

  handlePlayClick();
});