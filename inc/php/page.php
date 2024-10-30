<?php

defined( 'ABSPATH' ) or die( "Restricted access!" );

function ideta_livechat_chatbot_render_menu_page() {

    $plugin = ideta_livechat_chatbot();

    ideta_livechat_chatbot_message_hello(); 
    ideta_livechat_chatbot_message_save();

    ?>
    <div class="wrap">

        <h2>
            <a href="https://www.ideta.io/" target="_blank">
                <?php echo $plugin['name']; ?>
            </a>
            <p class="version"><?php _e( 'Version', $plugin['text'] ); ?> <?php echo $plugin['version']; ?></p>
        </h2>

        <div id="poststuff" class="metabox-holder has-right-sidebar">

            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="main-tab" data-bs-toggle="tab" data-bs-target="#main" type="button" role="tab" aria-controls="main" aria-selected="true"><?php _e( 'Main', $plugin['text'] ); ?></button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="usage-tab" data-bs-toggle="tab" data-bs-target="#usage" type="button" role="tab" aria-controls="usage" aria-selected="false"><?php _e( 'Usage', $plugin['text'] ); ?></button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="main" role="tabpanel" aria-labelledby="main-tab">
                <?php require_once( $plugin['path'] . 'inc/php/tabs/settings.php' ); ?>
                <?php require_once( $plugin['path'] . 'inc/php/inline-js.php' ); ?>
            </div>
            <div class="tab-pane fade" id="usage" role="tabpanel" aria-labelledby="usage-tab">
                <?php require_once( $plugin['path'] . 'inc/php/tabs/usage.php' ); ?>
            </div>
        </div>

    </div>

</div>
<?php
}
