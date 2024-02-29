		<footer class="clearfix">			
			
			<div class="col">
			
				<?php if(get_field('address', 'options')):?>
				
					<span class="address">
					
						<?php the_field('address', 'options'); ?>
					
					</span>
				
				<?php endif; ?>
				
				<?php if(get_field('phone_number', 'options')):
					
					$number = get_field('phone_number', 'options');
					
					$formatted_number = preg_replace("/^(\d{3})(\d{3})(\d{4})$/", "$1-$2-$3", $number); ?>
				
					<a class="phone" href="tel:<?php the_field('phone_number', 'options') ?>" title="phone number">
						
						Tel <?php echo $formatted_number ?>
						
					</a>	
				
				<?php endif; ?>
				
				<?php if(get_field('email_address', 'options')):?>
				
					<a class="email" href="mailto:<?php the_field('email_address', 'options') ?>" title="email address">
						
						<?php the_field('email_address', 'options'); ?>
						
					</a>
				
				
				<?php endif; ?>
				
			</div>
			<!-- end .col -->
			
			<div class="col">
				
				<span class="copyright">&copy;<?php echo date("Y"); ?> Certilytics</span>
				
				<a class="link-privacy" href="/terms" title="Certilytics Terms">Terms</a>
				
				<a class="link-privacy" href="/privacy-policy" title="Certilytics Privacy Policy">Privacy Policy</a>
				
			</div>
			<!-- end .col -->
			
			<div class="col">
				
				<?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>
				
			</div>
			<!-- end .col -->
			
			<div class="col">
			
			<?php echo FrmFormsController::get_form_shortcode( array( 'id' => 14, 'title' => true, 'description' => true ) ); ?>

			</div>
			<!-- end .col -->
				
			<img class="footer-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/Certilytics-Logo-Icons-8.svg" alt="footer shape" />
				
		</footer>
		<!-- end .footer -->
	
	<?php wp_footer(); ?>
	<script type="text/javascript">
_linkedin_partner_id = "2795692";
window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script>
<script type="text/javascript">
	(function(){var s = document.getElementsByTagName("script")[0];
	var b = document.createElement("script");
	b.type = "text/javascript";b.async = true;
	b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
	s.parentNode.insertBefore(b, s);})();
</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=2795692&fmt=gif" />
</noscript>
	</body>

</html>
