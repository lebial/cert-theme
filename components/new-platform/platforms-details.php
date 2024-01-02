<?php
function render_buttons() {
$platforms_data = get_field('platforms_data');
  foreach ($platforms_data as $idx => $data) {
    $active_class = $idx == 0 ? 'active__button' : '';
    echo'
      <div class="platform__detail__button '.$active_class.' relative group w-full">
        <svg class="absolute right-0 top-[6px] w-[10px] opacity-0 group-hover:opacity-100 group-hover:-right-2 transition-all duration-200 ease-in " width="40" height="69" viewBox="0 0 40 69" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M6.0167 1.02513C4.64987 -0.341709 2.43379 -0.341709 1.06696 1.02513C-0.299879 2.39196 -0.299879 4.60804 1.06696 5.97487L29.253 34.161L1.02513 62.3889C-0.341709 63.7557 -0.341709 65.9718 1.02513 67.3386C2.39196 68.7054 4.60804 68.7054 5.97487 67.3386L38.8553 34.4581L38.8549 34.4577L39.1521 34.1605L6.0167 1.02513Z" fill="#F4695B"/>
        </svg>
        <button name="'.$data['button'].'" type="button" class="text-white pl-0 px-2 py-6 border-b border-white w-full text-left font-bold text-lg lg:text-2xl opacity-50 group-hover:opacity-100">'.$data['button'].'</button>
      </div>
    ';
  }
}

function render_detail_cards() {
  $platforms_data = get_field('platforms_data');
  foreach ($platforms_data as $idx => $data) {
    $active_class = $idx == 0 ? 'active__details container__animated' : '';
    echo '<div name="'.$data['button'].'"  class="w-full details__container '.$active_class.'">';
    echo '<p class="detail__description text-white text-lg lg:text-xl text-center lg:text-left">'.$data['description'].'</p>';
    echo '<div class="details__cards '.$active_class.' grid grid-cols-1 lg:grid-cols-3 gap-4 pt-5 lg:pr-14">';
    foreach ($data['cards'] as $card_idx => $card) {
      $card_order = $card_idx + 1;
      echo '<a href="'.$card['href'].'" target="_blank" class="detail__card border border-white border-solid rounded-lg py-5 px-4 lg:min-h-[250px] group transition-all duration-300 hover:scale-105 " style="--animation-order: '.$card_order.';">
              <p class="text-white font-bold mb-0 leading-snug">
              '.$card['title'].'
                <svg class="w-[10px] h-3 inline-block transition-all duration-200 group-hover:translate-x-1" width="40" height="69" viewBox="0 0 40 69" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M6.0167 1.02513C4.64987 -0.341709 2.43379 -0.341709 1.06696 1.02513C-0.299879 2.39196 -0.299879 4.60804 1.06696 5.97487L29.253 34.161L1.02513 62.3889C-0.341709 63.7557 -0.341709 65.9718 1.02513 67.3386C2.39196 68.7054 4.60804 68.7054 5.97487 67.3386L38.8553 34.4581L38.8549 34.4577L39.1521 34.1605L6.0167 1.02513Z" fill="#F4695B"/>
                </svg>
              </p>
              <p class="text-white text-base">
              '.$card['description'].'
              </p>
            </a>';
    }
    echo '</div>';
    echo '</div>';
  }
}
?>

<section class="w-full py-14" id="platformsDetails">
  <div class="w-full flex flex-col items-center py-14 border-t border-t-dark-blue-background border-solid bg-dark-blue-background">
    <h2 class=" text-white font-normal reveal-text"><?php the_field('section_title')?></h2>
    <h3 class="text-white font-normal text-xl px-4 text-center lg:text-left"><?php the_field('section_subtitle')?></h3>
  </div>
  <div class="platforms__main__container w-full flex flex-col lg:flex-row py-14 min-h-screen px-4 lg:px-0" style="--section-bg-img: url('<?php the_field('background_image')?>');">
    <aside class="w-full lg:w-4/12 lg:max-w-md  flex justify-center lg:justify-end">
      <div class="flex flex-col items-start">
        <?php render_buttons()?>
      </div>
    </aside>
    <main class="w-full lg:w-8/12 pl-2 lg:pl-14 pt-5 flex justify-center pr-2">
      <div class="max-w-4xl">
        <?php render_detail_cards()?>
      </div>
    </main>
  </div>
</section>