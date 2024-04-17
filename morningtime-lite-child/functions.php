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


if ( ! function_exists( 'morning_time_lite_header_style' ) ) {

	function morning_time_lite_header_style() {

		// If no custom options for text are set, let's bail
		// get_header_textcolor() options: $header_text_color is default, hide text (returns 'blank') or any hex value

		if ( isset($header_text_color) && $header_text_color == get_header_textcolor() )
    return;
		// If we get this far, we have custom styles. Let's do this.
		?>
		<style type="text/css">
			<?php // Has the text been hidden?
				if ( 'blank' == get_header_textcolor() ) { ?>
					#site-title{ position: absolute !important; clip: rect(1px 1px 1px 1px); /* IE6, IE7 */ clip: rect(1px, 1px, 1px, 1px); }
				<?php // If the user has set a custom color for the text use that
				} else { ?>
					#site-title a, #site-description { color: #<?php echo get_header_textcolor(); ?> !important; }
			<?php } ?>
		</style>
		<?php
	}
}
?>

