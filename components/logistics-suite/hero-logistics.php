<section class="new__home__page w-full bg-dark-blue-background min-w-full relative h-fit lg:h-[calc(100vh-80px)]">
  <video playsinline autoplay muted loop id="HomeBackgroundVideo" class=" object-cover w-full h-full absolute top-0 left-0 z-10">
    <source src="<?php the_field('hero_background_video') ?>" type="video/mp4">
  </video>
  <div class="w-full h-full bg-dark-blue-background bg-opacity-70 py-14 opacity-100 z-20 relative flex flex-col justify-center px-6">
    <div class="flex flex-col items-center justify-center text-center">
        <h1 class="text-white text-2xl lg:text-4xl xl:text-6xl reveal-text">
            <?php the_field('head_line') ?> <br>
        </h1>
        <div class="w-11/12 md:w-8/12 mx-auto">
            <p class="text-white max-w-none mt-4 md:mt-12 text-xl lg:text-2xl">
                <?php strip_tags(the_field('sub_headline'), '<a>') ?>
            </p>
        </div>
    </div>

    </div>
</section>