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
//	$image = get_field('hero_image');
//	$size = 'full'; // (thumbnail, medium, large, full or custom size)
//	if( $image ) {
//		echo "<div class='hero'>";
//		echo wp_get_attachment_image( $image, $size );
//		echo "</div>";
//	}
	?>

	<main id="primary" class="site-main">
		<?php
		
		$category_name = 'houses'; // category slug
		$temp = $wp_query;
		$wp_query = null;
		$wp_query = new WP_Query();
		$wp_query->query('&category_name=' . $category_name);
		
		while ( have_posts() ) :
			the_post();
		?>
			<h2><a href='
				<?php the_permalink(); ?>
				'>
				<?php //the_title(); ?>
				</a></h2>
 		<?php
			//the_content();
		
//			get_template_part( 'template-parts/content', 'page' );
			get_template_part( 'template-parts/content', 'houses' );

			// If comments are open or we have at least one comment, load up the comment template.
//			if ( comments_open() || get_comments_number() ) :
//				comments_template();
//			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
