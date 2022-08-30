<?php
  function render_careers() {
    $career_quotes = get_field('career_quotes');
    foreach($career_quotes as $quote) {
        echo '<div class="flex flex-col items-center">';
            echo '<div class="w-[80%] md:w-[45%] pt-12 pb-8 lg:pb-0 lg:pt-0">';
                echo '<img src="'.$quote['image'].'" />';
            echo '</div>';
            echo '<div class="pt-4 pb-8 w-10/12 md:w-8/12 lg:w-11/12">';
                echo '<p class="italic text-center text-white lg:text-[#5E5E5E]">';
                    echo $quote['description'];  
                echo '</p>';
            echo '</div>';
            echo '<div class="w-4/12 md:w-2/12 lg:w-1/12 border-b-4 bg-primary p-1"></div>';
            echo '<div class="pt-8 pb-8 text-center">';
                echo '<p class="mb-0 text-white font-bold lg:font-normal lg:text-[#5E5E5E]">'.$quote['associate'].'</p>';
                echo '<p class="text-white lg:text-[#5E5E5E] font-bold lg:font-normal">'.$quote['title'].'</p>';
            echo '</div>';
        echo '</div>';
    }
  }
?>

<section class="au__heading w-full min-h-screen">
    <div class="w-full min-h-screen flex flex-col lg:flex-row">
        <div class="px-12 w-full lg:w-1/2">
            <div class="w-full 2xl:w-10/12 mx-auto">
                <p class="text-center text-5xl md:text-6xl lg:w-9/12 2xl:w-6/12 xl:text-left font-bold lg:text-6xl 2xl:text-6xl pb-8">Certilytics Is <span class="text-primary">Growing!</span></p>
                <div class="w-full 2xl:w-10/12">
                    <p>
                        Help us make data more powerful-and healthcare more affordable.

                        We're always on the lookout for new talent to join our market-leading team
                        of data scientist, developers, clinicians, data engineers, business analysts,
                        product managers, and more. 

                        We offer competitive salaries, full benefits, options for remote work, opportuniy
                        for growth, and a fun, vibrant culture.
                    </p>
                </div>
                <div class="w-full mt-8 pb-8 flex justify-center lg:justify-start lg:w-10/12 2xl:px-1 2xl:w-7/12 xl:px-2">
                    <a target="_blank" rel="noopener noreferrer" href="#" class="w-11/12 sm:w-6/12 lg:w-8/12 bg-primary text-white font-bold rounded-3xl text-xl text-center py-3">See Current Openings</a>
                </div>
                <div class="flex w-10/12 md:w-7/12 mx-auto lg:mx-0 pb-8 lg:p-0 lg:justify-start lg:w-8/12 2xl:w-5/12">
                    <p class="text-xs lg:text-sm text-center lg:text-left">
                        Don't see an opening for you? Send us your resume at 
                        recruiting@certilytics.com, and we'll notify you if an
                        opportunity arises that matches your skills.
                    </p>
                </div>
            </div>
        </div>

        <div class="px-8 w-full lg:w-1/2 bg-dark-blue-background lg:bg-white">
            <div class="relative w-full h-full">
                <div class="au_careers__arrows absolute flex justify-between items-center z-10">
                    <?php custom_slider_arrows("au_careers__arrows")?>
                </div>
                <div class="">
                    <?php render_careers()?>
                </div>    
            </div>
        </div>
    </div>
</section>