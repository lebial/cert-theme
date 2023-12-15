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

function triggerGtagEvent(eventName, options = null) {
    if (typeof gtag === 'function') {
        gtag('event', eventName, options);
    }
}

function getVideoProgressPercentages(video) {
    const { currentTime, duration } = video;
    const playedPercent = currentTime * 100 / duration;
    return { 'current_time': currentTime, 'played_percent': playedPercent.toFixed(2) }
}

export {
    getNavHeight as default,
    waitForElement,
    addArrowToSlider,
    createObserver,
    makeElementsSameHeight,
    makeElementsSameWidth,
    triggerGtagEvent,
    getVideoProgressPercentages
};