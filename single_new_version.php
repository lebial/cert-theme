<?php
/*
Template Name: Post New Version
Template Post Type: post 
*/

$post = get_post();
$tmp_author = get_field('author');
$show_content_navigation = get_field('show_content_navigation');
$hide_class = $show_content_navigation ? 'lg:block' : '';
$hide_alternate = $show_content_navigation ? '' : 'lg:block';
$remove_mt_if_shown = $show_content_navigation ? 'mt-8' : 'mt-0';

function get_realted_posts_by_tags()
{
	$tmp_post = get_post();
	$post_tag = get_the_tags($tmp_post->ID);
	// Check if the post has any tags
	$ids = array();
	if ($post_tag) {
		$ids = wp_list_pluck($post_tag, 'term_id');
	}
	// Now pass the IDs to tag__in
	$args = array(
		'post_type' => 'post',
		'post__not_in' => array($tmp_post->ID),
		'tag__in'   => $ids,
		'posts_per_page' => 3,
		'caller_get_posts' => 1
	);
	// Now proceed with the rest of your query
	$related_posts_query = new WP_Query($args);
	$related_posts = array();
	foreach ($related_posts_query->posts as $rel_post) {
		array_push($related_posts, $rel_post->ID);
	};
	return $related_posts;
}

function render_related_posts()
{
	$related_posts = get_field('related_posts');
	if (!$related_posts)  $related_posts = get_realted_posts_by_tags();
	foreach ($related_posts as $tmp_post_id) {
		echo '<a href="' . get_permalink($tmp_post_id) . '">';
		echo '<div class="related__post__body flex mt-4">';
		echo '<div class=" w-24 h-16 bg-dark-blue-background mr-4">
							<img src="' . get_field('post_hero_image', $tmp_post_id) . '" alt="" class="w-full h-full">
					</div>';
		echo '<div class="post__info flex-1">';
		echo '<p class="post__title mb-0 font-bold leading-4" style="font-size: 12px;">' . get_the_title($tmp_post_id) . '</p>';
		echo '</div>';
		echo '</div>';
		echo '</a>';
	}
}

function render_mobile_related_posts()
{
	$related_posts = get_field('related_posts');
	if (!$related_posts)  $related_posts = get_realted_posts_by_tags();
	foreach ($related_posts as $tmp_post_id) {
		echo '<div class="mb-8">';
		echo '<div class="related__post__body mt-4 shadow-xl max-w-sm">';
		echo '<div class=" w-full bg-dark-blue-background mr-4 aspect-video">
								<img src="' . get_field('post_hero_image', $tmp_post_id) . '" alt="_" class="w-full h-full">
						</div>';
		echo '<div class="post__info w-full p-8">';
		echo '<p class="post__title text-sm font-bold" style="margin-bottom: 20px;">' . get_the_title($tmp_post_id) . '</p>';
		echo '<a href="' . get_permalink($tmp_post_id) . '" class="bg-primary text-white rounded-md px-4 py-2 text-sm font-bold ">Read More</a>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
	}
}

function render_text_content($component)
{
	echo '<div class="wysiwyg mb-14">';
	echo $component['post_text'];
	echo '</div>';
}

function render_image_container($component)
{
	$img = $component['post_image'];
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
	echo '<div class="w-9/12 h-px bg-primary"> </div>';
	echo '<div class="w-full post__quotes__slider mx-8 py-6">';
	foreach ($quotes as $quote) {
		echo '<div class="quote__body flex flex-col items-center">';
		echo '<p class="font-bold text-lg text-gray-header max-w-sm text-center" style="max-width: 700px;">';
		echo '&lsquo;&lsquo;' . $quote['quote_body'] . '&rsquo;&rsquo;';
		echo '</p>';
		echo '<p class="">';
		echo $quote['quote_title'];
		echo '</p>';
		echo '</div>';
	}
	echo '</div>';
	echo '<div class="w-9/12 h-px bg-primary mb-10"> </div>';
}


function render_dynamic_content()
{
	$web_components = array(
		'image_container' => 'render_image_container',
		'text_container' => 'render_text_content',
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
		echo '<a href="#' . $nav_option['anchor_id'] . '" class="post__navigation__option w-full pl-4 py-1 mb-2 font-medium text-gray-header ">' . $nav_option['display_text'] . '</a>';
	}
}

function render_subscribe_form()
{
	echo '<div class="subscribe__form__container w-full bg-dark-blue-background  px-5 flex flex-col items-center justify-center">';
	echo '<p class="text-white mt-10" style="margin-bottom: 20px;">Subscribe To Our Blog</p>';
	echo FrmFormsController::get_form_shortcode(array('id' => get_field('subscribe_form_id'), 'title' => false, 'description' => false));
	echo '</div>';
}

?>
<?php get_header(); ?>
<main class="post__page w-full">
    <section
        class="w-full min-h-[50vh] bg-dark-blue-background flex flex-col lg:flex-row items-center px-10 lg:px-28 py-14">
        <div class="post__content__container w-full lg:w-7/12 order-2 lg:-order-1 mr-5">
            <h1 class="text-white min-w-fit font-extralight text-center lg:text-left mt-6 lg:mt-0"
                style="font-size: calc(1.5rem + (1vw - 3.2px) * 1.9375);"><?php the_title() ?></h1>
            <div class="post__author__container flex justify-center lg:justify-start">
                <div class="user__container mt-10 flex">
                    <img src="<?php echo $tmp_author['author_avatar'] ?>" alt="user avatar"
                        class="rounded-full mr-6 w-16 h-16 lg:w-24 lg:h-24">
                    <div class="author__name__container w-full flex flex-col justify-center relative">
                        <p class="text-white font-bold mb-0">By <?php echo $tmp_author['author_name'] ?></p>
                        <p class="text-white"><?php echo $tmp_author['author_title'] ?></p>
                        <a class="
						 flex justify-center items-center
						font-bold rounded-full lg:-bottom-3 border border-white
						border-solid w-6 h-6 text-center text-white
						text-xs -bottom-6
						" href="<?php echo $tmp_author['author_web'] ?>" target="_blank">in</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-5/12 flex justify-center lg:justify-start ">
            <div class="max-w-lg lg:mr-10 mr-0">
                <img class="" src="<?php the_field('post_hero_image') ?>" alt="post descriptive image">
            </div>
        </div>
    </section>
    <section class="post__description w-full pt-20 mb-14">
        <p class="text-center text-gray-400 mx-auto"><?php echo get_the_date('F j, Y') ?></p>
        <div class=" max-w-xl mx-auto mt-10">
            <h2 class="text-center text-2xl lg:text-4xl text-gray-header px-4"> <?php the_field('post_h2') ?></h2>
        </div>
    </section>
    <section class="article__body w-full flex flex-col lg:flex-row px-5 ">
        <aside class="sticky w-[280px] top-[15%] h-fit ">
            <div class="hidden <?php echo $hide_alternate ?>">
                <?php render_subscribe_form() ?>
            </div>
            <div class="hidden <?php echo $hide_class ?> ">
                <p class="font-bold">Contents</p>
                <div class="content__option__container w-full flex flex-col">
                    <?php render_content_navigation() ?>
                </div>
            </div>
            <div class="flex items-center mt-5 border-t border-gray-header">
                <p class="text-gray-header mr-4">SHARE IT :</p>
                <a
                    href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo the_permalink(); ?>&amp;isFramed=true&amp;lang=en_US&amp;xd_origin_host=<?php echo the_permalink(); ?>">
                    <img class="w-7 mr-2"
                        src="<?php echo get_template_directory_uri() ?>/dist/assets/images/postsPage/Linkenin-Navy.jpg"
                        alt="">
                </a>
                <a
                    href="https://twitter.com/share?url=<?php echo the_permalink() ?>&text=<?php echo strip_tags(the_title()) ?>">
                    <img class="w-7 mx-2"
                        src="<?php echo get_template_directory_uri() ?>/dist/assets/images/postsPage/Twitter-navy.jpg"
                        alt="">
                </a>
            </div>
        </aside>

        <article class="w-full lg:w-auto lg:flex-1 flex justify-center px-5 lg:px-10 ">
            <div class="content__container post__dynamic__content w-full flex flex-col items-center lg:px-10">
                <?php render_dynamic_content() ?>
            </div>
        </article>

        <aside class="sticky w-[280px] top-[15%] h-fit hidden lg:block">
            <div class="hidden <?php echo $hide_class ?>">
                <?php render_subscribe_form() ?>
            </div>
            <!-- related posts container -->
            <div class="related__posts__container w-full <?php echo $remove_mt_if_shown ?>">
                <div class="related__posts__headline flex w-full items-center mb-4">
                    <p class="w-fit mr-4">You might also like </p>
                    <div class="flex-1 h-0 border-t-2 border-gray-400 border-solid"></div>
                </div>

                <!-- related posts list -->
                <?php render_related_posts() ?>
                <!-- end related posts list -->

            </div>
            <!-- end related posts container -->

        </aside>
    </section>
    <div class="w-full lg:w-7/12 border-b border-gray-header border-solid flex justify-center mb-14 mx-auto pb-6">
        <!-- <div class="flex items-center">
			<p class="text-gray-header mr-4">SHARE IT :</p>
			<a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo the_permalink(); ?>&amp;isFramed=true&amp;lang=en_US&amp;xd_origin_host=<?php echo the_permalink(); ?>">
				<img class="w-7 mr-2" src="<?php echo get_template_directory_uri() ?>/dist/assets/images/postsPage/Linkenin-Navy.jpg" alt="">
			</a>
			<a href="https://twitter.com/share?url=<?php echo the_permalink() ?>&text=<?php echo strip_tags(the_title()) ?>">
				<img class="w-7 mx-2" src="<?php echo get_template_directory_uri() ?>/dist/assets/images/postsPage/Twitter-navy.jpg" alt="">
			</a>
		</div> -->
    </div>

    <div class="mobile__related__posts w-full mt-8 lg:hidden flex flex-col items-center">
        <p class="text-gray-header font-bold text-center text-2xl">You Might Also Like</p>
        <div class="w-full flex flex-col items-center px-6 mt-8">
            <?php render_mobile_related_posts() ?>
        </div>
    </div>

    <div class="mobile__subscribe__to__blog w-full lg:hidden block">
        <div
            class="subscribe__form__container w-full bg-dark-blue-background  px-5 flex flex-col items-center justify-center">
            <p class="text-white mt-10" style="margin-bottom: 20px;">Subscribe To Our Blog</p>
            <?php echo FrmFormsController::get_form_shortcode(array('id' => get_field('subscribe_form_id'), 'title' => false, 'description' => false)); ?>
        </div>
    </div>

    <div class="about__the__author w-full justify-center my-24 hidden lg:flex ">
        <div class="author__card flex">
            <div class="author__icon mr-6">
                <img src="<?php echo $tmp_author['author_avatar'] ?>" alt="user avatar" class=" rounded-full w-24 h-24"
                    style="filter: grayscale(1);">
            </div>
            <div class="author__description">
                <p class="mb-0 text-lg text-gray-header">ABOUT THE AUTHOR</p>
                <p class="font-bold mb-4 text-3xl"><?php echo $tmp_author['author_name'] ?></p>
                <p class=" text-base max-w-lg"><?php echo $tmp_author['author_description'] ?></p>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>