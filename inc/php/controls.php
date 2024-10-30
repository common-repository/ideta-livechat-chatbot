<?php

defined( 'ABSPATH' ) or die( "Restricted access!" );

function ideta_livechat_chatbot_control_hidden( $name, $value ) {

    $plugin = ideta_livechat_chatbot();

    $out = "<input
    type='hidden'
    name='" . $plugin['settings'] . "_settings[$name]'
    id='" . $plugin['settings'] . "_settings[$name]'
    value='$value'
    class='control-hidden $name'
    >";

    echo $out;
}
