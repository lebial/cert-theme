<?php
  function renderBulletPoints() {
    $points = get_field('brochure_points');
    foreach ($points as $point) {
      echo '<div class="flex mt-2">
        <p class="text-white  mb-0 text-sm lg:text-lg">'.$point.'</p>
      </div>';
    }
  }
?>

<section id="clinicalPointSolutions" class="download__brochure w-full pb-12 flex flex-col items-center " style="background-image: url(<?php the_field('brochure_section_background')?>); background-size: cover;">
  <div class="graphic__row w-10/12  mt-20">
    <div class="graphic__data flex flex-col lg:flex-row">
      <div class="data w-full lg:w-6/12">
        <h2 class="text-white text-2xl lg:text-4xl 2xl:text-6xl font-normal text-center md:text-left"><?php the_field('brochure_section_title')?></h2>
        <div class="text-sm lg:text-base">
          <p class="text-white text-sm lg:text-lg">
            <?php the_field('brochure_section_description_1')?>
          </p>
          <p class="text-white text-sm lg:text-lg">
            <?php the_field('brochure_section_description_2')?>
          </p>
        </div>
      </div>
      <div class="data__image w-full lg:w-6/12 flex justify-center items-center relative">
        <img class="w-[90%] max-w-2xl relative lg:absolute -left-[8%]" src="<?php the_field('laptop_image')?>" alt="">
      </div>
    </div>
  </div>
  <!-- <div class="graphic__row w-10/12 lg:w-8/12 flex flex-col lg:flex-row mt-10"> -->
  <div class="graphic__row w-10/12 flex flex-col lg:flex-row mt-10">
    <div class="graphic__content w-1/2">
      <p class="text-white text-2xl lg:text-4xl 2xl:text-6xl font-normal text-center md:text-left"><?php the_field('brochure_section_subtitle')?></p>
    </div>
    <div class="graphic__content brochure__points w-full lg:w-1/2 mt-10 lg:mt-0">
      <?php renderBulletPoints() ?>
    </div>
  </div>
  <div class="graphic__row w-full flex justify-center mt-10 lg:mt-20 mb-12">
    <div class="button__container w-9/12 md:w-4/12 flex justify-center">
      <a href="#" class="action__button rounded-xl px-8 py-4 bg-white text-primary font-bold"><?php the_field('brochure_button_text')?></a>
    </div>
  </div>
    
</section>