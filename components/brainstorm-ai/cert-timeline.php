<?php
function render_dates() {
  $dates = array(1,2,3,4,5,6);
  foreach ($dates as $date) {
    echo '
      <div>
        <div class="flex items-center  py-20">
          <p class="font-bold text-2xl text-white mr-4">201'.$date.'</p>
          <div class="bg-primary rounded-full w-14 h-14"></div>
        </div>
      </div>
    ';
  }
}

function render_timeline_cards() {
  $cards = array(1,2,3,4,5,6);
  foreach ($cards as $card) {
    echo '
      <div class="timeline__card">
        <p class="text-2xl text-primary font-bold">
          Certilytics Founded '.$card.'
        </p>
        <p class="text-white ">
          Certilytic has partnered with large and complex healthcare organizations
          since its founding, Right from the start, we knew the impact AI-driven 
          approaches could have on how the healthcare industry assessed and managed risk
          to keep people healthier and make healthcare more affordable.
        </p>
      </div>
    ';
  }

}

?>
<section class="cert-timeline w-full  bg-dark-blue-background">
  <div class="w-full flex justify-center py-16">
    <h2 class="text-white">How We've Been Using AI Since Day 1</h2>
  </div>
  <div class="w-full h-[70vh] flex">
    <div class="w-4/12 h-full relative">
      <div class="w-px bg-white h-full absolute right-7"></div>
      <div class="cert-timeline-slider">
        <?php render_dates()?>
      </div>
    </div>
    <div class="w-9/12 h-full">
      <div class="cert-timeline-data-slider">
        <?php render_timeline_cards()?>
      </div>
    </div>
  </div>
</section>