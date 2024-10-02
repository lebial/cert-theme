<?php
global $wp_query;
$pagename = $wp_query->queried_object->post_name;
$class = $pagename == 'government' ? 'hidden' : '';
function render_nav_links()
{
    $options = get_field('navigation_links');
    foreach ($options as $option) {
        echo '
        <div class="flex px-6">
            <a class="lg:text-lg 2xl:text-xl text-dark-blue-background group transition-all duration-300 hover:text-primary mb-4 lg:mb-0 text-center lg:text-start" href="' . $option['url'] . '">
                ' . $option['text'] . '
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="69" viewBox="0 0 40 69" fill="none" class="w-2 h-3 transition-all duration-300 inline group-hover:translate-x-1">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.0167 1.02513C4.64987 -0.341709 2.43379 -0.341709 1.06696 1.02513C-0.299879 2.39196 -0.299879 4.60804 1.06696 5.97487L29.253 34.1609L1.02513 62.3889C-0.341709 63.7557 -0.341709 65.9718 1.02513 67.3386C2.39196 68.7054 4.60804 68.7054 5.97487 67.3386L38.8553 34.4581L38.8549 34.4577L39.1521 34.1605L6.0167 1.02513Z" fill="#F4695B"/>
                </svg>
            </a>
        </div>
        ';
    }
}
?>

<section class="navigation__links__who-we-help <?php echo $class ?>">
    <div class="navigation__bar flex flex-col lg:flex-row justify-center py-10 border-b-4 border-solid border-gray-200">
        <div class="flex flex-col lg:flex-row items-center lg:items-start">
            <?php render_nav_links() ?>
        </div>
    </div>
</section>