<?php

global $wp_query;
$pagename = $wp_query->queried_object->post_name;
$class = $pagename == 'government' ? 'hidden' : '';
function render_achievements()
{
    $achievements = get_field('achievements');
    foreach ($achievements as $idx => $achievement) {
        $delay = $idx * 100;
        echo '
            <div class="achievement__body flex flex-col items-center mx-4 lg:mx-14 mb-4 lg:mb-0">
                <p class="text-3xl 2xl:text-4xl text-dark-blue-background mb-4 font-bold" data-aos="fade-up" data-aos-delay="' . $delay . '">' . $achievement['title'] . '</p>
                <p class="text-lg lg:text-xl 2xl:text-2xl text-dark-blue-background text-center">' . $achievement['body'] . '</p>
            </div>
        ';
    }
}

?>
<section class="achievements-section <?php echo $class ?>">
    <div class="flex justify-center py-10 lg:py-20 px-6 lg:px-0">
        <h3 class="text-4xl text-center text-dark-blue-background reveal-text hidden lg:block">
            <?php the_field('achievements_title') ?>
        </h3>
        <h3 class="text-2xl text-center text-dark-blue-background block lg:hidden" data-aos="fade-up">
            <?php echo strip_tags(get_field('achievements_title')) ?>
        </h3>
    </div>
    <div class="achievementes__container pb-10 lg:pb-20">
        <div class="flex flex-col lg:flex-row justify-center">
            <?php render_achievements() ?>
        </div>
    </div>
</section>