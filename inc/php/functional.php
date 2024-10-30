<?php

defined( 'ABSPATH' ) or die( "Restricted access!" );

function ideta_livechat_chatbot_prepare( $option ) {

    if (is_admin() || is_feed() || is_robots() || is_trackback()) {
        return;
    }

    $plugin = ideta_livechat_chatbot();
    $options = ideta_livechat_chatbot_options();
    $data_out = "";

    if ( ! empty( $options[$option] ) ) {
        $data_out .= $options[$option];
    }

    echo $data_out;
}

function ideta_livechat_chatbot_exec_head_0() { ideta_livechat_chatbot_prepare('header_beginning'); }
function ideta_livechat_chatbot_exec_head_1() { ideta_livechat_chatbot_prepare('header_end'); }
function ideta_livechat_chatbot_exec_footer_0() { ideta_livechat_chatbot_prepare('footer_beginning'); }
function ideta_livechat_chatbot_exec_footer_1() { ideta_livechat_chatbot_prepare('footer_end'); }

add_action( 'wp_head', 'ideta_livechat_chatbot_exec_head_0', 0 );
add_action( 'wp_head', 'ideta_livechat_chatbot_exec_head_1', 1000 );
add_action( 'wp_footer', 'ideta_livechat_chatbot_exec_footer_0', 0 );
add_action( 'wp_footer', 'ideta_livechat_chatbot_exec_footer_1', 1000 );
