<?php
$post = get_field('featured_post', 'options');
$str_date = strtotime($post->post_date);
$img = get_field('post_hero_image', $post->ID);
$content = get_field('post_content', $post->ID);
$custom_content = substr(strip_tags($content[0]['post_text']), 0, 140);
$custom_content .= '...';
$link = get_permalink($post);
?>
<section class="ai__insights__highlighted__post w-full pt-14 lg:pt-20 flex justify-center flex-col lg:flex-row">
  <div class="block lg:hidden mb-10">
    <?php get_template_part('components/ai-insights/filter-buttons')?>
  </div>
  <div class="px-10">
    <div class="highlighted__post__container flex flex-col lg:flex-row w-full items-center lg:items-start">
      <div class="lg:mr-10 w-full flex justify-center lg:justify-start">
        <img class="max-w-md rounded-xl w-11/12 lg:w-auto" src="<?php echo $img ?>" alt="featured post image">
      </div>
      <div class=" w-11/12 lg:w-8/12 max-w-md">
        <p class=" text-gray-400 mb-2 text-base"><?php echo wp_date('M j, Y', $str_date)?></p>
        <p class="mb-2 font-bold text-dark-blue-background text-xl"><?php echo $post->post_title ?></p>
        <p class="text-base max-w-lg text-dark-blue-background">
          <?php echo $custom_content ?>
        </p>
        <a class="border border-primary border-solid text-primary inline-block
                  rounded-3xl px-2 py-2 mt-2 !text-base tracking-tight
                   transition-all duration-300 hover:bg-primary hover:text-white
                  "
                  href="<?php echo $link ?>">Read Article</a>
      </div>
    </div>
  </div>
  <div class="divider w-full h-px bg-gray-400 mt-10 block lg:hidden"></div>
</section>