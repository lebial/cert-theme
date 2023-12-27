<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

    <?php
    if (get_field('include_analytics', 'options')) {
        echo '<!-- Google Tag Manager -->';
        echo '<script async src="https://www.googletagmanager.com/gtag/js?id=G-JM87BS03S7">
		      </script>
			  <script>
			    window.dataLayer = window.dataLayer || [];
				function gtag(){dataLayer.push(arguments);}
				gtag("js", new Date());
				gtag("config", "G-JM87BS03S7");
			  </script>
		';
        echo "<!-- End Google Tag Manager -->";

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

        echo '<script>';
        echo '!function(e,t,n,s,u,a){e.twq||(s=e.twq=function(){s.exe?s.exe.apply(s,arguments):s.queue.push(arguments);';
        echo '},s.version="1.1",s.queue=[],u=t.createElement(n),u.async=!0,u.src="//static.ads-twitter.com/uwt.js",';
        echo 'a=t.getElementsByTagName(n)[0],a.parentNode.insertBefore(u,a))}(window,document,"script");';
        echo '// Insert Twitter Pixel ID and Standard Event data below';
        echo 'twq("init","o9oxl");';
        echo 'twq("track","PageView");';
        echo '</script>';
        echo '<!-- End Twitter universal website tag code -->';

        echo '<!-- LinkedIn Tag -->';
        echo '<script type="text/javascript">';
        echo '_linkedin_partner_id = "2795692";';
        echo 'window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];';
        echo 'window._linkedin_data_partner_ids.push(_linkedin_partner_id);';
        echo '</script><script type="text/javascript">';
        echo '(function(l) {';
        echo 'if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])};';
        echo 'window.lintrk.q=[]}';
        echo 'var s = document.getElementsByTagName("script")[0];';
        echo 'var b = document.createElement("script");';
        echo 'b.type = "text/javascript";b.async = true;';
        echo 'b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";';
        echo 's.parentNode.insertBefore(b, s);})(window.lintrk);';
        echo '</script>';
        echo '<noscript>';
        echo '<img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=2795692&fmt=gif" />';
        echo '</noscript>';
    }

    function render_demo_buttons()
    {
        $demo_buttons = array(array("text" => '15-minute Introduction', "value" => 1), array("text" => '30-minute Solution Overview', "value" => 2), array("text" => '90-minute Demo', "value" => 3));

        foreach ($demo_buttons as $button) {
            echo '
                <button class="text-white transition-all direct__schedule__button duration-300 hover:text-primary mr-5" data-value="' . $button['value'] . '" name="' . $button['text'] . '">
                    ' . $button['text'] . '
                    <span class="w-[20px] pt-[3px] inline-block relative top-[6px]">
                        <svg id="Layer_1" style="enable-background:new 0 0 64 64;" version="1.1" viewBox="0 0 64 64" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g>
                                <g id="Icon-Chevron-Left" transform="translate(237.000000, 335.000000)">
                                    <polyline class=" fill-primary" id="Fill-35" points="-210.9,-289 -212.9,-291 -201.1,-302.7 -212.9,-314.4 -210.9,-316.4 -197.1,-302.7      -210.9,-289    " />
                                </g>
                            </g>
                        </svg>
                    </span>
                </button>
            ';
        }
    }

    ?>

    <meta charset="<?php bloginfo('charset'); ?>" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">

    <meta name="google-site-verification" content="fo3XyJv5ZPhtGiMbLtPCaJzFclbCjKt3Cq23igaljVA" />

    <!-- <link rel="apple-touch-icon" sizes="180x180" href="<?php // echo get_template_directory_uri(); 
                                                            ?>/favicons/apple-touch-icon.png">
		
		<link rel="icon" type="image/png" sizes="32x32" href="<?php // echo get_template_directory_uri(); 
                                                                ?>/favicon-32x32.png">
		
		<link rel="icon" type="image/png" sizes="16x16" href="<?php // echo get_template_directory_uri(); 
                                                                ?>/favicons/favicon-16x16.png"> -->


    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/favicons/site.webmanifest">

    <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/favicons/safari-pinned-tab.svg" color="#5bbad5">

    <meta name="msapplication-TileColor" content="#da532c">

    <meta name="theme-color" content="#ffffff">


    <title><?php echo wp_title(''); ?></title>

    <?php wp_head(); ?>

    <script src="https://63299577c2da4a8c9d16f0072b9a4c8d.js.ubembed.com" async></script>

</head>

<body <?php body_class('clearfix'); ?>>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M4R5S5Z" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <header class="header__section overflow-hidden z-50 sticky bg-dark-blue-background">

        <a class="logo" href="/">
            <img class="text style-svg w-36 lg:w-44" src="<?php echo get_template_directory_uri(); ?>/assets/images/full-cert-logo.svg" alt="Certilytics Logo" />
        </a>

        <div class="flex-1 flex justify-end">
            <!-- <div class="search__group flex">
                <button class="header__search__button text-white relative w-10" type="button">
                    <svg class=" w-7 relative top-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 700 700" style="enable-background:new 0 0 700 700;" xml:space="preserve">
                        <path class=" fill-white" d="M562.5,467.8l-112-112c28.3-34.8,42.1-79.1,38.7-123.8c-3.4-44.7-23.8-86.4-57.1-116.4  c-33.2-30.1-76.7-46.2-121.5-45.2c-44.8,1.1-87.5,19.3-119.3,50.9c-31.6,31.8-49.8,74.5-50.9,119.3c-1.1,44.8,15.1,88.3,45.2,121.6  c30.1,33.2,71.8,53.7,116.4,57.1c44.7,3.4,89-10.5,123.8-38.7l112,112c4.5,3.9,10.7,5.2,16.3,3.5c5.7-1.7,10.1-6.1,11.8-11.8  C567.6,478.4,566.3,472.3,562.5,467.8L562.5,467.8z M216,344c-26.3-26.2-41-61.9-41-99c0-37.1,14.7-72.8,41-99  c26.3-26.3,61.9-41,99-41c37.1,0,72.8,14.8,99,41c26.3,26.3,41,61.9,41,99c0,37.1-14.8,72.7-41,99c-26.1,26.4-61.8,41.3-99,41.3  C277.7,385.4,242.1,370.5,216,344z" />
                    </svg>
                </button>
                <div class="search__bar__container hidden">
                    <?php //get_search_form() 
                    ?>
                </div>
            </div> -->
            <div class="demo__buttons__container flex-1 flex justify-center items-center">
                <div class="fade__in__container hidden">
                    <?php render_demo_buttons() ?>
                </div>
            </div>

            <button class="new__burger__menu text-white relative w-10 order-1 lg:-top-[6px] mr-3 lg:mr-7" type="button">
                <svg class="w-7 lg:w-10 absolute top-[3px] lg:top-2 left-0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 700 700" style="enable-background:new 0 0 700 700;" xml:space="preserve">
                    <path class=" fill-white" d="M130.5,164.2h-0.2c-9.3,0-16.9,7.6-16.9,16.9s7.6,16.9,16.9,16.9h0.3h439h0.2c9.3,0,16.9-7.6,16.9-16.9  s-7.6-16.9-16.9-16.9h-0.3H130.5z M130.5,333.1h-0.2c-9.3,0-16.9,7.6-16.9,16.9s7.6,16.9,16.9,16.9h0.3h439h0.2  c9.3,0,16.9-7.6,16.9-16.9s-7.6-16.9-16.9-16.9h-0.3H130.5z M130.5,502h-0.2c-9.3,0-16.9,7.6-16.9,16.9c0,9.3,7.6,16.9,16.9,16.9  h0.3h439h0.2c9.3,0,16.9-7.6,16.9-16.9c0-9.3-7.6-16.9-16.9-16.9h-0.3H130.5z" />
                </svg>
            </button>
            <button class="schedule__demo__button nav__schedule__demo__button px-3 py-2 border-solid border-primary border rounded-3xl
			text-white mr-3 font-bold hover:cursor-pointer transition-all duration-300
			hover:bg-primary text-xs lg:text-base " type="button" name="let's talk">Let's Talk
            </button>
        </div>

        <div class=" main__menu__sidebar w-[80vw] absolute top-0 lg:top-[80px] -right-full flex flex-col shadow-xl items-start xl:items-center justify-between lg:justify-start bg-white">
            <div class="w-full lg:px-10">
                <div class="w-full pt-4 lg:pt-8 flex pl-[30px] lg:pl-0 justify-start lg:justify-end mb-4">
                    <button class="menu__side__bar__close" type="button">
                        <svg class="feather feather-x " height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <line class=" stroke-gray-header" x1="18" x2="6" y1="6" y2="18" />
                            <line class=" stroke-gray-header" x1="6" x2="18" y1="6" y2="18" />
                        </svg>
                    </button>
                </div>
            </div>
            <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
            <div class="w-full flex justify-end items-center pr-10 mb-5 mt-0 lg:mt-16">
                <a href="https://www.linkedin.com/company/11752591/" target="_blank" rel="noopener noreferer" class="mr-3">
                    <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/footer/linkedin.svg" class="style-svg w-6 fill-gray-header" alt="">
                </a>
                <a class="w-5" href="https://twitter.com/Certilytics" target="_blank" rel="noopener noreferer">
                    <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/footer/twitter.svg" class="style-svg w-6 h-7 fill-gray-header" alt="">
                </a>
            </div>
        </div>

    </header>

    <?php get_template_part('components/new-homepage/schedule_demo_modal') ?>
    <!-- end header -->