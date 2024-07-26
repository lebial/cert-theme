<?php
function render_who_we_help_cards()
{

    $cards = get_field('who_we_help_options');
    foreach ($cards as $card) {
        echo '<a class="flex justify-center" href="' . $card['link'] . '">
            <div class="au__solutions__cards--card w-64 h-36 flex justify-center items-center m-4 relative overflow-hidden rounded-xl lg:transition lg:ease-in-out lg:delay-150 lg:hover:-translate-y-1 lg:hover:scale-105 lg:duration-300">
              <img class="w-full h-full absolute top-0 left-0" src="' . $card['image'] . '" alt="' . $card['title'] . ' image">
              <div class="relative flex items-center">
                <p class="leading-snug">' . $card['title'] . '</p>
                <div class="ml-1 w-8">
                    <svg id="Layer_1" style="enable-background:new 0 0 64 64;" version="1.1" viewBox="0 0 64 64" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g id="Icon-Chevron-Left" transform="translate(237.000000, 335.000000)"><polyline class=" fill-primary" id="Fill-35" points="-210.9,-289 -212.9,-291 -201.1,-302.7 -212.9,-314.4 -210.9,-316.4 -197.1,-302.7      -210.9,-289    "></polyline></g></g></svg>
                </div>
              </div>
            </div>
          </a>';
    }
}

?>
<section class="au__solutions w-full h-full py-16 lg:py-24 bg-indigo-50">
    <h3 class="text-dark-blue-background text-2xl lg:text-3xl text-center">
        <?php the_field('who_we_help_title') ?>
    </h3>
    <p class="text-dark-blue-background text-center mx-auto"><?php the_field('who_we_help_copy') ?></p>
    <div class="w-full lg:w-11/12 flex flex-col items-center mx-auto">
        <h3 class="font-bold text-2xl xl:text-4xl text-center block pb-8 mx-6 text-dark-blue-background reveal-text">
            <?php the_field('solutions_title') ?>
        </h3>
        <div class="au__solutions__cards w-full max-w-[930px] flex flex-wrap justify-center ">
            <?php render_who_we_help_cards() ?>
        </div>
    </div>
</section>