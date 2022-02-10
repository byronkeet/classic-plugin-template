<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also php all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://keetbis.me
 * @since             1.0.0
 * @package           Breaking_News
 *
 * @wordpress-plugin
 * Plugin Name:       Breaking News
 * Plugin URI:        https://git.toptal.com/screening/Byron-Keet
 * Description:       Display breaking news posts on every page on your site.
 * Version:           1.0.0
 * Author:            Byron Keet
 * Author URI:        https://keetbis.me
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       breaking-news
 * Domain Path:       /languages
 */

use Breaking_News\Breaking_News_Plugin;
use Breaking_News\Breaking_News_Activator;
use Breaking_News\Breaking_News_Deactivator;

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Setup the plugin auto loader.
require_once 'php/autoloader.php';

/**
 * Current plugin version.
 */
define( 'BREAKING_NEWS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in php/class-breaking-news-activator.php
 */
function activate_breaking_news() {
	Breaking_News_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in php/class-breaking-news-deactivator.php
 */
function deactivate_breaking_news() {
	Breaking_News_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_breaking_news' );
register_deactivation_hook( __FILE__, 'deactivate_breaking_news' );

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_breaking_news() {

	$plugin = new Breaking_News_Plugin();
	$plugin->run();

}
run_breaking_news();
