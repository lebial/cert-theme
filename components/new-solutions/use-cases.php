<?php
function render_features()
{
    $features = get_field('features');
    foreach ($features as $feature) {
        echo '
            <div class="feature__body flex mb-8">
                <div class="image__container mr-4">
                    <div class=" bg-dark-blue-background rounded-full p-3">
                        <img class="!w-8 h-8 !max-w-none" src="' . $feature['icon'] . '" alt="feature icon">
                    </div>
                </div>
                <div class="content__container ">
                    <p class="feature__title text-dark-blue-background font-bold text-base 2xl:text-lg mb-1">
                    ' . $feature['title'] . '
                    </p>
                    <p class=" text-dark-blue-background text-sm 2xl:text-base">' . $feature['content'] . '</p>
                </div>

            </div>
        ';
    }
}
?>
<section class="use__cases__section flex flex-col md:flex-row">
    <div class="w-full md:w-1/2 lg:border-r border-gray-400 border-solid">
        <div class="table__header lg:border-b border-gray-400 border-solid py-8 lg:py-12">
            <p class="text-2xl text-dark-blue-background mx-auto font-bold text-center">Use Cases</p>
        </div>
        <div
            class="table__body use__cases__copy text-dark-blue-background flex justify-center  lg:border-b border-solid border-gray-400">
            <div class="py-4 px-16 md:px-24  2xl:px-44">
                <?php the_field('use_cases_copy') ?>
            </div>
        </div>
    </div>
    <div class="w-full md:w-1/2">
        <div class="table__header lg:border-b border-gray-400 border-solid py-8 lg:py-12 ">
            <p class="text-2xl text-dark-blue-background mx-auto font-bold text-center ">Features</p>
        </div>
        <div class="table__body flex justify-center">
            <div class="py-4 px-16 md:px-24 2xl:px-44">
                <?php render_features() ?>
            </div>
        </div>
    </div>
</section>