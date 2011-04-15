=== Plugin Name ===
Contributors: tmoorewp
Tags: updated, time, posts
Requires at least: 3.0
Tested up to: 3.1.1
Stable tag: 1.0

This plugin will show the time since posting on the index page of posts.

== Installation ==

1. Use the WordPress Installer ( Plugins -> Add New ).
1. Place the following code in your template where you want to display the time since posting:
`<?php if( function_exists( 'wcs_show_time' ) ) { echo wcs_show_time( get_the_ID() ); }?>`

== Changelog ==

= 1.0 =
* Initial Release