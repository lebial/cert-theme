<?php

function render_custom_menu_items()
{
  $items = wp_get_nav_menu_items('Main Menu');
  foreach ($items as $item) {
    if (!$item->url || $item->title == 'Contact Us' || $item->title == 'Careers' || $item->title == 'About Us') {
      echo '';
    } else {
      echo '<a class="hero__option__button flex items-center transition-all duration-300 hover:text-primary text-sm xl:text-lg" 
              href="' . $item->url . '"
              name="' . $item->title . '">
              ' . $item->title . '<span class="w-[20px] pt-[3px]"><svg id="Layer_1" style="enable-background:new 0 0 64 64;" version="1.1" viewBox="0 0 64 64" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g id="Icon-Chevron-Left" transform="translate(237.000000, 335.000000)"><polyline class=" fill-primary" id="Fill-35" points="-210.9,-289 -212.9,-291 -201.1,-302.7 -212.9,-314.4 -210.9,-316.4 -197.1,-302.7      -210.9,-289    "/></g></g></svg></span></a>';
    }
  }
}
?>
<section class="new__home__page w-full bg-dark-blue-background min-w-full relative">
  <video playsinline autoplay muted loop id="HomeBackgroundVideo" class=" object-cover w-full h-full absolute top-0 left-0 z-10">
    <source src="<?php the_field('hero_background_video') ?>" type="video/mp4">
  </video>
  <div class="w-full h-full bg-dark-blue-background bg-opacity-70 py-14 opacity-100 z-20 relative">
    <div class="flex flex-col items-center justify-center text-center">
      <h1 class="text-white text-2xl lg:text-4xl 2xl:text-6xl reveal-text hidden lg:block"><?php the_field('heading') ?></h1>
      <h1 class="text-white text-2xl lg:text-4xl 2xl:text-6xl reveal-text block lg:hidden"><?php the_field('heading_mobile') ?></h1>
      <h2 class="text-white text-lg mt-8 tracking-normal max-w-3xl font-normal px-4 lg:px-0"><?php the_field('hero_sub_heading') ?></h2>
      <div class=" w-60 h-px bg-primary mt-6"></div>
    </div>
    <div class="w-full flex flex-col items-center mt-12">
      <div class="w-10/12 2xl:w-8/12 flex flex-col">
        <p class=" text-xl 2xl:text-3xl font-bold text-white max-w-none text-center">
          See how we're helping healthcare leaders achieve their goals
        </p>
        <div class="button container min-w-full w-full flex flex-col lg:flex-row text-white justify-evenly mt-8 items-center">
          <?php render_custom_menu_items() ?>
        </div>
      </div>

    </div>
  </div>
</section>