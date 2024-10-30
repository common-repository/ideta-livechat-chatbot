/*
 * @package     Ideta Livechat & Chatbot
 * @author      Ideta
 */

 jQuery(document).ready(function($) {

    "use strict";
    if ('.updated') {
        setTimeout(function() {
            $('.updated').fadeOut();
        }, 2000);
    } 
    $('.panel-group .panel').each(function(i) {
        $('.question-' + (i+1) ).appendTo( $('h4', this) );
        $('.answer-' + (i+1) ).appendTo( $('.panel-body', this) );

        if ( $(this).find('h4 div').hasClass('question-red') ) {
            $(this).addClass('panel-danger');
        } else {
            $(this).addClass('panel-info');
        }
    });

});
