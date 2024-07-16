function getNavHeight() {
  const navHeight = document.querySelector("header").offsetHeight;
  return { navHeight };
}

function addArrowToSlider(slider, optCallback = null) {
  const $ = jQuery;
  $(`${slider}-prev`).click(function () {
    $(slider).slick("slickPrev");
    if (optCallback) optCallback();
  });
  $(`${slider}-next`).click(function () {
    $(slider).slick("slickNext");
    if (optCallback) optCallback();
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

function createObserver(callback, options) {
  const observer = new IntersectionObserver(callback, options);
  return observer;
}

function makeElementsSameHeight($, selector, useMargin = true) {
  // Calculate the heighest slide and set a top/bottom margin for other children.
  // As variableHeight is not supported yet: https://github.com/kenwheeler/slick/issues/1803
  let maxHeight = -1;
  $(selector).each(function () {
    if ($(this).height() > maxHeight) {
      maxHeight = $(this).height();
    }
  });
  $(selector).each(function () {
    if ($(this).height() < maxHeight) {
      if (useMargin) {
        $(this).css('margin', Math.ceil((maxHeight - $(this).height()) / 2) + 'px 0');
      } else {
        $(this).css('height', maxHeight + 'px');
      }
    }
  });
}

function makeElementsSameWidth($, selector) {
  let maxWidth = -1;
  $(selector).each(function () {
    if ($(this).outerWidth() > maxWidth) {
      maxWidth = $(this).outerWidth();
    }
  });
  $(selector).each(function () {
    if ($(this).outerWidth() < maxWidth) {
      $(this).css('width', maxWidth + 'px');
    }
  });
}


function triggerGtagEvent(eventName, options = {}) {
  if (typeof gtag === 'function') {
    gtag('event', eventName, options);
  }
}

function handleGoogleTriggerOnClick(title, ctx) {
  triggerGtagEvent(title, {
    buttonName: ctx.name,
    originPage: window.location.pathname,
  });
}

function getVideoProgressPercentages(video) {
  const { currentTime, duration } = video;
  const playedPercent = currentTime * 100 / duration;
  return { 'current_time': currentTime, 'played_percent': playedPercent.toFixed(2) }
}

function getCustomArrows(name = 'slick', customClass = 'custom__slick-arrow') {
  const nextArrow = `
      <button type="button" class="${name}-next ${customClass} z-10">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="69" viewBox="0 0 40 69" fill="none">'
            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.4664 1.51669C5.09958 0.149872 2.88351 0.149872 1.51669 1.51669C0.149872 2.88358 0.149872 5.09964 1.51669 6.46646L29.7027 34.6525L1.47482 62.8805C0.108002 64.2473 0.108002 66.4633 1.47482 67.8302C2.84164 69.1971 5.05771 69.1971 6.42453 67.8302L34.6521 39.6018L39.305 34.9497L39.6018 34.6521L6.4664 1.51669Z" fill="#787878"/>
        </svg>
      </button>`;
  const prevArrow = `
    <button type="button" class="${name}-prev ${customClass} z-10">
      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="69" viewBox="0 0 40 69" fill="none">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M33.5851 67.8302C34.9519 69.1971 37.168 69.1971 38.5348 67.8302C39.9016 66.4633 39.9016 64.2473 38.5348 62.8805L10.3488 34.6944L38.5767 6.46646C39.9435 5.09964 39.9435 2.88358 38.5767 1.51675C37.2099 0.149872 34.9938 0.149871 33.627 1.51675L5.39945 29.7451L0.746493 34.3972L0.449741 34.6949L33.5851 67.8302Z" fill="#787878"/>
      </svg>
    </button>`;

  return [prevArrow, nextArrow];
}

function getParams() {
  const search = window.location.search;
  const params = new URLSearchParams(search);
  return params;
}

function handleAjaxPosts(action, btn) {
  const $ = jQuery;
  const params = getParams();
  const lastPage = +btn.dataset.lastPage;
  const currentPage = +btn.dataset.currentPage;
  const page = currentPage + 1;
  const buttonTxt = btn.innerHTML;

  $.ajax({
    type: 'POST',
    url: '/wp-admin/admin-ajax.php',
    dataType: 'html',
    data: {
      action,
      page,
      tag: params.get('tag'),
    },
    success: function (res) {
      btn.innerHTML = buttonTxt;
      if (page === lastPage) $(btn).hide();
      btn.setAttribute('data-current-page', page);
      $('#scrollContent').append(res);
    },
    error: function () {
      btn.innerHTML = buttonTxt;
    }
  });
}


function animateCounter(number, target, elem) {
  const $ = jQuery;
  if (number < target) {
    var interval = setInterval(function () {
      $(elem).text(number);
      if (number >= target) {
        clearInterval(interval);
        return;
      }
      number++;
    }, 30);
  }
  if (target < number) {
    var interval = setInterval(function () {
      $(elem).text(number);
      if (target >= number) {
        clearInterval(interval);
        return;
      }
      number--;
    }, 30);
  }
}


export {
  getNavHeight as default,
  waitForElement,
  addArrowToSlider,
  createObserver,
  makeElementsSameHeight,
  makeElementsSameWidth,
  triggerGtagEvent,
  getVideoProgressPercentages,
  getCustomArrows,
  handleGoogleTriggerOnClick,
  handleAjaxPosts,
  getParams,
  animateCounter
};