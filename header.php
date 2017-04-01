<?php
/**
 * The header for our theme
 *
 * @version 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://navinsridhar.in">
	<title><?php bloginfo( 'name' ); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<!-- site-header -->
	<header class="container site-header">
		<h1 class="header-title"><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
		<h5><?php bloginfo( 'description' ); ?></h5>
	</header><!-- site-header -->

	<!-- Fixed navbar -->
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">WDM Bootstrap</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
	            <?php 
	            	wp_nav_menu( array( 'menu_class' => 'nav navbar-nav', 'container' => '', 'theme_location' => 'primary' ) );
	            ?>
			</div><!--/.nav-collapse -->
		</div>
	</nav>
	<div class="container">