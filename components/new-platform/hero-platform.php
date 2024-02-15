<?php

function render_custom_menu_items()
{
  $items = get_field('heading_buttons');
  foreach ($items as $item) {
    echo '<a class="platform__hero__option__button flex items-end justify-center lg:justify-start transition-all duration-200 hover:text-primary text-sm xl:text-lg mb-4 lg:mb-0 text-center" 
              href="' . $item['url'] . '"
              name="platform-button-'.$idx.'">
              ' . $item['text'] . ' <span class="w-[20px] pt-[3px] block"><svg id="Layer_1" style="enable-background:new 0 0 64 64;" version="1.1" viewBox="0 0 64 64" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g id="Icon-Chevron-Left" transform="translate(237.000000, 335.000000)"><polyline class=" fill-primary" id="Fill-35" points="-210.9,-289 -212.9,-291 -201.1,-302.7 -212.9,-314.4 -210.9,-316.4 -197.1,-302.7      -210.9,-289    "/></g></g></svg></span>
          </a>';
  }
}
?>
<section class="new__home__page w-full bg-dark-blue-background min-w-full relative h-fit lg:h-[calc(100vh-80px)]">
  <video playsinline autoplay muted loop id="HomeBackgroundVideo" class=" object-cover w-full h-full absolute top-0 left-0 z-10">
    <source src="<?php the_field('hero_background_video') ?>" type="video/mp4">
  </video>
  <div class="w-full h-full bg-dark-blue-background bg-opacity-70 py-14 opacity-100 z-20 relative flex flex-col justify-center px-6">
    <div class="flex flex-col items-center justify-center text-center">
      <h1 class="text-white text-2xl lg:text-4xl xl:text-6xl reveal-text">
        <?php the_field('head_line') ?> <br>
        <span class="text-2xl lg:text-4xl text-primary font-normal relative">Powered by BrainstormAI<span class=" text-base align-super">&reg;</span></span>
      </h1>
      <!-- <h1 class="text-white text-2xl lg:text-4xl xl:text-6xl reveal-text block lg:hidden"><?php //the_field('head_line') ?></h1> -->
      <h2 class="text-white text-lg mt-8 tracking-normal max-w-3xl font-normal px-4 lg:px-0"><?php the_field('hero_sub_heading') ?></h2>
      <div class=" header__divider w-60 h-px bg-primary"></div>
    </div>
    <div class="w-full flex flex-col items-center mt-12">
      <div class="w-10/12 2xl:w-9/12 flex flex-col">
        <p class=" text-xl 2xl:text-2xl font-normal text-white max-w-none text-center">
          <?php the_field('sub_head_line') ?>
        </p>
        <!-- <div class="button container min-w-full w-full flex flex-col lg:flex-row text-white justify-evenly mt-8 items-start lg:items-center"> -->
        <div class="button container min-w-full w-full text-white mt-8">
          <div class="mx-auto block lg:hidden w-fit">
            <?php render_custom_menu_items() ?>
          </div>
          <div class="hidden lg:flex w-full justify-evenly lg:items-center">
            <?php render_custom_menu_items() ?>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>