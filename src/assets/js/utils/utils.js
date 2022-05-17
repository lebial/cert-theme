function getNavHeight() {
  const navHeight = document.querySelector("header").offsetHeight;
  return { navHeight };
}

function addArrowToSlider(slider) {
  const $ = jQuery;
  $(`${slider}-prev`).click(function () {
    $(slider).slick("slickPrev");
  });
  $(`${slider}-next`).click(function () {
    $(slider).slick("slickNext");
  });
}

function waitForElement(selector) {
  return new Promise((resolve) => {
    if (document.querySelector(selector)) {
      return resolve(document.querySelector(selector));
    }
    const observer = new MutationObserver((mutations) => {
      if (document.querySelector(selector)) {
        resolve(document.querySelector(selector));
        observer.disconnect();
      }
    });

    observer.observe(document.body, {
      childList: true,
      subtree: true,
    });
  });
}

export { getNavHeight as default, waitForElement, addArrowToSlider };
