<?php 
function render_data_points() {
  $cards = array(1,2,3,4,5);
  foreach ($cards as $idx => $card) {
    $active = $idx == 0 ? 'is-card-active' : '';
    echo '
      <div class="logistics__point__card flex items-center flex-col max-w-[230px] h-fit opacity-100 z-20 group '.$active.'">
        <p class=" text-slate-400 text-2xl pb-2 mb-0 font-bold group-hover:text-primary group-[.is-card-active]:text-primary transition-all duration-300">0'.$card.'</p>
        <div class="relative ">
          <button class="bg-slate-100 group-hover:bg-primary group-[.is-card-active]:bg-primary group-[.is-card-active]:border-transparent border-2 border-solid border-slate-300 group-hover:border-transparent rounded-full w-12 h-12 relative z-20 opacity-100 transition-all duration-300" type="button">
          </button>
          <div class="
            transition-all duration-300
            bg-slate-100 h-[58px] w-[58px] absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 rounded-full opacity-0 z-10
              border-[2px] border-solid border-transparent group-hover:border-primary group-hover:opacity-100
              group-[.is-card-active]:border-primary group-[.is-card-active]:opacity-100
              "></div>
        </div>
        <p class="
          text-slate-400 group-[.is-card-active]:text-dark-blue-background group-hover:text-dark-blue-background font-bold mb-0 mt-4
            translate-all duration-300
        ">Data Loading</p>
        <p class="-translate-y-1 transition-all duration-300 hidden group-[.is-card-active]:block text-dark-blue-background leading-snug mt-4">
          During the data ingestion process, Certilytics si very flexible in how we receive a customer'."'".'s data.
          We can receive raw data from any source, from any type of source file, in any format.
        </p>
      </div>
    ';
  }
}
?>
<section class="data-ingestion__validation__process w-full h-full bg-slate-100 py-16">
  <p class="max-w-none text-5xl text-dark-blue-background mx-auto text-center">A proven Data Ingestion & Validation Process</p>
  <div class=" w-10/12 mx-auto relative mt-16 flex justify-between">
    <div class="w-full bg-slate-300 h-[2px] absolute top-[64px] z-10"></div>
    <?php render_data_points() ?>
  </div>
</section>