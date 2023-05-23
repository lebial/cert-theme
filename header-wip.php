</head>

<body <?php body_class('clearfix'); ?>>

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M4R5S5Z" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<header class="z-50 relative">

		<a class="logo" href="/">
			<img class="text style-svg w-40" src="<?php echo get_template_directory_uri(); ?>/assets/images/full-cert-logo.svg" alt="Certilytics Logo" />
		</a>

		<div class="flex-1 flex justify-end">
			<div class="search__group flex">
				<button class="header__search__button text-white relative w-10" type="button">
					<svg class=" w-7 relative top-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 700 700" style="enable-background:new 0 0 700 700;" xml:space="preserve">
						<path class=" fill-white" d="M562.5,467.8l-112-112c28.3-34.8,42.1-79.1,38.7-123.8c-3.4-44.7-23.8-86.4-57.1-116.4  c-33.2-30.1-76.7-46.2-121.5-45.2c-44.8,1.1-87.5,19.3-119.3,50.9c-31.6,31.8-49.8,74.5-50.9,119.3c-1.1,44.8,15.1,88.3,45.2,121.6  c30.1,33.2,71.8,53.7,116.4,57.1c44.7,3.4,89-10.5,123.8-38.7l112,112c4.5,3.9,10.7,5.2,16.3,3.5c5.7-1.7,10.1-6.1,11.8-11.8  C567.6,478.4,566.3,472.3,562.5,467.8L562.5,467.8z M216,344c-26.3-26.2-41-61.9-41-99c0-37.1,14.7-72.8,41-99  c26.3-26.3,61.9-41,99-41c37.1,0,72.8,14.8,99,41c26.3,26.3,41,61.9,41,99c0,37.1-14.8,72.7-41,99c-26.1,26.4-61.8,41.3-99,41.3  C277.7,385.4,242.1,370.5,216,344z" />
					</svg>
				</button>
				<div class="search__bar__container hidden">
					<?php get_search_form() ?>
				</div>
			</div>

			<button class="new__burger__menu text-white relative w-10" type="button">
				<svg class="w-7 absolute top-2 left-0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 700 700" style="enable-background:new 0 0 700 700;" xml:space="preserve">
					<path class=" fill-white" d="M130.5,164.2h-0.2c-9.3,0-16.9,7.6-16.9,16.9s7.6,16.9,16.9,16.9h0.3h439h0.2c9.3,0,16.9-7.6,16.9-16.9  s-7.6-16.9-16.9-16.9h-0.3H130.5z M130.5,333.1h-0.2c-9.3,0-16.9,7.6-16.9,16.9s7.6,16.9,16.9,16.9h0.3h439h0.2  c9.3,0,16.9-7.6,16.9-16.9s-7.6-16.9-16.9-16.9h-0.3H130.5z M130.5,502h-0.2c-9.3,0-16.9,7.6-16.9,16.9c0,9.3,7.6,16.9,16.9,16.9  h0.3h439h0.2c9.3,0,16.9-7.6,16.9-16.9c0-9.3-7.6-16.9-16.9-16.9h-0.3H130.5z" />
				</svg>
			</button>
			<a class="px-3 py-2 border-primary border border-solid rounded-3xl
			text-white mr-7 font-bold hover:cursor-pointer transition-all duration-300
			hover:bg-primary" href="https://www.google.com">Schedule
				Demo</a>
		</div>

		<div class=" main__menu__sidebar w-fit min-h-screen absolute top-0 -right-2/4 flex flex-col bg-white">
			<?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
		</div>

	</header>
	<!-- end header -