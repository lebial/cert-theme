<?php
function render_insights_slider() {
  $selected_posts = get_field('ai_insights_posts');
  $recent_posts = get_most_recent_posts(6);
  $posts =  get_recent_or_selected_posts($recent_posts, $selected_posts);
  foreach ($posts as $post) {
    echo '
      <div class="h-full">
        <a href="'.get_permalink($post).'" target="_blank" class="ai__insights__card relative h-full rounded-xl flex flex-col items-center bg-blue-300 p-2 mr-6 shadow-lg">
          <div class="absolute top-0 h-full roudned-xl w-full before:content-['."''".'] before:block before:w-full before:h-full before:bg-blue-500 before:bg-opacity-80 before:absolute before:top-0 before:z-20 before:rounded-xl">
            <img src="'.get_field('post_hero_image', $post).'" alt="ai insights card background" class="absolute top-0 left-0 w-full h-full object-cover z-10 rounded-xl"/>
          </div>
          <div class="w-full h-full z-20 flex flex-col items-center">
            <svg class=" w-24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 3500 2500" style="enable-background:new 0 0 3500 2500;" xml:space="preserve">
              <style type="text/css">
                .st0{fill:#FFFFFF;}
              </style>
              <g>
                <g>
                  <g>
                    <g>
                      <path class="st0" d="M1787.14,1003.07h-408.18c-10.94,0-19.8-9.99-19.8-22.31l0,0c0-12.32,8.86-22.31,19.8-22.31h408.18      c10.94,0,19.8,9.99,19.8,22.31l0,0C1806.95,993.08,1798.08,1003.07,1787.14,1003.07z"/>
                    </g>
                    <g>
                      <path class="st0" d="M1787.14,1131.38h-408.18c-10.94,0-19.8-9.99-19.8-22.31l0,0c0-12.32,8.86-22.31,19.8-22.31h408.18      c10.94,0,19.8,9.99,19.8,22.31l0,0C1806.95,1121.39,1798.08,1131.38,1787.14,1131.38z"/>
                    </g>
                    <g>
                      <path class="st0" d="M1787.14,1259.69h-408.18c-10.94,0-19.8-9.99-19.8-22.31l0,0c0-12.32,8.86-22.31,19.8-22.31h408.18      c10.94,0,19.8,9.99,19.8,22.31l0,0C1806.95,1249.7,1798.08,1259.69,1787.14,1259.69z"/>
                    </g>
                    <path class="st0" d="M1498.97,1390.59h-114.9c-13.75,0-24.9-11.15-24.9-24.9l0,0c0-13.75,11.15-24.9,24.9-24.9h114.9     c13.75,0,24.9,11.15,24.9,24.9l0,0C1523.87,1379.44,1512.72,1390.59,1498.97,1390.59z"/>
                    <path class="st0" d="M1498.97,1518.9h-114.9c-13.75,0-24.9-11.15-24.9-24.9l0,0c0-13.75,11.15-24.9,24.9-24.9h114.9     c13.75,0,24.9,11.15,24.9,24.9l0,0C1523.87,1507.75,1512.72,1518.9,1498.97,1518.9z"/>
                    <g>
                      <path class="st0" d="M1807.63,1708.11h-449.14c-64.68,0-117.29-52.62-117.29-117.29V881.35c0-64.68,52.62-117.29,117.29-117.29      h449.14c64.68,0,117.29,52.62,117.29,117.29v709.47C1924.92,1655.49,1872.3,1708.11,1807.63,1708.11z M1358.49,818.06      c-34.9,0-63.29,28.39-63.29,63.29v709.47c0,34.9,28.39,63.29,63.29,63.29h449.14c34.9,0,63.29-28.39,63.29-63.29V881.35      c0-34.9-28.39-63.29-63.29-63.29H1358.49z"/>
                    </g>
                    <g>
                      <path class="st0" d="M1800.38,1585.68H1608.4v-266.17h191.98V1585.68z M1638.97,1555.11h130.84v-205.02h-130.84V1555.11z"/>
                    </g>
                  </g>
                  <path class="st0" d="M1990.61,1357.11h-44.4c-2.55,0-4.61-2.22-4.61-4.95v-39.89c0-2.73,2.06-4.95,4.61-4.95h44.4V751.07    c0-24.33-18.44-44.12-41.07-44.12h-405.68v51.69c0,9.1-6.87,16.48-15.35,16.48h-27.73c-8.48,0-15.35-7.38-15.35-16.48v-51.69    v-57.92h58.43h405.68c52.38,0,95.06,45.77,95.06,102.04v556.25v49.79H1990.61z"/>
                </g>
              </g>
            </svg>
            <p class="text-white text-base text-center">'.get_the_title($post).'</p>
            <p class="text-white mt-auto">
              Read Article
              <svg class="w-4 h-3 inline-block transition-all duration-200 group-hover:translate-x-1" width="40" height="69" viewBox="0 0 40 69" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.0167 1.02513C4.64987 -0.341709 2.43379 -0.341709 1.06696 1.02513C-0.299879 2.39196 -0.299879 4.60804 1.06696 5.97487L29.253 34.161L1.02513 62.3889C-0.341709 63.7557 -0.341709 65.9718 1.02513 67.3386C2.39196 68.7054 4.60804 68.7054 5.97487 67.3386L38.8553 34.4581L38.8549 34.4577L39.1521 34.1605L6.0167 1.02513Z" fill="#F4695B"/>
              </svg>
            </p>
          </div>
        </a>
      </div>
    ';
  }
}
?>
<section class="ai__insights w-full py-14">
  <div class="w-full flex flex-col items-center">
    <p class=" text-dark-blue-background text-2xl lg:text-4xl reveal-text font-normal">AI Insights by Certilytics</p>
    <p class="text-dark-blue-background text-lg text-center">
      Our experts share how AI is changing healthcare and how Certilytics is committed 
      to using AI to lead the way in making people healthier and healthcare more affordable.
    </p>
  </div>
  <!-- search box will be hidden until search functionality is implemented -->
  <div class="w-full justify-center hidden">
    <div class="search__form__container mt-10 ">
      <label class="flex border border-solid border-gray-400 rounded-2xl px-2 py-1">
        <input type="text" placeholder="Search...">
        <svg class="w-10" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 294 246.25" style="enable-background:new 0 0 294 246.25;" xml:space="preserve">
          <style type="text/css">
            .st0{fill:#787878;}
          </style>
          <g>
            <path class="st0" d="M125.22,66c-18,5-29,24-24,42c4,18,23,29,41,24s29-23,24-41C161.22,72,143.22,62,125.22,66z M176.22,127l31,30   c5,5-7,17-12,12l-30-30c-6,4-12,8-19,9c-27,7-55-8-62-36c-7-27,9-55,37-62c27-7,54,9,62,36C186.22,101,184.22,114,176.22,127z"/>
          </g>
        </svg>
      </label>
    </div>
  </div>
  <div class="platform__insights__slider mt-14 max-w-4xl flex mx-auto">
    <?php render_insights_slider()?>
  </div>
</section>