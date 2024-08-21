<?php
function render_video_or_case_study($post_id)
{
  $post_type = get_field('post_type', $post_id);
  $keys = $post_type == 'video' ?
    ['post_type' => 'video_post', 'image_key' => 'video_thumbnail']
    : ['post_type' => 'case_study_post', 'image_key' => 'case_study_card_thumbnail'];
  $post_fields = get_field($keys['post_type'], $post_id);
  $img_url = $post_fields[$keys['image_key']];
  if ($post_type)
    $img_url = get_field('post_hero_image', $post_id);
  $tags = get_the_tags($post_id);
  $text = $post_type == 'video' ? 'Watch Video' : 'Read More';
  echo '
      <div class="resources_video_card rounded-lg mb-4 p-4 flex flex-col flex-1">
        <div class="ai_card_body shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px] p-6 rounded-xl flex-1 flex flex-col transition-all duration-300 hover:scale-105">
          <p class="text-gray-400 text-xs mb-4 uppercase">' . $tags[0]->name . '</p>
          <img src="' . $img_url . '" alt="post thumbnail" class=" rounded-lg my-4"/>
          <h3 class=" text-dark-blue-background text-sm font-bold mb-2">' . get_the_title($post_id) . '</h3>
          <div class="flex-1 flex items-end">
            <a href="' . get_the_permalink($post_id) . '" class="py-1 px-2 border border-solid rounded-3xl border-primary text-primary text-xs inline-block mt-4 transition-all duration-300 hover:bg-primary hover:text-white"">' . $text . '</a>
          </div>
        </div>
      </div>';
}
function render_resources()
{
  $resources = get_field('health_plan_resources');
  foreach ($resources as $resource) {
    render_video_or_case_study($resource->ID);
  }
}
?>
<section class="health__plan__resources pb-16">
  <h3 class=" text-dark-blue-background text-center py-16 mb-0 reveal-text text-2xl lg:text-3xl hidden lg:block">
    <?php the_field('resources_title') ?>
  </h3>
  <h3 class=" text-dark-blue-background text-center py-16 mb-0 text-2xl lg:text-3xl block lg:hidden" data-aos="fade-up">
    <?php the_field('resources_title') ?>
  </h3>
  <div class="resources__container mx-auto max-w-screen-lg w-10/12 lg:w-full flex flex-col lg:flex-row">
    <?php render_resources() ?>
  </div>
</section>