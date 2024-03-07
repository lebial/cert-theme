<?php
$base_url = get_site_url();
function hide_button($count)
{
	if ($count > 0) return '';
	return 'hidden';
}

function get_open_new_tab($tab_text) {
	if ($tab_text == 'Contact US' || $tab_text == 'Careers') return 'target="_blank"';
	return '';
}

function render_link_groups()
{

	$data_mock = array(
		array(
			'button_link' => '',
			'button_text' => 'Solutions',
			'links' => array(
				array('href' => '#', 'text' => 'Health Plans & PBMs'),
				array('href' => '#', 'text' => 'Employers'),
				array('href' => '#', 'text' => 'Benefit Advisors'),
				array('href' => '#', 'text' => 'Solution Vendors'),
				array('href' => '#', 'text' => 'Health Systems'),
			),
		),
		array(
			'button_link' => '#',
			'button_text' => 'Platform',
			'links' => array(),
		),
		array(
			'button_link' => '#',
			'button_text' => 'News & Insights',
			'links' => array(),
		),
		array(
			'button_text' => 'About Us',
			'button_link' => '#',
			'links' => array(),
		),
		array(
			'button_text' => 'Contact Us',
			'button_link' => '#',
			'links' => array(),
		),
		array(
			'button_text' => 'Careers',
			'button_link' => '#',
			'links' => array(),
		)
	);

	$link_groups = get_field('footer_link_groups', 'option') ? get_field('footer_link_groups', 'options') : $data_mock;

	foreach ($link_groups as $idx => $link_group) {
		$pr_class = $idx == 0 ? '' : 'pr-6';
		echo '<div class="footer__links lg:flex flex-col items-center lg:items-start flex-1 lg:'.$pr_class.' ">';
		echo '<div class="mb-4 flex justify-between w-auto whitespace-nowrap">';
		if ($link_group['button_link']) {
			echo '<a name="footer-' . $link_group['button_text'] . '" href="' . $link_group['button_link'] . '">' . $link_group['button_text'] . '</a>';
		} else {

			echo '<a name="footer-' . $link_group['button_text'] . '" class="text-white">' . $link_group['button_text'] . '</a>';
		}
		if ($link_group["links"]) {
			echo '<button name="' . $link_group['button_text'] . '" class="footer__links__toggle block lg:hidden"></button>';
		}
		echo '</div>';
		echo '<div class="footer__dropdown__body footer__responsive__hidden">';
		echo '<div class="footer__links__group mr-0 relative " style="margin-right: 0;">';
		if ($link_group["links"]) {
			foreach ($link_group['links'] as $idx => $link) {
				$open_tab = get_open_new_tab($link['text']);
				echo '<a href="' . $link['href'] . '" '.$open_tab.' class="footer__link leading-tight mb-2 " name="footer-' . $idx . '">' . $link['text'] . '</a>';
			}
		}
		echo '</div>';
		echo '</div>';
		echo '</div>';
	};
};
?>

<footer class="clearfix text-white mt-0 px-10 xl:py-8 pt-0 pb-4 xl:px-16 w-screen bg-dark-blue-background">
	<div class="first-row w-full flex flex-col xl:flex-row xl:justify-between">
		<div class="lets-chat w-full xl:w-4/12 flex justify-center xl:justify-start text-white mb-6 xl:mb-0 mt-10 xl:mt-0">
			<div class="flex flex-col items-center xl:items-start w-10/12">
				<span class="text-white">
					<p class="font-bold text-white text-sm">
						<?php echo get_field('chat_title', 'options') ? get_field('chat_title', 'options') : "let's chat"; ?>
					</p>
					<img src="<?php echo get_field('chat_icon', 'options'); ?>" alt="<?php echo get_field('chat_icon_alt', 'options') ?>">
				</span>
				<p class="footer__chat__description text-white text-sm text-center lg:text-left">
					<?php echo get_field('chat_description', 'options') ? get_field('chat_description', 'options') : 'Our team of experts are ready to talk about your challenges and how our AI-powered solutions can deliver real value for your <span>organization—today.</span>'; ?>
				</p>
				<a class="border border-white border-solid rounded-3xl p-3 transition-all text-sm hover:bg-white hover:text-black mt-[1.75rem]" target="_blank" rel="noopener noreferrer" href="<?php echo get_field('contact_link', 'options'); ?>">
					<?php echo get_field('contact_text', 'options') ? get_field('contact_text', 'options') : 'Contact Us'; ?>
				</a>
			</div>
		</div>
		<div class="footer__links space-x-0 lg:space-x-8 w-full flex flex-col xl:w-full lg:flex-row justify-evenly">
			<?php render_link_groups(); ?>
		</div>
	</div>

	<div class="second-row flex justify-end ">
		<!-- <div class="flex social__icons mt-3  xl:hidden"> -->
		<div class="flex social__icons mt-3  md:hidden">
			<a href="https://www.linkedin.com/company/11752591/" target="_blank" rel="noopener noreferer">
				<img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/footer/linkedin.svg" class="style-svg w-6 fill-white" alt="">
			</a>
			<a href="https://twitter.com/Certilytics" target="_blank" rel="noopener noreferer">
				<img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/footer/twitter.svg" class="style-svg w-6 h-5 fill-white" alt="">
			</a>
		</div>
	</div>

	<div class="third-row border-t-2 border-white border-solid flex flex-col md:flex-row justify-between w-full mt-[1.2rem] pt-[0.8rem]">
		<div class="address__container">
			<!-- <p class="text-white text-base"><?php echo get_field('address', 'options') ? get_field('address', 'options') : '9200 Shelbyville Road, Suite 700 <br> Louiseville, KY 40222' ?></p> -->
		</div>
		<div class="corp__info relative flex flex-col md:flex-row mt-4 md:mt-0">
			<div class="absolute right-[6px] top-[-58px] social__icons tw-hidden md:flex">
				<a href="https://www.linkedin.com/company/11752591/" target="_blank" rel="noopener noreferer">
					<img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/footer/linkedin.svg" class="style-svg w-6 fill-white" alt="">
				</a>
				<a href="https://twitter.com/Certilytics" target="_blank" rel="noopener noreferer">
					<img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/footer/twitter.svg" class="style-svg w-6 h-5 fill-white" alt="">
				</a>

			</div>
			<div>
				<span>&reg;</span>
				<span class="mr-2"><?php echo date("Y") ?> Certilytics</span>
				<a class="mr-2" href="<?php the_field('terms_link', 'options'); ?>" target="_blank">Terms</a>
				<a class="mr-2" href="<?php the_field('privacy_link', 'options') ?>" target="_blank">Privacy</a>
			</div>
		</div>

	</div>

</footer>

<!-- end .footer -->

<?php wp_footer(); ?>
</body>

</html>