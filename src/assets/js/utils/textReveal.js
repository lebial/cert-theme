import { createObserver } from "./utils";

jQuery(document).ready(function ($) {

  function setLinesFromElement(element) {
    const html = element.innerHTML;
    const lines = html.split('<br>');
    // const lines = html.split(/<br *.*>/);
    element.innerHTML = lines.map(line => `<span class="line" style="padding-bottom: 5px;"><span class="words">${line}</span></span>`).join('');
  }

  function addCenteringMargin(element) {
    const parentWidth = $($(element).parent()).width();
    const wordsElement = $(element).find('.words');
    const wordsWidth = $(wordsElement).width();
    const leftMargin = (parentWidth - wordsWidth) / 2;
    $(wordsElement).css({
      'margin-left': `${leftMargin}px`,
    });
  }

  function handleElementsObserve(elements) {
    //duration per line animation;
    let secs = 2;

    const observer = createObserver((entries) => {
      entries.forEach(({ target, isIntersecting }) => {
        if (isIntersecting) {
          const textLength = target.textContent.length;
          const delay = $($(target).parent()).attr('data-animate-delay') || $(target).attr('data-animate-delay');
          const duration = $($(target).parent()).attr('data-animate-duration') || $(target).attr('data-animate-duration');

          //make line visible when animation starts
          target.addEventListener('animationstart', function () {
            $(this).css('visibility', 'visible');
            target.removeEventListener('animationstart', null);
          });
          // toggle animation
          $($(target).parent()[0]).css('visibility', 'visible');
          $(target).css({
            'animation': `typing ${duration}s steps(${textLength * 2}, end) ${delay}s`
          });
        }
      })
    }, { threshold: 0.9 });

    elements.forEach(element => {
      const lines = element.querySelectorAll('.line');
      const duration = secs / lines.length;
      const direction = $(lines[0]).parent().attr('data-reveal-direction');
      lines.forEach((line, idx) => {
        $(line).attr('data-animate-delay', idx * duration);
        $(line).attr('data-animate-duration', duration);
        if (direction !== 'left' || window.screen.width <= 1024) addCenteringMargin(line);
        observer.observe(line);
      });
    });
  }

  function revealInit() {
    const revealTextElements = document.querySelectorAll(".reveal-text");
    revealTextElements.forEach(element => setLinesFromElement(element));
    handleElementsObserve(revealTextElements);
  }

  function handleLineReveal() {
    const observer = createObserver(entries => {
      entries.forEach(({ target, isIntersecting }) => {
        if (isIntersecting) {
          $(target).addClass('bottom-reveal-animate left-reveal-animate line-reveal-animate');
          // observer.unobserve(target);
        }
      })
    }, { threshold: 1.0 });
    const bottomRevealElements = document.querySelectorAll('.bottom-reveal');
    const leftRevealElements = document.querySelectorAll('.left-reveal');
    const revealElements = [...bottomRevealElements, ...leftRevealElements];
    revealElements.forEach(element => observer.observe(element));
  }

  revealInit();
  handleLineReveal();

});

