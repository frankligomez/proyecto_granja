<?php
/**
 * The template for displaying the default footer layout.
 *
 * @package Epagreenlite
 */
?>

<?php do_action( 'epagreenlite-theme/widget-area/render', 'footer-area' ); ?>

<div <?php epagreenlite_footer_class(); ?>>
	<div class="space-between-content"><?php
		epagreenlite_footer_copyright();
		epagreenlite_social_list( 'footer' );
	?></div>
</div><!-- .container -->
