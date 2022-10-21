<?php
  function render_brochure_slides() {
    $brochure_slides = get_field('brochure_slides');
    foreach($brochure_slides as $slide) {
            echo '<div class="slider__container__slide">';
                echo '<div class="flex justify-center">';
                    echo '<div class="w-11/12 md:w-10/12 flex flex-col lg:flex-row">';
                        echo '<div class="data w-full lg:w-6/12 text-center lg:text-left">';
                            echo '<h2 class="text-white">'.strip_tags($slide['title'], '<a>').'</h2>';
                            echo '<p class="text-white leading-4 md:leading-6 text-sm lg:text-base">'.strip_tags($slide['description'], '<a>').'</p>';
                            echo '<img class="data__image__mobile pt-8 lg:pt-0 lg:hidden w-full lg:w-6/12" src="'.$slide['mobile_image'].'" />';
                            // echo '<div class="w-full pb-0 lg:pb-12 mx-auto mt-8 flex justify-center lg:justify-start">';
                            //     echo '<a target="_blank" rel="noopener noreferrer" href="" class="w-9/12 md:w-7/12 lg:w-5/12 2xl:w-4/12 bg-primary text-white font-bold rounded-lg lg:text-base 2xl:text-xl text-center py-2 md:py-3">Download Brochure</a>';
                            // echo '</div>';
                        echo '</div>';
                        echo '<div class="data__image__desktop  relative w-full md:w-6/12 md:flex md:justify-center">';
                            echo '<img class="data__image hidden lg:visible md:max-w-[70%] md:max-h-[90%] lg:max-w-[80%] md:flex md:justify-center md:items-center" src="'.$slide['desktop_image'].'" />';
                            echo '<button type="button" class="brochure-next hidden md:block absolute h-10 w-14 -right-[15%] top-[33%] rotate-180 lg:h-24 lg:w-28"><img class="style-svg h-full w-full" src="'.get_template_directory_uri().'/dist/assets/images/platform/rightArrowSlider.svg" alt="right arrow"></button>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
    }
  }
?>

<section class="brochure__carousel__section bg-dark-blue-background w-full pt-5 lg:pb-10 lg:pt-0">
    <div class="carousel">
        <div class="flex justify-center">
            <ul class="nav__options">
                <li class="nav__options--option active"><?php the_field('nav_bar_option_1')?></li>
                <li class="nav__options--option"><?php the_field('nav_bar_option_2')?></li>
                <li class="nav__options--option"><?php the_field('nav_bar_option_3')?></li>
            </ul>
        </div>

        <div class="slider__container">
            <?php render_brochure_slides()?> 
        </div>
    </div>
</section>