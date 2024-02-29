<?php get_header(); ?>

<div class="c-page c-page-error">
	
	<div class="contain">
		
		<img class="error404" src="/wp-content/themes/certilytics/assets/images/error-image.svg" alt="404 error page" />
		
		<p><?php the_field('error_message', 'options'); ?></p>
		
		<img src="/wp-content/themes/certilytics/assets/images/icon-error-triangle.svg" alt="triangle pointing to home button on 404 page" />
		
		<a class="btn navy" href="/" title="home page">Home</a>
		
	</div>
	
</div>

<?php get_footer(); ?>