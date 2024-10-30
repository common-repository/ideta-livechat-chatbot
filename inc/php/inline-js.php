<?php

defined( 'ABSPATH' ) or die( "Restricted access!" );

$options = ideta_livechat_chatbot_options();

?>
    <script type="text/javascript">
        jQuery(document).ready(function($) {

            var hidden_scrollto = <?php echo $options['hidden_scrollto']; ?>;
            $(document).scrollTop(hidden_scrollto);
            $(window).scroll(function() {
                $('input:hidden.control-hidden.hidden_scrollto').val($(document).scrollTop());
            });
        });
    </script>
<?php

if ( $options['hidden_scrollto'] != '0' ) {
    $options['hidden_scrollto'] = '0';
    update_option( $plugin['settings'] . '_settings', $options );
}