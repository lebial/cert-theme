<?php
$timeline_data = get_field('timeline_data');
$section_height = count($timeline_data) * 120;
function render_dates($data) {
  foreach ($data as $date) {
    echo '
      <div>
        <div class="point__container flex items-center  py-20 pr-5 group">
          <p class="text-lg text-white mr-8 transition-all duration-300
          group-[.point-active]:text-primary group-[.point-active]:text-5xl group-[.point-active]:font-bold"
          >'.$date['date'].'</p>
          <div class="relative">
            <div class="w-12 h-12 rounded-full absolute 
             top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2
             border border-white border-solid
             shadow-sm shadow-slate-400 opacity-0 transition-all duration-300
             group-[.point-active]:opacity-100
             " style="filter: blur(1.2px);"></div>
            <div class="bg-white rounded-full w-4 h-4 transition-all duration-300 realtive 
            group-[.point-active]:scale-[2.3] group-[.point-active]:bg-primary
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
      <div class="timeline__card pl-20">
        <p class="text-3xl text-primary font-bold">
          '.$card['title'].'
        </p>
        <p class="text-white text-xl">
        '.$card['description'].'
        </p>
      </div>
      </div>
    ';
  }
}

function render_cycle_controls($data) {
  $points_count = count($data);
  echo '<div class="absolute left-0 top-0 w-1 h-['.$count * 120 .'vh]">';
  foreach ($data as $idx => $point) {
    echo '<div class="w-full h-[120vh] flex items-end">';
      echo $idx == $points_count - 1 ? '' : '<div data-position="'.$idx.'" class="click__control w-1 h-1"></div>';
    echo '</div>';
  }
  echo '</div>';
}

?>
<section class="cert-timeline w-full  bg-dark-blue-background relative" style="height: <?php echo $section_height?>vh;">

  <?php render_cycle_controls($timeline_data)?>

  <div class="w-full sticky top-20">
    <div class="w-full flex justify-center py-16">
      <h2 class="text-white text-3xl xl:text-4xl ">How We've Been Using AI Since Day 1</h2>
    </div>
    <div class="w-full h-[70vh] flex ">
      <div class="w-4/12 h-full relative">
        <div class="w-px bg-white bg-gradient-to-r from-transparent to-white h-full absolute right-[29px]"></div>
        <div class="cert-timeline-slider">
          <?php render_dates($timeline_data)?>
        </div>
      </div>
      <div class="w-9/12 h-full">
        <div class="cert-timeline-data-slider mt-[45px]">
          <?php render_timeline_cards($timeline_data)?>
        </div>
      </div>
    </div>
  </div>
</section>