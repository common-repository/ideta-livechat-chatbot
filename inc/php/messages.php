<?php

defined( 'ABSPATH' ) or die( "Restricted access!" );

function ideta_livechat_chatbot_message_hello() {

    $plugin = ideta_livechat_chatbot();
    $options = ideta_livechat_chatbot_options();

    if ( ! empty( $options ) ) {
        return;
    }

    ?>
        <div id="hello-message" class="modal fade hello-message" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body"> 
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <p>
                            <?php _e( 'Hello!', $plugin['text'] ); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    <?php

    ?>
        <script>
            jQuery(document).ready(function($) {

                $("#hello-message").modal();
                setTimeout(function() {
                    $('#hello-message').modal('hide');
                }, 7000);
            });
        </script>
    <?php
}
 
function ideta_livechat_chatbot_message_save() {
    if ( ! isset( $_GET['settings-updated'] ) ) {
        return;
    }

    $plugin = ideta_livechat_chatbot();
    ?>
        <div id="message" class="updated">
            <p>
                <i class="fa fa-check" aria-hidden="true"></i>
                <?php _e( 'Custom code saved successfully.', $plugin['text'] ); ?>
            </p>
        </div>
        <style>
            #message.updated {
                z-index: 9999;
                position: fixed;
                top: 40px;
                right: 40px;
            }
        </style>
    <?php
}
