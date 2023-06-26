<?php

function render_custom_menu_items()
{
  $items = wp_get_nav_menu_items('Main Menu');
  foreach ($items as $item) {
    if (!$item->url || $item->title == 'Contact Us' || $item->title == 'Careers' || $item->title == 'About Us') {
      echo '';
    } else {
      echo '<a class="hero__option__button flex items-center transition-all duration-300 hover:text-primary text-xs mr-2" 
              href="' . $item->url . '"
              name="' . $item->title . '">
              ' . $item->title . '<span class="w-[20px] pt-[3px]"><svg id="Layer_1" style="enable-background:new 0 0 64 64;" version="1.1" viewBox="0 0 64 64" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g id="Icon-Chevron-Left" transform="translate(237.000000, 335.000000)"><polyline class=" fill-primary" id="Fill-35" points="-210.9,-289 -212.9,-291 -201.1,-302.7 -212.9,-314.4 -210.9,-316.4 -197.1,-302.7      -210.9,-289    "/></g></g></svg></span></a>';
    }
  }
}
?>
<section class="new__home__page w-full min-w-full relative ">
  <div class="w-full h-full pt-20 pb-10 opacity-100 z-20 relative flex flex-col justify-center">
    <div class="flex flex-col items-center justify-center text-center h-full">
      <h1 class=" text-gray-header text-4xl 2xl:text-6xl reveal-text"><?php the_field('heading') ?></h1>
      <h2 class=" text-gray-header text-lg mt-14 mb-0 tracking-normal max-w-3xl font-normal"><?php the_field('hero_sub_heading') ?></h2>
    </div>
    <div class="w-full flex flex-col items-center mt-12">
      <div class="w-10/12 2xl:w-8/12 flex flex-col">
        <div class="new__home__button__container w-fit flex text-white mx-auto">
          <?php render_custom_menu_items() ?>
        </div>
      </div>

    </div>
  </div>
</section>
<section class="w-full flex justify-center mb-28">
  <div class="w-9/12 shadow-2xl">
    <video playsinline autoplay muted loop id="HomeBackgroundVideo" class=" object-cover w-full h-full">
      <source src="<?php the_field('hero_background_video') ?>" type="video/mp4">
    </video>
  </div>
</section>