<?php
function render_cards()
{
  $cards = get_field('data_cards');
  foreach ($cards as $card) {
    echo '<div class="card  flex-1 flex flex-col items-center justify-start h-fit ">';
    echo '<p class=" text-4xl font-bold mb-0">' . $card['title'] . '</p>';
    echo '<p class="text-center text-xl">' . $card['description'] . '</p>';
    echo '</div>';
  }
}
?>
<section class="au__story w-full">
  <div class="w-full px-4 lg:px-0 text-center my-12 lg:my-24 relative">
    <h2 class="lg:text-[#5E5E5E] text-6xl font-light pb-8"><?php the_field('story_title') ?></h2>
    <div class="au__story__description w-11/12 md:w-9/12 lg:w-[84%] 2xl:w-7/12 mx-auto">
      <p class="text-[#5E5E5E] max-w-none text-xl 2xl:text-2xl">
        We launched in 2014 with three employees and two fundamental customers. Today we have over 120 employees, dozens
        of customers, and 250M+ patient lives on platform. How'd we do it? Simple. We delivered value
        from day one. We were driven by our frustration with existing analytic tools and belief that we could
        do better.</br></br>
        Our team includes data scientists, actuaries, clinicians, developers, and data engineers whose
        combined expertise has transformed our customers' businesses for the age of AI.
        <?php //the_field('story_description')
        ?>
      </p>
    </div>
  </div>
  <div class="au__heading__cards w-full bg-light-blue-background">
    <div class="au__heading__cards w-full lg:w-10/12 px-10 mx-auto py-10">
      <div class="heading__cards__container flex flex-col md:flex-row md:space-x-4 space-y-4 md:space-y-0">
        <?php render_cards() ?>
      </div>
    </div>
  </div>
</section>