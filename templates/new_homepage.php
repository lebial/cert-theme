<?php
// Template Name: New Home Page Tempatle
?>

<?php get_header() ?>

<section class="new__home__page w-full bg-dark-blue-background min-h-screen min-w-full relative -top-[80px]">
    <img src="<?php the_field('hero_background_image') ?>" alt="hero image" class="absolute w-full h-full top-0 left-0">
    <div class="w-full h-full absolute top-0 left-0 bg-dark-blue-background bg-opacity-90">
        <div class="flex flex-col items-center justify-center text-center pt-36">
            <h1 class="text-white text-6xl leading-snug tracking-normal"><?php the_field('heading') ?></h1>
            <h2 class="text-white text-xl mt-8 tracking-normal"><?php the_field('hero_sub_heading') ?></h2>
            <div class=" w-60 h-px bg-primary mt-6"></div>
        </div>
    </div>

</section>

<?php get_template_part('components/new-home/credibility') ?>
<?php get_template_part('components/new-home/insights') ?>
<?php get_footer() ?>