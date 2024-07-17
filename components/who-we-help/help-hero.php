<?php
require __DIR__ . '/dial.php';
function render_slider_points()
{
    $animations = [
        'dial_animation' => 'get_dial_animation',
    ];
    $slides = get_field('animation_slider');
    foreach ($slides as $slide) {
        $animation = $animations[$slide['animation_name']]();
        echo '
        <div>
            <div class="flex flex-col items-center">
                <div class=" w-[400px] mb-4">
                ' . $animation . '
                </div>
                <p class="text-white font-bold mb-2 text-center text-2xl">' . $slide['title'] . '</p>
                <p class="text-white text-center text-lg">' . $slide['content'] . '</p>
            </div>
        </div>
        ';
    }
}
?>

<section class="who-we-help-hero w-full bg-dark-blue-background min-w-full relative h-fit lg:h-[90vh] bg-cover flex"
    style="background-image: url(<?php the_field('hero_background_image') ?>); background-position-y: -40px;">
    <div class="w-7/12 flex flex-col justify-center items-center pl-40">
        <div class="w-fit">
            <h2 class="text-primary uppercase text-2xl"><?php the_field('title') ?></h2>
            <h1 class="text-white text-6xl"><?php the_field('sub_title') ?></h1>
        </div>
    </div>
    <div class="w-5/12 flex items-center">
        <div class="w-1/2">
            <div class="who-we-help-slider">
                <?php render_slider_points() ?>
            </div>
        </div>
    </div>
</section>