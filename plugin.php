<?php
/**
 * PHP Debugging
 *
 * @package     DevDesigns
 * @author      joedooley
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: PHP Debugging
 * Plugin URI:  https://www.developingdesigns.com/
 * Description: Making PHP debugging easier for WordPress development.
 * Version:     1.0.0
 * Author:      joedooley
 * Author URI:  https://www.developingdesigns.com/
 * Text Domain: devdesigns
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */
namespace DevDesigns;

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Cheatin&#8217; uh?' );
}

require_once __DIR__ . '/assets/vendor/autoload.php';

add_action( 'init', __NAMESPACE__ . '\launch' );
function launch() {

}
