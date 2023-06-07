<?php

function render_data_points()
{
  $points = get_field('data_points');
  foreach ($points as $point) {
    echo '
      <div class="flex py-3 w-full justify-between bottom-reveal line-reveal-animation">
        <p class="text-white mb-0">' . $point['text'] . '</p>
        <p class="text-primary font-bold">' . $point['number_value'] . '</p>
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
<section class="w-full bg-dark-blue-background my-12 py-12">
  <h3 class="text-white font-bold reveal-text"><?php the_field('data_prediciton_header') ?>Certilytics Data & Prediction Platform</h3>
  <div class="text_container w-full flex flex-col items-center">
    <p class="text-white text-center text-base max-w-2xl">
      <?php the_field('data_prediction_subheader') ?>
    </p>
    <a href="/platforms" class=" px-5 py-2 mt-8 border border-primary text-white border-solid rounded-3xl transition-all duration-300 hover:bg-primary">Explore Platform</a>
  </div>
  <div class="data_path_animation w-full flex">
    <div class="w-4/12 flex flex-col justify-center ml-[10%]">
      <?php render_data_points() ?>
    </div>
    <div class="w-8/12 relative">
      <?php get_template_part('components/new-homepage/graphic_animation') ?>
    </div>
  </div>
  <div class="w-full flex flex-col items-center ">
    <div class="vertical__slider__container flex justify-center relative">
      <div class=" w-96 vertical-slider-options">
        <?php render_vertical_options() ?>
      </div>
      <div class="absolute w-full h-full top-0 left-0 bg-gradient-to-b from-transparent to-dark-blue-background"></div>

    </div>
    <div class="w-full flex justify-center">
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
    </div>
  </div>


</section>