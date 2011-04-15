=== Plugin Name ===
Contributors: tmoorewp
Tags: updated, time, posts
Requires at least: 3.0
Tested up to: 3.1.1
Stable tag: 1.0

This plugin will show the time since posting on the index page of posts.

== Description ==

Similar to the New York Times website. Displays an "X Minutes ago" message for up to an hour, then a "NEW TODAY" flag.

== Installation ==

1. Use the WordPress Installer ( Plugins -> Add New ).
1. Place the following code in the Loop of your index.php template where you want to display the time since posting:
`<?php if( function_exists( 'wcs_show_time' ) ) { echo wcs_show_time( get_the_ID() ); }?>`
1. Style the output using the class name "updated_time" in your theme's style.css

== Changelog ==

= 1.0 =
* Initial Release