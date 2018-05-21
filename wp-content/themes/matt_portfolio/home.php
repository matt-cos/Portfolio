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
						<dl>

						<?php 
							$args = array('post_type' => 'portfolio'); 
							$loop = new WP_Query($args);
							
							if ( $loop->have_posts() ): 
								while ( $loop->have_posts() ) : $loop->the_post(); ?>

									<dt data-imagesrc="<?php the_post_thumbnail_url(); ?>" data-linksrc="<?php echo get_permalink(); ?>">
										<?php the_title(); ?>
									</dt>

								<?php endwhile;

							else:

							endif;
				
							wp_reset_postdata(); 
						?>

						</dl>
					</div>

					<div id="imgBox" class="column column-75">
						<img id="imgBox__img" src="" alt="">
						<p id="imgBox__copy">Click a project to see more!</p>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

	<script>
		
		( function( $ ) {
			$('dt').on('click', function(){
				var projectImageURL = $(this).attr('data-imagesrc');
				var fullProjectURL = $(this).attr('data-linksrc');

				$("#imgBox__img").attr('src', projectImageURL);

				if (projectImageURL == '') {
					$('#imgBox__copy').text('Coming soon!');
				} else {
					$('#imgBox__copy').html('<a href="' + fullProjectURL + '">View More</a>');
				}
			});
		} )( jQuery );

	</script>

<?php
// get_sidebar();
get_footer();
