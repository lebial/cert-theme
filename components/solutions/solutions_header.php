<div class="w-full p-1 text-center md:text-left md:p-4 flex flex-col md:flex-row justify-center text-white" style="background-color: rgb(87, 134, 228); font-size: 20px;">
  <?php the_field('banner_text')?>
    <div class=""><a class="font-bold underline" style="margin: 0 10px; position: static;" href="<?php the_field('banner_learn_more_ref')?>">Learn More </a> &rarr;</div>
</div>
<section class="solutions__header w-full bg-dark-blue-background flex justify-center items-center bg-cover" style="background-image:url(<?php the_field('header_background')?>); background-size: cover; margin-top: 0;">
  <div class="w-full md:w-8/12 lg:w-1/2 px-4 lg:px-0 text-center my-12 lg:my-32 relative">
    <h1 class="text-white font-light"><?php the_field('headline')?></h1>
    <p class="text-white mx-auto mt-4 md:mt-12 text-sm md:text-lg">
      <?php the_field('headline_description')?>
    </p>
    <div class="hidden md:block solutions__video__container absolute w-11/12 md:w-[60%] left-1/2 -translate-x-1/2 top-[110%]">
      <div class="solutions__video__body relative">
        <video class="" id="decisionMakingDesktopVideo" width="100%" height="100%" src="<?php the_field('build_better_plans_video') ?>" controls></video>
        <div class="solutions__Desktop__video__overlay shadow-lg absolute flex items-end w-[101%] h-full left-1/2 -translate-x-1/2 top-0 p-1 lg:p-6 bg-cover" style="background: linear-gradient(rgba(76, 120, 207, 0.7),rgba(76, 120, 207, 0.7)), url(<?php the_field('video_thumbnail')?>); background-size: cover;">
          <div class="overlay__content">
            <div class="w-10/12 lg:w-8/12">
              <p class="text-white text-base 2xl:text-2xl text-left pl-4" style="line-height: 2;"><?php the_field('thumbnail_description')?></p>
            </div>
            <button id="solutionsDesktopVideoButton" class="hero__button-modal z-10 bottom-0" type="button">
              <svg class="hero__button__svg h-20 2xl:h-32 " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 120 120" style="enable-background:new 0 0 120 120;" xml:space="preserve">
                <g>
                  <path class="st0" d="M60,0C26.9,0,0,26.9,0,60s26.9,60,60,60s60-26.9,60-60S93.1,0,60,0z M67.2,73.6L45.1,85.7V61.5V37.3l22.1,12.1   l22.1,12.1L67.2,73.6z"/>
                </g>
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="md:p-4 hidden"></div>
</section>