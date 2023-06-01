import { createObserver } from "./utils";

jQuery(document).ready(function ($) {
  window.addEventListener("load", function () {
    function splitWords(selector) {
      const elements = document.querySelectorAll(selector);

      elements.forEach(function (el) {
        el.dataset.splitText = el.textContent;
        el.innerHTML = el.textContent
          .split(/\s/)
          .map(function (word) {
            return word
              .split("-")
              .map(function (word) {
                return '<span class="word">' + word + "</span>";
              })
              .join('<span class="hyphen">-</span>');
          })
          .join('<span class="whitespace"> </span>');
      });
    };

    function splitLines(selector) {
      var elements = document.querySelectorAll(selector);

      splitWords(selector);

      elements.forEach(function (el) {
        var lines = getLines(el);

        var wrappedLines = "";
        lines.forEach(function (wordsArr) {
          wrappedLines += '<span class="line"><span class="words">';
          // wrappedLines += '<span class="line"><span class="words">';
          wordsArr.forEach(function (word) {
            wrappedLines += word.outerHTML;
          });
          wrappedLines += "</span></span>";
        });
        el.innerHTML = wrappedLines;
      });
    };

    let getLines = function (el) {
      let lines = [];
      let line;
      let words = el.querySelectorAll("span");
      let lastTop;
      for (var i = 0; i < words.length; i++) {
        var word = words[i];
        if (word.offsetTop != lastTop) {
          // Don't start with whitespace
          if (!word.classList.contains("whitespace")) {
            lastTop = word.offsetTop;

            line = [];
            lines.push(line);
          }
        }
        line.push(word);
      }
      return lines;
    };

    splitLines(".reveal-text");

    const revealTextElements = document.querySelectorAll(".reveal-text");

    function addCenteringMargin(element) {
      const parentWidth = $($(element).parent()).width();
      const wordsElement = $(element).find('.words');
      const wordsWidth = $(wordsElement).width();
      const leftMargin = (parentWidth - wordsWidth) / 2;
      $(wordsElement).css('margin-left', `${leftMargin}px`);
    }

    function removeSpansFromLInes() {
      const observer = createObserver((entries) => {
        entries.forEach(({ target, isIntersecting }) => {
          if (isIntersecting) {
            $($(target).parent()[0]).css('visibility', 'visible');
            $(target).addClass('typed-animation');
          }
        })
      });

      revealTextElements.forEach(element => {
        const lines = element.querySelectorAll('.line');
        lines.forEach(line => {
          const lineText = $(line).text();
          $(line).find('.words').find('span').remove();
          $(line).find('.words').text(lineText);
          addCenteringMargin(line);
          observer.observe(line);
        });
      });
    }

    removeSpansFromLInes();

  });
});

