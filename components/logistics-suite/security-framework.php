<?php
// <img class="w-24 h-12 lg:w-28 lg:h-16" src="' . $logo['image'] . '" alt="card image">
function render_logos()
{
    $logos = get_field('standard_images');
    foreach ($logos as $logo) {
        $url = $logo['logo_url'];
        $width_class = str_contains($logo['logo_url'], 'aicpa') ? 'w-auto h-auto lg:w-auto lg:h-16' : 'w-24 h-12 lg:w-28 lg:h-16';
        if ($url) {
            echo '
                    <a href="' . $url . '">
                        <img class="' . $width_class . '" src="' . $logo['image'] . '" alt="card image">
                    </a>
                ';
        } else {
            echo '<img class="' . $width_class . ' " src="' . $logo['image'] . '" alt="card image">';
        }
    }
}
?>
<section class="w-full bg-gray-secondary bg-opacity-50 py-12" id="mobileDataSecurity">
    <div class="w-full px-4 lg:px-0 text-center">
        <h3 class="mb-8 text-dark-blue-background font-semibold text-2xl lg:text-4xl"><?php the_field('title') ?></h3>
        <div class="w-11/12 md:w-8/12 md:max-w-8/12 mx-auto">
            <p class="text-dark-blue-background mx-auto mt-4 text-base lg:text-lg">
                <?php the_field('description') ?>
            </p>
        </div>
        <div class="w-8/12 mx-auto flex justify-center mt-12 mb-8 space-x-0 lg:space-x-8">
            <?php render_logos() ?>
        </div>
    </div>
</section>