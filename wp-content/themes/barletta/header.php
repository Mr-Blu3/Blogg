<?php
/**
 *
 * @package Barletta
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<link href='http://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="">

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?> id="root">

		<!-- Navigation -->

		<nav id="navbar" class="navbar" role="navigation">
			<div class="inner-navbar">
				<!-- Brand and toggle get grouped for better mobile display --> 
				  <div class="navbar-header"> 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> 
						<span class="sr-only">Toggle navigation</span> 
						<span class="icon-bar"></span> 
						<span class="icon-bar"></span> 
						<span class="icon-bar"></span> 
					</button> 
				  </div> 

				<div class="logo-mine"><img src="http://4vector.com/i/free-vector-blue-icon_101542_Blue_icon.png"></div>  
				
				<div class="container nav-menu">
					<?php barletta_header_menu() ?> 
				</div>

				<div class="search-form"><?php get_search_form(); ?></div>
			</div>
		</nav>
		<div class="push"></div>
		
		<header class="header header-flyer container">
			<div class="align-bottom">
				<?php dynamic_sidebar('header-widget') ?>
			</div>
		</header> 

		<!-- End: Navigation -->

		<?php //barletta_slider(); ?>

	<?php
		global $post;
		if( is_singular() && get_post_meta($post->ID, 'site_layout', true) ){
			$layout_class = get_post_meta($post->ID, 'site_layout', true);
		}
		else{
			$layout_class = get_theme_mod( 'barletta_sidebar_position' );
		}
		if ($layout_class == '') $layout_class = "mz-sidebar-right";
	?>

		<div class="content-home container">
			<center><?php barletta_the_custom_logo(); ?></center>
		<section>
			<div id="shome" class="row">
				<div class="<?php echo barletta_content_bootstrap_classes(); ?> <?php echo $layout_class; ?>">
