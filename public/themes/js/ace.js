$(function() {
  'use strict';

  if ($('#ace_html_jquery').length) {
    $(function() {
      var editor = ace.edit("ace_html_jquery");
      editor.setTheme("ace/theme/dracula");
      editor.getSession().setMode("ace/mode/html");
      editor.setOption("showPrintMargin", false)
    });
  }

  if ($('#ace_javaScript_jquery').length) {
    $(function() {
      var editor = ace.edit("ace_javaScript_jquery");
      editor.setTheme("ace/theme/dracula");
      editor.getSession().setMode("ace/mode/javascript");
      editor.setOption("showPrintMargin", false)
    });
  }

  if ($('#ace_php_jquery').length) {
    $(function() {
      var editor = ace.edit("ace_php_jquery");
      editor.setTheme("ace/theme/dracula");
      editor.getSession().setMode("ace/mode/php");
      editor.setOption("showPrintMargin", false)
    });
  }

  if ($('#ace_html').length) {
    $(function() {
      var editor = ace.edit("ace_html");
      editor.setTheme("ace/theme/dracula");
      editor.getSession().setMode("ace/mode/html");
      editor.setOption("showPrintMargin", false)
    });
  }

  if ($('#ace_javaScript').length) {
    $(function() {
      var editor = ace.edit("ace_javaScript");
      editor.setTheme("ace/theme/dracula");
      editor.getSession().setMode("ace/mode/javascript");
      editor.setOption("showPrintMargin", false)
    });
  }

  if ($('#ace_php').length) {
    $(function() {
      var editor = ace.edit("ace_php");
      editor.setTheme("ace/theme/dracula");
      editor.getSession().setMode("ace/mode/php");
      editor.setOption("showPrintMargin", false)
    });
  }

});
