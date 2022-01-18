<section class="hero">
  <img src="<?php the_field('hero_image') ?>" alt="<?php the_field('hero_image_alt') ?>" class="hero__image object-cover">
  <div class="hero__content">
    <h1 class="hero__headline text-4xl 2xl:text-6xl">
      <?php the_field('headline') ?>
    </h1>
    <h2 class="text-white text-base 2xl:text-2xl mt-8 px-10 sm:px-32 font-normal leading-relaxed tracking-wide"><?php the_field('header_text') ?></h2>
    <button id="videoModalButton" class="hero__button-modal" type="button">
      <svg class="hero__button__svg h-32 " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 120 120" style="enable-background:new 0 0 120 120;" xml:space="preserve">
        <g>
          <path class="st0" d="M60,0C26.9,0,0,26.9,0,60s26.9,60,60,60s60-26.9,60-60S93.1,0,60,0z M67.2,73.6L45.1,85.7V61.5V37.3l22.1,12.1   l22.1,12.1L67.2,73.6z"/>
        </g>
      </svg>
    </button>
  </div>
</section>