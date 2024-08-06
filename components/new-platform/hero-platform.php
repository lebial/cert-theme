<?php

function render_custom_menu_items()
{
  $items = get_field('heading_buttons');
  foreach ($items as $idx => $item) {
    echo '<a class="platform__hero__option__button transition-all duration-200 hover:text-primary text-xs xl:text-sm 2xl:text-lg mb-4 lg:mb-0 text-center" 
              href="' . $item['url'] . '"
              name="platform-button-' . $idx . '">
              ' . $item['text'] . '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="69" viewBox="0 0 40 69" fill="none" class="w-2 h-2 ml-1 inline">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.0167 1.02513C4.64987 -0.341709 2.43379 -0.341709 1.06696 1.02513C-0.299879 2.39196 -0.299879 4.60804 1.06696 5.97487L29.253 34.1609L1.02513 62.3889C-0.341709 63.7557 -0.341709 65.9718 1.02513 67.3386C2.39196 68.7054 4.60804 68.7054 5.97487 67.3386L38.8553 34.4581L38.8549 34.4577L39.1521 34.1605L6.0167 1.02513Z" fill="#F4695B"></path>
                </svg>
          </a>';
  }
}
?>
<section class="new__home__page w-full bg-dark-blue-background min-w-full relative h-fit lg:h-[calc(100vh-80px)]">
  <video playsinline autoplay muted loop id="HomeBackgroundVideo"
    class=" object-cover w-full h-full absolute top-0 left-0 z-10">
    <source src="<?php the_field('hero_background_video') ?>" type="video/mp4">
  </video>
  <div
    class="w-full h-full bg-dark-blue-background bg-opacity-70 py-14 opacity-100 z-20 relative flex flex-col justify-center px-6">
    <div class="flex flex-col items-center justify-center text-center">
      <h1 class="text-white text-2xl lg:text-4xl xl:text-6xl reveal-text hidden lg:block">
        <?php the_field('head_line') ?> <br>
        <span class="text-xl lg:text-2xl text-primary font-normal relative"><?php the_field('sub_heading') ?></span>
      </h1>
      <div class="w-full block lg:hidden">
        <h1 class="text-white text-2xl lg:text-4xl xl:text-6xl reveal-text ">
          <?php the_field('head_line_mobile') ?>
        </h1>
        <p class="text-xl lg:text-2xl text-primary font-normal relative">
          <span><?php the_field('sub_heading') ?></span>
        </p>
      </div>
      <!-- <h1 class="text-white text-2xl lg:text-4xl xl:text-6xl reveal-text block lg:hidden"><?php //the_field('head_line') ?></h1> -->
      <h2 class="text-white text-lg mt-8 tracking-normal max-w-3xl font-normal px-4 lg:px-0">
        <?php the_field('hero_sub_heading') ?>
      </h2>
      <div class=" header__divider w-60 h-px bg-primary"></div>
    </div>
    <div class="w-full flex flex-col items-center mt-12">
      <div class="w-11/12 3xl:w-9/12 flex flex-col">
        <p class=" text-lg 2xl:text-2xl font-normal text-white max-w-none text-center">
          <?php the_field('sub_head_line') ?>
        </p>
        <!-- <div class="button container min-w-full w-full flex flex-col lg:flex-row text-white justify-evenly mt-8 items-start lg:items-center"> -->
        <div class="button container min-w-full w-full text-white mt-14">
          <div class="mx-auto flex flex-col lg:hidden w-fit">
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