<?php

$id = get_field('resource_post');
$perma_link = get_the_permalink($id);
$case_study_post = get_field('case_study_post', $id);
js_console($case_study_post);

?>
<section class="resources__section py-14">
    <p
        class="text-2xl lg:text-4xl text-center lg:text-left text-dark-blue-background mx-auto font-bold pb-5 lg:pb-10 px-4">
        <?php the_field('resources_main_title') ?>
    </p>
    <div class="case__study flex flex-col lg:flex-row mx-auto max-w-screen-lg px-4 lg:px-0">
        <div class="w-full lg:w-7/12">
            <p
                class=" text-dark-blue-background font-bold mb-2 text-lg lg:text-xl text-center lg:text-left tracking-wide leading-tight">
                <?php echo $case_study_post['title'] ?>
                <p />
                <!-- <div class="flex items-center my-5 lg:my-2 border-t border-gray-header border-solid mb-2"> -->
            <div class="flex items-center my-3">
            </div>
            <p class="text-base lg:text-lg text-dark-blue-background my-0">
                <?php echo $case_study_post['description'] ?>
            </p>
        </div>
        <div class="w-full lg:w-5/12 flex flex-col my-4 lg:my-0">
            <img src="<?php echo $case_study_post['case_study_thumbnail'] ?>" alt="case study cover"
                class="w-10/12 mx-auto rounded-lg">
            <div class="flex justify-center my-8 lg:mb-0 lg:mt-auto pt-4">
                <a href="<?php echo $case_study_post['case_study_url'] ?>"
                    class="mx-auto rounded-3xl border border-solid border-primary text-primary py-1 px-2 transition-all duration-300 hover:text-white hover:bg-primary"
                    download="" target="_blank">Download Case Study</a>
            </div>
        </div>
    </div>
</section>