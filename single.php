<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Epagreenlite
 */

get_header();

	do_action( 'epagreenlite-theme/site/site-content-before', 'single' ); ?>

	<div <?php epagreenlite_content_class() ?>>
		<div class="row">

			<?php do_action( 'epagreenlite-theme/site/primary-before', 'single' ); ?>

			<div id="primary" <?php epagreenlite_primary_content_class(); ?>>

				<?php do_action( 'epagreenlite-theme/site/main-before', 'single' ); ?>

				<main id="main" class="site-main"><?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content-post' );

					endwhile; // End of the loop.
				?></main><!-- #main -->

				<?php do_action( 'epagreenlite-theme/site/main-after', 'single' ); ?>

			</div><!-- #primary -->

			<?php do_action( 'epagreenlite-theme/site/primary-after', 'single' ); ?>

			<?php get_sidebar(); // Loads the sidebar.php template.  ?>
		</div>
	</div>

	<?php do_action( 'epagreenlite-theme/site/site-content-after', 'single' );

get_footer();
