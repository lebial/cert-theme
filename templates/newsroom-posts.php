<?php
/*
Template Name: Newsroom Posts
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
    if ($img_or_url == 'Image')
        return $comp['post_image'];
    $new_img_arr = array('url' => $comp['image_url'], 'alt' => 'post image example');
    return $new_img_arr;
}

function render_image_container($component)
{
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

function render_extra_links($links, $color = 'white')
{
    foreach ($links as $extra_link) {
        echo '<a class="text-' . $color . '" href="' . $extra_link['link_url'] . '">' . $extra_link['link_text'] . '</a>';
    }
}

$x_icon = get_template_directory_uri() . '/dist/assests/images/footer/twitter.svg';
$x_url = 'https://twitter.com/share?url=' . get_the_permalink() . '&text=' . strip_tags(get_the_title());
$linkedin_icon = get_template_directory_uri() . '/dist/assets/images/postsPage/Linkenin-Navy.jpg';
$linkedin_url = 'https://www.linkedin.com/shareArticle?mini=true&amp;url=' . get_the_permalink() . '&amp;isFramed=true&amp;lang=en_US&amp;xd_origin_host=' . get_the_permalink();
$tags = get_the_tags();
$tag = $tags[0];
$tag_slug = $tag->slug;
$tag_text = $tag->name . 's';
?>

<?php get_header(); ?>
<main class="post__page w-full ">
    <div class="post__container px-10 lg:px-20 max-w-screen-xl">
        <section class="post__description w-full pt-10 lg:pt-10 lg:mb-10">
            <div class="navigation__container mb-12 flex justify-center lg:justify-start">
                <div>
                    <a href="/">Home</a> / <a href="/insights/newsroom">Newsroom</a> / <a
                        href="/insights/newsroom/?tag=<?php echo $tag_slug ?>#scrollaContent"><?php echo $tag_text ?></a>
                </div>
            </div>
            <h1 class="text-dark-blue-background text-center lg:text-left font-bold text-2xl lg:text-3xl">
                <?php the_title() ?>
            </h1>
            <p class="text-center text-dark-blue-background mx-auto lg:mx-0 lg:text-left mt-3">
                <?php echo get_the_date('F j, Y') ?>
            </p>
            <div class="share-it__container flex items-center mt-3 ml-5 lg:ml-0 border-t border-gray-header mb-4">
                <p class=" text-gray-400 mr-4 text-base">SHARE IT :</p>
                <a href="<?php echo $linkedin_url ?>" target="_blank">
                    <img class="w-6 mr-2" src="<?php echo $linkedin_icon ?>" alt="linkedin logo">
                </a>
                <a class="flex" href="<?php echo $x_url ?>" target="_blank">
                    <span class=" bg-dark-blue-background inline-block rounded-full">
                        <svg class="w-4 h-4 m-1" width="1200" height="1227" viewBox="0 0 1200 1227" fill="white"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M714.163 519.284L1160.89 0H1055.03L667.137 450.887L357.328 0H0L468.492 681.821L0 1226.37H105.866L515.491 750.218L842.672 1226.37H1200L714.137 519.284H714.163ZM569.165 687.828L521.697 619.934L144.011 79.6944H306.615L611.412 515.685L658.88 583.579L1055.08 1150.3H892.476L569.165 687.854V687.828Z"
                                fill="" />
                        </svg>
                    </span>
                </a>

            </div>
        </section>
        <section class="article__body w-full flex flex-col lg:flex-row ">
            <article class="w-full lg:w-auto lg:flex-1 flex justify-center ">
                <div class="content__container post__dynamic__content w-full flex flex-col items-center">
                    <?php render_dynamic_content() ?>
                </div>
            </article>
        </section>
    </div>
    <section class="media__contact py-14 bg-indigo-50 px-10 lg:px-20">
        <h3 class="text-dark-blue-background text-lg lg:text-xl">About Certilytics Inc.</h3>
        <p class="text-dark-blue-background text-sm">Certilytics is a privately-held company founded in 2014 to bring
            AI-inspired predictive models to organizations across
            the healthcare ecosystem, including health plans, providers, biotechnology, pharmaceuticals, large employers
            and
            government entities.
            <br>
            <br>
            Utilizing an organically designed IT processing infrastructure, while also merging machine learning and
            software
            engineering, Certilytics has commercialized two distinct data logistics and analytic platforms.
            <br>
            <br>
            These solutions are managing and extracting value from customers’ legacy data assets to reform existing
            workflows,
            processes and decision making - resulting in the use of AI-driven predictive analytics to help customers
            realize the
            true potential of their data and turn it into powerful insights.
        </p>
        <h3 class="text-dark-blue-background text-lg lg:text-xl">Media Contact</h3>
        <p class="text-dark-blue-background text-sm mb-0">Alyssa Read, VP of Marketing & Communications</p>
        <p class="text-dark-blue-background text-sm mb-0">Tel: 518-569-0600</p>
        <p class="text-dark-blue-background text-sm mb-0">Email: <a class=" underline font-bold"
                href="mailto:alyssa.read@certilytics.com">alyssa.read@certilytics.com</a></p>
    </section>
</main>
<?php get_footer(); ?>