<div class="w-full lg:w-[72%] h-fit flex flex-col lg:justify-center ml-0 lg:ml-12 relative">
  <div class="w-full h-full absolute flex justify-center items-center top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-black bg-opacity-50 rounded-xl z-20">
    <button class="second_video_play_button">
      <svg xmlns="http://www.w3.org/2000/svg" width="40" viewBox="0 0 132 130" fill="none">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M67 130C107.869 130 132 104.317 132 64C132 23.6832 107.869 0 67 0C26.1309 0 0 23.6832 0 64C0 104.317 26.1309 130 67 130ZM51.75 91.0478L96 65.5L51.75 39.9522V91.0478Z" fill="white" fill-opacity="0.6" />
      </svg>
    </button>
  </div>
  <video class="home__secondary__video object-cover w-full h-full rounded-xl shadow-lg" poster="<?php the_field('platform_main_video_thumbnail') ?>">
    <source src="<?php the_field('platform_main_video_url') ?>" type="video/mp4">
  </video>
</div>