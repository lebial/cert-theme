<?php
function render_cards()
{
  $cards = get_field('data_cards');
  foreach ($cards as $card) {
    echo '<div class="card  flex-1 flex flex-col items-center justify-start h-fit ">';
    echo '<p class=" text-4xl font-bold mb-0 text-dark-blue-background">' . $card['title'] . '</p>';
    echo '<p class="text-center text-xl text-dark-blue-background">' . $card['description'] . '</p>';
    echo '</div>';
  }
}
?>
<section class="au__story w-full">
  <div class="w-full px-8 md:px-16 lg:px-0 text-left lg:text-center my-12 lg:my-24 relative">
    <h2 class=" text-gray-header text-4xl lg:text-6xl font-normal pb-0 lg:pb-8 text-center"><?php the_field('story_title') ?></h2>
    <div class="au__story__description w-full lg:w-[84%] 2xl:w-7/12 lg:mx-auto">
      <p class="text-[#5E5E5E] max-w-none text-center lg:text-left text-lg lg:text-xl 2xl:text-2xl">
        <?php the_field('story_description')
        ?>
      </p>
    </div>
  </div>
  <div class="au__heading__cards w-full bg-light-blue-background">
    <div class="au__heading__cards w-full lg:w-10/12 px-10 mx-auto py-20">
      <div class="heading__cards__container flex flex-col md:flex-row md:space-x-4 space-y-12 md:space-y-0">
        <?php render_cards() ?>
      </div>
    </div>
  </div>
</section>