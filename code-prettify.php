<?php
/*
Plugin Name: Code Prettify
Plugin URI: http://www.ooso.net/code-prettify
Description: This plugin using <a href="http://code.google.com/p/google-code-prettify/">google-code-prettify</a> to highlight source code in your posts. 
Author: Volcano
Version: 0.1
Author URI: http://www.ooso.net
*/

function cp_head() {
	$path = WP_PLUGIN_URL . '/code-prettify';
	echo <<<EOF
<link href="$path/prettify.css" type="text/css" rel="stylesheet" />
EOF;
}

wp_register_script('code-prettify', WP_PLUGIN_URL . '/code-prettify/prettify.js', false, false, true);
wp_enqueue_script('code-prettify');

add_action('wp_head', 'cp_head');
