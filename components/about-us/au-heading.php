<?php
function render_cards()
{
  $cards = get_field('data_cards');
  foreach ($cards as $card) {
    echo '<div class="card  flex-1 flex flex-col items-center justify-start h-fit ">';
    echo '<p class=" text-4xl font-bold">' . $card['title'] . '</p>';
    echo '<p class="text-center text-xl">' . $card['description'] . '</p>';
    echo '</div>';
  }
}

?>
<section class="au__heading w-full">
  <img src="<?php the_field('banner_image') ?>" alt="group of people" class="au__heading__image w-full">
  <div class="au__heading__container w-full px-10 flex flex-col items-center">
    <h1 class="mt-8"><?php the_field('heading_title') ?></h1>
    <p><?php the_field('heading_description') ?></p>
  </div>

  <div class="au__heading__cards w-full bg-light-blue-background">
    <div class="au__heading__cards w-full lg:w-10/12 px-10 mx-auto py-10">
      <div class="heading__cards__container flex flex-col md:flex-row md:space-x-4 space-y-4 md:space-y-0">
        <?php render_cards() ?>
      </div>
    </div>
  </div>
</section>