<?php
/**
 * The template for displaying all dress_gallery single posts.
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
				while ( have_posts() ) :
					the_post();

					do_action( 'storefront_single_post_before' );

					$images = get_field('images');
					$size = 'medium'; // (thumbnail, medium, large, full or custom size)
					
					if( $images ) : 
			?>

				<ul>
					<?php foreach( $images as $image ): ?>
						<li>
							<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
						</li>
					<?php endforeach; ?>
				</ul>

			<?php 
					endif;

					do_action( 'storefront_single_post_after' );

				endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
do_action( 'storefront_sidebar' );
get_footer();
