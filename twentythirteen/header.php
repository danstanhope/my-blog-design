<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<style type="text/css">
.spkr-file-widget-background{
-webkit-box-sizing: initial;
-moz-box-sizing: initial;
box-sizing: initial;
}
.spkr-file-widget-background
*, *:before, *:after {
-webkit-box-sizing: initial;
-moz-box-sizing: initial;
box-sizing: initial;
}	
.spkr-file-widget-background * {
-webkit-box-sizing: initial;
-moz-box-sizing: initial;
box-sizing: initial;
}
	
	</style>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
<link rel='stylesheet' id='twentythirteen-style-css'  href='/wp-content/themes/twentythirteen/css/twitter-bootstrap/css/bootstrap.css' type='text/css' media='all' />	
<link rel='stylesheet' id='twentythirteen-style-css'  href='/wp-content/themes/twentythirteen/css/font-awesome/css/font-awesome.css' type='text/css' media='all' />	
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<header class="site-header" role="banner">
			<div class="person-wrap-all clearfix">
				<div class="person-wrap clearfix">
					<img  src="/wp-content/themes/twentythirteen/images/dstanhope.jpeg" />
					<h3>Dan Stanhope</h3>
					<em>Development Lead @ Expertfile</em>
					<ul>
						<li>
							<a href="http://ca.linkedin.com/in/danstanhope/" target="_blank"><i class="fa fa-linkedin"></i></a>
						</li>
						<li>
							<a href="http://www.twitter.com/danstanhope" target="_blank"><i class="fa fa-twitter"></i></a>
						</li>
						<li>
							<a href="https://github.com/danstanhope" target="_blank"><i class="fa fa-github"></i></a>
						</li>												
					</ul>
				</div>
				<div class="person-wrap clearfix">
					<img  src="/wp-content/themes/twentythirteen/images/cstanhope.jpg" />
					<h3>Chris Stanhope</h3>
					<em>QA Lead Engineer @ Wattpad</em>
					<ul>
						<li>
							<a href="http://ca.linkedin.com/pub/chris-stanhope/7a/9/a14" target="_blank"><i class="fa fa-linkedin"></i></a>
						</li>
						<li>
							<a href="http://www.twitter.com/cstanhope83" target="_blank"><i class="fa fa-twitter"></i></a>
						</li>
						<li>
							<a href="https://github.com/danstanhope" target="_blank"><i class="fa fa-github"></i></a>
						</li>												
					</ul>
				</div>				
			</div>
		</header>
		<nav>
			<a href="/">
				<i class="fa fa-home"></i>
			</a>	
		</nav>
		<div id="main" class="site-main">
