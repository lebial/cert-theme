<?php
function render_data_list()
{
    $data_list = get_field('data_list');
    foreach ($data_list as $item) {
        echo '<li>' . $item . '</li>';
    };
}

function render_results_list()
{
    $result_list = get_field('results_list');
    foreach ($result_list as $result) {
        echo '<li>' . $result . '</li>';
    }
}
?>

<section class="actionable_intelligence w-full flex flex-col justify-center bg-dark-blue-background py-24">
    <h2 class="text-white text-4xl text-center relative z-20 mb-0 lg:-mb-20 px-3">
        <?php the_field('actionable_intelligence_section_title') ?></h2>
    <img src="<?php the_field('actionable_intelligence_section_image_desktop') ?>" class="hidden md:block relative z-10" alt="">
    <img src="<?php the_field('actionable_intelligence_section_image_mobile') ?>" class="block md:hidden relative z-10" alt="">
    <div class="flex justify-center px-6 mt-0 lg:-mt-24 relative z-20">
        <p class="text-white text-sm lg:text-xl text-center max-w-6xl">
            <?php the_field('results_description') ?>
        </p>
    </div>

</section>