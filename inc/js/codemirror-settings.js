/*
 * @package     Ideta Livechat & Chatbot
 * @author      Ideta
 */

 jQuery(document).ready(function($) {

    "use strict";
    $('textarea').each(function(index, element){
        var editor = CodeMirror.fromTextArea(element, {
            lineNumbers: true,
            firstLineNumber: 1,
            matchBrackets: true,
            indentUnit: 4,
            mode: 'text/html',
            autoRefresh: true,
            styleActiveLine: true
        }).on('change', function() {
            $( element ).closest('.postbox').children('h3').children('.pull-right').children('.not-saved').show();
        });
    });

});
