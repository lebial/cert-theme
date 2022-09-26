<?php
  $intuitive_insights_data = get_field('intuitive_insights_options');

  function render_options($data) {
    foreach ($data as $option) {
        echo '
            <div class="option__button w-full">
                <button class="option__action__button text-left text-sm lg:text-base" type="button" name="'.$option['option_title'].'">'.$option['option_title'].'</button>
            </div>
        ';
    };
  }
?>
<section class="intuitive__insights w-full py-20">
    <script id="intuitiveInsightsData" type="application/json"><?php echo json_encode($intuitive_insights_data)?></script>
    <div class="description__container w-10/12 lg:w-7/12 mx-auto flex flex-col items-center">
        <h3 class="text-center text-2xl lg:text-4xl text-[#7d7d7d]">Intuitive Insights for HR <br> and Benefits Leaders</h3>
        <div class="text-center lg:text-left">
            <p class="text-sm lg:text-base">
                Transparently communicate the value of your benefits programs and find
                opportunities for cost savings. Wheter you're looking for a high-level
                overview or in-depth analysis, we help you make better decisions, faster.
            </p>

            <p class="text-sm lg:text-base">
                Here are pre-built reports to improve the health and productivity of your employees and their dependents:
            </p>
        </div>
        
    </div>
    <div class="content__box w-11/12 md:w-9/12 max-w-fit mx-auto bg-gray-200 mt-20 p-8 lg:p-12 border border-solid border-primary shadow-lg flex flex-col lg:flex-row">
        <div class="w-full lg:w-1/2 max-w-sm">
            <!-- <div class="option__button w-full active__option">
                <button class="text-left text-sm lg:text-base" type="button">Retrospective Cost, Utilization & Trend Reporting and Benchmarking</button>
            </div> -->
            <?php render_options($intuitive_insights_data) ?>

        </div>
        <div class="w-full lg:w-1/2 pl-10">
            <div class="content__description max-w-sm">
                <div class="w-full mx-auto lg:mx-0 mb-10 mt-10 underline"><img id="intuitiveImage" src="" alt=""></div>
                <div class="mb-10">
                    <p class="intuitiveDescription" class="text-sm lg:text-base">
                        Identify areas of avoidable spending, segment member groups, understand trends and cost
                        drivers, and benchmark your population against peers.
                    </p>
                </div>
                <div class="w-full flex justify-center lg:justify-start">
                    <a id="intuitiveLink" href="#" class="text-white py-3 mx-auto lg:mx-0 px-8 bg-primary rounded-lg font-bold">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    
</section>