<?php get_header(); /* Template Name: Single Product */ 
	
	$slant = array(' left', ' right'); 
	
	$rand = array_rand($slant); ?>

	<div class="c-page c-page-single-product">
		
		<?php $slant = array(' left', ' right'); $rand = array_rand($slant); ?>
	
		<div class="page-header <?php the_field('background_type'); echo $slant[$rand]; ?>">
			
			<div class="contain">
				
				<div class="box <?php the_field('text_background_color'); ?>">
				
					<?php if(get_field('product_logo')):
						
						$image = get_field('product_logo'); ?>
					
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						
						<h1><?php the_title(); ?></h1>
					
					<?php endif; ?>
					
					<?php if(get_field('header_text')): ?>
					
						<div class="text">
							
							<?php the_field('header_text'); ?>
							
						</div>
						
					<?php endif; ?>
					
					<?php if(get_field('header_button')):
					
						$button = get_field('header_button');	?>
						
						<a class="btn <?php the_field('text_background_color'); ?>" href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>" title="<?php echo $button['title']; ?>"><?php echo $button['title']; ?></a>
					
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
		
		<div class="content testtest">
			
			<div class="contain">
				
				<div class="left">
					
					<div class="wysiwyg">
						
						<?php the_field('single_product_content'); ?>
						
					</div>
					<!-- end .wysiwyg -->
					
				</div>
				<!-- end .left -->
				
				<div class="right">
					
					<?php echo FrmFormsController::get_form_shortcode( array( 'id' => 2, 'title' => false, 'description' => false ) ); ?>
					
				</div>
				
			</div>
			<!-- end .contain -->
			
		</div>
		<!-- end .content -->
		
		<?php get_template_part('includes/bottom-cta'); ?>
		
	</div>
	<!-- end .c-page -->
	
	<script>
		
		jQuery(document).ready(function($){
			
			var term = window.location.pathname.split('/')[2];
			
			console.log(term);
			
			if(term == 'aspects-intel') {
				
				$('.right form select').val("Aspects Intel").change();
				
			} else if(term == 'brainstorm-ai') {
				
				$('.right form select').val("Brainstorm™ AI").change();
				
			} else if(term == 'core-grouper') {
				
				$('.right form select').val("CORE Grouper").change();
				
			} else if(term == 'dlm-pipeline') {
				
				$('.right form select').val("DL&M Pipeline").change();
			}

		});
		
	</script>

<?php get_footer(); ?>