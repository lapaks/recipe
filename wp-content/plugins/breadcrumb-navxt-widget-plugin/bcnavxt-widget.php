<?php
/*
Plugin Name: BreadCrumb NavXT Widget
Plugin URI: http://www.bevsonline.net/2008/07/breadcrumb-navxt-widget-plugin/
Description: Adds a widget for the BreadCrumb NavXT Plugin (http://mtekk.weblogs.us/code/breadcrumb-navxt/)
Version: 0.1
Author: David Beveridge
Author URI: http://www.bevsonline.net

    Copyright 2008  David Beveridge  (email : bevs@bevsonline.net)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
    or see http://www.gnu.org/licenses/gpl-2.0.html
*/


function widget_BreadCrumb_NavXT($args)	{
	extract($args);
	if(!empty($before_widget)) echo $before_widget;
	if(function_exists('bcn_display'))	{
		bcn_display();
	}
	else
		echo "BreadCrumb NavXT is not installed correctly.  Please see the <a href=\"http://mtekk.weblogs.us/code/breadcrumb-navxt/#installation\">online documentation.</a>";
	if(!empty($after_widget)) echo $after_widget;
}

function register_BreadCrumb_NavXT_widget()	{
	register_sidebar_widget(array("BreadCrumb NavXT Widget %s",$textdomain,$replacement),widget_BreadCrumb_NavXT);
}

add_action('plugins_loaded','register_BreadCrumb_NavXT_widget');
?>
