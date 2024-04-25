<?php
function render_featured_videos(){
  $arr = [1,2,3,4];
  foreach ($arr as $item) {
    get_template_part('components/resources/featured-slide');
  };
};
?>
<section class="resources__hero" style="background-image: url(<?php the_field('resources_hero_background') ?>);">
<div class="hero__featured__slider w-full">
  <?php render_featured_videos()?>
</div>
</section>