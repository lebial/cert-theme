<?php
function get_resource_content($post_id)
{
  $tag_name = get_the_tags($post_id)[0]->name;
  if ($tag_name == 'video') {
    $video = get_field('video_post', $post_id);
    $video_url = $video['video_url'];
    $video_thumbnail = $video['video_thumbnail'];
    $content = substr($video['video_description'], 0, 130);
    $content .= '...';
    $markup = '
      <div class="w-full h-full absolute flex justify-center items-center top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-black bg-opacity-50 rounded-xl z-20">
        <button class="second_video_play_button " style="background-color: transparent !important;">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" viewBox="0 0 132 130" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M67 130C107.869 130 132 104.317 132 64C132 23.6832 107.869 0 67 0C26.1309 0 0 23.6832 0 64C0 104.317 26.1309 130 67 130ZM51.75 91.0478L96 65.5L51.75 39.9522V91.0478Z" fill="white" fill-opacity="0.6" />
          </svg>
        </button>
      </div>
      <video class="home__secondary__video object-cover w-full h-full rounded-xl shadow-lg" poster="' . $video_thumbnail . '" name="resources" data-videoname="' . $video['title'] . '">
        <source src="' . $video_url . '" type="video/mp4">
      </video>
    ';
    return ['html' => $markup, 'content' => $content];
  }
  if ($tag_name == 'case study') {
    $case_study = get_field('case_study_post', $post_id);
    $img_url = $case_study['case_study_card_thumbnail'];
    $markup = '<img src="' . $img_url . '" class="banner__image h-full rounded-xl shadow-lg w-full" alt="featured banner image" />';
    $content = substr($case_study['description'], 0, 130);
    $content .= '...';
    return ['html' => $markup, 'content' => $content];
  } else {
    $img_url = get_field('post_hero_image', $post_id);
    $markup = '<img src="' . $img_url . '" class="banner__image h-full rounded-xl shadow-lg w-full" alt="featured banner image" />';
    $content = get_clean_content($post_id);
    $content = substr($content, 0, 130);
    $content .= '...';
    return ['html' => $markup, 'content' => $content];
  }
}
function render_highlighted_cards()
{
  $cards = get_field('featured_posts', get_option('page_for_posts'));
  foreach ($cards as $card) {
    $tag = get_the_tags($card->ID)[0]->name;
    $title = $card->post_title;
    $content = get_resource_content($card->ID);
    $url = get_the_permalink($card->ID);
    $button_text = $tag == 'video' ? 'Watch Video' : 'Read More';
    echo '
      <div class=" flex justify-center">
        <div class="highlighted__card flex flex-col lg:flex-row w-9/12 lg:w-10/12 mx-auto">
          <div class="w-full lg:w-5/12 ">
            <div class="w-full h-fit flex flex-col lg:justify-center relative">
            ' . $content['html'] . '
            </div>
          </div>
          <div class="w-full lg:w-6/12 lg:pl-8 mt-4 lg:mt-0 flex flex-col">
            <p class="uppercase text-gray-400 text-xs mb-1 pr-8">Featured ' . $tag . '</p>
            <p class="text-white text-xl leading-tight font-bold mb-1"> ' . $title . '</p>
            <p class="text-white text-xs lg:text-sm pb-2">
            ' . $content['content'] . '
            </p>
            <div class="flex items-end">
              <a href="' . $url . '" class=" text-white text-xs rounded-3xl border border-solid border-primary px-2 py-1 hover:bg-primary transition-all duration-300">' . $button_text . '</a>
            </div>
          </div>
        </div>
      </div>
    ';
  }
  ;
}
?>
<section class="resources-hero bg-dark-blue-background py-14">
  <div class="w-full lg:w-8/12 flex justify-center mx-auto min-h-[336px]">
    <div class="resources__video__slider w-full hidden">
      <?php render_highlighted_cards() ?>
    </div>
  </div>
</section>