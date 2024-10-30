<?php
defined( 'ABSPATH' ) or die( "Restricted access!" );
?>
    <div class="has-sidebar sm-padded">
        <div id="post-body-content" class="has-sidebar-content">
            <div class="meta-box-sortabless">

                <form action="options.php" method="post" enctype="multipart/form-data">
                    <?php settings_fields( $plugin['settings'] . '_settings_group' ); ?>

                    <?php
                        $options = ideta_livechat_chatbot_options();
                    ?> 

                    <div class="postbox" id="footer">
                        <h3 class="title">
                            <?php _e( 'Add your Ideta script to your website', $plugin['text'] ); ?>
                            <div class="pull-right">
                                <span class="not-saved"><?php _e( 'NOT SAVED!', $plugin['text'] ); ?></span>
                            </div>
                        </h3>
                        <div class="inside">
                            <p class="note"><?php _e( 'You can use the fields below to make the Ideta livechat or chatbot available on your website.', $plugin['text'] ); ?></p>
                            <p class='help-text'>
                                <?php _e( 'Copy and paste the script you got from the Publish section of Ideta here.', $plugin['text'] ); ?>
                            </p>
                            <textarea
                                name="ideta_livechat_chatbot_settings[footer_end]"
                                id="ideta_livechat_chatbot_settings[footer_end]"
                                placeholder="<?php _e( 'Paste your script here', $plugin['text'] ); ?>"
                            ><?php echo esc_attr( $options['footer_end'] ); ?></textarea>

                            <?php
                                ideta_livechat_chatbot_control_hidden( 'hidden_scrollto','0');
                            ?>
                            <input type="submit" name="submit" id="submit" class="btn btn-primary" value="<?php _e( 'Activate', $plugin['text'] ); ?>">

                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
<?php
