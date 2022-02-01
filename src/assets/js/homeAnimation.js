jQuery(document).ready(function ($) {
  function setAnimationContentHeight () {
    const shapesContainerHeight = document.querySelector('.shapes-container').offsetHeight;
    const navHeight = document.querySelector('header').offsetHeight;
    const totalHeight = shapesContainerHeight + navHeight;
    console.log(totalHeight);
    $('.animation--first').css('height', `calc(100vh - ${totalHeight}px)`);
    $('.animation__content').css('height', `calc(100vh - ${totalHeight}px)`);
  }


  //function calls;

  setAnimationContentHeight();
});