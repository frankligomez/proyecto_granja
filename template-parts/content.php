<?php
/**
 * Template part for displaying default posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Epagreenlite
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-default'); ?>>

	<header class="entry-header">
		<h3 class="entry-title"><?php 
			epagreenlite_sticky_label();
			the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' );
		?></h3>
		<div class="entry-meta">
			<?php
				epagreenlite_posted_by();
				epagreenlite_posted_in( array(
					'prefix' => __( 'In', 'epagreenlite' ),
				) );
				epagreenlite_posted_on( array(
					'prefix' => __( 'Posted', 'epagreenlite' )
				) );
			?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<?php epagreenlite_post_thumbnail( 'epagreenlite-thumb-l' ); ?>

	<?php epagreenlite_post_excerpt(); ?>

	<footer class="entry-footer">
		<div class="entry-meta">
			<?php
				epagreenlite_post_tags( array(
					'prefix' => __( 'Tags:', 'epagreenlite' )
				) );
			?>
			<div><?php
				epagreenlite_post_comments( array(
					'prefix' => '<i class="fa fa-comment" aria-hidden="true"></i>',
					'class'  => 'comments-button'
				) );
				epagreenlite_post_link();
			?></div>
		</div>
		<?php epagreenlite_edit_link(); ?>
	</footer><!-- .entry-footer -->
	
</article><!-- #post-<?php the_ID(); ?> -->
