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

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'matt_portfolio' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding ta-c">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$matt_portfolio_description = get_bloginfo( 'description', 'display' );
			if ( $matt_portfolio_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $matt_portfolio_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<div class="container">
			<div class="row ta-c">
				<div class="column">
					<button>GitHub</button>
					<button>LinkedIn</button>
					<button>Contact</button>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">