<?php
/*
Template Name: AI-insights-single
Template Post Type: post 
*/

$post = get_post();
$tmp_author = get_field('author');
$show_content_navigation = get_field('show_content_navigation');
$hide_class = $show_content_navigation ? 'lg:block' : '';
$hide_alternate = $show_content_navigation ? '' : 'lg:block';
$remove_mt_if_shown = $show_content_navigation ? 'mt-4' : 'mt-0';

function render_text_content($component)
{
    echo '<div class="wysiwyg mb-14 text-dark-blue-background">';
    echo $component['post_text'];
    echo '</div>';
}

function get_image_or_url($comp)
{
    $img_or_url = $comp['image_or_url'];
    if ($img_or_url == 'Image' || !$img_or_url)
        return $comp['post_image'];
    $new_img_arr = array('url' => $comp['image_url'], 'alt' => 'post image example');
    return $new_img_arr;
}

function render_image_container($component)
{
    // $img = $component['post_image'];
    $img = get_image_or_url($component);
    $img_size = $component['image_size'];
    $className = $img_size == 'small:Small' ? 'max-w-md' : '';
    $image_element = '
		<div class="flex justify-center py-8 my-4 mb-14">
		  <div class="post_image_container">
			  <img class="' . $className . '" src="' . $img['url'] . '" alt="' . $img['alt'] . '">
			</div>
		</div>
	';
    echo $image_element;
}

function render_quotes($component)
{
    $quotes = $component['post_quotes'];
    echo '<div class="w-full post__quotes__slider mx-8 py-6 hidden">';
    foreach ($quotes as $quote) {
        echo '<div class="quote__body flex flex-col items-center">';
        echo '<p class="font-bold text-base text-dark-blue-background max-w-sm text-center" style="max-width: 700px;">';
        echo '&lsquo;&lsquo;' . $quote['quote_body'] . '&rsquo;&rsquo;';
        echo '</p>';
        echo '<p class=" text-dark-blue-background">';
        echo $quote['quote_title'];
        echo '</p>';
        echo '</div>';
    }
    echo '</div>';
}

function render_video($component)
{
    $video_size = $component['video_size'];
    $className = $video_size == 'small:Small' ? 'max-w-md' : 'w-full';
    $video_element = '
      <div class="flex justify-center mx-8 py-6">
        <video  class="' . $className . '" width="100%" height="100%" controls preload="metadata">
        <source  src="' . $component['video_src'] . '#t=0.1">
        </video>
      </div>
    ';

    echo $video_element;
}


function render_dynamic_content()
{
    $web_components = array(
        'image_container' => 'render_image_container',
        'text_container' => 'render_text_content',
        'video_component' => 'render_video',
        'quotes' => 'render_quotes',
    );

    $post_components = get_field('post_content');

    foreach ($post_components as $component) {
        $web_components[$component['acf_fc_layout']]($component);
    }
}

function render_content_navigation()
{
    $navigation = get_field('content_navigation');
    foreach ($navigation as $nav_option) {
        echo '<a href="#' . $nav_option['anchor_id'] . '" class="post__navigation__option w-full pl-4 py-1 text-sm mb-2 font-medium text-dark-blue-background ">' . $nav_option['display_text'] . '</a>';
    }
}

function render_subscribe_form()
{
    echo '<div class="subscribe__form__container w-full bg-dark-blue-background  px-5 flex flex-col items-center justify-center">';
    echo '<p class="text-white mt-4 mb-[10px] !text-[18px]">Sign up for AI Insights</p>';
    echo FrmFormsController::get_form_shortcode(array('id' => get_field('subscribe_form_id'), 'title' => false, 'description' => false));
    echo '</div>';
}

function render_extra_links($links, $color = 'white')
{
    foreach ($links as $extra_link) {
        echo '<a class="text-' . $color . '" href="' . $extra_link['link_url'] . '">' . $extra_link['link_text'] . '</a>';
    }
}

function render_tags()
{
    $post_tags = get_the_tags();
    if ($post_tags) {
        foreach ($post_tags as $tag) {
            echo '
                <button class="px-5 py-1 border-solid border-primary border lg:border-[2px] rounded-3xl uppercase 
                text-dark-blue-background mr-2 lg:mr-3 mb-3 font-medium cursor-default hover:cursor-default transition-all duration-300
                text-xs lg:text-sm " type="button" name="Example">' . esc_html($tag->name) . '
                </button>
            ';
        }
    }
}

function get_latest_posts($number_of_posts = 3)
{
    $related_posts_ids = get_field('related_posts');

    // Si hay posts relacionados, ajusta los argumentos de la consulta para incluir esos IDs
    if (!empty($related_posts_ids)) {
        $args = array(
            'post_type' => 'post',
            'post__in' => array_map('intval', $related_posts_ids), // Asegurarse de que los IDs sean enteros
            'posts_per_page' => $number_of_posts,
            'orderby' => 'post__in', // Respeta el orden de los posts como aparecen en el campo relacionado
        );
    } else {
        // Argumentos para la consulta por defecto para obtener los últimos posts globales
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => $number_of_posts,
            'orderby' => 'date',
            'order' => 'DESC',
        );
    }

    // WP query instance
    $latest_posts_query = new WP_Query($args);

    // Verify if there are any available posts.
    if ($latest_posts_query->have_posts()) {
        while ($latest_posts_query->have_posts()) {
            $latest_posts_query->the_post(); // Set the current post in the $post object.
            $post_content = limit_post_text(strip_tags(get_field('post_content')[0]['post_text']), 85, '...');
            echo '
                <div class="max-w-sm px-4 lg:px-0 bg-white rounded-lg pb-12 lg:pb-0">
                    <div class="h-52 w-full overflow-hidden rounded-lg">
                        <img class="w-full h-full object-cover" src="' . get_field('post_hero_image') . '" alt="" />
                    </div>
                    <div class="py-2 flex flex-col justify-between h-56">
                        <span class="font-base text-base text-gray-400">' . get_the_date('F j, Y') . '</span>
                        <h5 class="text-lg font-bold tracking-tight text-dark-blue-background line-clamp-2">' . get_the_title() . '</h5>
                        <p class="pt-2 pb-6 font-base text-base text-dark-blue-background">' . esc_html($post_content) . '</p>
                        <div class="">
                            <a href="' . get_permalink() . '" target="_blank" class="schedule__demo__button nav__schedule__demo__button px-3 py-2 border-solid border-primary border lg:border-[2px] rounded-3xl
                            text-primary hover:text-white mr-3 font-medium hover:cursor-pointer transition-all duration-300
                            hover:bg-primary text-xs lg:text-sm " type="button" name="Example">Read Article
                            </a>
                        </div>
                    </div>
                </div>
            ';
        }
    } else {
        js_console("No posts");
    }

    // Restore the global post data
    wp_reset_postdata();
}

?>
<?php get_header(); ?>
<div class="w-full flex justify-center">
    <div class="w-full flex flex-col">
        <main class="post__page w-full">
            <section class="article__body w-full flex flex-col lg:flex-row">
                <!-- <article class="w-full text-dark-blue-background lg:w-auto lg:flex-1 flex justify-center px-5 lg:px-10 pr-4 lg:pr-0 "> -->
                <article
                    class="w-full text-dark-blue-background lg:w-auto lg:flex-1 flex justify-center lg:pl-[10%] 4xl:pl-[14%] px-4 lg:px-0">
                    <div class="content__container post__dynamic__content w-full flex flex-col items-center">
                        <div class="post__content__container flex w-full mb-12">
                            <div class="max-w-4xl">
                                <div class="pt-8 pb-2 lg:pt-12 lg:pb-8">
                                    <p class="pb-4 text-dark-blue-background">AI Insights by Certilytics</p>
                                    <?php render_tags() ?>
                                </div>
                                <h1
                                    class="!text-dark-blue-background min-w-fit tracking-normal font-bold mb-4 text-left mt-6 lg:mt-0 text-2xl lg:text-4xl ">
                                    <?php the_title() ?>
                                </h1>
                                <h2
                                    class="!text-dark-blue-background min-w-fit tracking-normal font-normal text-left mt-6 lg:mt-0 !text-lg lg:!text-xl">
                                    <?php the_field('post_h2') ?>
                                </h2>
                                <div class="post__author__container mt-8 flex justify-start">
                                    <div class="user__container flex">
                                        <img src="<?php echo $tmp_author['author_avatar'] ?>" alt="user avatar"
                                            class="rounded-full object-contain mr-4 w-16 h-16 lg:w-24 lg:h-24">
                                        <div
                                            class="author__name__container w-full flex flex-col justify-center relative">
                                            <p class="font-normal mb-0 leading-5 text-base text-dark-blue-background">By
                                                <?php echo $tmp_author['author_name'] ?>
                                            </p>
                                            <p class="text-base text-dark-blue-background">
                                                <?php echo $tmp_author['publication_date'] ?>
                                            </p>
                                            <?php render_extra_links($tmp_author['extra_author_links']) ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center justify-start mt-8">
                                    <p class="text-lg text-dark-blue-background">SHARE IT : &nbsp;</p>
                                    <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo the_permalink(); ?>&amp;isFramed=true&amp;lang=en_US&amp;xd_origin_host=<?php echo the_permalink(); ?>"
                                        target="_blank">
                                        <img class="w-7 mr-2"
                                            src="<?php echo get_template_directory_uri() ?>/dist/assets/images/postsPage/Linkenin-Navy.jpg"
                                            alt="">
                                    </a>
                                    <a href="https://twitter.com/share?url=<?php echo the_permalink() ?>&text=<?php echo strip_tags(the_title()) ?>"
                                        target="_blank">
                                        <img class="w-7 mx-2"
                                            src="<?php echo get_template_directory_uri() ?>/dist/assets/images/postsPage/X-icon-navy.jpg"
                                            alt="">
                                    </a>
                                    <!-- <a href="https://www.youtube.com/@certilytics" target="_blank">
                                        <img class="w-7 mx-2" src="<?php // echo get_template_directory_uri() ?>/dist/assets/images/postsPage/youtube-icon-navy.svg" alt="">
                                    </a> -->
                                </div>
                            </div>
                            <div class="w-[335px] ml-auto hidden lg:block"></div>
                        </div>
                        <div class="flex w-full space-x-0 lg:space-x-12">
                            <div class="post__article__container w-full lg:max-w-2xl xl:max-w-4xl mr-auto break-words">
                                <?php render_dynamic_content() ?>
                            </div>

                            <aside class="sticky !w-[335px] top-[15%] h-fit hidden lg:block ml-auto pr-4">
                                <div class="related__posts__container w-full hidden lg:block">
                                    <div class="related__posts__headline w-full ">
                                        <p class="w-fit mr-4 font-bold">Content </p>
                                        <div class="content__option__container w-full flex flex-col ">
                                            <?php render_content_navigation() ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-1 h-0 border-t-[1px] mt-4 mb-6 border-gray-400/50 border-solid"></div>
                                <div class="hidden <?php echo $hide_class ?>">
                                    <?php render_subscribe_form() ?>
                                </div>
                            </aside>
                        </div>
                    </div>
                </article>
            </section>
        </main>

        <div class="w-full flex flex-col items-center lg:items-start lg:flex-row">
            <div class="w-11/12 lg:px-10 pt-8 lg:pt-12 lg:pb-12">
                <h3 class="text-dark-blue-background ml-0 lg:ml-12 pb-8 lg:pb-4 text-center lg:text-left text-2xl">
                    Related Insights</h3>
                <div
                    class="flex flex-col lg:flex-row items-center lg:items-start lg:justify-between lg:space-x-8 lg:px-12 lg:pb-12">
                    <?php get_latest_posts() ?>
                </div>
            </div>

            <div class="mobile__subscribe__to__blog w-full lg:hidden block">
                <div
                    class="subscribe__form__container w-full bg-dark-blue-background  px-5 flex flex-col items-center justify-center">
                    <p class="text-white mt-10 mb-8 !text-[18px]">Sign up for AI Insights</p>
                    <?php echo FrmFormsController::get_form_shortcode(array('id' => get_field('subscribe_form_id'), 'title' => false, 'description' => false)); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>