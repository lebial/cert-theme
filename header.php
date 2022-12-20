<!DOCTYPE html>

<html <?php language_attributes(); ?>>
	
	<head>
		
	<?php 
	  if (get_field('include_GA', 'options')) {
		echo '<!-- Google Tag Manager -->';
		echo '<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({"gtm.start":';
		echo "new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],";
		echo "j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=";
		echo "'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);";
		echo "})(window,document,'script','dataLayer','GTM-M4R5S5Z');</script>";
		echo "<!-- End Google Tag Manager -->";
	  }

	  if (get_field('include_zoomInfo', 'options')) {
      echo '<!-- Zoom Info Tag -->';
      echo '<script>';
        echo '(function() {';
          echo 'const zi = document.createElement("script");';
          echo 'zi.type = "text/javascript";';
          echo 'zi.async = true;';
          echo 'zi.referrerPolicy = "unsafe-url";';
          echo 'zi.src = "https://ws.zoominfo.com/pixel/61e6d2d41fad08001ae31a33";';
          echo 'const s = document.getElementsByTagName("script")[0];';
          echo 's.parentNode.insertBefore(zi, s);';
        echo '})();';
      echo '</script>';
	  }

	  if (get_field('include_active_campaign', 'options')) {
	  echo '<!-- Active Campaing Tag -->';
      echo '<script type="text/javascript">';
        echo '(function(e,t,o,n,p,r,i){';
          echo 'e.visitorGlobalObjectAlias=n;';
          echo 'e[e.visitorGlobalObjectAlias] = e[e.visitorGlobalObjectAlias] || function(){(e[e.visitorGlobalObjectAlias].q=e[e.visitorGlobalObjectAlias].q||[]).push(arguments)};';
          echo 'e[e.visitorGlobalObjectAlias].l=(new Date).getTime();r=t.createElement("script");';
          echo 'r.src=o;r.async=true;';
          echo 'i=t.getElementsByTagName("script")[0];';
          echo 'i.parentNode.insertBefore(r,i)})(window,document,"https://diffuser-cdn.app-us1.com/diffuser/diffuser.js","vgo");';
          echo 'vgo("setAccount", "27433140");';
          echo 'vgo("setTrackByDefault", true);';
          echo 'vgo("process");';
      echo '</script>';
	  }

	  if (get_field('include_twitter', 'options')) {
		echo '<!-- Twitter universal website tag code -->';
		echo '<script>';
		echo '!function(e,t,n,s,u,a){e.twq||(s=e.twq=function(){s.exe?s.exe.apply(s,arguments):s.queue.push(arguments);';
		echo '},s.version="1.1",s.queue=[],u=t.createElement(n),u.async=!0,u.src="//static.ads-twitter.com/uwt.js",';
		echo 'a=t.getElementsByTagName(n)[0],a.parentNode.insertBefore(u,a))}(window,document,"script");';
		echo '// Insert Twitter Pixel ID and Standard Event data below';
		echo 'twq("init","o9oxl");';
		echo 'twq("track","PageView");';
		echo '</script>';
		echo '<!-- End Twitter universal website tag code -->';
	  }
	?>
		
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		
		<meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">

		<meta name="google-site-verification" content="fo3XyJv5ZPhtGiMbLtPCaJzFclbCjKt3Cq23igaljVA" />
		
		<!-- <link rel="apple-touch-icon" sizes="180x180" href="<?php // echo get_template_directory_uri(); ?>/favicons/apple-touch-icon.png">
		
		<link rel="icon" type="image/png" sizes="32x32" href="<?php // echo get_template_directory_uri(); ?>/favicon-32x32.png">
		
		<link rel="icon" type="image/png" sizes="16x16" href="<?php // echo get_template_directory_uri(); ?>/favicons/favicon-16x16.png"> -->

		
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