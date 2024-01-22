<?php
function render_dates() {
  $dates = array(1,2,3,4,5,6);
  foreach ($dates as $date) {
    echo '
      <div>
        <div class="point__container flex items-center  py-20 pr-5 group">
          <p class="text-xl text-white mr-8 transition-all duration-300
          group-[.point-active]:text-primary group-[.point-active]:text-4xl group-[.point-active]:font-bold"
          >201'.$date.'</p>
          <div class="bg-white rounded-full w-8 h-8 transition-all duration-300 realtive
          group-[.point-active]:scale-150 group-[.point-active]:bg-primary
          before:content-[""]
          "></div>
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
      <div class="w-px bg-white h-full absolute right-[37px]"></div>
      <div class="cert-timeline-slider">
        <?php render_dates()?>
      </div>
    </div>
    <div class="w-9/12 h-full">
      <div class="cert-timeline-data-slider mt-[13%]">
        <?php render_timeline_cards()?>
      </div>
    </div>
  </div>
</section>