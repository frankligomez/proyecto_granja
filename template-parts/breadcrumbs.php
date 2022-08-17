<?php
/**
 * Template part for breadcrumbs.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Epagreenlite
 */

$breadcrumbs_visibillity = epagreenlite_theme()->customizer->get_value( 'breadcrumbs_visibillity' );

/**
 * [$breadcrumbs_visibillity description]
 * @var [type]
 */
$breadcrumbs_visibillity = apply_filters( 'epagreenlite-theme/breadcrumbs/breadcrumbs-visibillity', $breadcrumbs_visibillity );

if ( ! $breadcrumbs_visibillity ) {
	return;
}

$breadcrumbs_front_visibillity = epagreenlite_theme()->customizer->get_value( 'breadcrumbs_front_visibillity' );

if ( !$breadcrumbs_front_visibillity && is_front_page() ) {
	return;
}

do_action( 'epagreenlite-theme/breadcrumbs/breadcrumbs-before-render' );

?><div <?php echo epagreenlite_get_container_classes( 'site-breadcrumbs' ); ?>>
	<div <?php epagreenlite_breadcrumbs_class(); ?>>
		<?php do_action( 'epagreenlite-theme/breadcrumbs/before' ); ?>
		<?php do_action( 'cx_breadcrumbs/render' ); ?>
		<?php do_action( 'epagreenlite-theme/breadcrumbs/after' ); ?>
	</div>
</div><?php

do_action( 'epagreenlite-theme/breadcrumbs/breadcrumbs-after-render' );
