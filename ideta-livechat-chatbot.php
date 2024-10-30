<?php
/**
 * Plugin Name: Ideta Livechat & Chatbot
 * Plugin URI: https://ideta.io/
 * Description: This plugin allows you to insert your Ideta Livechat or Chatbot in your Wordpress website
 * Version: 1.0.2
 * Author: Ideta
 * Author URI: http://www.ideta.io
 */


defined( 'ABSPATH' ) or die( "Restricted access!" );

$plugin_data = get_file_data( __FILE__,
  array(
   'name'    => 'Plugin Name',
   'version' => 'Version',
   'text'    => 'Text Domain'
 )
);
function ideta_livechat_chatbot_define_constants( $constant_name, $value ) {
  $constant_name = 'IDETA_LIVECHAT_CHATBOT_' . $constant_name;
  if ( ! defined( $constant_name ) )
    define( $constant_name, $value );
}
ideta_livechat_chatbot_define_constants( 'FILE', __FILE__ );
ideta_livechat_chatbot_define_constants( 'DIR', dirname( plugin_basename( __FILE__ ) ) );
ideta_livechat_chatbot_define_constants( 'BASE', plugin_basename( __FILE__ ) );
ideta_livechat_chatbot_define_constants( 'URL', plugin_dir_url( __FILE__ ) );
ideta_livechat_chatbot_define_constants( 'PATH', plugin_dir_path( __FILE__ ) );
ideta_livechat_chatbot_define_constants( 'SLUG', dirname( plugin_basename( __FILE__ ) ) );
ideta_livechat_chatbot_define_constants( 'NAME', $plugin_data['name'] );
ideta_livechat_chatbot_define_constants( 'VERSION', $plugin_data['version'] );
ideta_livechat_chatbot_define_constants( 'TEXT', $plugin_data['text'] );
ideta_livechat_chatbot_define_constants( 'PREFIX', 'ideta_livechat_chatbot' );
ideta_livechat_chatbot_define_constants( 'SETTINGS', 'ideta_livechat_chatbot' );

function ideta_livechat_chatbot() {
  $array = array(
    'file'     => IDETA_LIVECHAT_CHATBOT_FILE,
    'dir'      => IDETA_LIVECHAT_CHATBOT_DIR,
    'base'     => IDETA_LIVECHAT_CHATBOT_BASE,
    'url'      => IDETA_LIVECHAT_CHATBOT_URL,
    'path'     => IDETA_LIVECHAT_CHATBOT_PATH,
    'slug'     => IDETA_LIVECHAT_CHATBOT_SLUG,
    'version'  => IDETA_LIVECHAT_CHATBOT_VERSION,
    'name'     => IDETA_LIVECHAT_CHATBOT_NAME, 
    'text'     => IDETA_LIVECHAT_CHATBOT_TEXT,
    'prefix'   => IDETA_LIVECHAT_CHATBOT_PREFIX,
    'settings' => IDETA_LIVECHAT_CHATBOT_SETTINGS
  );
  return $array;
}

$plugin = ideta_livechat_chatbot();

require_once( $plugin['path'] . 'inc/php/core.php' );
require_once( $plugin['path'] . 'inc/php/options.php' );  
require_once( $plugin['path'] . 'inc/php/enqueue.php' );
require_once( $plugin['path'] . 'inc/php/functional.php' );
require_once( $plugin['path'] . 'inc/php/controls.php' );
require_once( $plugin['path'] . 'inc/php/page.php' );
require_once( $plugin['path'] . 'inc/php/messages.php' );