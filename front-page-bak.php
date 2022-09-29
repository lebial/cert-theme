<?php get_header(); 
	
	$slant = array(' left', ' right'); 
	
	$rand = array_rand($slant); ?>

	<div class="c-page c-page-home">
		
		<?php $slant = array(' left', ' right'); $rand = array_rand($slant); ?>
	
		<div class="page-header <?php the_field('background_type'); echo $slant[$rand]; ?>">
			
			<!-- <div class="shape-shifter">
					
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Certilytics-Logo-Icons-1.svg" alt="Certilytics-Logo-Icons-1" />
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Certilytics-Logo-Icons-2.svg" alt="Certilytics-Logo-Icons-2" />
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Certilytics-Logo-Icons-3.svg" alt="Certilytics-Logo-Icons-3" />
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Certilytics-Logo-Icons-4.svg" alt="Certilytics-Logo-Icons-4" />
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Certilytics-Logo-Icons-5.svg" alt="Certilytics-Logo-Icons-5" />
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Certilytics-Logo-Icons-6.svg" alt="Certilytics-Logo-Icons-6" />
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Certilytics-Logo-Icons-7.svg" alt="Certilytics-Logo-Icons-7" />
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Certilytics-Logo-Icons-8.svg" alt="Certilytics-Logo-Icons-8" />
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Certilytics-Logo-Icons-9.svg" alt="Certilytics-Logo-Icons-9" />
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Certilytics-Logo-Icons-10.svg" alt="Certilytics-Logo-Icons-10" />
				
			</div> -->
			<!-- end .shape-shifter -->
			
			<div class="contain">
				
				<div class="box luxy-el" data-speed-y="-15">
				
					<?php if(get_field('headline')): ?>
					
						<h1>
							
							<?php the_field('headline'); ?>
							
							
						</h1>
					
					<?php endif; ?>
					
					<?php if(get_field('header_text')): ?>
					
						<div>
							
							<?php the_field('header_text'); ?>
							
						</div>
						
					<?php endif; ?>
					
					<?php if(get_field('header_button')):
					
						$button = get_field('header_button');	?>
						
						<a class="btn" href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>" title="<?php echo $button['title']; ?>"><?php echo $button['title']; ?></a>
					
					<?php endif; ?>
					
				</div>
				<!-- end .box -->
				
			</div>
			<!-- end .contain -->
			
		</div>
		<!-- end .page-header -->
		
		<div class="content">
			
			<div class="value-boxes">
				
				<div class="contain">
					
					<?php $link = get_field('boxes_cta'); ?>
				
					<a href="<?php echo $link['url']; ?>" class="box box-1">
						
						<div class="wysiwyg">
							
							<?php the_field('box_1'); ?>
							
						</div>
						
					</a>
					
					<a href="<?php echo $link['url']; ?>" class="box box-2">
						
						<div class="wysiwyg">
							
							<?php the_field('box_2'); ?>
							
						</div>
						
					</a>
					
					<a href="<?php echo $link['url']; ?>" class="box box-3">
						
						<div class="wysiwyg">
							
							<?php the_field('box_3'); ?>
							
						</div>
						
					</a>
					
					<a class="btn" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" title="<?php echo $link['title']; ?>"><?php echo $link['title']; ?></a>
					
				</div>
				<!-- end .contain -->
				
			</div>
			<!-- end .value-boxes -->
			
			<div class="additional-info">
				
				<div class="cb cb-simple built left">
				
					<div class="contain">
						
						<div class="text left">
							
							<div class="wysiwyg">
								
								<?php the_field('built_to_serve'); ?>
								
							</div>
							<!-- end .wysiwyg -->
							
						</div>
						<!-- end .text -->
						
					</div>
					<!-- end .contain -->
					
				</div>
				<!-- end .cb-simple -->
				
				<div class="cb cb-simple unify right">
				
					<div class="contain">
						
						<div class="text right">
							
							<div class="wysiwyg">
								
								<?php the_field('unify_your_data'); ?>
								
							</div>
							<!-- end .wysiwyg -->
							
						</div>
						<!-- end .text -->
						
					</div>
					<!-- end .contain -->
					
				</div>
				<!-- end .cb-simple -->
				
			</div>
			<!-- end .additional-info -->
			
			<div class="articles">
				
				<div class="contain">
						
					<?php $top_story = get_field('featured_story');	
	
					if( $top_story ): 
	
					// override $post
					$post = $top_story;
					
					$featID = $top_story -> ID;
					
					setup_postdata( $post ); ?>
						
					<a class="featured post" href="<?php the_permalink(); ?>" class="featured-story">
						
						<h2 class="title"><?php the_title(); ?></h2>
								
						<p><?php echo excerpt(100); ?></p>
								
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-post-button.svg" alt="read article button" />
					
					</a>
					<!-- end .featured -->
					
					<?php endif; wp_reset_postdata(); ?>
											
					<div class="other-articles">
						
						<?php 
							
							$get_query = new WP_Query(array(
								'post_type'   => 'post',
								'post__not_in' => array($featID),
								'posts_per_page' => 2,
							));
							
							while ($get_query->have_posts()) : $get_query->the_post(); ?>
							
							<a class="post" href="<?php the_permalink(); ?>">

								<h2 class="title"><?php the_title(); ?></h2>
								
								<p><?php echo excerpt(20); ?></p>
								
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-post-button.svg" alt="read article button" />
									
							</a>
							
						<?php endwhile; wp_reset_query(); ?>
						
					</div>
					<!-- end .articles -->
					
				</div>
				<!-- end .contain -->
				
			</div>
			<!-- end .articles -->
			
		</div>
		<!-- end .content -->

	</div>
	<!-- end .c-page -->

<?php get_footer(); ?>