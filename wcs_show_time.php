<?php
/*
Plugin Name: WCS Show Time On Posts
Plugin URI: http://woodlandcode.com/plugins/wcs-show-time
Description: This plugin will show the time since posting on the index page of posts.
Version: 1.0
Author: Tim Moore
Author URI: http://woodlandcode.com
License: GPL2

Copyright (C) 2011 Woodland Code Studio

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

To Do:
	- Add option for time zone (or grab and use time zone in WordPress)
*/

$timezone = get_option( 'timezone_string' );

if( $timezone ) {
	date_default_timezone_set( $timezone );
} else {
	date_default_timezone_set( 'America/New_York' );
}

if( !function_exists( 'wcs_show_time' ) ) {
	function wcs_show_time( $the_post_id ) {
		$the_post_day = get_the_time( 'd', $the_post_id );
		$post_date = strtotime( get_the_time( '', $the_post_id ) );
		$the_time = time() - $post_date;

		if( $the_post_day == date( 'd' ) ) {
			if( $the_time < 86400 && $the_time > 3600 ) {
				$updated_time = "NEW TODAY";
			} else if( $the_time < 3600 && $the_time > 60) {
				$minutes = date( 'i', $the_time );

				if( substr( $minutes, 0, 1 ) == '0' ) {
					$minutes = substr( $minutes, 1 , 1 );
				}

				$updated_time = $minutes . " minutes ago";
			} else if( $the_time <= 60 && $the_time > 0) {
				$updated_time = "1 minute ago";
			} else {
				$updated_time = "";
			}

			return " <span class='updated_time'>" . $updated_time . "</span>";
		}
	}
}
?>