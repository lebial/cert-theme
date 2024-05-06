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

function render_filter_options() {
  $options = [
    ['link' => 'articles', 'text' => 'Articles'],
    ['link' => 'case-studies', 'text' => 'Case Studies'],
    ['link' => 'videos', 'text' => 'Videos'],
    ['link' => 'webinars', 'text' => 'Webinars'],
  ];

  foreach ($options as $option) {
    echo '
      <a href="/resources/?tag='.$option['link'].'" class="text-dark-blue-background flex items-center group hover:text-primary mr-4 font-bold flex-[0_0_40%] lg:flex-auto justify-center mt-2 lg:mt-0">
        '.$option['text'].' 
        <svg class="w-3 h-3 fill-dark-blue-background group-hover:fill-primary" height="800px" width="800px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 185.343 185.343" xml:space="preserve">
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
function render_resources_cards() {
if (have_posts()) : while (have_posts()) : the_post();
  $content = get_field('post_content', get_the_ID());
  $img = get_field('post_hero_image', get_the_ID());
  $tags = get_the_tags();
  echo '
    <div class="ai_insight_card rounded-lg mb-4 p-4 flex flex-col">
      <div class="ai_card_body shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px] p-6 rounded-xl flex-1 flex flex-col">
        <p class="text-gray-400 text-base mb-4 uppercase">'.$tags[0]->name.'</p>
        <img src="'.$img.'" alt="post thumbnail" class=" rounded-lg my-4"/>
        <h3 class=" text-dark-blue-background text-sm font-bold mb-2">'.get_the_title().'</h3>
        <div class="flex-1 flex items-end">
          <a href="'.get_the_permalink().'" class="py-1 px-2 border border-solid rounded-3xl border-primary text-primary text-xs inline-block mt-4 transition-all duration-300 hover:bg-primary hover:text-white">Read Article</a>
        </div>
      </div>
    </div>';

endwhile;
endif; 
}
?>

<section class="resources__posts py-14">
  <div class="filter__options flex justify-center flex-wrap">
    <?php render_filter_options()?>
  </div>
  <main class="mt-14">
    <div class="w-full max-w-screen-lg grid grid-cols-1 lg:grid-cols-3 gap-5 mx-auto auto-rows-fr" id="scrollContent">
      <?php render_resources_cards()?>
    </div>
  <div class="w-full flex justify-center mb-20"><?php render_load_more('Resources')?></div>
  </main>
</section>