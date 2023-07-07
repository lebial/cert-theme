<?php

function render_data_points()
{
  $points = get_field('data_points');
  foreach ($points as $point) {
    echo '
      <div class="flex py-3 w-full justify-between left-reveal line-reveal-animation">
        <p class="text-white mb-0">' . $point['text'] . '</p>
        <p class="text-white font-bold">' . $point['number_value'] . '</p>
      </div>';
  }
}

function render_vertical_options()
{
  $vertical_options = get_field('vertical_slider_options');
  foreach ($vertical_options as $vert_option) {
    echo '<p class="pb-2 font-bold text-white">' . $vert_option['text'] . '</p>';
  }
}
?>
<section class="w-full bg-black-background my-12 py-12">
  <h3 class="md:hidden text-white font-bold reveal-text"><?php the_field('data_prediction_header_mobile') ?></h3>
  <h3 class="hidden md:inline text-white font-bold reveal-text"><?php the_field('data_prediciton_header') ?></h3>
  <div class="text_container w-10/12 mx-auto md:w-full flex flex-col items-center">
    <p class="text-white text-center text-base max-w-2xl">
      <?php the_field('data_prediction_subheader') ?>
    </p>
    <a href="/platform" class="px-4 py-2 text-base font-bold lg:text-lg mt-8 border border-primary text-white border-solid rounded-3xl transition-all duration-300 hover:bg-primary">Explore Platform</a>
  </div>
  <div class="data_path_animation w-full flex flex-col lg:flex-row">
    <!-- mobile version -->
    <div class="w-full lg:hidden ml-[10px] lg:ml-0">
      <?php get_template_part('components/new-homepage/graphic_animation_mobile') ?>
    </div>
    <div class="w-full flex lg:hidden items-center">
      <div class="w-full lg:w-10/12 mx-auto max-w-6xl mt-[-2rem] md:mt-[-4rem] 2xl:mt-[-2rem] mb-0 lg:mb-4 flex">
        <div class="hidden lg:block w-6/12 lg:w-6/12 2xl:w-[48%]">
        </div>
        <div class="w-full flex justify-center  lg:ml-0 lg:w-6/12">
          <p class="font-normal text-xs md:text-lg lg:text-xl text-white">
            <span class="vertical-option-mobile font-bold"></span><br>
          </p>

          <div id="string-text-mobile">
            <?php render_vertical_options() ?>
          </div>
        </div>
      </div>
    </div>
    <!-- End mobile version-->

    <div class="w-10/12 lg:w-4/12 flex flex-col mx-auto justify-center lg:ml-[10%]">
      <div class="bottom-reveal flex justify-center">
        <p class="text-white font-bold text-lg md:text-xl lg:text-2xl pb-8 pt-8 lg:pt-0"><?php the_field('metrics_header') ?></p>
      </div>
      <?php render_data_points() ?>
    </div>
    <div class="hidden lg:inline w-full lg:w-8/12 relative">
      <?php get_template_part('components/new-homepage/graphic_animation') ?>
    </div>
  </div>

  <div class="hidden w-full lg:flex">
    <div class="w-11/12 lg:w-10/12 mx-auto max-w-6xl mt-[-1rem] 2xl:mt-[-2rem] mb-0 lg:mb-4 flex">
      <div class="w-2/12 lg:w-6/12 2xl:w-[48%]">
      </div>
      <div class="w-10/12 ml-[-.8rem] lg:ml-0 lg:w-6/12">
        <p class="font-normal text-xs md:text-lg lg:text-xl text-white">
          <span class="vertical-option-desktop font-bold"></span><br>
        </p>

        <div id="string-text-desktop">
          <?php render_vertical_options() ?>
        </div>
      </div>
    </div>
    <!-- <div class="vertical__slider__container flex justify-center relative">
      <div class=" w-96 vertical-slider-options">
        <?php // render_vertical_options() 
        ?>
      </div>
      <div class="absolute w-full h-full top-0 left-0 bg-gradient-to-b from-transparent to-dark-blue-background"></div>

    </div> -->
    <!-- <div class="w-full flex justify-center">
      <button type="button" class="vertical__silder__next relative -top-2">
        <svg class=" fill-primary" enable-background="new 0 0 32 32" height="52px" id="Слой_1" version="1.1" viewBox="0 0 32 32" width="52px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <path d="M24.285,11.284L16,19.571l-8.285-8.288c-0.395-0.395-1.034-0.395-1.429,0  c-0.394,0.395-0.394,1.035,0,1.43l8.999,9.002l0,0l0,0c0.394,0.395,1.034,0.395,1.428,0l8.999-9.002  c0.394-0.395,0.394-1.036,0-1.431C25.319,10.889,24.679,10.889,24.285,11.284z" id="Expand_More" />
          <g />
          <g />
          <g />
          <g />
          <g />
          <g />
        </svg>
      </button>
    </div> -->
  </div>


</section>