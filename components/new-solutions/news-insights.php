<?php
function render_related_content()
{
    $posts = get_field('featured_content');
    $post_type = get_field('post_type');
    $keys = $post_type == 'video' ?
        ['post_type' => 'video_post', 'image_key' => 'video_thumbnail', 'tag' => 'video']
        : ['post_type' => 'case_study_post', 'image_key' => 'case_study_card_thumbnail', 'tag' => 'case-study'];
    $related_text = $post_type == 'video' ? 'Watch Video' : 'Read Study';
    if (empty($posts))
        $posts = get_related_resources($keys['tag']);

    foreach ($posts as $post) {
        $post_fields = get_field($keys['post_type'], $post->ID);
        $img_url = $post_fields[$keys['image_key']];
        $tags = get_the_tags($post->ID);
        echo '
      <div class="resources_video_card rounded-lg mb-4 lg:mb-0 h-full p-4 !flex flex-col w-96">
        <div class="ai_card_body shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px] p-6 rounded-xl flex-1 flex flex-col transition-all duration-300 hover:scale-105 bg-white">
          <p class="text-gray-400 text-xs mb-4 uppercase">' . $tags[0]->name . '</p>
          <img src="' . $img_url . '" alt="post thumbnail" class=" rounded-lg my-4"/>
          <h3 class=" text-dark-blue-background text-sm font-bold mb-2">' . get_the_title($post->ID) . '</h3>
          <div class="flex-1 flex items-end">
            <a href="' . get_the_permalink($post->ID) . '" class="py-1 px-2 border border-solid rounded-3xl border-primary text-primary text-xs inline-block mt-4 transition-all duration-300 hover:bg-primary hover:text-white">' . $related_text . '</a>
          </div>
        </div>
      </div>';
    }

}

?>

<section class=" news__insights__section py-14">
    <p class=" text-dark-blue-background text-2xl lg:text-3xl text-center font-bold mx-auto">
        <?php the_field('insights_title') ?>
    </p>
    <div class="cards__container w-[84%] lg:w-auto mt-14 max-w-5xl flex mx-auto">
        <?php render_related_content() ?>
    </div>
</section>