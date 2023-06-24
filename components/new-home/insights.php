<?php 
    function render_new_cards() {
        $related_posts = get_field('related_posts');
        if (!$related_posts)  $related_posts = get_realted_posts_by_tags();
        foreach ($related_posts as $tmp_post_id) {
        echo '<div class="px-8 py-4 sm:w-1/2 lg:w-1/3 hover:scale-105">';
            echo '<div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg">';
                echo '<img class="rounded-t-lg md:h-30 lg:h-44 2xl:h-52 w-full object-cover object-center blur-[2px] hover:blur-none" src="' . get_field('post_hero_image', $tmp_post_id) . '" alt="">';
            echo '<div class="insights__card__text md:h-40 lg:h-56 2xl:h-64 flex flex-col justify-between p-4 custom-shadow rounded-b-lg">';
                echo '<div class="line-clamp overflow-hidden">';
                    echo '<h3 class="lg:text-lg 2xl:text-xl lg:leading-5 2xl:leading-6 font-semibold mb-3 mt-2 text-gray-header">' . get_the_title($tmp_post_id) . '</h3>';
                    echo get_field('post_content', $tmp_post_id)[0]['post_text'];
                echo '</div>';
                echo '<div class="flex items-center flex-wrap pt-4 pb-3 ">';
                        echo '<a href="'.get_permalink($tmp_post_id).'" target="_blank" class="text-gray-header font-semibold cursor-pointer inline-flex items-center md:mb-2 lg:mb-0 underline underline-offset-1  hover:text-primary transition duration-300 ease-in lg:text-sm 2xl:text-base">Read the Article
                                    <svg class="w-4 h-4 ml-1" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
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

<section class="w-full h-full flex items-center">
    <div class="container px-5 lg:pb-28 2xl:pb-32 pt-16 mx-auto">
        <div class="text-center mb-14">
            <h3 class="reveal-text text font-semibold  text-center text-gray-header">Certilytics News & Expert Insights</h5>
        </div>
        <div class="flex flex-wrap -m-4 w-10/12 mx-auto">
            <?php render_new_cards() ?>
        </div>
    </div>
</section>