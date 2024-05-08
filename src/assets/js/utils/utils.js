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
  const loader = '<svg class=" fill-dark-blue-background"width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><style>.spinner_zWVm{animation:spinner_5QiW 1.2s linear infinite,spinner_PnZo 1.2s linear infinite}.spinner_gfyD{animation:spinner_5QiW 1.2s linear infinite,spinner_4j7o 1.2s linear infinite;animation-delay:.1s}.spinner_T5JJ{animation:spinner_5QiW 1.2s linear infinite,spinner_fLK4 1.2s linear infinite;animation-delay:.1s}.spinner_E3Wz{animation:spinner_5QiW 1.2s linear infinite,spinner_tDji 1.2s linear infinite;animation-delay:.2s}.spinner_g2vs{animation:spinner_5QiW 1.2s linear infinite,spinner_CMiT 1.2s linear infinite;animation-delay:.2s}.spinner_ctYB{animation:spinner_5QiW 1.2s linear infinite,spinner_cHKR 1.2s linear infinite;animation-delay:.2s}.spinner_BDNj{animation:spinner_5QiW 1.2s linear infinite,spinner_Re6e 1.2s linear infinite;animation-delay:.3s}.spinner_rCw3{animation:spinner_5QiW 1.2s linear infinite,spinner_EJmJ 1.2s linear infinite;animation-delay:.3s}.spinner_Rszm{animation:spinner_5QiW 1.2s linear infinite,spinner_YJOP 1.2s linear infinite;animation-delay:.4s}@keyframes spinner_5QiW{0%,50%{width:7.33px;height:7.33px}25%{width:1.33px;height:1.33px}}@keyframes spinner_PnZo{0%,50%{x:1px;y:1px}25%{x:4px;y:4px}}@keyframes spinner_4j7o{0%,50%{x:8.33px;y:1px}25%{x:11.33px;y:4px}}@keyframes spinner_fLK4{0%,50%{x:1px;y:8.33px}25%{x:4px;y:11.33px}}@keyframes spinner_tDji{0%,50%{x:15.66px;y:1px}25%{x:18.66px;y:4px}}@keyframes spinner_CMiT{0%,50%{x:8.33px;y:8.33px}25%{x:11.33px;y:11.33px}}@keyframes spinner_cHKR{0%,50%{x:1px;y:15.66px}25%{x:4px;y:18.66px}}@keyframes spinner_Re6e{0%,50%{x:15.66px;y:8.33px}25%{x:18.66px;y:11.33px}}@keyframes spinner_EJmJ{0%,50%{x:8.33px;y:15.66px}25%{x:11.33px;y:18.66px}}@keyframes spinner_YJOP{0%,50%{x:15.66px;y:15.66px}25%{x:18.66px;y:18.66px}}</style><rect class="spinner_zWVm" x="1" y="1" width="7.33" height="7.33"/><rect class="spinner_gfyD" x="8.33" y="1" width="7.33" height="7.33"/><rect class="spinner_T5JJ" x="1" y="8.33" width="7.33" height="7.33"/><rect class="spinner_E3Wz" x="15.66" y="1" width="7.33" height="7.33"/><rect class="spinner_g2vs" x="8.33" y="8.33" width="7.33" height="7.33"/><rect class="spinner_ctYB" x="1" y="15.66" width="7.33" height="7.33"/><rect class="spinner_BDNj" x="15.66" y="8.33" width="7.33" height="7.33"/><rect class="spinner_rCw3" x="8.33" y="15.66" width="7.33" height="7.33"/><rect class="spinner_Rszm" x="15.66" y="15.66" width="7.33" height="7.33"/></svg>';
  const $ = jQuery;
  const params = getParams();
  const lastPage = +btn.dataset.lastPage;
  const currentPage = +btn.dataset.currentPage;
  const page = currentPage + 1;
  const buttonTxt = btn.innerHTML;
  btn.innerHTML = loader;
  debugger;
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
    }
  });
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
};