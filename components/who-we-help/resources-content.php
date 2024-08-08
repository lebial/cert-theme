<?php

$id = get_field('resource_post');
$perma_link = get_the_permalink($id);
$case_study_post = get_field('case_study_post', $id);
js_console($case_study_post);

?>
<section class="resources__section py-14">
    <p class="text-2xl lg:text-4xl text-dark-blue-background mx-auto font-bold pb-10">
        <?php the_field('resources_main_title') ?>
    </p>
    <div class="case__study flex flex-col lg:flex-row mx-auto max-w-screen-lg px-4 lg:px-0">
        <div class="w-full lg:w-7/12">
            <p
                class=" text-dark-blue-background font-bold mb-4 text-2xl lg:text-3xl text-center lg:text-left tracking-wide leading-tight">
                <?php echo $case_study_post['title'] ?>
                <p />
            <p class="text-sm text-gray-400 mb-4 text-center lg:text-left"><?php echo get_the_date('F j, Y', $id) ?></p>
            <div class="flex items-center mt-5 ml-5 lg:ml-0 border-t border-gray-header mb-4">
                <p class=" text-gray-400 mr-4 text-base">SHARE IT :</p>
                <a
                    href="https://www.linkedin.com/shareArticle?mini=true&amp;url='<?php echo $perma_link ?> &amp;isFramed=true&amp;lang=en_US&amp;xd_origin_host='<?php echo $perma_link ?>'">
                    <img class="w-6 mr-2"
                        src="<?php echo get_template_directory_uri() ?>/dist/assets/images/postsPage/Linkenin-Navy.jpg"
                        alt="linkedin logo">
                </a>
                <a href="https://twitter.com/share?url='<?php echo $perma_link ?>'&text='<?php echo strip_tags(get_the_title($id)) ?>'"
                    class="flex">
                    <span class=" bg-dark-blue-background inline-block rounded-full"> <img
                            class="w-4 h-4 m-1 style-svg fill-white"
                            src="<?php echo get_template_directory_uri() ?>/dist/assets/images/footer/twitter.svg"
                            alt="twitter logo"></span>
                </a>

            </div>
            <p class="text-sm text-dark-blue-background my-4 lg:my-0">
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