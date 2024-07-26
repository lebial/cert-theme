<!-- <div class=" h-[680px] w-[80%] mb-4"> -->
<?php
require __DIR__ . '/dial.php';
require __DIR__ . '/bars.php';
require __DIR__ . '/bars2.php';
require __DIR__ . '/pie_chart.php';
function render_slider_points()
{
    $animations = [
        'dial_animation' => 'get_dial_animation',
        'bars_animation' => 'get_bars_animation',
        'bars2_animation' => 'get_bars2_animation',
        'pie_animation' => 'get_pie_animation',
    ];
    $slides = get_field('animation_slider');
    foreach ($slides as $slide) {
        $animation = $animations[$slide['animation_name']]();
        echo '
        <div>
            <div class="flex flex-col items-center">
                <div class=" h-[200px] mb-4">
                ' . $animation . '
                </div>
                <p class="text-white font-bold mb-2 text-center lg:text-xl 2xl:text-2xl">' . $slide['title'] . '</p>
                <p class="text-white text-center lg:text-base 2xl:text-lg">' . $slide['content'] . '</p>
            </div>
        </div>
        ';
    }
}
?>

<section class="who-we-help-hero w-full bg-dark-blue-background min-w-full relative h-fit lg:h-[90vh] bg-cover flex"
    style="background-image: url(<?php the_field('hero_background_image') ?>); background-position-y: -40px;">
    <div class="w-6/12 flex flex-col justify-center items-center lg:pl-20 2xl:pl-40">
        <div class="w-fit">
            <h2 class="text-primary uppercase tracking-wide text-xl lg:text-2xl"><?php the_field('title') ?></h2>
            <h1 class="text-white text-2xl lg:text-4xl 2xl:text-6xl reveal-text" data-reveal-direction="left">
                <?php the_field('sub_title') ?>
            </h1>
        </div>
    </div>
    <div class="w-1/2 flex items-center justify-center">
        <div class="w-[60%]">
            <div class="who-we-help-slider">
                <?php render_slider_points() ?>
            </div>
        </div>
    </div>
</section>