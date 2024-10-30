<?php

defined( 'ABSPATH' ) or die( "Restricted access!" );

function ideta_livechat_chatbot_load_scripts_codemirror() {


    $plugin = ideta_livechat_chatbot();

    wp_enqueue_style( $plugin['prefix'] . '-codemirror-css', $plugin['url'] . 'inc/lib/codemirror/lib/codemirror.css', array(), $plugin['version'], 'all' );
    wp_enqueue_script( $plugin['prefix'] . '-codemirror-js', $plugin['url'] . 'inc/lib/codemirror/lib/codemirror.js', array(), $plugin['version'], false );
    wp_enqueue_script( $plugin['prefix'] . '-codemirror-settings-js', $plugin['url'] . 'inc/js/codemirror-settings.js', array(), $plugin['version'], true );

    $addons = array(
                    'display' => array( 'autorefresh', 'placeholder' ),
                    'selection' => array( 'active-line' )
                   );
    foreach ( $addons as $addons_group_name => $addons_group ) {
        foreach ( $addons_group as $addon ) {
            wp_enqueue_script( $plugin['prefix'] . '-codemirror-addon-' . $addon . '-js', $plugin['url'] . 'inc/lib/codemirror/addon/' . $addons_group_name . '/' . $addon . '.js', array(), $plugin['version'], false );
        }
    }

    $modes = array(
                    'css',
                    'htmlmixed',
                    'javascript',
                    'xml'
                  );
    foreach ( $modes as $mode ) {
        wp_enqueue_script( $plugin['prefix'] . '-codemirror-mode-' . $mode . '-js', $plugin['url'] . 'inc/lib/codemirror/mode/' . $mode . '/' . $mode . '.js', array(), $plugin['version'], true );
    }

}

function ideta_livechat_chatbot_load_scripts_admin( $hook ) {

    $plugin = ideta_livechat_chatbot();
    $ideta_page = 'toplevel_page_' . $plugin['slug'];
    if ( $ideta_page != $hook ) {
        return;
    }

    wp_enqueue_script( 'jquery' );
    wp_enqueue_style( $plugin['prefix'] . '-bootstrap-css', $plugin['url'] . 'inc/lib/bootstrap/bootstrap.css', array(), $plugin['version'], 'all' );
    wp_enqueue_script( $plugin['prefix'] . '-bootstrap-js', $plugin['url'] . 'inc/lib/bootstrap/bootstrap.js', array(), $plugin['version'], false );
    wp_enqueue_style( $plugin['prefix'] . '-font-awesome-css', $plugin['url'] . 'inc/lib/font-awesome/css/font-awesome.css', array(), $plugin['version'], 'screen' );
    wp_enqueue_style( $plugin['prefix'] . '-admin-css', $plugin['url'] . 'inc/css/admin.css', array(), $plugin['version'], 'all' );
    wp_enqueue_script( $plugin['prefix'] . '-admin-js', $plugin['url'] . 'inc/js/admin.js', array(), $plugin['version'], true );
    ideta_livechat_chatbot_load_scripts_codemirror();
}
add_action( 'admin_enqueue_scripts', $plugin['prefix'] . '_load_scripts_admin' );
