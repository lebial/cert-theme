<?php
function render_highlight_cards() {
  $brainstorm_cards = get_field('brainstorm_cards');
  foreach ($brainstorm_cards as $card ) {
    echo '
    <div class="brainstorm__highlight__card flex-1 px-8">
      <img class="w-16 h-16 mb-4" src="'.$card['icon'].'" alt="brainstorm card icon">
      <p class="font-bold mb-2 text-2xl text-dark-blue-background">'.$card['title'].'</p>
      <p class="text-xl text-dark-blue-background">'.$card['body'].'</p>
    </div>
    ';
  }
}
?>
<section class="brainstorm__ai__highlight w-full py-32 ">
  <p class=" text-dark-blue-background text-3xl xl:text-4xl mx-auto max-w-none text-center font-bold reveal-text">How Our Brainstorm AI<span class=" align-super !text-xl">®</span> is Different</p>
  <div class="w-full flex mt-16 max-w-[1300px] mx-auto">
    <?php render_highlight_cards()?>
  </div>
</section>
<div class="w-full flex justify-center">
  <div class=" w-full h-px bg-gray-500/25"></div>
</div>