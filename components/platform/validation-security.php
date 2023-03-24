<?php

function render_validation_slides()
{
  $slides = get_field('validation_slides');
  foreach ($slides as $slide) {
    echo '<div class="validations__slider__text flex justify-center">';
    echo '<div class="text-white pr-0 md:pr-16 lg:pr-0 text-lg lg:text-xl 2xl:text-2xl">';
    echo $slide;
    echo '</div>';
    echo '</div>';
  };
};
?>
<section class="validation__security min-h-fit relative py-8 flex flex-col bg-dark-blue-background" id="<?php the_field('validation_section_id') ?>">
  <div class="validation__security__container px-11 md:px-24 lg:px-11 relative text-center md:text-left lg:text-left">
    <p class="text-white font-bold text-3xl mt-14 lg:mx-auto md:text-center lg:text-center lg:text-4xl">Data <span class="validation__headline" data-aos="change-red">Security & Infrastructure</span></p>
    <div class="validation-slider-container left-0 px-0 md:px-8 lg:px-16 2xl:px-[10%] absolute w-full h-full md:pb-14 flex justify-between items-center z-10">
      <?php custom_slider_arrows("validation__slider") ?>
    </div>
    <div class="validation__slider mt-14">
      <?php render_validation_slides() ?>
    </div>
  </div>
  <div class="validation__hitrust__container w-full flex justify-center flex-1 mb-10 mt-8 relative z-20">
    <a href="https://hitrustalliance.net" class="h-fit w-fit" target="_blank">
      <img src="<?php the_field('validation_hitrust_logo') ?>" class="h-full" alt="HITRUST logo">
    </a>
  </div>
</section>