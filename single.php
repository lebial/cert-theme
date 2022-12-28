<?php get_header(); ?>

	<div class="c-page c-page-single-post mb-28">
		
		<div class="contain">
			
			<div class="meta">
				
				<h1><span><?php the_title(); ?></span></h1>
				
				<span class="date"><?php echo get_the_date('m/d/o'); ?></span>
				
				<span class="tags"><?php echo get_the_category_list(', '); ?></span>
				
			</div>
			
			<div class="wysiwyg">
				
				<?php the_content(); ?>
				
			</div>
			<!-- end .wysiwyg -->
			
			<div class="social-share">
				
				<span class="label">SHARE:</span>
				
				<a class="share_link" href="https://facebook.com/sharer/sharer.php?u=<?php echo the_permalink(); ?>" onclick="javascript:window.open(this.href,'','menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=600');return false;" aria-label="Certilytics on Facebook">
					
					<span class="lable">Facebook</span>
					
				</a>
				
				<a class="c-share_link" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo the_permalink(); ?>&amp;isFramed=true&amp;lang=en_US&amp;xd_origin_host=<?php echo the_permalink(); ?>" onclick="javascript:window.open(this.href,'','menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=510,width=610');return false;" aria-label="Certilytics on LinkedIn">
					
					<span class="lable">Linkedin</span>
					
				</a>
				
			</div>
			<!-- end .social-share -->
			
		</div>
		<!-- end .contain -->
		
		<div class="bottom-cta mb-28">
			
			<?php 
				
				$previous_post = get_previous_post();
				
				$next_post = get_next_post();
				
				if($previous_post && $next_post) {
					$ctaCount = 'both';
				} else {
					$ctaCount = 'single';
				} ?>

			<div class="contain">
			
				<?php if($next_post): ?>
					
					<a class="left <?php echo $ctaCount; ?>" href="<?php the_permalink($next_post->ID); ?>">
						
						<span class="label">
						
						<?php echo get_the_title($next_post->ID); ?>
						
						</span>
						
					</a>
				
				<?php endif; ?>
					
				<?php if($previous_post): ?>
				
					<a class="right <?php echo $ctaCount; ?>" href="<?php the_permalink($previous_post->ID); ?>">
						
						<span class="label">
						
							<?php echo get_the_title($previous_post->ID); ?>
							
						</span>
						
					</a>
				
				<?php endif; ?>
			
			</div>
			<!-- end .bottom-cta  -->

	</div>
	<!-- end .c-page-single-post -->

<?php get_footer(); ?>