<?php
// function render_nav_links()
// {
//     $options = get_field('navigation_links');
//     foreach ($options as $option) {
//         echo '
//         <div class="flex px-6">
//             <a class="lg:text-lg 2xl:text-xl text-dark-blue-background group transition-all duration-300 hover:text-primary mb-4 lg:mb-0 text-center lg:text-start" href="' . $option['url'] . '">
//                 ' . $option['text'] . '
//                 <svg xmlns="http://www.w3.org/2000/svg" width="40" height="69" viewBox="0 0 40 69" fill="none" class="w-2 h-3 transition-all duration-300 inline group-hover:translate-x-1">
//                     <path fill-rule="evenodd" clip-rule="evenodd" d="M6.0167 1.02513C4.64987 -0.341709 2.43379 -0.341709 1.06696 1.02513C-0.299879 2.39196 -0.299879 4.60804 1.06696 5.97487L29.253 34.1609L1.02513 62.3889C-0.341709 63.7557 -0.341709 65.9718 1.02513 67.3386C2.39196 68.7054 4.60804 68.7054 5.97487 67.3386L38.8553 34.4581L38.8549 34.4577L39.1521 34.1605L6.0167 1.02513Z" fill="#F4695B"/>
//                 </svg>
//             </a>
//         </div>
//         ';
//     }
// }

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
<section class="achievements-section">
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