<?php

function render_hightlight_cards()
{
  $platform_cards = get_field('highlight_cards');

  foreach ($platform_cards as $card) {
    echo '
    <div class="platform__highlight__card h-full">
      <div class=" platform__highlight__card__body shadow-lg relative flex flex-col items-center w-full bg-dark-background px-3 py-10 rounded-xl h-full overflow-hidden">
        <div class="w-full h-full absolute top-0 left-0 bg-dark-blue-background before:content-['."''".'] before:block before:w-full before:h-full before:bg-dark-blue-background before:bg-opacity-60 before:absolute before:top-0 before:z-20">
          <img src="'.$card['card_background'].'" alt="card background" class="card__background absolute top-0 left-0 w-full h-full object-cover z-10 "/>
        </div>
        <div class="w-full h-full z-20 flex flex-col items-center">
          <p class="text-white font-bold text-2xl text-center">'.$card['card_title'].'</p>
          <div class=" w-32 bg-primary h-px mb-8"></div>
          <p class="text-white font-bold text-lg">'.$card['card_subtitle'].'</p>
          <p class="text-white text-base text-center">
          '.$card['card_content'].'
          </p>
        </div>
      </div>
    </div>
    ';
  }
}

?>
<section class="w-full py-28 border-t border-gray-500 border-solid">
  <div class="highlight__slider max-w-5xl mx-auto">
    <?php render_hightlight_cards() ?>
  </div>
</section>