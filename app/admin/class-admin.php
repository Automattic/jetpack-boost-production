<?php
/**
 * The admin-specific functionality of the plugin.
 *
 * @since      1.0.0
 * @package    automattic/jetpack-boost
 */

namespace Automattic\Jetpack_Boost\Admin;

use Automattic\Jetpack\Admin_UI\Admin_Menu;
use Automattic\Jetpack\Boost_Speed_Score\Speed_Score;
use Automattic\Jetpack_Boost\Lib\Analytics;
use Automattic\Jetpack_Boost\Lib\Environment_Change_Detector;
use Automattic\Jetpack_Boost\Lib\Premium_Features;
use Automattic\Jetpack_Boost\Modules\Modules_Index;
use Automattic\Jetpack_Boost\Modules\Modules_Setup;
use Automattic\Jetpack_Boost\Modules\Optimizations\Critical_CSS\Critical_CSS;

class Admin {
	/**
	 * Menu slug.
	 */
	const MENU_SLUG = 'jetpack-boost';

	public function init( Modules_Setup $modules ) {
		Environment_Change_Detector::init();

		// Initiate speed scores.
		new Speed_Score( $modules->get_ready_active_optimization_modules(), 'boost-plugin' );

		add_action( 'init', array( new Analytics(), 'init' ) );
		add_filter( 'plugin_action_links_' . JETPACK_BOOST_PLUGIN_BASE, array( $this, 'plugin_page_settings_link' ) );
		add_action( 'admin_menu', array( $this, 'handle_admin_menu' ) );
	}

	public function handle_admin_menu() {
		/**
		 * Filters the number of problems shown in the Boost sidebar menu
		 *
		 * @param int $count the number of problems shown.
		 *
		 * @since   1.0.0
		 */
		$total_problems = apply_filters( 'jetpack_boost_total_problem_count', 0 );
		$menu_label     = _x( 'Boost', 'The Jetpack Boost product name, without the Jetpack prefix', 'jetpack-boost' );
		if ( $total_problems ) {
			$menu_label .= sprintf( ' <span class="update-plugins">%d</span>', $total_problems );
		}

		$page_suffix = Admin_Menu::add_menu(
			__( 'Jetpack Boost - Settings', 'jetpack-boost' ),
			$menu_label,
			'manage_options',
			JETPACK_BOOST_SLUG,
			array( $this, 'render_settings' )
		);
		add_action( 'load-' . $page_suffix, array( $this, 'admin_init' ) );
	}

	/**
	 * Enqueue scripts and styles for the admin page.
	 */
	public function admin_init() {
		// Clear premium features cache when the plugin settings page is loaded.
		Premium_Features::clear_cache();

		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_styles' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {
		/**
		 * Filters the internal path to the distributed assets used by the plugin
		 *
		 * @param string $path the path to the assets
		 *
		 * @since   1.0.0
		 */
		$internal_path = apply_filters( 'jetpack_boost_asset_internal_path', 'app/assets/dist/' );

		wp_enqueue_style(
			'jetpack-boost-css',
			plugins_url( $internal_path . 'jetpack-boost.css', JETPACK_BOOST_PATH ),
			array( 'wp-components' ),
			JETPACK_BOOST_VERSION
		);
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {
		/**
		 * Filters the internal path to the distributed assets used by the plugin
		 *
		 * @param string $path the path to the assets
		 */
		$internal_path = apply_filters( 'jetpack_boost_asset_internal_path', 'app/assets/dist/' );

		$critical_css_gen_handle = 'jetpack-boost-critical-css-gen';

		wp_register_script(
			$critical_css_gen_handle,
			plugins_url( $internal_path . 'critical-css-gen.js', JETPACK_BOOST_PATH ),
			array(),
			JETPACK_BOOST_VERSION,
			true
		);

		$admin_js_handle = 'jetpack-boost-admin';

		$admin_js_dependencies = array(
			'wp-i18n',
			'wp-components',
		);

		// Enqueue the critical CSS generator script if Critical CSS is available.
		if ( ( new Modules_Index() )->is_module_available( Critical_CSS::get_slug() ) ) {
			$admin_js_dependencies[] = $critical_css_gen_handle;
		}

		wp_register_script(
			$admin_js_handle,
			plugins_url( $internal_path . 'jetpack-boost.js', JETPACK_BOOST_PATH ),
			$admin_js_dependencies,
			JETPACK_BOOST_VERSION,
			true
		);

		wp_localize_script(
			$admin_js_handle,
			'Jetpack_Boost',
			( new Config() )->constants()
		);

		wp_set_script_translations( $admin_js_handle, 'jetpack-boost' );

		wp_enqueue_script( $admin_js_handle );
	}

	/**
	 * Get settings link.
	 *
	 * @param array $links the array of links.
	 */
	public function plugin_page_settings_link( $links ) {
		$settings_link = '<a href="' . admin_url( 'admin.php?page=jetpack-boost' ) . '">' . esc_html__( 'Settings', 'jetpack-boost' ) . '</a>';
		array_unshift( $links, $settings_link );

		return $links;
	}

	/**
	 * Generate the settings page.
	 */
	public function render_settings() {
		wp_localize_script(
			'jetpack-boost-admin',
			'wpApiSettings',
			array(
				'root'  => esc_url_raw( rest_url() ),
				'nonce' => wp_create_nonce( 'wp_rest' ),
			)
		);
		?>
		<div id="jb-admin-settings"></div>
		<?php
	}
}
