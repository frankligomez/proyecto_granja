<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Epagreenlite
 */

?>

<header class="entry-header">
	<?php the_title( '<h1 class="entry-title h2-style">', '</h1>' ); ?>
	<div class="entry-meta">
		<?php
			epagreenlite_posted_by();
			epagreenlite_posted_in( array(
				'prefix'  => __( 'In', 'epagreenlite' ),
			) );
			epagreenlite_posted_on( array(
				'prefix'  => __( 'Posted', 'epagreenlite' ),
			) );
			epagreenlite_post_comments( array(
				'postfix' => __( 'Comment(s)', 'epagreenlite' ),
			) );
		?>
	</div><!-- .entry-meta -->
</header><!-- .entry-header -->

<?php epagreenlite_post_thumbnail( 'epagreenlite-thumb-l', array( 'link' => false ) ); ?>