<?php
$icon = '
<svg class="w-3 h-3 fill-dark-blue-background group-hover:fill-primary" height="800px" width="800px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 185.343 185.343" xml:space="preserve">
  <g>
    <g>
      <path d="M51.707,185.343c-2.741,0-5.493-1.044-7.593-3.149c-4.194-4.194-4.194-10.981,0-15.175    l74.352-74.347L44.114,18.32c-4.194-4.194-4.194-10.987,0-15.175c4.194-4.194,10.987-4.194,15.18,0l81.934,81.934    c4.194,4.194,4.194,10.987,0,15.175l-81.934,81.939C57.201,184.293,54.454,185.343,51.707,185.343z"/>
    </g>
  </g>
</svg>
';

function render_filter_options()
{
  $options = get_field('filter_tags', get_option('page_for_posts'));
  $options_with_default = [['url' => '/resources/#scrollToTitle', 'tag_name' => 'All'], ...$options];

  foreach ($options_with_default as $idx => $option) {
    $new_url = $idx == 0 ? '/resources/#scrollToTitle' : '/resources/?tag=' . $option['url'] . '#scrollToTitle';
    echo '
      <a href="' . $new_url . '" class="tag__resource__option text-dark-blue-background flex items-center group hover:text-primary mr-4 font-bold flex-[0_0_40%] lg:flex-none justify-center mt-2 lg:mt-0 hover:underline hover:underline-offset-[3px] hover:decoration-2" data-option="' . $option['url'] . '">
        ' . $option['tag_name'] . ' 
        <svg class="ml-1 w-2 h-2 fill-dark-blue-background group-hover:fill-primary" height="800px" width="800px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 185.343 185.343" xml:space="preserve">
          <g>
            <g>
              <path d="M51.707,185.343c-2.741,0-5.493-1.044-7.593-3.149c-4.194-4.194-4.194-10.981,0-15.175    l74.352-74.347L44.114,18.32c-4.194-4.194-4.194-10.987,0-15.175c4.194-4.194,10.987-4.194,15.18,0l81.934,81.934    c4.194,4.194,4.194,10.987,0,15.175l-81.934,81.939C57.201,184.293,54.454,185.343,51.707,185.343z"/>
            </g>
          </g>
        </svg>
      </a>
    ';
  }
}
function render_articles()
{
  $img = get_field('post_hero_image', get_the_ID());
  $tags = get_the_tags();
  echo '
    <div class="resources_video_card ai_insight_card rounded-lg mb-4 p-4 flex flex-col">
      <div class="ai_card_body shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px] p-6 rounded-xl flex-1 flex flex-col transition-all duration-300 hover:scale-105">
        <p class="text-gray-400 text-xs mb-4 uppercase">' . $tags[0]->name . '</p>
        <img src="' . $img . '" alt="post thumbnail" class=" rounded-lg my-4"/>
        <h3 class=" text-dark-blue-background text-sm font-bold mb-2">' . get_the_title() . '</h3>
        <div class="flex-1 flex items-end">
          <a href="' . get_the_permalink() . '" class="py-1 px-2 border border-solid rounded-3xl border-primary text-primary text-xs inline-block mt-4 transition-all duration-300 hover:bg-primary hover:text-white">Read Article</a>
        </div>
      </div>
    </div>';
}

function render_video_or_case_study()
{
  $post_type = get_field('post_type');
  $keys = $post_type == 'video' ?
    ['post_type' => 'video_post', 'image_key' => 'video_thumbnail']
    : ['post_type' => 'case_study_post', 'image_key' => 'case_study_card_thumbnail'];
  $post_fields = get_field($keys['post_type'], get_the_ID());
  $img_url = $post_fields[$keys['image_key']];
  $tags = get_the_tags();
  $text = $post_type == 'video' ? 'Watch Video' : 'Read Study';
  echo '
      <div class="resources_video_card rounded-lg mb-4 p-4 flex flex-col">
        <div class="ai_card_body shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px] p-6 rounded-xl flex-1 flex flex-col transition-all duration-300 hover:scale-105">
          <p class="text-gray-400 text-xs mb-4 uppercase">' . $tags[0]->name . '</p>
          <img src="' . $img_url . '" alt="post thumbnail" class=" rounded-lg my-4"/>
          <h3 class=" text-dark-blue-background text-sm font-bold mb-2">' . get_the_title() . '</h3>
          <div class="flex-1 flex items-end">
            <a href="' . get_the_permalink() . '" class="py-1 px-2 border border-solid rounded-3xl border-primary text-primary text-xs inline-block mt-4 transition-all duration-300 hover:bg-primary hover:text-white"">' . $text . '</a>
          </div>
        </div>
      </div>';
}

function render_dynamic_content($tag_name)
{
  $components = [
    'article' => 'render_articles',
    'video' => 'render_video_or_case_study',
    'case study' => 'render_video_or_case_study',
  ];
  $components[$tag_name]();
}
function render_resources_cards()
{
  global $wp;
  global $wp_query;
  $req_tag = $wp->query_vars['tag'];
  $allowed_filter_tags = $req_tag ? [$req_tag] : ['video', 'case-study', 'webinar', 'article'];
  $wp_query = new WP_Query(
    [
      'posts_per_page' => 6,
      'paged' => 1,
      'tag_slug__in' => $allowed_filter_tags,
      'orderby' => 'date',
      'order' => 'desc',
    ]
  );
  if ($wp_query->have_posts()):
    while ($wp_query->have_posts()):
      $wp_query->the_post();
      $tags = get_the_tags();
      $tag_name = $tags[0]->name;
      render_dynamic_content($tag_name);
    endwhile;
  endif;
  wp_reset_postdata();
}
?>

<section class="resources__posts py-8 lg:py-14">
  <div class="filter__options flex flex-col lg:flex-row justify-center flex-wrap" id="scrollToTitle">
    <?php render_filter_options() ?>
  </div>
  <main class="mt-14">
    <div class="w-full max-w-screen-lg grid grid-cols-1 lg:grid-cols-3 gap-5 mx-auto auto-rows-fr" id="scrollContent">
      <?php render_resources_cards() ?>
    </div>
    <div class="w-full flex justify-center mb-20"><?php render_resources_load_more('Resources'); ?></div>
    <div class="underline underline-offset-[3px] decoration-2"></div>
  </main>
</section>