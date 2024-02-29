<?php
function render_highlight_cards() {
  $brainstorm_cards = get_field('brainstorm_cards');
  foreach ($brainstorm_cards as $card ) {
    echo '
    <div class="brainstorm__highlight__card flex-1 mb-10 px-12 lg:px-0 lg:mb-0 flex flex-col items-center lg:items-start">
      <img class="w-16 h-16 mb-4" src="'.$card['icon'].'" alt="brainstorm card icon">
      <p class="font-bold mb-2 text-lg lg:text-2xl text-dark-blue-background text-center lg:text-left">'.$card['title'].'</p>
      <p class="text-lg lg:text-xl text-dark-blue-background text-center lg:text-left">'.$card['body'].'</p>
    </div>
    ';
  }
}
?>
<section class="brainstorm__ai__highlight w-full py-14 lg:py-32 ">
  <p class=" text-dark-blue-background text-2xl xl:text-4xl mx-auto max-w-none block lg:hidden text-center font-bold reveal-text">How BrainstormAI<span class=" align-super !text-xl">®</span> <br> is Different</p>
  <p class=" text-dark-blue-background text-2xl xl:text-4xl mx-auto max-w-none hidden lg:block text-center font-bold reveal-text">How BrainstormAI<span class=" align-super !text-xl">®</span> is Different</p>
  <div class="w-full flex flex-col lg:flex-row mt-16 max-w-[1300px] space-x-0 lg:space-x-28 mx-auto">
    <?php render_highlight_cards()?>
  </div>
</section>
<div class="w-full flex justify-center">
  <div class=" w-full h-px bg-gray-500/25"></div>
</div>