<?php get_header() ?>

	<div class="c-page c-page-home">
		<div id="homepageVideoModal" class="video__modal">
			<button class="video__modal__close" type="button">x</button>
			<video id="homepageHeroVideo" width="100%" height="100%" src="<?php the_field('hero_video') ?>" controls></video>
		</div>
		<div class="app__container">
			<?php get_template_part('components/home/hero-video') ?>
			<?php get_template_part('components/home/buckets') ?>
			<?php // get_template_part('components/home/partner-group') ?>
			<?php get_template_part('components/home/action-button-group') ?>
			<?php get_template_part('components/home/home-animation') ?>
			<?php get_template_part('components/home/insights') ?>
			<?php get_template_part('components/home/schedule-form') ?>
			<?php // get_template_part('components/home/members') ?>
		</div>
	</div>
	<!-- end .c-page -->

<?php get_footer(); ?>
