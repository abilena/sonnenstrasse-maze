<?php
/*
Plugin Name: Sonnenstrasse Maze
Plugin URI: https://wordpress.org/plugins/sonnenstrasse-maze/
Description: This plugin allows you to display a navigateable maze in your posts using shortcodes.
Version: 1.00
Author: Klemens
Author URI: https://profiles.wordpress.org/Klemens#content-plugins
Text Domain: sonnenstrasse-maze
*/ 

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 'aventurien-maze' Shortcode
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

add_shortcode ('aventurien-maze', 'aventurien_maze_shortcode');

function aventurien_maze_shortcode($atts, $content) {

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

	extract(shortcode_atts(array(
		'name' => get_the_title(),
        'style' => 'default'
	), $atts));

	return aventurien_maze_html($name, $content);
}

function aventurien_maze_html($name, $title) {

    $path_local = plugin_dir_path(__FILE__);
    $path_url = plugins_url() . "/sonnenstrasse-maze";

    $output = '<iframe src="' . $path_url . '/Maze.php?name=' . $name . '&title=' . $title. '" style="height: 420px; -webkit-filter: none; filter: none; border: 0px;"></iframe>';

	return $output;
}

?>