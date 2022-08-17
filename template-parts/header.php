<?php
/**
 * Template part for default Header layout.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Epagreenlite
 */
?>

<?php get_template_part( 'template-parts/top-panel' ); ?>

<div <?php epagreenlite_header_class(); ?>>
	<?php do_action( 'epagreenlite-theme/header/before' ); ?>
	<div class="space-between-content">
		<div <?php epagreenlite_site_branding_class(); ?>>
			<?php epagreenlite_header_logo(); ?>
		</div>
		<?php epagreenlite_main_menu(); ?>
	</div>
	<?php do_action( 'epagreenlite-theme/header/after' ); ?>
</div>


