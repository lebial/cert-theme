<?php if(get_field('related_page_1') || get_field('related_page_2')): 
	
	if(get_field('related_page_1') && get_field('related_page_2')) {
		$ctaCount = 'both';
	} else {
		$ctaCount = 'single';
	} ?>

	<div class="bottom-cta">
		
		<div class="contain">
		
			<?php if(get_field('related_page_1')): 
				
				$leftObject = get_field('related_page_1');
				
				if( $leftObject ): 
	
					$post = $leftObject;
					
					setup_postdata( $post ); ?>
			
					<a class="left <?php echo $ctaCount; ?>" href="<?php the_permalink(); ?>">
						
						<span class="label">
						
							<?php the_title(); ?>
							
						</span>
						
					</a>
					
				<?php wp_reset_postdata(); endif; ?>
			
			<?php endif; ?>
				
			<?php if(get_field('related_page_2')):
			
				$rightObject = get_field('related_page_2');
				
				if( $rightObject ): 
	
					$post = $rightObject;
					
					setup_postdata( $post ); ?>
			
					<a class="right <?php echo $ctaCount; ?>" href="<?php the_permalink(); ?>">
						
						<span class="label">
							
							<?php the_title(); ?>
							
						</span>
						
					</a>
					
				<?php wp_reset_postdata(); endif; ?>
			
			<?php endif; ?>
		
		</div>
		<!-- end .contain -->
		
	</div> 
	<!-- end .bottom-cta -->

<?php endif; ?>