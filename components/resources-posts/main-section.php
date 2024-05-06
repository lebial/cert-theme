<?php
function render_related_content() {
  $posts = get_field('featured_content');
  $post_type = get_field('post_type');
  $keys = $post_type == 'video' ?
  ['post_type' => 'video_post', 'image_key' => 'video_thumbnail']
  : ['post_type' => 'case_study_post', 'image_key' => 'case_study_thumbnail'];

  foreach ($posts as $post) {
  $post_fields = get_field($keys['post_type'], $post->ID);
  $img_url = $post_fields[$keys['image_key']];
  $tags = get_the_tags($post->ID);
    echo '
      <div class="resources_video_card rounded-lg mb-4 p-4 flex flex-col">
        <div class="ai_card_body shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px] p-6 rounded-xl flex-1 flex flex-col transition-all duration-300 hover:scale-105">
          <p class="text-gray-400 text-xs mb-4 uppercase">'.$tags[0]->name.'</p>
          <img src="'.$img_url.'" alt="post thumbnail" class=" rounded-lg my-4"/>
          <h3 class=" text-dark-blue-background text-sm font-bold mb-2">'.get_the_title($post->ID).'</h3>
          <div class="flex-1 flex items-end">
            <a href="'.the_permalink($post->ID).'" class="py-1 px-2 border border-solid rounded-3xl border-primary text-primary text-xs inline-block mt-4 transition-all duration-300 hover:bg-primary hover:text-white">Read Article</a>
          </div>
        </div>
      </div>';
  }

}
function render_video_content() {
  $video_post = get_field('video_post');
  echo '
      <div class="resources__video__container flex mx-auto max-w-screen-lg 2xl:max-w-screen-xl">
        <div class="w-1/2 pr-10">
          <h2 class="text-dark-blue-background text-2xl">'.$video_post['title'].'</h2>
          <p class=" text-dark-background text-base">'.$video_post['video_description'].'</p>
        </div>
        <div class="w-1/2 flex justify-end">
          <!-- <div class="w-full lg:w-[72%] h-fit flex flex-col lg:justify-center ml-0 lg:ml-12 relative"> -->
          <div class="w-full h-fit flex flex-col lg:justify-center ml-0 lg:ml-14 relative">
            <div class="w-full h-full absolute flex justify-center items-center top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-black bg-opacity-50 rounded-xl z-20">
              <button class="second_video_play_button">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" viewBox="0 0 132 130" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M67 130C107.869 130 132 104.317 132 64C132 23.6832 107.869 0 67 0C26.1309 0 0 23.6832 0 64C0 104.317 26.1309 130 67 130ZM51.75 91.0478L96 65.5L51.75 39.9522V91.0478Z" fill="white" fill-opacity="0.6" />
                </svg>
              </button>
            </div>
            <video class="home__secondary__video object-cover w-full h-fit rounded-xl shadow-lg" poster="'.$video_post['video_thumbnail'].'" name="home">
              <source src="'.$video_post['video_url'].'" type="video/mp4">
            </video>
          </div>
        </div>
      </div>
  ';
}

function render_case_study_content() {
  $case_study_post = get_field('case_study_post');
  echo '<div class="case__study flex mx-auto max-w-screen-lg ">
          <div class="w-7/12">
            <h1 class=" text-dark-blue-background font-bold text-4xl mb-4">'.$case_study_post['title'].'</h1>
            <p class="text-sm text-gray-400 mb-4">'.get_the_date().'</p>
              <div class="flex items-center mt-5 ml-5 lg:ml-0 border-t border-gray-header mb-4">
                  <p class=" text-gray-400 mr-4 text-base">SHARE IT :</p>
                  <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo the_permalink(); ?>&amp;isFramed=true&amp;lang=en_US&amp;xd_origin_host=<?php echo the_permalink(); ?>">
                      <img class="w-6 mr-2" src="<?php echo get_template_directory_uri() ?>/dist/assets/images/postsPage/Linkenin-Navy.jpg" alt="">
                  </a>
                  <a href="https://twitter.com/share?url=<?php echo the_permalink() ?>&text=<?php echo strip_tags(the_title()) ?>">
                      <img class="w-6 mx-2" src="<?php echo get_template_directory_uri() ?>/dist/assets/images/postsPage/Twitter-navy.jpg" alt="">
                  </a>
                  
              </div>
              <p class="text-sm text-dark-blue-background">
              '.$case_study_post['description'].'
              </p>
              <div class="mt-4">
                <a href="'.$case_study_post['case_study_url'].'" class="rounded-3xl border border-primary border-solid text-primary py-1 px-2 transition-all duration-300 hover:text-white hover:bg-primary">Read Case Study</a>
              </div>
          </div>
          <div class="w-5/12">
            <img src="https://devwp.cloud.certilytics.com/wp-content/uploads/2022/11/PDFMockup-I-evaluator.png" alt="case study cover" class="w-10/12 mx-auto">
            <div class="flex justify-center">
              <a href="'.$case_study_post['case_study_url'].'" class="mx-auto rounded-3xl border border-solid border-primary text-primary py-1 px-2 transition-all duration-300 hover:text-white hover:bg-primary" download="">Download Case Study</a>
            </div>
          </div>
        </div>
      ';
}

function render_content() {
  $components = [
    'video' => 'render_video_content',
    'case studies' => 'render_case_study_content',
  ];

  $post_type = get_field('post_type');
  $components[$post_type]();
}

function render_cards_slider() {
  $components = [
    'video' => 'render_related_content',
    'case studies' => 'render_related_content',
  ];
  $post_type = get_field('post_type');
  $components[$post_type]();
} 
?>
<section class="resources__post__container">
  <main>
    <div class="navigation__container ml-20 my-12">
      <a href="/">Home</a> / <a href="/resources">Resources</a> / <a href="/ressources/?tag=videos">Videos</a>
    </div>
    <div class="pt-10 pb-16">
      <?php render_content()?>
    </div>
    <div class="related__section bg-[#f0f4fc] py-16">
      <p class="text-dark-blue-background text-2xl lg:text-3xl mx-auto text-center font-bold reveal-text">More Videos From Certilytics</p>
      <div class="resources-related-slider mt-14 max-w-5xl flex mx-auto">
        <?php render_cards_slider()?>
      </div>
    </div>
  </main>
</section>