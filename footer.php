<?php

  function render_link_groups() {

		$data_mock = array(
			array(
				'button_text' => 'Solutions',
				'links' => array(
					array('href' => '#', 'text' => 'Solutions'),
					array('href' => '#', 'text' => 'Health Plans & PBMs'),
					array('href' => '#', 'text' => 'Employers'),
					array('href' => '#', 'text' => 'Providers'),
				),
			),
			array(
				'button_text' => 'Platform',
				'links' => array(
					array('href' => '#', 'text' => 'Platform'),
					array('href' => '#', 'text' => 'Opportunity Framework'),
					array('href' => '#', 'text' => 'Nucleus Analytics Platform'),
					array('href' => '#', 'text' => 'Accelerator Data Platform'),
					array('href' => '#', 'text' => 'Adoption & Deployment'),
					array('href' => '#', 'text' => 'Data Security & Validation'),
				),
			),
			array(
				'button_text' => 'News & Insights',
				'links' => array(
					array('href' => '#', 'text' => 'News & Insights'),
					array('href' => '#', 'text' => 'Blog'),
				),
			),
			array(
				'button_text' => 'About Us',
				'links' => array(
					array('href' => '#', 'text' => 'About Us'),
					array('href' => '#', 'text' => 'Our Story'),
					array('href' => '#', 'text' => 'Management & Leadership'),
					array('href' => '#', 'text' => 'Careers'),
				),
			)
		);

		$link_groups = get_field('footer_link_groups', 'options') ? get_field('footer_link_groups', 'options') : $data_mock;

		foreach($link_groups as $link_group) {
			echo '<div class="footer__links">';
			  echo '<button class="footer__links__toggle block md:hidden">'.$link_group['button_text'].'</button>';
				echo '<div class="dropdown__body hidden md:block">';
					echo '<div class="footer__links__group">';
						foreach($link_group['links'] as $link){
							echo '<a href="'.$link['href'].'" class="footer__link">'.$link['text'].'</a>';
						}
					echo '</div>';
				echo '</div>';
			echo '</div>';
		};
	};

?>

<footer class="clearfix text-white px-10 md:px-32 w-screen">			
	<div class="first-row w-full flex flex-col md:flex-row">
		<div class="lets-chat w-full md:w-4/12 flex justify-center md:justify-start text-white mb-12 md:mb-0">
			<div class="flex flex-col items-start w-2/4">
				<span class="hidden lg:block text-white">
					<p class="font-bold text-white text-xl"><?php echo get_field('chat_title', 'options') ? get_field('chat_title', 'options') : "let's chat"; ?></p>
					<img src="<?php echo get_field('chat_icon', 'options'); ?>" alt="<?php echo get_field('chat_icon_alt', 'options') ?>">
				</span>
				<p class="hidden lg:block text-white text-lg"> <?php echo get_field('chat_description', 'options') ? get_field('chat_description', 'options') : 'Lorem ipsum dolor sit amet consectetur adipisicing elit.'; ?></p>
				<a
					class="border border-white border-solid rounded-md p-3 transition-all hover:bg-white hover:text-black mt-6"
					href="<?php echo get_field('contact_link', 'options'); ?>">
						<?php echo get_field('contact_text', 'options') ? get_field('contact_text', 'options') : 'Contact Us';?>
				</a>
			</div>
		</div>
		<div class="footer__links w-full flex flex-col md:flex-row md:justify-evenly ">
			<?php render_link_groups(); ?>
		</div>
	</div>
	
	<div class="second-row flex justify-center md:justify-end mt-5">
		<?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>
	</div>

	<div class="third-row border-t-2 border-white border-solid flex flex-col md:flex-row justify-between w-full mt-32 pt-6">
		<div class="address__container">
			<p class="text-white"><?php echo get_field('address', 'options') ? get_field('address', 'options') : '9200 Shelbyville Road, Suite 700 <br> Louseville, KY 40222'?></p>
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
