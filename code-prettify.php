<?php
/*
Plugin Name: Code Prettify
Plugin URI: http://www.ooso.net/code-prettify
Description: This plugin using <a href="http://code.google.com/p/google-code-prettify/">google-code-prettify</a> to highlight source code in your posts. 
Author: Volcano
Version: 0.1
Author URI: http://www.ooso.net
*/

wp_register_style('code-prettify', WP_PLUGIN_URL . '/code-prettify/prettify.css');
wp_register_script('code-prettify', WP_PLUGIN_URL . '/code-prettify/prettify.js', false, false, true);

wp_enqueue_style('code-prettify');
wp_enqueue_script('code-prettify');

function cp_filter($content) {
	return preg_replace("|<pre(.*?)><code>(.*?)</code></pre>|ise", 
		"'<pre$1><code>'.str_replace(array('<', '>'), array('&lt;', '&gt;'), stripslashes('$2')).'</code></pre>'", $content);
}

add_filter('the_content', 'cp_filter', 0);
