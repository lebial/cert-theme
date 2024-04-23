<?php
function render_excerpt_or_post_content($custom_post_id, $post_excerpt)
{
    $post_content = get_field('post_content', $custom_post_id);
    if ($post_content) {
        $text_content = trim(strip_tags($post_content[0]['post_text']));
        $custom_excerpt = substr($text_content, 0, 140);
        $custom_excerpt .= '...';
        echo $custom_excerpt;
        return null;
    }
    echo $post_excerpt;
}

?>
<section class="ai-insights__posts py-8 px-10 lg:px-20 lg:mt-14">
  <!-- <div class="tags__container flex mt-4 max-w-screen-lg mx-auto pl-4"> -->
  <div class="hidden lg:block">
    <?php get_template_part('components/ai-insights/filter-buttons'); ?>
  </div>
  <main class="ai__posts__container mt-10 flex justify-center flex-col">
    <div class="w-full max-w-screen-lg grid grid-cols-1 lg:grid-cols-3 gap-5 auto-rows-fr mx-auto" id="scrollContent">
      <?php get_template_part('components/ai-insights/ai-insights-post-render') ?>
    </div>
    <div class="w-full flex justify-center pb-12"><?php render_load_more()?></div>
  </main>
</section>