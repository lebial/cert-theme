<!-- <div class=" h-[680px] w-[80%] mb-4"> -->
<?php
require __DIR__ . '/dial.php';
require __DIR__ . '/bars.php';
require __DIR__ . '/bars2.php';
require __DIR__ . '/bars3.php';
require __DIR__ . '/pie_chart.php';
function render_slider_points()
{
    $animations = [
        'dial_animation' => 'get_dial_animation',
        'bars_animation' => 'get_bars_animation',
        'bars2_animation' => 'get_bars2_animation',
        'bars3_animation' => 'get_bars3_animation',
        'pie_animation' => 'get_pie_animation',
    ];
    $slides = get_field('animation_slider');
    foreach ($slides as $slide) {
        $animation = $animations[$slide['animation_name']]();
        echo '
        <div>
            <div class="flex flex-col items-center">
                <div class=" h-[150px] lg:h-[200px] mb-6 lg:mb-4">
                ' . $animation . '
                </div>
                <p class="text-white font-bold mb-4 lg:mb-2 text-center text-lg lg:text-xl 2xl:text-2xl">' . $slide['title'] . '</p>
                <p class="text-white text-center text-sm lg:text-base 2xl:text-lg">' . $slide['content'] . '</p>
            </div>
        </div>
        ';
    }
}
?>

<section
    class="who-we-help-hero w-full bg-dark-blue-background min-w-full relative h-fit lg:h-[90vh] bg-cover flex flex-col lg:flex-row"
    style="background-image: url(<?php the_field('hero_background_image') ?>); background-position-y: -40px;">
    <div class="w-full lg:w-6/12 flex flex-col justify-center items-center lg:pl-20 2xl:pl-40">
        <div class="w-fit">
            <h2 class="text-primary uppercase tracking-wide lg:text-2xl reveal-text mt-4 lg:mt-0 hidden lg:block"
                data-reveal-direction="left"><?php the_field('title') ?></h2>
            <h2 class="text-primary uppercase tracking-wide text-base mt-9 lg:mt-0 block lg:hidden text-center mb-2 ">
                <?php echo strip_tags(get_field('title')) ?>
            </h2>
            <h1
                class="text-white text-2xl lg:text-4xl 2xl:text-6xl text-center lg:text-left max-w-64 lg:max-w-none mb-6 lg:mb-0">
                <?php the_field('sub_title') ?>
            </h1>
        </div>
    </div>
    <div class="w-full lg:w-1/2 flex items-center justify-center pb-10 lg:pb-0">
        <div class="w-[80%] lg:w-[60%]">
            <div class="who-we-help-slider">
                <?php render_slider_points() ?>
            </div>
        </div>
    </div>
</section>