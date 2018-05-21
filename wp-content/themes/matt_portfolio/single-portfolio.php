<?php
/**
 * The home template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Matt_Portfolio
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
				<div class="row">
					<div class="column column-25">
						<?php
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/content', get_post_type() );

								// the_post_navigation();

							endwhile; // End of the loop.
							?>
					</div>
					<div class="column column-75">PICTURE BOX</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
