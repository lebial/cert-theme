<?php
  $base_url = get_site_url();
  function hide_button($count) {
	  if ($count > 0 ) return '';
	  return 'hidden';
  }

  function render_link_groups() {

		$data_mock = array(
			array(
				'button_link' => '#',
				'button_text' => 'Solutions',
				'links' => array(
					array('href' => '#', 'text' => 'Health Plans & PBMs'),
					array('href' => '#', 'text' => 'Employers'),
					array('href' => '#', 'text' => 'Providers'),
				),
			),
			array(
				'button_link' => '#',
				'button_text' => 'Platform',
				'links' => array(
				),
			),
			array(
				'button_link' => '#',
				'button_text' => 'News & Insights',
				'links' => array(
				),
			),
			array(
				'button_text' => 'About Us',
				'button_link' => '#',
				'links' => array(
					array('href' => '#', 'text' => 'Our Story'),
					array('href' => '#', 'text' => 'Management & Leadership'),
					array('href' => '#', 'text' => 'Careers'),
				),
			),
			array(
				'button_text' => 'Careers',
				'button_link' => '#',
				'links' => array(
				),
			)
		);

		$link_groups = get_field('footer_link_groups', 'option') ? get_field('footer_link_groups', 'options') : $data_mock;

		foreach($link_groups as $link_group) {
			echo '<div class="footer__links">';
				echo '<div class="mb-4 flex justify-between"><a name="footer-'.$link_group['button_text'].'" href="'.$link_group['button_link'].'">'.$link_group['button_text'].'</a><button name="'.$link_group['button_text'].'" class="footer__links__toggle block md:hidden"></button></div>';
				echo '<div class="footer__dropdown__body footer__responsive__hidden">';
					echo '<div class="footer__links__group">';
						foreach($link_group['links'] as $link){
							echo '<a href="'.$link['href'].'" class="footer__link" name="footer-'.$link['text'].'">'.$link['text'].'</a>';
						}
					echo '</div>';
				echo '</div>';
			echo '</div>';
		};
	};

?>

<footer class="clearfix text-white mt-0 px-10 md:py-8 pt-0 pb-4 md:px-16 w-screen">			
	<div class="first-row w-full flex flex-col md:flex-row">
		<div class="lets-chat w-full md:w-4/12 flex justify-center md:justify-start text-white mb-6 md:mb-0">
			<div class="flex flex-col items-center lg:items-start w-10/12">
				<span class="footer__responsive__hidden text-white">
					<p class="font-bold text-white text-sm"><?php echo get_field('chat_title', 'options') ? get_field('chat_title', 'options') : "let's chat"; ?></p>
					<img src="<?php echo get_field('chat_icon', 'options'); ?>" alt="<?php echo get_field('chat_icon_alt', 'options') ?>">
				</span>
				<p class="footer__responsive__hidden text-white text-sm "> <?php echo get_field('chat_description', 'options') ? get_field('chat_description', 'options') : 'Lorem ipsum dolor sit amet consectetur adipisicing elit.'; ?></p>
				<a
					class="border border-white border-solid rounded-md p-3 transition-all text-sm hover:bg-white hover:text-black mt-[1.75rem]"
					href="<?php echo get_field('contact_link', 'options'); ?>">
						<?php echo get_field('contact_text', 'options') ? get_field('contact_text', 'options') : 'Contact Us';?>
				</a>
			</div>
		</div>
		<div class="footer__links w-full flex flex-col md:flex-row md:justify-evenly ">
			<?php render_link_groups(); ?>
		</div>
	</div>
	
	<div class="second-row flex justify-center md:justify-end">
		<div class=" social__icons social__icons__clone hidden lg:flex mt-3">
			<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $base_url ?>">
				<img src="<?php echo get_template_directory_uri()?>/dist/assets/images/footer/facebook.svg" class="style-svg w-6" alt="">
			</a>
			<a href="https://twitter.com/intent/tweet?text=Hey%2C+check+out+this+cool+site+I+found%3A+<?php echo $base_url ?>+%23Topic+via%40my_twitter_name+<?php echo $base_url ?>">
				<img src="<?php echo get_template_directory_uri()?>/dist/assets/images/footer/twitter.svg" class="style-svg w-6" alt="">
			</a>
			<a href="https://www.linkedin.com/shareArticle?url=<?php echo $base_url ?>">
				<img src="<?php echo get_template_directory_uri()?>/dist/assets/images/footer/linkedin.svg" class="style-svg w-6" alt="">
			</a>
		</div>
		<div class="flex social__icons mt-3  lg:hidden">
			<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $base_url ?>">
				<img src="<?php echo get_template_directory_uri()?>/dist/assets/images/footer/facebook.svg" class="style-svg w-6" alt="">
			</a>
			<a href="https://twitter.com/intent/tweet?text=Hey%2C+check+out+this+cool+site+I+found%3A+<?php echo $base_url ?>+%23Topic+via%40my_twitter_name+<?php echo $base_url ?>">
				<img src="<?php echo get_template_directory_uri()?>/dist/assets/images/footer/twitter.svg" class="style-svg w-6" alt="">
			</a>
			<a href="https://www.linkedin.com/shareArticle?url=<?php echo $base_url ?>">
				<img src="<?php echo get_template_directory_uri()?>/dist/assets/images/footer/linkedin.svg" class="style-svg w-6" alt="">
			</a>
		</div>
	</div>

	<div class="third-row border-t-2 border-white border-solid flex flex-col md:flex-row justify-between w-full mt-[1.2rem] pt-[0.8rem]">
		<div class="address__container">
			<p class="text-white text-base"><?php echo get_field('address', 'options') ? get_field('address', 'options') : '9200 Shelbyville Road, Suite 700 <br> Louiseville, KY 40222'?></p>
		</div>
		<div class="corp__info flex flex-col md:flex-row mt-4 lg:mt-9 md:mt-0">
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