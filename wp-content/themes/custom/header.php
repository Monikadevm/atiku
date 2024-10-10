<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/custom.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		

		<header id="site-header" class="header-footer-group" role="banner">
				<div class="header-navigation-wrapper">

			<div class="container">
			<div class="row nv" >
				
							<div class="col-md-2 nv_m">
				<div class="site_logo">
									<a href="<?php echo home_url('/');?>"><img src="http://wecodepros.com/dev/atiku/wp-content/uploads/2022/05/Mask-group-32.png"></a>
								</div>
				</div>

					<div class="col-md-10 nv_m">
                     <?php wp_megamenu(array('theme_location' => 'primary')); ?>
					

				</div><!-- .header-navigation-wrapper -->

				</div>	
				</div>
		
</div>

			

		</header><!-- #site-header -->