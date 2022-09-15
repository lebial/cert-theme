<?php 
  function render_items() {
    $facts = get_field('solutions_facts');
    foreach($facts as $fact) {
      echo '<div class="option__container w-full lg:w-1/3 flex flex-col items-center mt-12">';
        echo '<div class="flex justify-center items-center w-24 h-24 rounded-full"><img class="w-full h-full" src="'.$fact['icon'].'"></div>';
          echo '<div class="w-7/12 mt-4">';
            echo '<p class="text-sm text-center">'.$fact['description'].'</p>';
          echo '</div>';
      echo '</div>';
    }
  }
?>
<!-- <section class="decision__making mt-12 lg:mt-[25vh] pb-20 lg:pb-32"> -->
<section class="decision__making mt-[25vh] pb-20 lg:pb-32 px-10">
  <div class="data__container w-full md:w-8/12 lg:w-6/12 flex flex-col items-center mx-auto">
    <p class="text-2xl lg:text-4xl font-bold text-center"><?php the_field('decision_title')?></p>
    <div class="decision__making__grid w-full flex flex-col lg:flex-row lg:flex-wrap items-center lg:justify-center">
      <?php render_items()?>
    </div>
  </div>
  
</section>