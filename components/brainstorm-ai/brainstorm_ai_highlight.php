<?php
function render_highlight_cards() {
  $brainstorm_cards = get_field('brainstorm_cards');
  foreach ($brainstorm_cards as $card ) {
    echo '
    <div class="brainstorm__highlight__card flex-1 px-8">
      <img class="w-16 h-16 mb-4" src="'.$card['icon'].'" alt="brainstorm card icon">
      <p class="font-bold mb-2 text-3xl">'.$card['title'].'</p>
      <p class="">'.$card['body'].'</p>
    </div>
    ';
  }
}
?>
<section class="brainstorm__ai__highlight w-full py-16">
  <p class=" text-dark-blue-background text-5xl mx-auto max-w-none text-center font-bold ">How Our Brainstorm AI<span class="registeredSymbol !text-2xl">®</span> is Different</p>
  <div class="w-full flex mt-16 max-w-[1300px] mx-auto">
    <?php render_highlight_cards()?>
  </div>
</section>