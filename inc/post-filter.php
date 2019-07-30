<?php 

// Filter posts on archive pages
if ( ! function_exists( 'gll_filter_the_posts' ) ) : ?>
  
  <?php function gll_filter_the_posts() { ?>

    <?php 
      global $wp; 
    ?>
    <form action="<?php echo home_url( $wp->request ) . '/' ?>" role="search">
      <label for="s">Filter dresses</label>
      <input type="text" name="s" />
      <button>Filter</button>
    </form>

  <?php } ?>

<?php endif;

add_action( 'gll_post_filter', 'gll_filter_the_posts', 10 );
