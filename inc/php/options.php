<?php

function ideta_livechat_chatbot_options() {

    $plugin = ideta_livechat_chatbot();
    $options = get_option( $plugin['settings'] . '_settings' );
    if ( ! is_array( $options ) ) {
        $options = array();
    }

    $array = $options;

    $list = array(
        'footer_beginning' => '',
        'footer_end' => '',
        'header_beginning' => '',
        'header_end' => '',
        'hidden_scrollto' => '0',
    );
    foreach ( $list as $name => $default ) {
        $array[$name] = !empty( $options[$name] ) ? $options[$name] : $default;
    }
    return $array;
}
