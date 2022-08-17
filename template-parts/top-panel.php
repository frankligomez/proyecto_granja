<?php
/**
 * Template part for top panel in header.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Epagreenlite
 */

// Don't show top panel if all elements are disabled.
if ( ! epagreenlite_is_top_panel_visible() ) {
	return;
} ?>

<div class="top-panel container">
	<div class="space-between-content">
		<div class="top-panel-content__left">
				<?php do_action( 'epagreenlite-theme/top-panel/elements-left' ); ?>
				<?php epagreenlite_site_description(); ?>
		</div>
		<div class="top-panel-content__right">
				<?php epagreenlite_social_list( 'header' ); ?>
				<?php do_action( 'epagreenlite-theme/top-panel/elements-right' ); ?>
		</div>
	</div>
</div>