<?php
  function render_nav_bar_options() {
    $nav_bar = get_field('nav_bar');
    foreach($nav_bar as $option) {
        echo '<a class="hover:bg-primary md:hover:bg-transparent md:hover:border-primary md:hover:border-b-4 md:hover:border-solid text-white text-base lg:text-2xl cursor-pointer px-6 py-2">'.$option['text'].'</a>';
    }
  }

  function render_brochure_slides() {
    $brochure_slides = get_field('brochure_slides');
    foreach($brochure_slides as $slide) {
        echo '<div class="graphic__data w-9/12 flex flex-col md:flex-row md:pt-36 2xl:pt-52">';
            echo '<div class="data w-full md:w-6/12 text-center md:text-left">';
                echo '<h2 class="text-white">'.$slide['title'].'</h2>';
                echo '<p class="text-white leading-4 md:leading-6 text-xs lg:text-base">'.$slide['description'].'</p>';
                echo '<img class="data__image pt-8 md:pt-0 md:invisible w-full md:w-6/12" src="'.$slide['mobile_image'].'" />';
                echo '<div class="w-full pb-12 mx-auto mt-8 flex justify-center md:justify-start">';
                    echo '<a target="_blank" rel="noopener noreferrer" href="" class=" w-9/12 lg:w-5/12 2xl:w-4/12 bg-primary text-white font-bold rounded-lg lg:text-base 2xl:text-xl text-center py-2 md:py-3">Download Brochure</a>';
                echo '</div>';
            echo '</div>';
            echo '<div class="data__image w-full invisible md:w-6/12 md:flex md:justify-center">';
                echo '<img class="data__image invisible md:visible md:max-w-[55%] md:max-h-[50%] md:flex md:justify-center md:items-center" src="'.$slide['desktop_image'].'" />';
            echo '</div>';
        echo '</div>';
    }
  }
?>

<section class="brochure__carousel bg-dark-blue-background w-full py-12 2xl:py-28">
    <div class="flex justify-center py-10 md:py-0">
        <div class="brochure__carousel__nav w-9/12 md:absolute border border-[#F4695B] border-solid md:border-none md:w-full flex flex-col md:flex-row md:space-x-14 justify-center lg:pb-16">
            <?php render_nav_bar_options()?>
        </div>
    </div>
    <div class="flex justify-center">
        <?php render_brochure_slides()?>
    </div>
</section>