<!DOCTYPE html>

<html <?php language_attributes(); ?>>
	
	<head>
		
	<?php if (get_field('include_GA', 'options')) {
			echo '<!-- Google Tag Manager -->';
			echo '<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({"gtm.start":';
			echo "new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],";
			echo "j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=";
			echo "'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);";
			echo "})(window,document,'script','dataLayer','GTM-M4R5S5Z');</script>";
			echo "<!-- End Google Tag Manager -->";
		} ?>
		
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		
		<meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">

		
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-touch-icon.png">
		
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png">
		
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicons/favicon-16x16.png">

		
		<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/favicons/site.webmanifest">
		
		<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/favicons/safari-pinned-tab.svg" color="#5bbad5">
		
		<meta name="msapplication-TileColor" content="#da532c">
		
		<meta name="theme-color" content="#ffffff">

		
		<title><?php wp_title(''); ?></title>
		
		<?php wp_head(); ?>
		
		<script src="https://63299577c2da4a8c9d16f0072b9a4c8d.js.ubembed.com" async></script>

	</head>
	
	<body <?php body_class('clearfix'); ?>>
		
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M4R5S5Z"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		
		<header class="z-50">
			
			<a class="logo" href="/">
				
				<img class="text" src="<?php echo get_template_directory_uri(); ?>/assets/images/full-cert-logo.svg" alt="Certilytics Logo" />
				
				
			</a>
			
			<div class="navicon">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
			
			<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
			
		</header>
		<!-- end header -->