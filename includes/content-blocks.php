<div class="content-blocks <?php if(!get_field('include_page_header')) { echo 'no-header'; }; ?>">
	
	<?php if( have_rows('content_block') ): while ( have_rows('content_block') ) : the_row(); ?>
	
		<?php if( get_row_layout() == 'simple_content' ): 
			
			$position = get_sub_field('content_alignment'); ?>
		
			<div class="cb cb-simple">
				
				<div class="contain <?php echo $position; ?>">
					
					<?php if(get_sub_field('companion_side_image')): 
						
						$image = get_sub_field('companion_side_image'); ?>
					
						<img class="<?php the_sub_field('image_alignment'); ?>" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					
					<?php endif; ?>
					
					<div class="text <?php echo $position; ?>">
						
						<div class="wysiwyg">
							
							<?php the_sub_field('content'); ?>
							
						</div>
						<!-- end .wysiwyg -->
						
					</div>
					<!-- end .text -->
					
				</div>
				<!-- end .contain -->
				
			</div>
			<!-- end .cb-simple -->
		
		<?php elseif( get_row_layout() == 'image' ): ?>
		
			<div class="cb cb-image">
				
				<div class="contain">
					
					<?php if(get_sub_field('image_header')): ?>
					
						<h2><?php the_sub_field('image_header'); ?></h2>
					
					<?php endif; ?>
					
					<?php $image = get_sub_field('image_file'); ?>
					
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					
					<?php if(get_sub_field('image_caption')): ?>
					
						<span class="caption"><?php the_sub_field('image_caption'); ?></span>
						
					<?php endif; ?>
					
				</div>
				
			</div>
			<!-- end .cb-image -->
		
		<?php elseif( get_row_layout() == 'video' ): ?>
		
			<div class="cb cb-video">
				
				<div class="contain">
					
					<?php if(get_sub_field('video_header')): ?>
					
						<h2><?php the_sub_field('video_header'); ?></h2>
					
					<?php endif; ?>
					
					<?php $videoURL = get_sub_field('video_link'); ?>

	        <?php if (strpos($videoURL,'youtube') == true):
	
	        parse_str( parse_url( $videoURL, PHP_URL_QUERY ), $ytVid );?>
	
	          <div class="video-container">
	            
	            <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $ytVid['v']; ?>?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	          
	          </div>
	        
	        <?php else: 
	
	          $vimeo = (int) substr(parse_url($videoURL, PHP_URL_PATH), 1); ?>
	
	          <div class="video-container">
	             
	            <iframe src="https://player.vimeo.com/video/<?php echo $vimeo; ?>?title=0&byline=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
	          
	          </div>
	
	        <?php endif; ?>
					
				</div>
				
			</div>
			<!-- end .cb-video -->
			
		<?php elseif( get_row_layout() == 'button' ): ?>
			
			<div class="cb cb-button">
				
				<div class="contain">
					
					<?php $link = get_sub_field('button'); ?>
					
					<a class="btn <?php the_sub_field('button_alignment'); ?>" href="<?php echo $link['url']; ?>" title="<?php echo $link['title']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
					
				</div>
				
			</div>
			<!-- end .cb-button -->
		
		<?php elseif( get_row_layout() == 'centered_text' ): ?>
		
			<div class="cb cb-cen-text">
				
				<div class="contain <?php if(get_sub_field('add_border_around_text')) {echo 'border';}; ?>">
					
					<div class="wysiwyg">
						
						<?php the_sub_field('content'); ?>
						
					</div>
					
				</div>
				<!-- end .contain -->
				
			</div>
			<!-- end .cb-cen-text -->
		
		<?php elseif( get_row_layout() == 'accordion' ): ?>
		
			<div class="cb cb-accordion">
				
				<div class="contain">
						
						<?php if( have_rows('accordion') ): while ( have_rows('accordion') ) : the_row(); ?>
						
							<div class="drawer clearfix">
								
								<div class="inner-contain">
									
									<span class="headline"><?php the_sub_field('accordion_title');?></span>
									
									<div class="content clearfix">
										
										<div class="wysiwyg">
											
											<?php the_sub_field('accordion_content');?>
											
										</div>
										
									</div>
									
								</div>
								
							</div>
							
						<?php endwhile; endif; ?>
						
					</div>
					<!-- end .contain -->
				
			</div>
			<!-- end .cb-cen-accodion -->
		
		<?php elseif( get_row_layout() == 'form' ): ?>
		
			<div class="cb cb-form">
				
				<div class="contain">
					
					<?php if(get_sub_field('form_title')): ?>
					
						<h2><?php the_sub_field('form_title'); ?></h2>
					
					<?php endif; ?>
					
					<?php if(get_sub_field('form_title')): ?>
					
						<?php the_sub_field('form_description'); ?>
					
					<?php endif; ?>
					
					<?php echo do_shortcode( ' '.get_sub_field('form_shortcode').' '); ?>
					
				</div>
				<!-- end .contain -->
				
			</div>
			<!-- end .cb-cen-form -->
		
		<?php elseif( get_row_layout() == 'columned_list' ): ?>
		
			<div class="cb cb-col-list">
				
				<div class="contain">
					
					<?php if(get_sub_field('list_header')): ?>
					
						<h2><?php the_sub_field('list_header'); ?></h2>
					
					<?php endif; ?>
					
					<div class="list-items">
						
						<?php if( have_rows('list_items') ): while ( have_rows('list_items') ) : the_row(); ?>
						
							<?php if(get_sub_field('list_link')): ?>
							
								<a href="<?php the_sub_field('list_link'); ?>">
									
									<?php the_sub_field('list_text'); ?>
									
								</a>
								
							<?php else: ?>
							
								<span>
								
									<?php the_sub_field('list_text'); ?>
								
								</span>
							
							<?php endif; ?>
						
						<?php endwhile; endif; ?>
						
					</div>
					<!-- end .list-items -->
					
				</div>
				<!-- end .contain -->
				
			</div>
			<!-- end .cb-cen-col-list -->
		
		<?php elseif( get_row_layout() == 'card_list' ): ?>
		
			<div class="cb cb-card-list">
				
				<div class="contain">
					
					<?php if(get_sub_field('cards_header')): ?>
					
						<h2><?php the_sub_field('cards_header'); ?></h2>
					
					<?php endif; ?>
					
					<div class="cards">
					
						<?php if( have_rows('cards') ): while ( have_rows('cards') ) : the_row(); ?>
						
							<div class="card">
								
								<div class="container">
														
									<?php if(get_sub_field('card_image')):
										
										$image = get_sub_field('card_image'); ?>
								
										<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								
									<?php endif; ?>
									
									<?php if(get_sub_field('card_text')): ?>
									
										<div class="wysiwyg">
									
											<?php the_sub_field('card_text'); ?>
											
										</div>
									
									<?php endif; ?>
									
								</div>
								<!-- end .container -->
								
								<?php if(get_sub_field('card_link')): 
									
									$link = get_sub_field('card_link'); ?>
								
									<a class="btn btn-flat" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" title="<?php echo $link['title']; ?>">
										
										<span class="txt"><?php echo $link['title']; ?></span>
										
										<span class="bg"></span>
										
									</a>
								
								<?php endif; ?>
								
							</div>
							<!-- end .card -->
						
						<?php endwhile; endif; ?>
						
					</div>
					<!-- end .cards -->
					
				</div>
				<!-- end .contain -->
				
			</div>
			<!-- end .cb-card-list -->
	
	<?php endif; endwhile; endif; ?>
	
</div>
<!-- end .content-blocks -->