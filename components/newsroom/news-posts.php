<?php
function render_news_cards()
{
  if (have_posts()):
    while (have_posts()):
      the_post();
      $content = get_the_content();
      $content = apply_filters('the_content', $content);
      $content = str_replace(']]>', ']]&gt;', $content);

      $content = preg_replace('#<h2(.*?)>(.*?)</h2>#is', '', $content);

      $content = wp_strip_all_tags($content);
      $content = substr($content, 0, 130);
      $content .= '...';

      $tags = get_the_tags();
      echo '
    <div class="ai_insight_card rounded-lg mb-4 p-4 flex flex-col mx-10 lg:mx-0 transition-all duration-300 hover:scale-105">
      <div class="ai_card_body shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px] p-6 rounded-xl flex-1 flex flex-col">
        <p class="text-gray-400 text-base mb-4 uppercase">' . $tags[0]->name . '</p>
        <h3 class=" text-dark-blue-background text-sm font-bold mb-2">' . get_the_title() . '</h3>
        <p class="text-dark-blue-background text-xs mb-2">
          ' . $content . '
        </p>
        <p class="text-gray-400 text-xs">' . get_the_date("M j, Y") . '</p>
        <div class="flex-1 flex items-end">
          <a href="' . get_the_permalink() . '" class="py-1 px-2 border border-solid rounded-3xl border-primary text-primary text-xs inline-block mt-4 transition-all duration-300 hover:bg-primary hover:text-white">Read Article</a>
        </div>
      </div>
    </div>';

    endwhile;
  endif;
}

?>
<section class="news__container">
  <h2 id="dynamicHeader"
    class="text-2xl xl:text-4xl reveal-text text-dark-blue-background mx-auto text-center pt-8 pb-6 lg:py-12 mb-0">
    Latest
    News</h2>
  <div class="w-full max-w-screen-lg grid grid-cols-1  lg:grid-cols-3 gap-5 mx-auto auto-rows-fr" id="scrollContent">
    <?php render_news_cards() ?>
  </div>
  <div class="w-full flex justify-center mb-20"><?php render_load_more() ?></div>
</section>