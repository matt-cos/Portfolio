<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Matt_Portfolio
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer ta-c">
		<p>&copy; Matt Cos <?php echo date('Y'); ?></p>
		<p>
			<a href="https://github.com/matt-cos"><i class="fa fa-github"></i></a>
			<a href=""><i class="fa fa-linkedin"></i></a>
			<a href="/contact"><i class="fa fa-envelope-o"></i></a>
		</p>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
