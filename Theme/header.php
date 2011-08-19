<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?> >
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 * We filter the output of wp_title() a bit -- see
	 * twentyten_filter_wp_title() in functions.php.
	 */
	wp_title( '|', true, 'right' );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link href='http://fonts.googleapis.com/css?family=Questrial|Andika' rel='stylesheet' type='text/css'>
		
		<!--[if lt IE 9]>
		    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]--> 
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>

<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/jquery.tweets.0.1.js"></script>

</head>

<body <?php body_class(); ?>>

	<div id="page-wrap">
			<div id="container">
				<header>
					<nav>
						<ul>
							<li>
								<a href="#" class="active">Home</a>
							</li>
							<li>
								<a href="#">Focus</a>
							</li>
							<li>
								<a href="#">Forum</a>
							</li>
							<li>
								<a href="#">Gallery</a>
							</li>
							<li>
								<a href="#">About</a>
							</li>
							<li>
								<a href="#">Contact</a>
							</li>
						</ul>
					</nav>
				
					<img src="<?php bloginfo( 'template_url' ); ?>/images/logo.png" alt="" class="logo" />
				
				</header>
				
				<div id="main-content" class="clearfix">
					