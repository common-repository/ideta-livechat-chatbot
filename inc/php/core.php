<?php

defined( 'ABSPATH' ) or die( "Restricted access!" );
function ideta_livechat_chatbot_textdomain() {

    $plugin = ideta_livechat_chatbot();

    load_plugin_textdomain( $plugin['text'], false, $plugin['dir'] . '/languages/' );
}
add_action( 'init', $plugin['prefix'] . '_textdomain' );

function ideta_livechat_chatbot_register_menu_page() {

    $plugin = ideta_livechat_chatbot();
    $page_title  = $plugin['name'];
    $menu_title  = __( 'Ideta', $plugin['text'] );
    $capability  = 'manage_options';
    $menu_slug   = $plugin['slug'];
    $function    = $plugin['prefix'] . '_render_menu_page';

    add_menu_page( $menu_title, $menu_title, $capability, $menu_slug, $function , plugins_url('inc/img/ideta_icon.png', $plugin['file']), 50 );
}
add_action( 'admin_menu', $plugin['prefix'] . '_register_menu_page' );

function ideta_livechat_chatbot_register_settings() {

    $plugin = ideta_livechat_chatbot();

    register_setting( $plugin['settings'] . '_settings_group', $plugin['settings'] . '_settings' );
    register_setting( $plugin['settings'] . '_settings_group_si', $plugin['settings'] . '_service_info' );
}
add_action( 'admin_init', $plugin['prefix'] . '_register_settings' );

function ideta_livechat_chatbot_admin_footer_text() {

    $plugin = ideta_livechat_chatbot();
    $current_screen = get_current_screen();
    $settings_page = 'settings_page_' . $plugin['slug'];
    if ( $settings_page != $current_screen->id ) {
        return;
    }

    function ideta_livechat_chatbot_new_admin_footer_text() {
        $year = date('Y');
        return "Provided by Ideta - https://ideta.io";
    }
    add_filter( 'admin_footer_text', $plugin['prefix'] . '_new_admin_footer_text', 11 );
}
add_action( 'current_screen', $plugin['prefix'] . '_admin_footer_text' );

function ideta_livechat_chatbot_uninstall() {
    $plugin = ideta_livechat_chatbot();
    delete_option( $plugin['settings'] . '_settings' );
}
register_uninstall_hook( $plugin['file'], $plugin['prefix'] . '_uninstall' );