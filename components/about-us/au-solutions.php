<?php
$arrow_image = get_field('arrow_image');
function render_au_solution_cards($image)
{
  $cards = get_field('solution_images');
  foreach ($cards as $card) {
    echo '<a class="flex justify-center" href="' . $card['link'] . '">
            <div class="au__solutions__cards--card w-64 h-36 flex justify-center items-center m-4 relative overflow-hidden rounded-xl lg:transition lg:ease-in-out lg:delay-150 lg:hover:-translate-y-1 lg:hover:scale-105 lg:duration-300">
              <img class="w-full h-full absolute top-0 left-0" src="' . $card['image'] . '" alt="' . $card['title'] . ' image">
              <div class="relative flex items-center">
                <p>' . $card['title'] . '</p>
                <img class="ml-2 w-2 h-4" src="' . $image . '" alt="">
              </div>
            </div>
          </a>';
  }
}

?>
<section class="au__solutions w-full h-full py-16 lg:py-24">
  <div class="w-full lg:w-11/12 flex flex-col items-center mx-auto">
    <h3 class="font-bold text-2xl xl:text-4xl text-center block pb-8 mx-6 text-dark-blue-background reveal-text" ><?php the_field('solutions_title')?></h3>
    <div class="au__solutions__cards w-full max-w-[930px] flex flex-wrap justify-center ">
      <?php render_au_solution_cards($arrow_image) ?>
    </div>
  </div>
</section>