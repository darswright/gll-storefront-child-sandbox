<?php
/**
 * The template for displaying dress_gallery archive pages.
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php 
		/**
		 * Functions hooked in to gll_post_filter add_action
		 *
		 * @hooked gll_filter_the_posts          - 10
		 */
		do_action( 'gll_post_filter' ); 
		?>

		<?php if ( have_posts() ) : ?>
			
			<?php
				
				get_template_part( 'loop' );

			else :

				get_template_part( 'content', 'none' );

			?>

		<? endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
do_action( 'storefront_sidebar' );
get_footer();
