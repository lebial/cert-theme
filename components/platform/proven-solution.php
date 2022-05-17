<?php
$solutions_data = get_field('solution_group');
function renderSolutions($data)
{
  foreach ($data as $solution) {
    echo '<div class="solutions__section__separator w-full flex mt-20" data-aos="fade-up">';
    echo '<div class="separator__dots w-2/12 relative"></div>';
    echo '<div class="separator__line w-10/12"></div>';
    echo '</div>';
    echo '<p class="text-white text-3xl font-bold mt-8" data-aos="fade-up">' . $solution['title'] . '</p>';
    echo '<p class="text-white text-lg" data-aos="fade-up">' . $solution['description'] . '</p>';
    foreach ($solution['solutions_data'] as $solution_data) {
      echo '<div class="solutions__data" data-aos="fade-up">';
      // echo '<p class="text-primary mb-2 mt-14 font-bold text-5xl text-center">' . $solution_data['value'] . '</p>';
      echo '<p data-aos="fade-up" class="text-primary mb-2 mt-14 font-bold text-5xl text-center"><span class="increase__number "data-number="'.$solution_data['value_number'].' " >'.number_format($solution_data['value_number']).'</span>'.$solution_data['value'].'</p>';
      echo '<p class="text-white text-center">' . $solution_data['value_description'] . '</p>';
      echo '</div>';
    }
  }
}

function renderDesktopSolutions($data) {
  foreach($data as $solution) {
    echo '<div class="first__slide w-full flex">';
      echo '<div class="w-1/2">';
        echo '<div class="proven__solution__data sticky top-1/4 w-10/12 ml-auto">';
          echo '<div class="solutions__section__separator w-full flex mt-20" data-aos="fade-up">';
            echo '<div class="separator__dots w-2/12 relative"></div>';
            echo '<div class="separator__line w-10/12"></div>';
          echo '</div>';
          echo '<p class="text-white text-4xl mt-10">'.$solution['title'].'</p>';
          echo '<p class="text-white text-lg">'.$solution['description'].'</p>';
          echo '<div data-aos="proven-anim" class="mx-auto" style="width: 4%;">';
            echo '<svg class="proven-solution-graph" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35.08 359.89">';
              echo '<g>';
                echo '<polyline data-aos="proven-line" data-aos-duration="2500" data-aos-delay="500" points="14.86 13.23 14.86 18.21 14.86 30.63 14.86 167.49 5.66 179.94 5.66 292.31 14.86 303.5 14.86 336.88" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="1.24" />';
                echo '<circle class="proven-dot-red" data-aos="proven-dot" data-aos-duration="500" data-aos-delay="900" cx="14.86" cy="347.79" r="4.32" fill="#f5695c" />';
                echo '<circle class="proven-dot-2" data-aos="proven-dot" data-aos-duration="500" data-aos-delay="1000" cx="26.8" cy="227.09" r="4.32" fill="#fff" opacity=".76" />';
                echo '<circle class="proven-dot-1" data-aos="proven-dot" data-aos-duration="500" data-aos-delay="900" cx="26.8" cy="207.3" r="4.32" fill="#fff" opacity=".26" />';
                echo '<circle class="proven-dot-4" data-aos="proven-dot" data-aos-duration="500" data-aos-delay="1200" cx="26.8" cy="266.66" r="4.32" fill="#fff" />';
                echo '<circle class="proven-dot-3" data-aos="proven-dot" data-aos-duration="500" data-aos-delay="1100" cx="26.8" cy="246.87" r="4.32" fill="#fff" opacity=".9" />';
              echo '</g>';
            echo '</svg>';
          echo '</div>';
        echo '</div>';
        echo '<div></div>';
      echo '</div>';
      echo '<div class="w-1/2 flex flex-col justify-center">';
      foreach ($solution['solutions_data'] as $solution_data) {
        echo '<div class="mb-5 w-full">';
          echo '<div class="w-full h-full flex flex-col items-center justify-center">';
            echo '<p data-aos="fade-up" class="text-6xl text-primary font-bold mb-3" ><span class="increase__number "data-number="'.$solution_data['value_number'].' " >'.number_format($solution_data['value_number']).'</span>'.$solution_data['value'].'</p>';
            echo '<p data-aos="fade-up" class="text-white text-lg">'.$solution_data['value_description'].'</p>';
          echo '</div>';
        echo '</div>';
      }
      echo '</div>';
    echo '</div>';
  };
}
?>
<section class="block lg:hidden solutions__section w-screen min-h-screen bg-dark-blue-background mt-11">
  <div class="solutions__section__container px-8 py-10">
    <?php renderSolutions($solutions_data) ?>
  </div>
</section>

<section class="solutions-parallax hidden lg:pb-60 lg:block solutions__section w-screen min-h-screen bg-dark-blue-background mt-11" style="background-image: url(<?php the_field('proven_solution_background') ?>); width: 100vw">
  <div class="solutions__section__container px-8" data-sticky="from: -65px, duration: 580vh">
    <?php //renderDesktopSolutions($solutions_data) ?>
    <div class="w-screen h-screen flex sticky top-48 pt-16">
      <div class="w-1/2">
        <div class="proven__solution__data h-full w-10/12 ml-auto">
          <div class="solutions__section__separator w-full flex items-center justify-between" data-aos="fade-up">
            <div class="separator__dots w-2/12 relative flex">
              <div class="solution__dot red-highlight" data-classes="130vh: {remove: red-highlight }"></div>
              <div class="solution__dot" data-classes="130vh: { add: red-highlight }, 280vh: { remove: red-highlight } "></div>
              <div class="solution__dot" data-classes="280vh: { add: red-highlight }, 430vh: { remove: red-highlight }"></div>
              <div class="solution__dot" data-classes="430vh: { add: red-highlight }"></div>
            </div>
            <div class="separator__line w-9/12"></div>
          </div>

          <!-- slides -->
          <div class="w-full h-full relative">
            <div class="solution__slide absolute top-0 left-0" data-animation="opacity: {0: 1, 130vh: 0}, transform: {0: translate(0,0), 130vh: translate(0, -20%)}">
              <p class="text-white text-[55px] mt-4">Massive Data</p>
              <p class="text-white text-lg"> 
                Our platform was built with the latest open-source technologies to process 
                big data at scale for some of the nation's largest healthcare organizations
                and plan sponsors.
              </p>
            </div>

            <div
              class="solution__slide absolute top-0 left-0 invisible"
              data-animation="opacity: {130vh: 0.4, 140vh: 1, 280vh: 0}, transform: {0: translate(0,0), 130vh: translate(0, 0), 280vh: translate(0, -20%)}"
              data-classes="130vh: {remove: visible}"
            >
              <p class="text-white text-[55px] mt-4">High Throughput</p>
              <p class="text-white text-lg">
                Industry-leading processing speeds enable our customers
                to make smarter business decisions, faster.
              </p>
            </div>

            <div
              class="solution__slide absolute top-0 left-0 invisible"
              data-classes="280vh: {remove: visible}"
              data-animation="opacity: {280vh: 0.4, 290vh: 1, 430vh: 0}, transform: {0: translate(0,0), 280vh: translate(0, 0), 430vh: translate(0, -20%)}"
            >
              <p class="text-white text-[55px] mt-4">Unified Intelligence</p>
              <p class="text-white text-lg">
                Connect, organize, and add value to your data for a
                comprehensive, forward-looking view of patient and
                population health.
              </p>
            </div>

            <div
              class="solution__slide absolute top-0 left-0 invisible"
              data-classes="430vh: {remove: invisible}"
              data-animation="opacity: {430vh: 0.4, 450vh: 1}"
            >
              <p class="text-white text-[55px] mt-4">Faster Deployment</p>
              <p class="text-white text-lg">
                Accelerate your access to market leading predictive analytics through our proven,
                straightforward implementation process.
              </p>
            </div>

            <div class="w-full h-full invisible">
              <p class="text-white text-[55px] mt-10">Massive Data</p>
              <p class="text-white text-lg"> 
                Our platform was built with the latest open-source technologies to process 
                big data at scale for some of the nation's largest healthcare organizations
                and plan sponsors.
              </p>
            </div>
          </div>
          <!-- end slides -->

          <div
            data-proven-anim="proven-anim"
            class="proven-solution-graph mx-auto"
            style="width: 3.2%;"
            data-classes="420vh: { add: exec-animate }"
          >
            <svg class="proven-solution-graph__svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35.08 359.89">
              <g>
                <polyline data-aos="proven-line" data-aos-duration="2500" data-aos-delay="500" points="14.86 13.23 14.86 18.21 14.86 30.63 14.86 167.49 5.66 179.94 5.66 292.31 14.86 303.5 14.86 336.88" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="1.24" />
                <circle class="proven-dot-red" data-aos="proven-dot" data-aos-duration="500" data-aos-delay="900" cx="14.86" cy="347.79" r="4.32" fill="#f5695c" />
                <circle class="proven-dot-2" data-aos="proven-dot" data-aos-duration="500" data-aos-delay="1000" cx="26.8" cy="227.09" r="4.32" fill="#fff" opacity=".76" />
                <circle class="proven-dot-1" data-aos="proven-dot" data-aos-duration="500" data-aos-delay="900" cx="26.8" cy="207.3" r="4.32" fill="#fff" opacity=".26" />
                <circle class="proven-dot-4" data-aos="proven-dot" data-aos-duration="500" data-aos-delay="1200" cx="26.8" cy="266.66" r="4.32" fill="#fff" />
                <circle class="proven-dot-3" data-aos="proven-dot" data-aos-duration="500" data-aos-delay="1100" cx="26.8" cy="246.87" r="4.32" fill="#fff" opacity=".9" />
              </g>
            </svg>
          </div>
        </div>
        <div></div>
      </div>
      <div class="w-1/2">
        <div class="mb-5 w-full h-full relative">

        <!-- number slides -->
            <div class="solution__number__slide" >
                <div data-aos="fade-up" data-animation="opacity: {0: 1, 130vh: 0}, transform: {0: translate(0,0), 130vh: translate(0, -20%)}">
                  <div class="w-full h-full flex flex-col items-center justify-center">
                    <p class="text-6xl text-primary font-bold mb-3" ><span class="increase__number "data-number="250">250</span>M+</p>
                    <p class="text-white text-lg">member lives on platform</p>
                  </div>

                  <div class="w-full h-full flex flex-col items-center justify-center">
                    <p class="text-6xl text-primary font-bold mb-3" ><span class="increase__number "data-number="21">21</span>B</p>
                    <p class="text-white text-lg">total member records</p>
                  </div>

                  <div class="w-full h-full flex flex-col items-center justify-center">
                    <p class="text-6xl text-primary font-bold mb-3" ><span class="increase__number "data-number="1.7">1.7</span>PB</p>
                    <p class="text-white text-lg">of data under management</p>
                  </div>
                </div>
            </div>
            
            <div class="solution__number__slide">
              <div
                class="invisible"
                data-aos="fade-up"
                data-animation="opacity: {130vh: 0.4, 140vh: 1, 280vh: 0}, transform: {0: translate(0,0), 130vh: translate(0, 0), 280vh: translate(0, -20%)}"
                data-classes="130vh: {remove: invisible}"
              >
                <div class="w-full h-full flex flex-col items-center justify-center">
                  <p class="text-6xl text-primary font-bold mb-3" ><span class="increase__number "data-number="30">30</span>M+</p>
                  <p class="text-white text-lg">patient lives processed per week</p>
                </div>

                <div class="w-full h-full flex flex-col items-center justify-center">
                  <p class="text-6xl text-primary font-bold mb-3" ><span class="increase__number "data-number="5000">5000</span>+</p>
                  <p class="text-white text-lg">client reports generated annually</p>
                </div>
              </div>
            </div>

            <div class="solution__number__slide">
              <div
                class="invisible"
                data-aos="fade-up" 
                data-animation="opacity: {280vh: 0.4, 290vh: 1, 430vh: 0}, transform: {0: translate(0,0), 280vh: translate(0, 0), 420vh: translate(0, -20%)}"
                data-classes="280vh: {remove: invisible}"
              >
                <div class="w-full h-full flex flex-col items-center justify-center">
                  <p class="text-6xl text-primary font-bold mb-3" ><span class="increase__number "data-number="70">70</span>+</p>
                  <p class="text-white text-lg">different domains</p>
                </div>

                <div class="w-full h-full flex flex-col items-center justify-center">
                  <p class="text-6xl text-primary font-bold mb-3" ><span class="increase__number "data-number="1000">1000</span>+</p>
                  <p class="text-white text-lg">clinical and financial insights</p>
                </div>
              </div>
            </div>

            <div class="solution__number__slide">
              <div
                class="invisible"
                data-aos="fade-up"
                data-animation="opacity: {430vh: 0.4, 450vh: 1}"
                data-classes="430vh: {remove: invisible}"
              >
                <div class="w-full h-full flex flex-col items-center justify-center">
                  <p class="text-6xl text-primary font-bold mb-3" ><span class="increase__number "data-number="90">90</span> Days</p>
                  <p class="text-white text-lg">for implementation</p>
                </div>
              </div>
            </div>

          

        <!-- end number slides -->
        </div>
      </div>
    </div>
  </div>
</section>
