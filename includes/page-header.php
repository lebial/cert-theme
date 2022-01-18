<?php if(get_field('include_page_header')): 
	
	$slant = array(' left', ' right'); 
	
	$rand = array_rand($slant); ?>

	<div class="page-header <?php the_field('background_type'); echo $slant[$rand]; ?>">
		
		<?php if(get_field('background_type') == 'image'): 
			
			$image = get_field('background_image');	?>
		
			<div class="image">
				
				<img class="" data-object-fit="cover" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				
			</div>
		
		<?php endif; ?>
		
		<div class="contain">
			
			<div class="box <?php if(get_field('background_type') == 'solid') { echo get_field('text_background_color'); } ?>">
			
				<?php if(get_field('headline')): ?>
				
					<h1>
						
						<?php the_field('headline'); ?>
						
					</h1>
				
				<?php endif; ?>
				
				<?php if(get_field('header_text')): ?>
				
					<div class="text">
						
						<?php the_field('header_text'); ?>
						
					</div>
					
				<?php endif; ?>
				
				<?php if(get_field('button')):
				
					$button = get_field('button');	?>
					
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

<?php endif; ?>