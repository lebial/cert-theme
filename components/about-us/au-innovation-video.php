<section class="relative w-full h-[47vh] lg:h-[73vh] bg-cover bg-no-repeat bg-center bg-dark-blue-background" style="background-image: url(<?php the_field('background_image')?>);">
  <div class="flex justify-center flex-col items-center h-full py-16 mx-auto max-w-screen-5xl">
    <div class="w-10/12 lg:w-5/12 mb-28 md:40 lg:mb-64 2xl:mb-52">
      <h1 class="text-bold mb-6 text-4xl lg:text-6xl text-center text-white leading-6 lg:leading-10 reveal-text"><?php the_field('innovation_heading_title')?></h1>
      <h2 class="text-white text-center mt-4 md:mt-8 text-lg font-normal tracking-normal"><?php the_field("innovation_heading_description")?></h2>
    </div>
    
    <div name="desktop_innovation_video" class="absolute inset-x-0 bottom-12 lg:bottom-24 -translate-y-1/4 w-11/12 lg:w-7/12 mx-auto flex justify-center items-center max-w-screen-2xl z-10">
      <div class="absolute w-11/12 lg:w-[72%] 4xl:w-[57%] flex flex-col lg:justify-center">
        <div id="videoContainer" class="w-full h-full absolute flex justify-center items-center top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 rounded-xl z-20" style="box-shadow: 8px 8px 10px 0 rgba(0, 0, 0, 0.25);">
          <button class="second_video_play_button">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" viewBox="0 0 132 130" fill="none">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M67 130C107.869 130 132 104.317 132 64C132 23.6832 107.869 0 67 0C26.1309 0 0 23.6832 0 64C0 104.317 26.1309 130 67 130ZM51.75 91.0478L96 65.5L51.75 39.9522V91.0478Z" fill="white" fill-opacity="0.6" />
            </svg>
          </button>
        </div>
          <video id="healthcareInnovation" class="home__secondary__video relative object-cover w-full h-fit rounded-xl shadow-lg" poster="<?php the_field('innovation_main_video_thumbnail') ?>">
            <source src="<?php the_field('innovation_main_video_url') ?>" type="video/mp4">
          </video>
          <div class="thumbnail__text absolute top-0 left-0 w-full h-full bg-black bg-opacity-50 rounded-lg"></div>
          <div class="thumbnail__text flex flex-col justify-center md:block w-5/12 md:w-4/12 h-full md:h-auto absolute top-0 md:mt-6 bg-dark-blue-background bg-opacity-80 px-4 py-4 lg:px-6 lg:py-6 rounded-xl">
            <p class="w-full inset-0 flex items-center justify-center mb-2 text-white text-[11px] md:text-xs 2xl:text-base rounded-xl pointer-events-none leading-4 md:leading-[1.1rem] font-normal">
              <?php the_field('quote') ?>
            </p>
            <div class="red__divider w-2/12 mx-0 mb-2 lg:mt-4 border-[0.1px] border-primary border-solid"></div>
            <p class="thumbnail__text--author text-[11px] md:text-xs lg:text-sm text-white leading-[8px] lg:leading-3">
              <?php the_field('author') ?>
            </p>
          </div>
      </div>
    </div>
  </div>
</section>