<?php
$arrow_image = get_field('arrow_image');
function render_au_solution_cards($image)
{
  $cards = get_field('solution_images');
  foreach ($cards as $card) {
    echo '<a class="flex justify-center" href="' . $card['link'] . '">
            <div class="au__solutions__cards--card w-64 h-36 flex justify-center items-center m-4 relative overflow-hidden">
              <img class="card__bg__image w-full h-full absolute top-0 left-0" src="' . $card['image'] . '" alt="' . $card['title'] . ' image">
              <div class="relative flex items-center">
                <p>' . $card['title'] . '</p>
                <img class="au__right__arrow ml-2 w-2 h-4" src="' . $image . '" alt="">
              </div>
            </div>
          </a>';
  }
}

?>
<section class="au__solutions w-full h-full py-16 lg:py-24">
  <div class="w-full lg:w-11/12 flex flex-col items-center mx-auto">
    <h2 class="text-3xl md:text-3xl lg:text-5xl font-bold text-center block pb-8 mx-6 text-dark-blue-background" ><?php the_field('solutions_title')?></h2>
    <div class="au__solutions__cards w-full max-w-[930px] flex flex-wrap justify-center ">
      <?php render_au_solution_cards($arrow_image) ?>
    </div>
  </div>
</section>