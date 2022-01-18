<?php
  function render_link_groups() {
		$link_groups = get_field('footer_link_groups', 'options');
		foreach($link_groups as $links) {
			echo '<div class="footer__link__group">';
				foreach($links as $link){
					echo '<a href="'.$link['href'].'" class="footer__link">'.$link['text'].'</a>';
				}
			echo '</div>';
		};
	};
?>

<footer class="clearfix text-white px-10 md:px-32 w-screen">			
	<div class="first-row w-full flex flex-col md:flex-row">
		<div class="lets-chat w-full md:w-4/12 flex justify-center md:justify-start text-white mb-12 md:mb-0">
			<div class="flex flex-col items-start w-2/4">
				<span class="text-white">
					<p class="font-bold text-white text-2xl">let's chat<?php echo get_field('chat_title', 'options'); ?></p>
					<img src="<?php echo get_field('chat_icon', 'options'); ?>" alt="<?php echo get_field('chat_icon_alt', 'options') ?>">
				</span>
				<p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. <?php echo get_field('chat_description', 'options'); ?></p>
				<a
					class="border border-white border-solid rounded-md p-3 transition-all hover:bg-white hover:text-black mt-6"
					href="<?php echo get_field('contact_link', 'options'); ?>">
						<?php echo get_field('contact_text', 'options');?>
						Contact Us
				</a>
			</div>
		</div>
		<div class="footer__links w-full md:w-8/12 flex flex-col md:flex-row items-center md:justify-evenly ">
			<!-- <?php render_link_groups(); ?> -->
			<div class="footer__links__group">
				<a class="footer__link" href="#">test</a>
				<a class="footer__link" href="#">test child</a>
				<a class="footer__link" href="#">test child</a>
				<a class="footer__link" href="#">test child</a>
				<a class="footer__link" href="#">test child</a>
			</div>
			<div class="footer__links__group">
				<a class="footer__link" href="#">test</a>
				<a class="footer__link" href="#">test child</a>
				<a class="footer__link" href="#">test child</a>
				<a class="footer__link" href="#">test child</a>
				<a class="footer__link" href="#">test child</a>
			</div>
			<div class="footer__links__group">
				<a class="footer__link" href="#">test</a>
				<a class="footer__link" href="#">test child</a>
				<a class="footer__link" href="#">test child</a>
				<a class="footer__link" href="#">test child</a>
				<a class="footer__link" href="#">test child</a>
			</div>
			<div class="footer__links__group">
				<a class="footer__link" href="#">test</a>
				<a class="footer__link" href="#">test child</a>
				<a class="footer__link" href="#">test child</a>
				<a class="footer__link" href="#">test child</a>
				<a class="footer__link" href="#">test child</a>
			</div>
		</div>
	</div>
	
	<div class="second-row flex justify-center md:justify-end mt-5">
		<?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>
	</div>

	<div class="third-row border-t-2 border-white border-solid flex flex-col md:flex-row justify-between w-full mt-32 pt-6">
		<div class="address__container">
			<p><?php echo get_field('address', 'options')?></p>
			9200 Shelbyville Road, Suite 700 <br> Louseville, KY 40222
		</div>
		<div class="corp__info flex flex-col md:flex-row mt-9 md:mt-0">
			<div>
				<span>&reg;</span>
				<span class="mr-2"><?php echo date("Y") ?> Certilytics</span>
				<a class="mr-2" href="/terms">Terms</a>
				<a class="mr-2" href="/privacy">Privacy</a>
			</div>
		</div>
	</div>
		
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
