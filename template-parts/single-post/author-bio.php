<?php
/**
 * The template for displaying author bio.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Epagreenlite
 * @subpackage widgets
 */

$is_enabled = epagreenlite_theme()->customizer->get_value( 'single_author_block' );

if ( ! $is_enabled ) {
	return;
}

?>
<div class="post-author-bio">
	<div class="post-author__avatar"><?php
		epagreenlite_get_post_author_avatar();
	?></div>
	<div class="post-author__content">
		<h4 class="post-author__title"><?php
			epagreenlite_get_post_author();
		?></h4>
		<div class="post-author__content"><?php
			epagreenlite_get_author_meta();
		?></div>
	</div>
</div>
