<?php
/**
 * Template part for displaying page content page-houses.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BeWD_P2
 */

require get_template_directory() . '/inc/map-helper.php';

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php bewd_p2_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		$location = get_field('map');
		$test = get_field('test');
		
//		echo "Lat: " . $location['lat'] . "<br>";
//		echo "Lng: " . $location['lng'] . "<br>";
//		echo "Test: " . $test;
		
		if( $location ): ?>
		
			<div class="acf-map" data-zoom="16">
				<div class="marker" 
					 data-lat="<?php echo esc_attr($location['lat']); ?>" 
					 data-lng="<?php echo esc_attr($location['lng']); ?>"
				></div>
			</div>
		
		<?php endif; ?>
		
		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bewd-p2' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'bewd-p2' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
