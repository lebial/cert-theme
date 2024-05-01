<?php
$quote = get_field('about_us_highlight_quote');
?>

<section id="<?php the_field('video_section_id')?>" class="trusted__partner__section w-full bg-[#d3dff9]">
    <div class="flex flex-col lg:items-center lg:flex-row py-12 lg:py-20 w-10/12 mx-auto max-w-screen-2xl">
        <div name="desktop_main_video" class="h-full hidden w-1/2 lg:flex justify-center ">
            <div class="w-full lg:w-[72%] h-fit flex flex-col lg:justify-center relative">
                <div class="w-full h-full absolute flex justify-center items-center top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-black bg-opacity-50 rounded-xl z-20" style="box-shadow: 8px 8px 10px 0 rgba(0, 0, 0, 0.25);">
                    <button class="second_video_play_button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" viewBox="0 0 132 130" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M67 130C107.869 130 132 104.317 132 64C132 23.6832 107.869 0 67 0C26.1309 0 0 23.6832 0 64C0 104.317 26.1309 130 67 130ZM51.75 91.0478L96 65.5L51.75 39.9522V91.0478Z" fill="white" fill-opacity="0.6" />
                        </svg>
                    </button>
                </div>
                <video class="home__secondary__video object-cover w-full h-full rounded-xl shadow-lg" poster="<?php the_field('about_us_main_video_thumbnail') ?>">
                <source src="<?php the_field('about_us_main_video_url') ?>" type="video/mp4">
                </video>
            </div>
        </div>

        <div class="w-full lg:w-1/2 flex justify-center lg:justify-start">
            <div class="w-full lg:pl-12 mr-0 lg:mr-12">

            <h3 class="font-bold text-2xl xl:text-3xl text-dark-blue-background mx-auto lg:mx-0 text-center lg:text-left reveal-text hidden lg:block" data-reveal-direction="left">
                <?php echo $quote['title'] ?>
            </h3>
            <h3 class="font-bold text-2xl xl:text-3xl text-dark-blue-background mx-auto lg:mx-0 text-center lg:text-left block lg:hidden">
                <?php echo $quote['title'] ?>
            </h3>

            <!-- mobile-version -->

            <div name="mobile_main_video" class=" w-full flex relative left-1/2 -translate-x-1/2 lg:hidden justify-center mb-8">
                <div class="w-full lg:w-[72%] h-fit flex flex-col lg:justify-center ml-0 lg:ml-12 relative">
                    <div class="w-full h-full absolute flex justify-center items-center top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-black bg-opacity-50 rounded-xl z-20">
                        <button class="second_video_play_button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" viewBox="0 0 132 130" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M67 130C107.869 130 132 104.317 132 64C132 23.6832 107.869 0 67 0C26.1309 0 0 23.6832 0 64C0 104.317 26.1309 130 67 130ZM51.75 91.0478L96 65.5L51.75 39.9522V91.0478Z" fill="white" fill-opacity="0.6" />
                        </svg>
                        </button>
                    </div>
                    <video class="home__secondary__video object-cover w-full h-full rounded-xl shadow-lg" poster="<?php the_field('about_us_main_video_thumbnail') ?>">
                        <source src="<?php the_field('about_us_main_video_url') ?>" type="video/mp4">
                    </video>
                </div>
            </div>
            <p class="text-dark-blue-background max-w-xl text-center lg:text-left mx-auto lg:mx-0 text-lg mb-8 font-light">&ldquo;<?php echo $quote['body'] ?>&rdquo;</p>
            <div class="divider mx-auto lg:mx-0 w-16 lg:w-20 h-px bg-primary mb-4"></div>
            <p id="dataProcessing" class="text-dark-blue-background max-w-xl text-center lg:text-left mx-auto lg:mx-0 text-xl font-normal"><?php echo $quote['author'] ?></p>
            </div>
        </div>
    </div>
</section>