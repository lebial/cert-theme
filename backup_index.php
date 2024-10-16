<?php get_header();
$slug = get_page_by_path('news-insights');

$slant = array(' left', ' right');

$rand = array_rand($slant);
function render_excerpt_or_post_content($custom_post_id, $post_excerpt)
{
    $post_content = get_field('post_content', $custom_post_id);
    if ($post_content) {
        $text_content = trim(strip_tags($post_content[0]['post_text']));
        $custom_excerpt = substr($text_content, 0, 140);
        $custom_excerpt .= ',...';
        echo $custom_excerpt;
        return null;
    }
    echo $post_excerpt;
}
?>

<div class="c-page c-page-articles mb-28 default-template">

    <div class="page-header <?php the_field('background_type', $slug->ID);
                            echo $slant[$rand]; ?>">

        <?php if (get_field('background_type', $slug->ID) == 'image') :

            $image = get_field('background_image', $slug->ID);    ?>

            <div class="image">

                <img class="" data-object-fit="cover" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

            </div>

            <div class="color-guard"></div>

        <?php endif; ?>

        <div class="contain">

            <div class="box <?php if (get_field('background_type', 20) == 'solid') {
                                echo get_field('text_background_color', 20);
                            } ?>">
                <?php if (get_field('headline', $slug->ID)) : ?>

                    <h1>

                        <?php the_field('headline', $slug->ID); ?>

                    </h1>

                <?php endif; ?>

                <?php if (get_field('header_text', $slug->ID)) : ?>

                    <div class="text">

                        <?php the_field('header_text', $slug->ID); ?>

                    </div>

                <?php endif; ?>

                <?php if (get_field('button', $slug->ID)) :

                    $button = get_field('button', $slug->ID);    ?>

                    <a class="btn <?php the_field('text_background_color', $slug->ID); ?>" href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>" title="<?php echo $button['title']; ?>"><?php echo $button['title']; ?></a>

                <?php endif; ?>

            </div>
            <!-- end .box -->

            <div class="shapes">

                <div class="top">

                </div>

                <div class="bottom">

                    <div class="shape-1 shape-svg"></div>

                    <div class="shape-2 shape-svg"></div>

                </div>

            </div>
            <!-- end .shapes -->

        </div>
        <!-- end .contain -->

    </div>
    <!-- end .page-header -->

    <div class="content">

        <div class="contain">

            <select class="switcher" name="event-dropdown" onchange='document.location.href=this.options[this.selectedIndex].value;'>

                <?php $option = '<option value="' . get_option('home') . '/news-insights/">All Categories</option>'; // change category to your custom page slug
                $categories = get_categories();
                foreach ($categories as $category) {
                    $category_name = $category->cat_name;
                    if ($category_name == 'hidden' || $category_name == 'Uncategorized' || $category_name == 'ai-insights') {
                        continue;
                    }
                    $option .= '<option value="' . get_option('home') . '/insights/' . $category->slug . '">';
                    $option .= $category_name;
                    $option .= '</option>';
                }
                echo $option;
                ?>

            </select>

            <div class="articles">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <a class="post article" href="<?php the_permalink(); ?>">

                            <h3 class="title"><?php the_title(); ?></h3>

                            <span class="date"><?php echo get_the_date('m/d/o'); ?></span>

                            <p><?php render_excerpt_or_post_content(get_the_ID(), excerpt(20)) ?></p>

                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-post-button.svg" alt="read article button" />

                        </a>

                <?php endwhile;
                endif; ?>

            </div>
            <!-- end articles -->

            <?php wpbeginner_numeric_posts_nav(); ?>

        </div>
        <!-- end .contain -->

    </div>
    <!-- end .content -->

</div>
<!-- end .c-page -->

<?php get_footer(); ?>