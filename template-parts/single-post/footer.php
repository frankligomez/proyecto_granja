<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Epagreenlite
 */

?>

<footer class="entry-footer">
	<div class="entry-meta"><?php
		epagreenlite_post_tags ( array(
			'prefix'    => __( 'Tags:', 'epagreenlite' ),
			'delimiter' => ''
		) );
	?></div>
</footer><!-- .entry-footer -->