<?php
  function render_careers() {
    $career_quotes = get_field('career_quotes');
    foreach($career_quotes as $quote) {
        echo '<div class="flex justify-center" >';
            echo '<div class="flex justify-center" >';
                echo '<div class="flex flex-col lg:w-[70%] 3xl:w-8/12">';
                    echo '<div class="pt-12 pb-8 lg:pb-0 lg:pt-0 flex justify-center">';
                        echo '<img class="max-w-[80%] md:max-w-[45%]" src="'.$quote['image'].'" />';
                    echo '</div>';
                    echo '<div class="pt-4 lg:pt-16 items-center pb-4 w-full flex justify-center">';
                        echo '<p class="italic text-center text-white lg:text-[#5E5E5E]">';
                            echo $quote['description'];  
                        echo '</p>';
                    echo '</div>';
                    echo '<div class="pt-4 pb-8 flex flex-col items-center">';
                        echo '<div class="w-4/12 md:w-2/12 lg:w-2/12 border-b-4 bg-primary p-1 flex justify-center"></div>';
                        echo '<p class="mb-0 pt-4 text-white font-bold lg:font-normal lg:text-[#5E5E5E]">'.$quote['associate'].'</p>';
                        echo '<p class="text-white lg:text-[#5E5E5E] font-bold lg:font-normal">'.$quote['title'].'</p>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        echo '</div>';
    }
  }
?>

<section class="au__careers w-full ">
    <div class="w-full flex flex-col lg:flex-row">
        <div class=" pl-32 w-full lg:w-1/2">
            <div class="w-full 2xl:w-10/12 mx-auto">
                <p class="text-center text-5xl md:text-[3.50rem] lg:w-9/12 2xl:w-6/12 xl:text-left font-bold lg:text-6xl 2xl:text-6xl pb-8">Certilytics Is <span class="text-primary">Growing!</span></p>
                <div class="w-full 2xl:w-10/12">
                    <p><?php the_field('careers_section_description')?></p>
                </div>
                <div class="w-full mt-8 pb-8 flex justify-center lg:justify-start lg:w-10/12 2xl:px-1 2xl:w-7/12 xl:px-2">
                    <a target="_blank" rel="noopener noreferrer" href="#" class="w-11/12 sm:w-6/12 lg:w-8/12 bg-primary text-white font-bold rounded-3xl text-xl text-center py-3"><?php the_field('careers_section_text_button')?></a>
                </div>
                <div class="flex w-10/12 md:w-7/12 mx-auto lg:mx-0 pb-8 lg:p-0 lg:justify-start lg:w-8/12 2xl:w-5/12">
                    <p class="text-xs lg:text-sm text-center lg:text-left"><?php the_field('careers_section_text_contact')?></p>
                </div>
            </div>
        </div>

        <div class="px-16 md:px-24 lg:px-8 w-full lg:w-1/2 bg-second-blue-background lg:bg-white">
            <div class="relative w-full 2xl:w-10/12 mx-auto">
                <div class="au_careers__arrows absolute flex justify-between items-center z-10 w-full top-[55%] lg:top-[15%] 2xl:top-[55%]">
                    <?php custom_slider_arrows("au_careers__arrows")?>
                </div>
                <div class="au__careers__slider">
                    <?php render_careers()?>
                </div>    
            </div>
        </div>
    </div>
</section>