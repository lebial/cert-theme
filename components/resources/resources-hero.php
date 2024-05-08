<?php
function render_video_or_image($post)
{
  $tag_name = get_the_tags($post->ID)[0]->name;
  if ($tag_name == 'video') {
    $video = get_field('video_post', $post->ID);
    $video_url = $video['video_url'];
    $video_thumbnail = $video['$video_thumbnail'];
    return '
      <div class="w-full h-full absolute flex justify-center items-center top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-black bg-opacity-50 rounded-xl z-20">
        <button class="second_video_play_button " style="background-color: transparent !important;">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" viewBox="0 0 132 130" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M67 130C107.869 130 132 104.317 132 64C132 23.6832 107.869 0 67 0C26.1309 0 0 23.6832 0 64C0 104.317 26.1309 130 67 130ZM51.75 91.0478L96 65.5L51.75 39.9522V91.0478Z" fill="white" fill-opacity="0.6" />
          </svg>
        </button>
      </div>
      <video class="home__secondary__video object-cover w-full h-full rounded-xl shadow-lg" poster="' . $video_thumbnail . '">
        <source src="' . $video_url . '" type="video/mp4">
      </video>
    ';
  }
  if ($tag_name == 'case study') {
    $case_study = get_field('case_study_post', $post->ID);
    $img_url = $case_study['case_study_thumbnail'];
    return '
    <img src="' . $img_url . '" class="banner__image h-full rounded-xl shadow-lg w-[80%]" alt="featured banner image" />
    ';
  }
}
function render_highlighted_cards()
{
  $cards = get_field('featured_posts', get_option('page_for_posts'));
  foreach ($cards as $card) {
    $tag = get_the_tags($card->ID)[0]->name;
    echo '
      <div class=" flex justify-center">
        <div class="highlighted__card flex flex-col lg:flex-row w-9/12 lg:w-10/12 mx-auto">
          <div class="w-full lg:w-5/12 ">
            <div class="w-full h-fit flex flex-col lg:justify-center relative">
            ' . render_video_or_image($card) . '
            </div>
          </div>
          <div class="w-full lg:w-7/12 lg:pl-8 mt-4 lg:mt-0">
            <p class="uppercase text-gray-400 text-xs mb-1">Featured ' . $tag . '</p>
            <p class="text-white text-lg font-bold mb-1">Fugiam sit ut rem lique sitas qui num valletem  unt et excea</p>
            <p class="text-white text-xs pb-2">
              Exerate ducia ium qui si blaut eicit, sent, officia sinus,
              simagnat debis res dolori inverum facepudit, si conet
              aut et offici di berum lam a quis aditatis sequias su-
              sapides prepta que enet liam vollo moditasi re nitatur
            </p>
            <a href="#" class=" text-white text-xs rounded-3xl border border-solid border-primary px-2 py-1 hover:bg-primary transition-all duration-300">Read More</a>
          </div>
        </div>
      </div>
    ';
  }
  ;
}
?>
<section class="resources-hero bg-dark-blue-background py-14">
  <div class="w-full lg:w-8/12 flex justify-center mx-auto">
    <div class="resources__video__slider w-full">
      <?php render_highlighted_cards() ?>
    </div>
  </div>
</section>