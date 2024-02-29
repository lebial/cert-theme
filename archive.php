<?php get_header();

$slant = array(' left', ' right');

$rand = array_rand($slant); ?>

<div class="c-page c-page-articles mb-28">

	<div class="page-header <?php the_field('background_type', 20);
							echo $slant[$rand]; ?>">

		<div class="image">

			<?php $image = get_field('background_image', 714);	?>

			<img class="" data-object-fit="cover" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

		</div>

		<div class="color-guard"></div>


		<div class="contain">

			<div class="box <?php if (get_field('background_type', 714) == 'solid') {
								echo get_field('text_background_color', 714);
							} ?>">

				<?php if (get_field('headline', 714)) : ?>

					<h1>

						<?php the_archive_title(); ?>

					</h1>

				<?php endif; ?>

				<div class="text">

					<?php if (get_the_archive_description()) {

						the_archive_description();
					} else {

						the_field('header_text', 714);
					} ?>

				</div>

				<?php if (get_field('button', 714)) :

					$button = get_field('button', 714);	?>

					<a class="btn <?php the_field('text_background_color', 714); ?>" href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>" title="<?php echo $button['title']; ?>"><?php echo $button['title']; ?></a>

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
				<option value="" selected>Select Category</option>
				<option value="<?php echo get_option('home') ?>/news-insights/">All Categories</option>
				<?php
				$categories = get_categories();
				foreach ($categories as $category) {
					$option .= '<option value="' . get_option('home') . '/news-insights/category/' . $category->slug . '">';
					$option .= $category->cat_name;
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

							<p><?php echo excerpt(20); ?></p>

							<img src="/wp-content/themes/certilytics/assets/images/icon-post-button.svg" alt="read article button" />

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

<script>
	jQuery(document).ready(function($) {

		var term = '<?php the_archive_title(); ?>';

		$('.archive .selectric-scroll li').removeClass('selected highlighted');

		$('.archive .selectric-scroll li:contains("' + term + '")').addClass('selected');

		$('.selectric .label').text(term);

		$('select').on('selectric-highlight', function(event, element, selectric) {
			console.log(event);
			console.log(element);
			console.log(selectric);
		});

	});
</script>

<?php get_footer(); ?>