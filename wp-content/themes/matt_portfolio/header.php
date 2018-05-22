<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Matt_Portfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<script src="https://use.fontawesome.com/377ef84bd2.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'matt_portfolio' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding ta-c">
			<?php
			the_custom_logo();
			?>
			
			<h1 class="site-title"><a href="/"><?php bloginfo( 'name' ); ?></a></h1>
			
			<?php
			$matt_portfolio_description = get_bloginfo( 'description', 'display' );
			if ( $matt_portfolio_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $matt_portfolio_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<div class="container">
			<div class="row ta-c">
				<div class="column">
					<a href="https://github.com/matt-cos" class="button" target="_blank"><i class="fa fa-github"></i></a>
					<a href="" class="button"><i class="fa fa-linkedin"></i></a>
					<a href="/contact" class="button"><i class="fa fa-envelope-o"></i></a>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">