<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<!-- Google Chrome Frame for IE -->
		<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->

		<title><?php wp_title(''); ?></title>

		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) -->
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<!-- or, set /favicon.ico for IE10 win -->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!-- drop Google Analytics Here -->
			<script>

				  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

				  ga('create', 'UA-42236979-2', 'paradigmgroup.eu');
				  ga('send', 'pageview');

			</script>
		<!-- end analytics -->
<!--
/* @license
 * MyFonts Webfont Build ID 2622245, 2013-08-14T04:08:00-0400
 *
 * The fonts listed in this notice are subject to the End User License
 * Agreement(s) entered into by the website owner. All other parties are
 * explicitly restricted from using the Licensed Webfonts(s).
 *
 * You may obtain a valid license at the URLs below.
 *
 * Webfont: ITC Avant Garde Gothic Std Medium by ITC
 * URL: http://www.myfonts.com/fonts/itc/avant-garde-gothic/std-medium/
 *
 *
 * License: http://www.myfonts.com/viewlicense?type=web&buildid=2622245
 * Licensed pageviews: 250,000
 * Webfonts copyright: Font software Copyright 1993, 1994, 2001 Adobe Systems Incorporated. Typeface designs Copyright 2005 International Typeface Corporation. All rights reserved.
 *
 * © 2013 MyFonts Inc
*/

-->
	</head>

	<body <?php body_class(); ?>>

		<div id="container">

			<header class="header" role="banner">

				<div id="inner-header" class="wrap clearfix">

					<?php if (is_page_template ('page-members.php') ) { ?>
						<a href="<?php bloginfo( 'url' ); ?>/members-area/" title="Back To Members Area">
							<h2><img src="/wordpress/wp-content/themes/paradigm/library/images/logo.png" alt="Paradigm - The Advisers Adviser">Member's Area</h2>
						</a>
					<?php }

           elseif (is_page_template ('page-partner.php') ) { ?>
						<a href="<?php bloginfo( 'url' ); ?>/members-area/" title="Back To Members Area">
							<h2><img src="/wordpress/wp-content/themes/paradigm/library/images/logo.png" alt="Paradigm - The Advisers Adviser">Member's Area</h2>
						</a>

          <?php }

					elseif (is_category ('129')) { ?>
						<a class="logo" href="<?php bloginfo( 'url' ); ?>" title="Back To Homepage">
							<h2><img src="/wordpress/wp-content/themes/paradigm/library/images/logo.png" alt="Paradigm - The Advisers Adviser">The Advisers' Adviser</h2>
						</a>
					<?php }

					elseif ( 'learning' == get_post_type() ) {?>
						<a href="<?php bloginfo( 'url' ); ?>/members-area/develop/paradigm-learning" title="Back To Members Area">
							<h2><img src="/wordpress/wp-content/themes/paradigm/library/images/logo.png" alt="Paradigm - The Advisers Adviser">Learning</h2>
						</a>
					<?php }

					elseif (is_page_template ('page-learning.php') ) { ?>
						<a href="<?php bloginfo( 'url' ); ?>/members-area/develop/paradigm-learning/" title="Back To Paradigm Learning">
							<h2><img src="/wordpress/wp-content/themes/paradigm/library/images/logo.png" alt="Paradigm - The Advisers Adviser">Learning</h2>
						</a>
					<?php }

					elseif (is_tax ('custom_cat') ) { ?>
						<a href="<?php bloginfo( 'url' ); ?>/members-area/develop/paradigm-learning/" title="Back To Paradigm Learning">
							<h2><img src="/wordpress/wp-content/themes/paradigm/library/images/logo.png" alt="Paradigm - The Advisers Adviser">Learning</h2>
						</a>
					<?php }

						elseif (in_category (array ('Breaking News', 'Scottish Widows') )) { ?>
						<a href="<?php bloginfo( 'url' ); ?>/members-area/" title="Back To Members Area">
							<h2><img src="/wordpress/wp-content/themes/paradigm/library/images/logo.png" alt="Paradigm - The Advisers Adviser">Members Area</h2>
						</a>
					<?php }

					elseif ( is_page_template('page-technical.php') )
					{ ?>
						<a href="<?php bloginfo( 'url' ); ?>/members-area/safeguard/technical-services" title="Back To Technical Services">
							<h2><img src="/wordpress/wp-content/themes/paradigm/library/images/logo.png" alt="Paradigm - The Advisers Adviser">Technical Services</h2>
						</a>
					<?php }

					elseif ( is_page_template('page-target.php') )
					{ ?>
						<a href="<?php bloginfo( 'url' ); ?>/members-area/safeguard/technical-services" title="Back To Technical Services">
							<h2><img src="/wordpress/wp-content/themes/paradigm/library/images/logo.png" alt="Paradigm - The Advisers Adviser">Technical Services</h2>
						</a>
					<?php }
						elseif ( is_category (array('Regulatory Updates' , 'File Review Updates' , 'Technical Updates' , 'Compliance Updates') ))
					{ ?>
						<a href="<?php bloginfo( 'url' ); ?>/members-area/safeguard/technical-services" title="Back To Technical Services">
							<h2><img src="/wordpress/wp-content/themes/paradigm/library/images/logo.png" alt="Paradigm - The Advisers Adviser">Technical Services</h2>
						</a>

					<?php }
						elseif (in_category ('Regulatory Updates'  ))
					{ ?>
						<a href="<?php bloginfo( 'url' ); ?>/members-area/safeguard/technical-services" title="Back To Technical Services">
							<h2><img src="/wordpress/wp-content/themes/paradigm/library/images/logo.png" alt="Paradigm - The Advisers Adviser">Technical Services</h2>
						</a>
					<?php }
						elseif ( is_page_template('page-mortgages.php') )
					{ ?>
						<a href="<?php bloginfo( 'url' ); ?>/mortgages" title="Back To Mortgages">
							<h2><img src="/wordpress/wp-content/themes/paradigm/library/images/logo.png" alt="Paradigm - The Advisers Adviser">Mortgages</h2>
						</a>
					<?php }
						elseif ( is_page_template('page-savings.php') )
					{ ?>
						<a href="<?php bloginfo( 'url' ); ?>/savings" title="Back To Savings">
							<h2><img src="/wordpress/wp-content/themes/paradigm/library/images/logo.png" alt="Paradigm - The Advisers Adviser">Savings</h2>
						</a>
					<?php }
							elseif ( is_page_template('page-profile.php') )
					{ ?>
							<h2><img src="/wordpress/wp-content/themes/paradigm/library/images/logo.png" alt="Paradigm - The Advisers Adviser">Members Area</h2>

					<?php }

						elseif (is_category (array(29, 35, 36, 37, 52, 53, 72, 122))) {  ?>

							<img style="padding-top:35px;" src="/wordpress/wp-content/themes/paradigm/library/images/logo-target.png" class="logo" alt="Paradigm - Target Newsletter">

							<div id="targetbar">

							<?php $category = get_the_category(); echo $category[0]->cat_name;?>
							</div>
					<?php }

						elseif (is_tax ('target_cat')) {

							if (is_tax ('target_cat',  array( '2007' , '2008' , '2009' , '2010' , '2011' , '2012' , '2013' , '2014', '2015' , 'Special Editions' )) ) {  ?>

								<a href="<?php bloginfo( 'url' ); ?>/members-area/safeguard/technical-services" title="Back To Technical Services">
									<h2><img src="/wordpress/wp-content/themes/paradigm/library/images/logo.png" alt="Paradigm - The Advisers Adviser">Technical Services</h2>
								</a>

								<?php } else { ?>
<a name="Top"></a>
							<img style="padding-top:35px;" src="/wordpress/wp-content/themes/paradigm/library/images/logo-target.png" class="logo" alt="Paradigm - Target Newsletter">

							<div id="targetbar">

														<?php if( is_tax() ) {
								global $wp_query;
								$term = $wp_query->get_queried_object();
								$title = $term->name;

								echo $title;
							} ?>
							</div>
							<?php }

						}

						elseif (is_category ( array (55, 209, 264, 289))) { ?>

							<img style="padding-top:35px;" src="http://paradigmgroup.eu/wordpress/wp-content/files/2013/12/partnership-newsletter-header.jpg" alt="Paradigm" >
							<div id="targetbar"></div>
					<?php }

						elseif (is_category (73)) { ?>

							<img style="padding-top:35px;" src="http://paradigmgroup.eu/wordpress/wp-content/files/2013/12/winter-newsletter-header.jpg" alt="Paradigm" >
							<div id="targetbar"><?php $category = get_the_category(); echo $category[0]->cat_name;?></div>
					<?php }

						elseif (is_category (306)) { ?>

							<img style="padding-top:35px;" src="http://paradigmgroup.eu/wordpress/wp-content/files/2014/12/partnership-header.jpg" alt="Paradigm" >
							<div id="targetbar"><?php $category = get_the_category(); echo $category[0]->cat_name;?></div>
					<?php }

					else { ?>
						<a class="logo" href="<?php bloginfo( 'url' ); ?>" title="Back To Homepage">
							<h2><img src="/wordpress/wp-content/themes/paradigm/library/images/logo.png" alt="Paradigm - The Advisers Adviser">The Advisers' Adviser</h2>
						</a>
					<?php } ?>
				</div> <!-- end #inner-header -->

			</header> <!-- end header -->
