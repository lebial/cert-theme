<?php 
  function render_items() {
    $facts = get_field('solutions_facts');
    foreach($facts as $fact) {
      echo '<div class="option__container w-full lg:w-1/3 flex flex-col items-center mt-12">';
        echo '<div class="flex justify-center items-center w-24 h-24 rounded-full"><img class="w-full h-full" src="'.$fact['icon'].'"></div>';
          echo '<div class="w-7/12 mt-4">';
            echo '<p class="text-sm text-center">'.strip_tags($fact['description'], '<a>').'</p>';
          echo '</div>';
      echo '</div>';
    }
  }
?>
<!-- <section class="decision__making mt-12 lg:mt-[25vh] pb-20 lg:pb-32"> -->
<!-- <section class="decision__making md:mt-[30vh] pb-16 lg:pb-24 px-10"> -->
<section class="decision__making pb-16 lg:pb-24 px-10">

  <div class="relative w-full mt-16">
    <div class="block md:hidden solutions__video__container w-full">
      <!-- <div class="solutions__video__body relative mb-10">
        <video class="" id="decisionMakingMobileVideo" width="100%" height="100%" src="<?php the_field('build_better_plans_video') ?>" controls></video>
        <div class="solutions__Mobile__video__overlay absolute shadow-xl flex items-end w-[101%] h-[105%] left-1/2 -translate-x-1/2 top-0 p-1 lg:p-6 bg-cover" style="background: linear-gradient(rgba(76, 120, 207, 0.7),rgba(76, 120, 207, 0.7)), url(<?php the_field('video_thumbnail')?>); background-size: cover;">
          <div class="overlay__content h-full w-full flex flex-col justify-center items-start">
            <div class="w-10/12 lg:w-8/12">
              <p class="text-white text-lg 2xl:text-2xl text-left pl-4" style="line-height: 1.5;"><?php the_field('thumbnail_description')?></p>
            </div>
            <button id="solutionsMobileVideoButton" class="hero__button-modal z-10 bottom-0 relative w-14 h-12" type="button">
              <svg class="hero__button__svg h-20 2xl:h-32 " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 120 120" style="enable-background:new 0 0 120 120;" xml:space="preserve">
                <g>
                  <path class="st0" d="M60,0C26.9,0,0,26.9,0,60s26.9,60,60,60s60-26.9,60-60S93.1,0,60,0z M67.2,73.6L45.1,85.7V61.5V37.3l22.1,12.1   l22.1,12.1L67.2,73.6z"/>
                </g>
              </svg>
            </button>
          </div>
        </div>
      </div> -->
    </div>
  </div>

  <div class="data__container w-full md:w-8/12 lg:w-6/12 flex flex-col items-center mx-auto">
    <p class="text-2xl lg:text-4xl font-normal text-center text-gray-header"><?php the_field('decision_title')?></p>
    <div class="decision__making__grid mt-14 w-full flex flex-col lg:flex-row lg:flex-wrap items-center lg:justify-center">
      <?php render_items()?>
    </div>
  </div>
  
</section>