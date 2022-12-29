<!-- Once the content is in wordpress please remove the hardcoded content that is set after the fields calls -->

<section class="impact__point__solutions__section w-full">
    <div class="section__divider_gray border-b-2 border-gray-200 border-solid w-11/12 mx-auto h-0"></div>
    <div class="impact__heading w-full flex flex-col items-center mt-12">
        <p class="text-center text-3xl text-gray-header mb-6"><?php //the_field('vendor_impact_heading')?>Show the true impact of your point <br> solutions programs</p>
        <div class="small__divider border-b-2 border-primary border-solid w-24 h-0 mb-4"></div>
        <p class="text-xl"><?php //the_field('vendors_impact_subheading')?>Pre-built reports and self-service analytics at your fingertips</p>
    </div>
    <div class="impact__evaluator__container w-full flex mt-12">
        <div class="image__container w-1/2 bg-primary">
            <!-- <img src="<?php //the_field('vendors_impact_evaluator_image')?>" alt="<?php the_field('vendors_impact_evaluator_image_alt')?>laptop image from impact evaluator"> -->
        </div>
        <div class="impact__text__content w-1/2 pl-12 pr-16">
            <h3 class="text-3xl"><?php //the_field('vendors_impact_evaluator_header')?>Impact Evaluator</h3>
            <p class="evaluator__triangle">
                <?php //the_field('impact_evaluator_bullet_1')?>
                <b>Performance Validation:</b> Validate your performance vlaims and demonstrate your ability
                to improve health, well-being, and productivity
            </p>
            <p class="evaluator__triangle">
                <?php //the_field('impact_evaluator_bullet_2')?>
                <b>Opportunity reporting:</b> Win & retain business with print-ready reports showing purchasers their
                key opportunity areas for reducing avoidable spend and improving outcomes
            </p>
        </div>
    </div>
    <div class="impact__maximizer__container w-full flex mt-12">
        <div class="impact__text__content w-1/2 pl-12 pr-16">
            <h3 class="text-3xl"><?php the_field('vendors_impact_maximizer_header')?>Impact Maximizer</h3>
            <p class="evaluator__triangle">
                <?php //the_field('impact_maximizer_bullet_1')?>
                <b>AI-powered risk stratification:</b> Use powerful predictive models to direct interventions
                toward those most likely to benefit
            </p>
            <p class="evaluator__triangle">
                <?php //the_field('impact_maximizer_bullet_2')?>
                <b>Performance tracking:</b> Gain trust with transparent metrics yhou can share with customers
                and partners to set value-vased goals, measure progress, and track performance guarantees
            </p>
        </div>
        <div class="image__container w-1/2 bg-secondary">
            <!-- <img src="<?php //the_field('vendors_impact_maximizer_image')?>" alt="<?php //the_field('vendors_impact_maximizer_image_alt')?>laptop image from impact evaluator"> -->
        </div>
    </div>
</section>