<?php 
$data_cards = get_field('point_options');

function get_first_or_last_pos($arr, $idx) {
  if (count($arr) - 1 == $idx) return 'last';
  if ($idx == 0) return 'first';
}
function render_data_points($data) {
  $cards = $data;
  foreach ($cards as $idx => $card) {
    $active = $idx == 0 ? 'is-card-active' : '';
    $position = get_first_or_last_pos($cards, $idx);
    echo '
      <div class="logistics__point__card text-center lg:text-left flex items-center flex-col max-w-[350px] h-fit opacity-100 z-20 group flex-1 hover:cursor-pointer relative '.$active.'" name="'.$position.'" data-dot-position="'.$idx.'">

        <p class=" text-slate-400 text-xl pb-6 mb-0 font-bold group-hover:text-primary group-[.is-card-active]:text-primary transition-all duration-300 relative lg:absolute lg:-top-20 text-center">'.$card['title'].'</p>
        <div class="relative justify-center lg:justify-start hidden  lg:flex">
          <button class="bg-slate-100 group-hover:bg-primary hidden lg:block
           group-[.is-card-active]:bg-primary group-[.is-card-active]:border-transparent border-2 border-solid border-slate-300 group-hover:border-transparent rounded-full w-12 h-12 relative z-20 opacity-100 transition-all duration-300
          " type="button">
          </button>
          <div class="
            transition-all duration-300 hidden lg:block
            bg-slate-100 h-[58px] w-[58px] absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 rounded-full opacity-0 z-10
              border-[2px] border-solid border-transparent group-hover:border-primary group-hover:opacity-100
              group-[.is-card-active]:border-primary group-[.is-card-active]:opacity-100
              "></div>
        </div>
        <p class="text-sm transition-all duration-300  text-dark-blue-background leading-snug mt-4 block lg:hidden max-w-md">
        '.$card['description'].'
        </p>
      </div>
    ';
  }
}

function render_data_copy($data) {
  $cards = $data;
  foreach ($cards as $idx => $card) {
  $active = $idx == 0 ? 'copy--active' : '';
    echo '
      <div class="copy__container group absolute left-1/2 -translate-x-1/2 '.$active.'" data-copy-position="'.$idx.'">
        <div class="copy__body opacity-0 group-[.copy--active]:opacity-100 ">
          <p class="text-sm transition-all duration-300  text-dark-blue-background leading-snug mt-4 text-center">
          '.$card['description'].'
          </p>
        </div>
      </div>
    ';
  }
 
}
?>
<section class="data-ingestion__validation__process w-full h-full bg-slate-100 py-16">
  <h2 class="max-w-none tracking-normal text-3xl lg:text-4xl text-dark-blue-background mx-auto font-bold text-center !mb-10 lg:!mb-40"><?php the_field('section_title')?></h2>
  <div class="w-8/12 lg:w-10/12 mx-auto relative lg:mt-24 flex flex-col lg:flex-row justify-between">
    <div class=" hidden lg:block w-10/12 bg-slate-300 h-[2px] absolute top-[24px] z-10 left-1/2 -translate-x-1/2"></div>
    <div class="validation__mobile__slider w-full flex justify-between relative max-w-[1900px]">
      <?php render_data_points($data_cards) ?>

      <div id="dataSecurity" class="navigation__container hidden lg:flex justify-between w-[90vw] max-w-[1900px] absolute left-1/2 -translate-x-1/2">
        <button type="button" class="process-navigation mr-12 hidden lg:block" name="prev">
          <svg class=" w-8" xmlns="http://www.w3.org/2000/svg" width="20" height="35" viewBox="0 0 40 69" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M33.5851 67.8302C34.9519 69.1971 37.168 69.1971 38.5348 67.8302C39.9016 66.4633 39.9016 64.2473 38.5348 62.8805L10.3488 34.6944L38.5767 6.46646C39.9435 5.09964 39.9435 2.88358 38.5767 1.51675C37.2099 0.149872 34.9938 0.149871 33.627 1.51675L5.39945 29.7451L0.746493 34.3972L0.449741 34.6949L33.5851 67.8302Z" fill="#7878787a"/>
          </svg>
        </button>
        <button type="button" class="process-navigation hidden lg:block" name="next">
          <svg class="w-8" xmlns="http://www.w3.org/2000/svg" width="20" height="35" viewBox="0 0 40 69" fill="none">'
              <path fill-rule="evenodd" clip-rule="evenodd" d="M6.4664 1.51669C5.09958 0.149872 2.88351 0.149872 1.51669 1.51669C0.149872 2.88358 0.149872 5.09964 1.51669 6.46646L29.7027 34.6525L1.47482 62.8805C0.108002 64.2473 0.108002 66.4633 1.47482 67.8302C2.84164 69.1971 5.05771 69.1971 6.42453 67.8302L34.6521 39.6018L39.305 34.9497L39.6018 34.6521L6.4664 1.51669Z" fill="#7878787a"/>
          </svg>
        </button>
      </div>

    </div>
  </div>
  <div class="copy__container mx-auto relative min-h-28 hidden lg:block">
    <?php render_data_copy($data_cards) ?>
  </div>
    
</section>