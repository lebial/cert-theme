<?php
$timeline_data = get_field('timeline_data');
$section_height = count($timeline_data) * 110;
function render_dates($data) {
  foreach ($data as $date) {
    echo '
      <div>
        <div class="point__container flex items-center justify-center lg:justify-start pt-2 pb-8 lg:py-20 lg:pr-5 group flex-col lg:flex-row">
          <p class="text-lg text-white lg:mr-8 transition-all duration-300
          group-[.point-active]:text-2xl
          group-[.point-active]:text-primary lg:group-[.point-active]:text-5xl group-[.point-active]:font-bold"
          >'.$date['date'].'</p>
          <div class="relative hidden lg:block">
            <div class="w-10 h-10 lg:w-12 lg:h-12 rounded-full absolute 
             top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2
             border border-white border-solid
             shadow-sm shadow-slate-400 opacity-0 transition-all duration-300
             group-[.point-active]:opacity-100
             " style="filter: blur(1.2px);"></div>
            <div class="bg-white rounded-full w-4 h-4 transition-all duration-300 realtive 
            group-[.point-active]:scale-[1.8]
            lg:group-[.point-active]:scale-[2.3] group-[.point-active]:bg-primary
            "></div>
          </div>
        </div>
      </div>
    ';
  }
}

function render_timeline_cards($data) {
  foreach ($data as $card) {
    echo '
    <div class="w-full">
      <div class="timeline__card lg:pl-20">
        <p class="text-xl lg:text-3xl text-primary font-bold text-center lg:text-left">
          '.$card['title'].'
        </p>
        <p class="text-white text-base lg:text-xl text-center lg:text-left">
        '.$card['description'].'
        </p>
      </div>
      </div>
    ';
  }
}

function render_cycle_controls($data) {
  $points_count = count($data);
  echo '<div class="absolute left-0 top-0 w-1 h-['.$count * 110 .'vh]">';
  foreach ($data as $idx => $point) {
    echo '<div class="w-full h-[110vh] flex items-end">';
      echo $idx == $points_count - 1 ? '' : '<div data-position="'.$idx.'" class="click__control w-1 h-1"></div>';
    echo '</div>';
  }
  echo '</div>';
}

?>
<section class="cert-timeline w-full  bg-dark-blue-background relative" style="height: <?php echo $section_height?>vh;">

  <?php render_cycle_controls($timeline_data)?>

  <div class="w-full sticky top-20 bg-cover bg-center bg-no-repeat" style="background-image: url(<?php the_field('timeline_background')?>)">
    <div class="w-full flex justify-center pt-6 lg:pt-16  lg:pb-16">
      <h2 class="text-white text-2xl xl:text-4xl reveal-text mb-0">How We've Been Using <br class="block lg:hidden"> AI Since Day 1</h2>
    </div>
    <div class="w-full h-[70vh] flex items-center flex-col lg:flex-row">
      <div class="w-2/12 lg:w-3/12 h-fit lg:h-full relative">
        <div class="linde__divider w-px bg-white bg-gradient-to-r from-transparent to-white h-full absolute right-[29px] hidden lg:block"></div>
        <div class="cert-timeline-slider">
          <?php render_dates($timeline_data)?>
        </div>
      </div>
      <div class="w-10/12 lg:w-9/12 h-full pl-2 lg:pl-0">
        <div class="cert-timeline-data-slider lg:mt-[45px]">
          <?php render_timeline_cards($timeline_data)?>
        </div>
      </div>
    </div>
  </div>
</section>