<?php

function render_custom_menu_items()
{
  $items = get_field('heading_buttons', 'options');
  foreach ($items as $item) {
    echo '<a class="platform__hero__option__button flex items-center transition-all duration-200 hover:text-primary text-sm xl:text-lg" 
              href="' . $item['url'] . '"
              name="' . $item['text'] . '" name="'.$item['text'].'">
              ' . $item['text'] . '<span class="w-[20px] pt-[3px]"><svg id="Layer_1" style="enable-background:new 0 0 64 64;" version="1.1" viewBox="0 0 64 64" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g id="Icon-Chevron-Left" transform="translate(237.000000, 335.000000)"><polyline class=" fill-primary" id="Fill-35" points="-210.9,-289 -212.9,-291 -201.1,-302.7 -212.9,-314.4 -210.9,-316.4 -197.1,-302.7      -210.9,-289    "/></g></g></svg></span></a>';
  }
}
?>

<section class="new__home__page w-full bg-dark-blue-background min-w-full relative h-fit lg:h-[calc(100vh-80px)] bg-cover" style="background-image: url(<?php the_field('hero_background','options')?>);">
  <!-- <video playsinline autoplay muted loop disablePictureInPicture id="HomeBackgroundVideo" class=" object-cover w-full h-full absolute top-0 left-0 z-10">
    <source src="<?php //the_field('hero_background_video') ?>" type="video/mp4">
  </video> -->
  <div class="w-full h-full  py-14 opacity-100 z-20 relative flex flex-col justify-center px-6">
    <div class="flex flex-col items-center justify-center text-center">
        <h1 class="text-white text-3xl lg:text-4xl xl:text-6xl reveal-text">
            <?php the_field('head_line', 'options') ?> <br>
        </h1>
        <div class=" header__divider w-60 mt-12 h-px bg-primary mx-auto"></div>
        <div class="w-11/12 md:w-8/12 mx-auto">
            <h2 class="text-white max-w-none hidden lg:block mt-4 md:mt-12 text-lg font-normal tracking-normal">
                <?php strip_tags(the_field('sub_headline', 'options'), '<a>') ?>
            </h2>
            <h2 class="text-white max-w-none block lg:hidden mt-4 md:mt-12 text-lg font-normal tracking-normal">
                <?php strip_tags(the_field('mobile_sub_headline', 'options'), '<a>') ?>
            </h2>
            <div class="button container min-w-full w-full flex flex-col lg:flex-row text-white justify-evenly mt-8 2xl:mt-24 items-center">
                <?php render_custom_menu_items() ?>
            </div>
        </div>
    </div>

    </div>
</section>