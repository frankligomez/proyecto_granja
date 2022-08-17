<?php


if ( ! class_exists( 'Epagreenlite_Admin_Notice' ) ) {

	/**
	 * Class Epagreenlite_Admin_Notice
	 */
	class Epagreenlite_Admin_Notice {

		/**
		 * A reference to an instance of this class.
		 *
		 * @since 1.0.0
		 * @var   object
		 */
		private static $instance;

		/**
		 * Epagreenlite_Admin_Notice constructor.
		 */
		public function __construct() {

			add_action( 'admin_notices',  array( $this, 'epagreenlite_premium_notice' ), 1 );
			add_action( 'admin_head',     array( $this, 'epagreenlite_premium_notice_styles' ) );
			add_action( 'admin_menu',     array( $this, 'epagreenlite_update_to_pro_appearance_menu_item' ) );

		}

		/**
		 * Display upgrade notice
		 *
		 * @since 1.0.0
		 * @return void
		 */
		public function epagreenlite_premium_notice() {
			$id = 'epagreenlite_premium_notice';
			$class = 'notice';
			$message = __( 'Check out <a href="https://www.templatemonster.com/wordpress-themes/52293.html" target="_blank">Epagreen lite</a>! Get more features, widgets and 24/7 support.', 'epagreenlite' );

			printf( '<div id="%1$s" class="%2$s"><p>%3$s</p></div>', $id, $class, $message );
		}

		/**
		 * Output premium notice styles
		 *
		 *
		 * @since 1.0.0
		 * @return void
		 */
		public function epagreenlite_premium_notice_styles() {
			?>
			<style type="text/css">
				#epagreenlite_premium_notice {
					color: #23282d;
					border: 1px solid #74a739;
					border-radius: 3px;
					background-color: #f0f8e2;
					box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
				}
				#epagreenlite_premium_notice.notice p {
					margin: 1em 0;
					font-size: 16px;
				}
				#epagreenlite-update-to-pro-wrapper {
					max-width: 962px;
				}
				#epagreenlite-update-to-pro-wrapper p {
					margin: 2em 0;
				}
				.epagreenlite-btns-wrapper {
					max-width: 962px;
					text-align: center;
				}
				.epagreenlite-btn {
					margin: 0 10px;
					padding: 0 45px;
					display: inline-block;
					height: 60px;
					font-size: 14px;
					line-height: 60px;
					color: #fff;
					border-radius: 3px;
					text-decoration: none;
					text-align: center;
					outline: none;
					background: #000;
				}
				.epagreenlite-btn:hover, .epagreenlite-btn:focus {
					color: #fff;
				}
				.epagreenlite-btn:before {
					vertical-align: top;
					margin-right: 8px;
					font-family: 'dashicons';
					font-size: 20px;
				}
				.epagreenlite-btn.epagreenlite-btn-view {
					background: #309df4;
					background: linear-gradient(to bottom,#42a5f5 0,#2196f3 100%);
				}
				.epagreenlite-btn.epagreenlite-btn-view:before {
					content: "\f504";
				}
				.epagreenlite-btn.epagreenlite-btn-view:hover {
					background: #1b7bd8;
					background: linear-gradient(to bottom,#2196f3 0,#1976d2 100%);
				}
				.epagreenlite-btn.epagreenlite-btn-to-pro {
					background: #74a739;
					background: linear-gradient(to bottom,#83bd40 0,#6a9e2e 100%);
				}
				.epagreenlite-btn.epagreenlite-btn-to-pro:before {
					content: "\f174";
				}
				.epagreenlite-btn.epagreenlite-btn-to-pro:hover {
					background: #65972b;
					background: linear-gradient(to bottom,#72a536 0,#588821 100%);
				}
			</style>
			<?php
		}

		/**
		 * Add Theme Update menu item
		 *
		 * @since 1.0.0
		 * @return void
		 */
		public function epagreenlite_update_to_pro_appearance_menu_item() {
			add_theme_page( 'Update to Pro', 'Update to Pro', 'edit_theme_options', 'epagreenlite_lite-update-to-pro', array( $this, 'epagreenlite_update_to_pro_callback' ) );
		}

		/**
		 * Epagreenlite Premium notice callback function
		 *
		 * @since 1.0.0
		 * @return void
		 */
		public function epagreenlite_update_to_pro_callback() {
			?>
			<div class="wrap">
				<h2>Update to Full version</h2>
				<div id="epagreenlite-update-to-pro-wrapper">
					<img src="<?php echo esc_url( get_theme_file_uri( '/assets/admin/epagreenlite-premium.jpg' ) ) ?>">
					<p><strong>Epagreenlite Pro</strong> - great theme for personal blog. Give your blog more power with premium tools like extended set of widgets, multiple headers, footers and Live Customizer options. The theme is available under GPL2 license and comes with 24/7 support.</p>
					<div class="epagreenlite-btns-wrapper">
						<a href="/#" class="epagreenlite-btn epagreenlite-btn-view" target="_blank">Epagreenlite Free Demo</a>
						<a href="/#" class="epagreenlite-btn epagreenlite-btn-to-pro" target="_blank">Epagreenlite Free</a>
					</div>
				</div><!-- mnt-options -->
			</div><!-- wrap -->
			<?php
		}

		/**
		 * Returns the instance.
		 *
		 * @since  1.0.0
		 * @return object
		 */
		public static function get_instance() {

			// If the single instance hasn't been set, set it now.
			if ( null == self::$instance ) {
				self::$instance = new self;
			}

			return self::$instance;

		}

	}
}

/**
 * Return Epagreenlite Admin Notice class object
 *
 * @since 1.0.0
 * @return object
 */
function epagreenlite_admin_notice() {

	return Epagreenlite_Admin_Notice::get_instance();

}

if ( is_admin() ) {

	epagreenlite_admin_notice();

}

