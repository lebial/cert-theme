<section class="certHLM__in__action flex flex-col lg:flex-row py-10 lg:py-0">
    <div class="lg:w-1/2 border-r border-solid border-gray-300 flex flex-col items-center  lg:py-14">
        <h2 class="text-center text-2xl lg:text-4xl font-bold text-dark-blue-background reveal-text">
            <?php the_field('action_title') ?>
        </h2>
        <div class="content__container px-10 h-full flex items-center">
            <div class="lg:w-[60%] flex justify-center items-center relative mx-auto lg:mt-10">
                <div
                    class="w-full h-full absolute flex justify-center items-center top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-black bg-opacity-50 rounded-xl z-20">
                    <button class="second_video_play_button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" viewBox="0 0 132 130" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M67 130C107.869 130 132 104.317 132 64C132 23.6832 107.869 0 67 0C26.1309 0 0 23.6832 0 64C0 104.317 26.1309 130 67 130ZM51.75 91.0478L96 65.5L51.75 39.9522V91.0478Z"
                                fill="white" fill-opacity="0.6" />
                        </svg>
                    </button>
                </div>
                <video class="home__secondary__video object-cover w-full h-full rounded-xl shadow-lg "
                    style="outline: 3px solid white; outline-offset: -2px;"
                    poster="<?php the_field('video_thumbnail') ?>" height="432" width="576" name="home">
                    <source src="<?php the_field('hlm_video') ?>" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
    <div class="lg:w-1/2 border-r border-solid border-gray-300 flex flex-col items-center pt-4 lg:py-14">
        <div class="content__container px-10">
            <p class="text-2xl lg:text-4xl text-center font-bold text-dark-blue-background !mb-2 lg:!mb-8 reveal-text">
                <?php the_field('how_it_works_title') ?>
            </p>
            <div class="how__it__works__description text-dark-blue-background lg:pb-0">
                <?php the_field('how_it_works_description'); ?>
            </div>
        </div>
    </div>
</section>