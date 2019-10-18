<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://danielslyman.com
 * @since             1.0.0
 * @package           Skylayer_Typography
 *
 * @wordpress-plugin
 * Plugin Name:       Skylayer Typography
 * Plugin URI:        https://skylayer.de
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.2
 * Author:            Daniel Slyman (Skylayer)
 * Author URI:        https://danielslyman.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       skylayer-typography
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'SKYLAYER_TYPOGRAPHY_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-skylayer-typography-activator.php
 */
function activate_skylayer_typography() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-skylayer-typography-activator.php';
	Skylayer_Typography_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-skylayer-typography-deactivator.php
 */
function deactivate_skylayer_typography() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-skylayer-typography-deactivator.php';
	Skylayer_Typography_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_skylayer_typography' );
register_deactivation_hook( __FILE__, 'deactivate_skylayer_typography' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-skylayer-typography.php';

require 'plugin-update-checker/plugin-update-checker.php';
$MyUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://repo.skylayer.de/?action=get_metadata&slug=skylayer-typography', //Metadata URL.
	__FILE__, //Full path to the main plugin file.
	'skylayer-typography' //Plugin slug. Usually it's the same as the name of the directory.
);

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_skylayer_typography() {

	$plugin = new Skylayer_Typography();
	$plugin->run();

}
run_skylayer_typography();
