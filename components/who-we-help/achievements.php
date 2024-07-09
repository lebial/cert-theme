<?php
function render_nav_links()
{
    $options = get_field('navigation_links');
    foreach ($options as $option) {
        echo '
        <div class="flex px-6">
            <a class="text-xl" href="' . $option['url'] . '">
                ' . $option['text'] . '
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="69" viewBox="0 0 40 69" fill="none" class="w-2 h-3 inline">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.0167 1.02513C4.64987 -0.341709 2.43379 -0.341709 1.06696 1.02513C-0.299879 2.39196 -0.299879 4.60804 1.06696 5.97487L29.253 34.1609L1.02513 62.3889C-0.341709 63.7557 -0.341709 65.9718 1.02513 67.3386C2.39196 68.7054 4.60804 68.7054 5.97487 67.3386L38.8553 34.4581L38.8549 34.4577L39.1521 34.1605L6.0167 1.02513Z" fill="#F4695B"/>
                </svg>
            </a>
        </div>
        ';
    }
}

function render_achievements()
{
    $achievements = get_field('achievements');
    foreach ($achievements as $achievement) {
        echo '
            <div class="achievement__body flex flex-col items-center mx-14">
                <p class="text-4xl text-dark-blue-background mb-4 font-bold">' . $achievement['title'] . '</p>
                <p class="text-2xl text-dark-blue-background text-center">' . $achievement['body'] . '</p>
            </div>
        ';
    }
}

?>
<section class="achievements-section">
    <div class="navigation__bar flex justify-center py-10 border-b-4 border-solid border-gray-200">
        <div class="flex">
            <?php render_nav_links() ?>
        </div>
    </div>
    <div class="flex justify-center py-20">
        <h3 class="text-4xl text-center"><?php the_field('achievements_title') ?></h3>
    </div>
    <div class="achievementes__container pb-20">
        <div class="flex justify-center">
            <?php render_achievements() ?>
        </div>
    </div>
</section>