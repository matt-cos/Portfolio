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
					<div class="column ta-c">
						<?php
							while ( have_posts() ) : the_post();

								the_title( '<h3 class="entry-title">', '</h3>' );

								the_content();

							endwhile; // End of the loop.
						?>
					</div>
				</div>

				<div class="row">
					<div class="column column-25">
						<?php
							while ( have_posts() ) : the_post();

								the_content();

						?>
					</div>
					<div class="column column-75">
						<?php

								matt_portfolio_post_thumbnail();

							endwhile; // End of the loop.
						?>
					</div>
				</div>

				<div class="row">
					<div class="column column-25">
						<?php
							while ( have_posts() ) : the_post();

								the_content();

						?>
					</div>
					<div class="column column-75">
						<?php

								matt_portfolio_post_thumbnail();

							endwhile; // End of the loop.
						?>
					</div>
				</div>

				<div class="row">
					<div class="column column-25">
						<?php
							while ( have_posts() ) : the_post();

								the_content();

						?>
					</div>
					<div class="column column-75">
						<?php

								matt_portfolio_post_thumbnail();

							endwhile; // End of the loop.
						?>
					</div>
				</div>


			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
