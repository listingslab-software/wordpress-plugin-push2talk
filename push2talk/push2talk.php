<?php

/**
 * @link              https://listingslab.com/work/wordpress/plugins/push2talk/
 * @package           push2talk
 *
 * @wordpress-plugin
 * Version:           9.3
 * Plugin Name:       Push2talk 9.3
 * Description:       Website contact forms have always been rubbish. This one is better
 * Plugin URI:        https://listingslab.com/work/wordpress/plugins/push2talk/
 * Author:            listingslab
 * Author URI:        https://listingslab.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       push2talk
 * Domain Path:       /languages
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}
define( 'push2talk_VERSION', '9.3' );


add_action('admin_menu', 'push2talk_plugin_setup_menu');
function push2talk_plugin_setup_menu(){
    add_menu_page( 
    	'push2talk Page', 
    	'push2talk', 
    	'manage_options', 
    	'push2talk', 
    	'push2talk_admin',
        plugin_dir_url(__FILE__) . 'admin/svg/Icon.svg',
        4
    );
}

require_once plugin_dir_path( __FILE__ ) . 'includes/admin-page.php';

function activate_push2talk() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-push2talk-activator.php';
	push2talk_Activator::activate();
}

function deactivate_push2talk() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-push2talk-deactivator.php';
	push2talk_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_push2talk' );
register_deactivation_hook( __FILE__, 'deactivate_push2talk' );

require plugin_dir_path( __FILE__ ) . 'includes/class-push2talk.php';

function run_push2talk() {
    require_once plugin_dir_path( __FILE__ ) . 'includes/class-push2talk-widget.php';
    $widget = new push2talk_Widget();
	$plugin = new push2talk();
	$plugin->run();
}

run_push2talk();

