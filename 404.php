<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Epagreenlite
 */

get_header();

	do_action( 'epagreenlite-theme/site/site-content-before', '404' ); ?>

	<div <?php epagreenlite_content_class() ?>>
		<div class="row">

			<?php do_action( 'epagreenlite-theme/site/primary-before', '404' ); ?>

			<div id="primary" class="col-xs-12">

				<?php do_action( 'epagreenlite-theme/site/main-before', '404' ); ?>

				<main id="main" class="site-main">

					<section class="error-404 not-found">
						<header class="page-header">
							<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'epagreenlite' ); ?></h1>
						</header><!-- .page-header -->

						<div class="page-content">
							<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'epagreenlite' ); ?></p>

							<?php
								get_search_form();
							?>
						</div><!-- .page-content -->
					</section><!-- .error-404 -->

				</main><!-- #main -->

				<?php do_action( 'epagreenlite-theme/site/main-after', '404' ); ?>

			</div><!-- #primary -->

			<?php do_action( 'epagreenlite-theme/site/primary-after', '404' ); ?>

		</div>
	</div>

	<?php do_action( 'epagreenlite-theme/site/site-content-after', '404' );

get_footer();
