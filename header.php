<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed grid">
 	
<header id="header" role="banner">
	<div class="row">

<section id="branding">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home">
		<div id="logo"  class="animated slideInDown"></div>
		<div class="black-bg animated slideInDown">
			<div id="sm-logo"  ></div>
		</div>
	</a>


</section>
<div class="c12">
<nav id="menu" role="navigation">
	<!--<div id="search">
	<?php get_search_form(); ?>
	</div>-->
<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
</nav>
</div>
</div>
</header>
<div id="container">