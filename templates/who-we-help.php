<?php
// Template Name: Who We Help
function get_achievements()
{
    get_template_part('components/who-we-help/achievements');
}

function get_resources_content()
{
    get_template_part('components/who-we-help/resources-content');
}

;

function render_custom_content()
{
    $options = [
        'Health Plans' => 'get_achievements',
        'default' => 'get_resources_content',
    ];
    $title = get_the_title();
    if (array_key_exists($title, $options))
        return $options[$title];
    return $options['default'];


}
?>


<?php get_header(); ?>
<?php get_template_part('components/who-we-help/help-hero') ?>
<?php //get_template_part('components/who-we-help/achievements') ?>
<?php render_custom_content()(); ?>
<?php get_template_part('components/who-we-help/our-approach') ?>
<?php get_template_part('components/who-we-help/healthplan-resources') ?>
<?php get_template_part('components/platform/contact-us') ?>
<?php get_footer(); ?>