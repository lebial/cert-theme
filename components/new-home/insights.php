<?php
function render_new_cards()
{
    $related_posts = get_field('related_posts');
    if (!$related_posts)  $related_posts = get_realted_posts_by_tags();
    foreach ($related_posts as $tmp_post_id) {
        echo '<div class="px-8 py-0 lg:py-4 sm:w-1/2 lg:w-1/3 lg:transition lg:ease-in-out lg:delay-150 lg:hover:-translate-y-1 lg:hover:scale-105 lg:duration-300">';
        echo '<div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg">';
        echo '<img class="rounded-t-lg md:h-30 lg:h-44 2xl:h-52 w-full object-cover object-center blur-[2px] hover:blur-none" src="' . get_field('post_hero_image', $tmp_post_id) . '" alt="">';
        echo '<div class="insights__card__text md:h-64 lg:h-56 2xl:h-64 flex flex-col justify-between p-4 custom-shadow rounded-b-lg">';
        echo '<div class="line-clamp overflow-hidden">';
        echo '<h3 class="text-base md:text-xl 2xl:text-xl lg:leading-5 2xl:leading-6 font-semibold mb-3 mt-2 text-gray-header">' . get_the_title($tmp_post_id) . '</h3>';
        echo '<div class="mb-0">' . get_field('post_content', $tmp_post_id)[0]['post_text'] . '</div>';
        echo '</div>';
        echo '<div class="flex items-center flex-wrap pt-4 pb-3 ">';
        echo '<a href="' . get_permalink($tmp_post_id) . '" target="_blank" class="text-gray-header font-semibold cursor-pointer inline-flex items-center md:mb-2 lg:mb-0 underline underline-offset-1  hover:text-primary transition duration-300 ease-in text-xs md:text-sm 2xl:text-base">Read the Article
                                    <svg class="w-3 h-3 md:w-4 md:h-4 ml-1" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
}
?>

<section class="home__insights__section w-full h-full flex items-center">
    <div class="container px-5 pb-20 lg:pb-28 2xl:pb-32 pt-16 mx-auto">
        <div class="text-center mb-4 md:mb-8 lg:mb-14">
            <h3 class="hidden lg:inline reveal-text text font-semibold text-2xl lg:text-4xl text-center text-gray-header">Certilytics News & Expert Insights</h5>
                <h3 class="lg:hidden reveal-text text font-semibold text-2xl md:text-3xl lg:text-4xl text-center text-gray-header">Certilytics News & <br> Expert Insights</h5>
        </div>
        <div class="hidden lg:flex flex-wrap -m-4 w-10/12 mx-auto">
            <?php render_new_cards() ?>
        </div>

        <!-- mobile section-->
        <div class="lg:hidden w-full md:w-6/12 relative mx-auto">
            <div class="home__insights__slider mt-8 lg:mt-16 relative z-20">
                <?php render_new_cards() ?>
            </div>
            <div class="home__insights__slider__arrows w-[100vw] md:w-[65vw] absolute flex justify-between top-1/2 left-1/2 z-30" style="transform: translate(-50%, -50%)">
                <?php custom_slider_arrows('home__insights__slider') ?>
            </div>
        </div>
    </div>
</section>