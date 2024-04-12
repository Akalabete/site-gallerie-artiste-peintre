<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}
function morning_time_lite_content_navigation( $nav_id ) { ?>
   <div class="post-nav">
      <div class="post-nav-prev">
         <?php previous_post_link( '%link', __( '<i class="fas fa-angle-left"></i>  Article Précédant', 'morningtime-lite' ) ); ?>
      </div><!-- /.post-nav-prev -->

      <div class="post-nav-next">
         <?php next_post_link( '%link', __( 'Article Suivant <i class="fas fa-angle-right"></i>', 'morningtime-lite' ) ); ?>
      </div><!-- /.post-nav-next -->
   </div><!-- /.post-nav -->
<?php
}
?>

