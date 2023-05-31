<?php
function render_hero_options()
{
  $hero_buttons = get_field('hero_buttons');
  foreach ($hero_buttons as $button) {
    echo '<button class="hero__option__button transition-all duration-300 hover:text-primary" type="button" name="' . $button['button_text'] . '">' . $button['button_text'] . '</button>';
  }
}
?>
<section class="new__home__page w-full bg-dark-blue-background min-h-screen min-w-full relative -top-[80px]">
  <img src="<?php the_field('hero_background_image') ?>" alt="hero image" class="absolute w-full h-full top-0 left-0 object-cover">
  <div class="w-full h-full absolute top-0 left-0 bg-dark-blue-background bg-opacity-90">
    <div class="flex flex-col items-center justify-center text-center pt-36">
      <h1 class="text-white text-6xl leading-snug tracking-normal max-w-2xl reveal-text"><?php the_field('heading') ?></h1>
      <h2 class="text-white text-xl mt-8 tracking-normal reveal-text max-w-2xl"><?php the_field('hero_sub_heading') ?></h2>
      <div class=" w-60 h-px bg-primary mt-6"></div>
    </div>
    <div class="w-full flex flex-col items-center mt-12">
      <div class="w-8/12">
        <p class="text-3xl font-bold text-white max-w-none text-center reveal-text">
          See how we're helping healthcare leaders achieve their goals
        </p>
        <div class="button container w-full flex text-white justify-evenly mt-8">
          <?php render_hero_options() ?>
        </div>
      </div>

    </div>
  </div>
</section>