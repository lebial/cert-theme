<?php

function render_hightlight_cards()
{
  $cards = array(1, 2, 3, 4);

  foreach ($cards as $card) {
    echo '
    <div class="higlight__card pr-4">
      <div class=" higlight__card__body flex flex-col items-center w-full bg-dark-background px-8 py-14 rounded-xl">
        <p class="text-white font-bold text-2xl text-center">250M Lives on Platform</p>
        <div class=" w-32 bg-primary h-px mb-8"></div>
        <p class="text-white font-bold text-lg">Scability is key</p>
        <p class="text-white text-base text-center">
          From Day 1, we were tasked with having to process a vast amount of data through our platform.
          We can scale our cloud-based platform to meet the demands and size of any data
        </p>
      </div>
    </div>
    ';
  }
}

?>
<section class="w-full">
  <div class="highlight__slider max-w-4xl mx-auto">
    <?php render_hightlight_cards() ?>
  </div>
</section>