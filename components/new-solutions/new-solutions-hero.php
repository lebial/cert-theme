<section
    class="solutions__page__hero w-full bg-dark-blue-background min-w-full relative h-fit  lg:h-[90vh] bg-cover flex justify-center items-center pt-14 lg:pt-0"
    style="background-image: url(<?php the_field('hero_background_image') ?>); background-position-y: -40px;">
    <div>
        <h2 class="text-primary uppercase text-xl lg:text-2xl text-center tracking-wide">
            <?php the_field('hero_highlight_header'); ?>
        </h2>
        <h1 class="text-white  text-2xl lg:text-4xl xl:text-6xl text-center tracking-normal">
            <?php the_field('hero_title') ?>
        </h1>
        <div class="divider bg-primary h-px w-80 mx-auto my-4 lg:my-10"></div>
        <div class="w-9/12 mx-auto lg:w-full pb-10 lg:pb-0">
            <p class="text-white text-center mx-auto hidden lg:block"><?php the_field('hero_description') ?></p>
            <p class="text-white text-center mx-auto block lg:hidden max-w-[20ch]">
                <?php strip_tags(the_field('hero_description')) ?>
            </p>
        </div>
    </div>
</section>