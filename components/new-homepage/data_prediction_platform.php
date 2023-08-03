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
<section class="w-full bg-dark-blue-background mb-12 mt-2 py-12">
  <h3 class="md:hidden text-white font-bold reveal-text"><?php the_field('data_prediction_header_mobile') ?></h3>
  <h3 class="hidden md:block text-white font-bold reveal-text mx-auto"><?php the_field('data_prediciton_header') ?></h3>
  <div class="text_container w-10/12 mx-auto md:w-full flex flex-col items-center">
    <p class="text-white text-center text-base max-w-2xl">
      <?php the_field('data_prediction_subheader') ?>
    </p>
  </div>
  <div class="data_path_animation w-full flex flex-col lg:flex-row">
    <!-- mobile version -->
    <div class="w-full lg:hidden">
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

    <div class="hidden lg:inline w-full relative">
      <?php get_template_part('components/new-homepage/graphic_animation') ?>
    </div>
  </div>

  <div class="w-full flex justify-center relative z-20">
    <a href="/platform" class="px-4 py-2 mx-auto text-base font-bold lg:text-lg mt-5 lg:-mt-6 border border-primary text-white border-solid rounded-3xl transition-all duration-300 hover:bg-primary">Explore Platform</a>
  </div>

</section>