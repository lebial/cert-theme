<?php 
function render_news_cards() {
if (have_posts()) : while (have_posts()) : the_post();
  $content = get_field('post_content', get_the_ID());
  $custom_content = substr(strip_tags($content[0]['post_text']), 0, 140);
  $custom_content .= ',...';
  $tags = get_the_tags();
  echo '
    <div class="ai_insight_card rounded-lg mb-4 p-4">
      <div class="ai_card_body shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px] p-6 rounded-xl">
      <p class="text-gray-400 text-base mb-4 uppercase">'.$tags[0]->name.'</p>
      <h3 class=" text-dark-blue-background text-sm font-bold mb-2">'.get_the_title().'</h3>
      <p class="text-dark-blue-background text-xs mb-2">
        '.$custom_content.'
      </p>
      <p class="text-gray-400 text-xs">'.get_the_date("M j, Y").'</p>
      <a href="'.get_the_permalink().'" class="py-1 px-2 border border-solid rounded-3xl border-primary text-primary text-xs inline-block mt-4 transition-all duration-300 hover:bg-primary hover:text-white">Read Article</a>
      </div>
    </div>';

endwhile;
endif; 
}

?>
<section class="news__container">
  <h2 class=" text-dark-blue-background mx-auto text-center py-12">Latest News</h2>
  <div class="w-full max-w-screen-lg grid grid-cols-3 gap-5 mx-auto" id="scrollContent">
    <?php render_news_cards()?>
  </div>
  <div class="w-full flex justify-center mb-12"><?php render_load_more()?></div>
</section>
