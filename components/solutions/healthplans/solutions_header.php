<section class="solutions__header w-full bg-dark-blue-background bg-center md:bg-left flex justify-center items-center bg-cover min-h-[40vh] lg:min-h-[45vh]" style="background-image:url(<?php the_field('header_background') ?>); background-size: cover; margin-top: 0;">
    <div class="w-full px-4 lg:px-0 text-center my-12 lg:my-32 relative">
        <h1 class="text-white font-normal"><?php the_field('headline') ?></h1>
        <div class="w-11/12 md:w-1/2 mx-auto">
            <p class="text-white max-w-none mt-4 md:mt-12 text-xl lg:text-2xl">
                <?php strip_tags(the_field('headline_description'), '<a>') ?>
            </p>
        </div>
    </div>
    <div class="md:p-4 hidden"></div>
</section>