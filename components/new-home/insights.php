<?php
function render_new_cards()
{
    $cards = get_field('news_and_insights_cards');
    foreach ($cards as $card) {
        echo '<div class="px-8 py-4 sm:w-1/2 lg:w-1/3">';
            echo '<div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg">';
                echo '<img class="rounded-t-lg lg:h-40 md:h-30 w-full object-cover object-center" src="' . $card['image'] . '" alt="">';
                echo '<div class="insights__card__text p-4 custom-shadow rounded-b-lg">';
                    echo '<h3 class="lg:text-lg 2xl:text-2xl lg:leading-5 2xl:leading-6 font-semibold mb-3 mt-2 text-gray-header">' . $card['title'] . '</h3>';
                    echo $card['description'];
                    echo '<div class="flex items-center flex-wrap pt-4 pb-5 ">';
                        echo '<a class="text-gray-header font-semibold cursor-pointer inline-flex items-center md:mb-2 lg:mb-0 underline underline-offset-1  hover:text-primary transition duration-300 ease-in lg:text-sm 2xl:text-base">' . $card['button_text'] . '
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
            <h5 class="reveal-text text first-text font-semibold text-2xl lg:text-5xl text-center text-gray-header">Certilytics News & Expert Insights</h5>
        </div>
        <div class="flex flex-wrap -m-4 w-10/12 mx-auto">
            <?php render_new_cards() ?>
        </div>
    </div>
</section>