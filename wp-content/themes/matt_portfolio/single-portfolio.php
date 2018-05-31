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

				<?php if( get_field('project_1_image') ): ?>
					<?php $image1 = get_field('project_1_image'); ?>

					<div class="row project">
						<div class="column column-25 project__column">
							<p class="project__info"><?php the_field('project_1_info'); ?></p>
						</div>
						<div class="column column-75">
							<img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>" class="project__image">
						</div>
					</div>
				<?php endif; ?>

				<?php if( get_field('project_2_image') ): ?>
					<?php $image2 = get_field('project_2_image'); ?>

					<div class="row project">
						<div class="column column-25 project__column">
							<p class="project__info"><?php the_field('project_2_info'); ?></p>
						</div>
						<div class="column column-75">
							<img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" class="project__image">
						</div>
					</div>
				<?php endif; ?>

				<?php if( get_field('project_3_image') ): ?>
					<?php $image3 = get_field('project_3_image'); ?>

					<div class="row project">
						<div class="column column-25 project__column">
							<p class="project__info"><?php the_field('project_3_info'); ?></p>
						</div>
						<div class="column column-75">
							<img src="<?php echo $image3['url']; ?>" alt="<?php echo $image3['alt']; ?>" class="project__image">
						</div>
					</div>
				<?php endif; ?>

				<?php if( get_field('project_4_image') ): ?>
					<?php $image4 = get_field('project_4_image'); ?>

					<div class="row project">
						<div class="column column-25 project__column">
							<p class="project__info"><?php the_field('project_4_info'); ?></p>
						</div>
						<div class="column column-75">
							<img src="<?php echo $image4['url']; ?>" alt="<?php echo $image4['alt']; ?>" class="project__image">
						</div>
					</div>
				<?php endif; ?>

				
				<div class="row">
					<div class="column column-25">

					</div>
					<div class="column column-75">

					</div>
				</div>


			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
