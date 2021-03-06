<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BeWD_P2
 */

get_header();
?>
	
	<?php 
	// using ACF to get a hero image for the home page
	$image = get_field('hero_image');
	$size = 'full'; // (thumbnail, medium, large, full or custom size)
	if( $image ) {
		echo "<div class='hero'>";
		echo wp_get_attachment_image( $image, $size );
		echo "</div>";
	}
	?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
