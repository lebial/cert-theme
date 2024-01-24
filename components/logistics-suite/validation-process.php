<?php 
function render_data_points() {
  $cards = get_field('point_options');
  foreach ($cards as $idx => $card) {
    $active = $idx == 0 ? 'is-card-active' : '';
    echo '
      <div class="logistics__point__card flex items-center flex-col max-w-[230px] h-fit opacity-100 z-20 group flex-1 hover:cursor-pointer relative '.$active.'" >
        <p class=" text-slate-400 text-2xl pb-6 mb-0 font-bold group-hover:text-primary group-[.is-card-active]:text-primary transition-all duration-300 relative lg:absolute lg:-top-20 text-center">'.$card['title'].'</p>
        <div class="relative flex justify-center lg:justify-start ">
          <button class="bg-slate-100 group-hover:bg-primary
           group-[.is-card-active]:bg-primary group-[.is-card-active]:border-transparent border-2 border-solid border-slate-300 group-hover:border-transparent rounded-full w-12 h-12 relative z-20 opacity-100 transition-all duration-300
          " type="button">
          </button>
          <div class="
            transition-all duration-300
            bg-slate-100 h-[58px] w-[58px] absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 rounded-full opacity-0 z-10
              border-[2px] border-solid border-transparent group-hover:border-primary group-hover:opacity-100
              group-[.is-card-active]:border-primary group-[.is-card-active]:opacity-100
              "></div>
        </div>
        <p class="transition-all duration-300 hidden group-[.is-card-active]:block text-dark-blue-background leading-snug mt-4">
        '.$card['description'].'
        </p>
      </div>
    ';
  }
}
?>
<section id="dataPipeline" class="data-ingestion__validation__process w-full h-full bg-slate-100 py-16">
  <p class="max-w-none text-2xl lg:text-5xl text-dark-blue-background mx-auto text-center !mb-10 lg:!mb-36"><?php the_field('section_title')?></p>
  <div class="w-10/12 mx-auto relative lg:mt-24 flex flex-col lg:flex-row justify-between">
    <div class=" hidden lg:block w-10/12 bg-slate-300 h-[2px] absolute top-[24px] z-10 left-1/2 -translate-x-1/2"></div>
    <div class="validation__mobile__slider w-full">
      <?php render_data_points() ?>
    </div>
  </div>
</section>