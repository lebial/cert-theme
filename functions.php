<?php

// Hide posts with category 
function hide_by_excluding_category($query)
{
    $cat_id = get_cat_ID('hidden');
    if ($query->is_home()) {
        $query->set('cat', '-' . $cat_id);
    }
    return $query;
}

add_filter('pre_get_posts', 'hide_by_excluding_category');

// load styles and scripts
function add_styles_scripts()
{
    wp_enqueue_script('jquery');
    wp_enqueue_script('typedJs', "https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js", array());
    wp_enqueue_script('srcScripts', get_template_directory_uri() . '/lib/js/bundleOld.js', array(), filemtime(get_stylesheet_directory() . '/dist/assets/js/bundle.js'), '1.0.0', true);
    wp_enqueue_script('srcScriptsNew', get_template_directory_uri() . '/dist/assets/js/bundle.js', array(), filemtime(get_stylesheet_directory() . '/dist/assets/js/bundle.js'), '1.0.0', true);
    wp_enqueue_style('srcStyles', get_template_directory_uri() . '/dist/assets/css/bundle.css', array(), filemtime(get_stylesheet_directory() . '/dist/assets/css/bundle.css'));
    wp_enqueue_style('googleFonts', 'https://fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600');
    wp_register_style('AOSStyles', "https://unpkg.com/aos@next/dist/aos.css");
    // wp_enqueue_style('AOSStyles');
    wp_enqueue_script('AOSJs', "https://unpkg.com/aos@next/dist/aos.js", array());
}
add_action('wp_enqueue_scripts', 'add_styles_scripts');

// enable title in theme
function custom_theme_slug_support()
{
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'custom_theme_slug_support');

// wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );

// register menus
function register_my_menus()
{
    register_nav_menus(
        array(
            'main-menu' => __('Main Menu'),
            'footer-menu' => __('Footer Menu')
        )
    );
}
add_action('init', 'register_my_menus');

// acf global page
if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'menu_title'    => 'Site Wide'
    ));
}

//Remove JQuery migrate
function remove_jquery_migrate($scripts)
{
    if (!is_admin() && isset($scripts->registered['jquery'])) {
        $script = $scripts->registered['jquery'];
        if ($script->deps) { // Check whether the script has any dependencies
            $script->deps = array_diff($script->deps, array('jquery-migrate'));
        }
    }
}
add_action('wp_default_scripts', 'remove_jquery_migrate');

//Modify TinyMCE editor to remove H1.
function tiny_mce_remove_unused_formats($init)
{
    $init['block_formats'] = 'Paragraph=p;Heading 2=h2;Heading 3=h3;';
    return $init;
}
add_filter('tiny_mce_before_init', 'tiny_mce_remove_unused_formats');
add_filter('emoji_svg_url', '__return_false');

// adding custom css to admin area
add_action('admin_head', 'custom_admin_css');

add_editor_style('/custom-editor-style.css');

function custom_admin_css()
{
    echo '<style>
	  .acf-fc-layout-handle,
	  .hndle {
	  	background-color: #0085ba;
			color: #f1f1f1!important;
			font-weight: bold;
	  } 
	  .acf-flexible-content .layout .acf-fc-layout-controlls .acf-icon.-plus, .acf-flexible-content .layout .acf-fc-layout-controlls .acf-icon.-minus {
	    visibility: visible!important;
	  }
	  .accordion-section-title:after, .handlediv, .item-edit, .postbox .handlediv.button-link, .toggle-indicator {
	    color: #f1f1f1!important;
	  }
	  .short-wysiwyg iframe {
		  height:150px!important;
	  }
		.one-third .acf-repeater tbody,
		.one-forth .acf-repeater tbody {
			display: flex;
			flex-direction: row;
			flex-wrap: wrap;
			justify-content: space-around;
		}
		.one-third .acf-repeater tr.acf-row:not(.acf-clone) {
		    width: 100%;
		    max-width:31%;
		    margin-bottom: 2%;
		}
		.one-forth .acf-repeater tr.acf-row:not(.acf-clone) {
		    width: 100%;
		    max-width:25%;
		    margin-bottom: 2%;
		}
		.one-third .acf-repeater tr.acf-row:not(.acf-clone) td.acf-fields {
		    width: 100% !important; /* important is necessary because it gets overwritten on drag&drop  */
		}
	</style>';
}

function yoasttobottom()
{
    return 'low';
}
add_filter('wpseo_metabox_prio', 'yoasttobottom');

function excerpt($limit)
{
    $excerpt = explode(' ', get_the_excerpt(), $limit);

    if (count($excerpt) >= $limit) {
        array_pop($excerpt);
        $excerpt = implode(" ", $excerpt) . '...';
    } else {
        $excerpt = implode(" ", $excerpt);
    }

    $excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);

    return $excerpt;
}

function content($limit)
{
    $content = explode(' ', get_the_content(), $limit);

    if (count($content) >= $limit) {
        array_pop($content);
        $content = implode(" ", $content) . '...';
    } else {
        $content = implode(" ", $content);
    }

    $content = preg_replace('/\[.+\]/', '', $content);
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);

    return $content;
}

function wpbeginner_numeric_posts_nav()
{

    if (is_singular())
        return;

    global $wp_query;

    /** Stop execution if there's only 1 page */
    if ($wp_query->max_num_pages <= 1)
        return;

    $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
    $max   = intval($wp_query->max_num_pages);

    /** Add current page to the array */
    if ($paged >= 1)
        $links[] = $paged;

    /** Add the pages around the current page to the array */
    if ($paged >= 3) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if (($paged + 2) <= $max) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<div class="navigation"><ul>' . "\n";

    /** Previous Post Link */
    if (get_previous_posts_link())
        printf('<li class="prev_link">%s</li>' . "\n", get_previous_posts_link('<span class="prev-arrow"></span>'));

    /** Link to first page, plus ellipses if necessary */
    if (!in_array(1, $links)) {
        $class = 1 == $paged ? ' class="active"' : '';

        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link(1)), '1');

        if (!in_array(2, $links))
            echo '<li>…</li>';
    }

    /** Link to current page, plus 2 pages in either direction if necessary */
    sort($links);
    foreach ((array) $links as $link) {
        $class = $paged == $link ? ' class="active"' : '';
        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($link)), $link);
    }

    /** Link to last page, plus ellipses if necessary */
    if (!in_array($max, $links)) {
        if (!in_array($max - 1, $links))
            echo '<li>…</li>' . "\n";

        $class = $paged == $max ? ' class="active"' : '';
        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($max)), $max);
    }

    /** Next Post Link */
    if (get_next_posts_link())
        printf('<li class="next_link">%s</li>' . "\n", get_next_posts_link('<span class="next-arrow"></span>'));

    echo '</ul></div>' . "\n";
}

function filter_ptags_on_images($content)
{
    return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('the_content', 'filter_ptags_on_images');

add_filter('get_the_archive_title', function ($title) {

    if (is_category()) {

        $title = single_cat_title('', false);
    } elseif (is_tag()) {

        $title = single_tag_title('', false);
    } elseif (is_author()) {

        $title = '<span class="vcard">' . get_the_author() . '</span>';
    }

    return $title;
});

// remove default image links
function wpb_imagelink_setup()
{
    $image_set = get_option('image_default_link_type');

    if ($image_set !== 'none') {
        update_option('image_default_link_type', 'none');
    }
}
add_action('admin_init', 'wpb_imagelink_setup', 10);
add_action('send_headers', 'tgm_io_strict_transport_security');
/**
 * Enables the HTTP Strict Transport Security (HSTS) header.
 *
 * @since 1.0.0
 */
function tgm_io_strict_transport_security()
{

    header('Strict-Transport-Security: max-age=10886400; includeSubDomains; preload');
}

// allow SVG uploads
function add_file_types_to_uploads($file_types)
{
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes);
    return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');

function custom_get_gallery_image_as_svg($field)
{
    $logos = get_field($field);
    foreach ($logos as $logo_src) {
        echo '<div class="partner__item flex justify-center items-center mt-4">';
        echo '<img class="style-svg w-4/5 md:w-40 md:mr-6" src="' . $logo_src . '" />';
        echo '</div>';
    }
}

function custom_slider_arrows($slider)
{
    echo '<button type="button" class="' . $slider . '-prev h-10 w-14 lg:h-24 lg:w-28 relative z-50"><img class="style-svg h-full w-full" src="' . get_template_directory_uri() . '/dist/assets/images/platform/rightArrowSlider.svg" alt="left arrow"></button>';
    echo '<button type="button" class="' . $slider . '-next h-10 w-14 rotate-180 lg:h-24 lg:w-28 relative z-50"><img class="style-svg h-full w-full" src="' . get_template_directory_uri() . '/dist/assets/images/platform/rightArrowSlider.svg" alt="right arrow"></button>';
}

function custom_get_field($field, $id)
{
    return strip_tags(get_field($field, $id), '<a><strong><br>');
}

function js_console($variable)
{
    echo '<script> console.log(`PHP console:' . json_encode($variable) . '`); </script>';
}

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

function get_most_recent_posts($number_posts)
{
    $posts_to_get = $number_posts ?? '3';
    $recent_posts = wp_get_recent_posts(array(
        'numberposts' => $posts_to_get,
        'post_status' => 'publish'
    ));

    $recent_posts_ids = array();
    foreach ($recent_posts as $rec_post) {
        array_push($recent_posts_ids, $rec_post['ID']);
    };
    return $recent_posts_ids;
}

function get_recent_or_selected_posts($recent, $selected)
{
    $posts_to_show = array();
    foreach ($recent as $idx => $post) {
        // if ($selected && $selected[$idx] ) {
        array_push($posts_to_show, $selected[$idx] ?? $recent[$idx]);
        // } else {
        //     array_push($posts_to_show, $recent[$idx]);
        // }
    }

    return $posts_to_show;
};

function limit_post_text($text, $limit, $after_content) {
    return mb_strimwidth($text, 0, $limit, $after_content);
}
