<!-- <section class="logistics__header w-full bg-dark-blue-background bg-center md:bg-left flex justify-center items-center bg-cover min-h-[40vh] lg:min-h-[85vh]" style="background-image:url(<?php the_field('header_background') ?>); background-size: cover; margin-top: 0;">
    <div class="w-full px-4 lg:px-0 text-center my-12 lg:my-32 relative">
        <h1 class="text-white font-bold"><?php //the_field('head_line') ?></h1>
        <h2 class="text-white text-4xl mt-8 tracking-normal font-normal px-4 lg:px-0 mx-auto"><?php //the_field('hero_sub_heading') ?></h2>
      <div class=" header__divider w-60 h-px bg-primary mx-auto"></div>
        <div class="w-11/12 md:w-8/12 mx-auto">
            <p class="text-white max-w-none mt-4 md:mt-12 text-xl lg:text-2xl">
                <?php //strip_tags(the_field('hero_description'), '<a>') ?>
            </p>
        </div>
    </div>
    <div class="md:p-4 hidden"></div>
</section> -->

<section class="new__home__page w-full bg-dark-blue-background min-w-full relative h-fit lg:h-[calc(100vh-80px)]">
  <video playsinline autoplay muted loop id="HomeBackgroundVideo" class=" object-cover w-full h-full absolute top-0 left-0 z-10">
    <source src="<?php the_field('hero_background_video') ?>" type="video/mp4">
  </video>
    <div class="w-full h-full bg-dark-blue-background bg-opacity-70 py-14 opacity-100 z-20 relative flex flex-col justify-center px-6">
        <div class="flex flex-col items-center justify-center text-center">
            <h1 class="text-white font-bold relative"><?php the_field('head_line') ?><span class="absolute top-[-10px] right-[-43px] scale-50">®</span></h1>
            <h2 class="text-white text-4xl mt-8 tracking-normal font-normal px-4 lg:px-0 mx-auto"><?php the_field('hero_sub_heading') ?></h2>
            <div class=" header__divider w-60 h-px bg-primary mx-auto"></div>
            <div class="w-11/12 md:w-8/12 mx-auto">
                <p class="text-white max-w-none mt-4 md:mt-12 text-xl lg:text-2xl">
                    <?php strip_tags(the_field('hero_description'), '<a>') ?>
                </p>
            </div>
        </div>
    </div>
</section>