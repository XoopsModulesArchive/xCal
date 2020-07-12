<?php

// Configuration file for PHP iCalendar 0.9.1
//
// To set values, change the text between the single quotes
// Follow instructions to the right for detailed information

$default_path			= XOOPS_URL . '/modules/xCal'; 	// The HTTP URL to the PHP iCalendar directory, ie. http://www.example.com/phpicalendar
$tmp_dir				= XOOPS_ROOT_PATH . '/modules/xCal/cache';			// The temporary directory on your system (/tmp is fine for UNIXes including Mac OS X)
$calendar_path 			= '';				// Leave this blank on most installs, place your full path to calendars if they are outside the phpicalendar folder.

// Advanced settings for custom installs, cookies, etc.
// In most cases these will not need to be set.
$cookie_uri				= ''; 				// The HTTP URL to the PHP iCalendar directory, ie. http://www.example.com/phpicalendar
$download_uri			= XOOPS_URL . '/modules/xCal/calendars/'; 				// The HTTP URL to your calendars directory, ie. http://www.example.com/phpicalendar/calendars

// Yes/No questions --- 'yes' means Yes, anything else means no. 'yes' must be lowercase.
$use_sessions 			= 'yes';				// This has not yet been implemented.
$display_custom_goto 	= 'no';				// In the 'Jump To' box, display the custom 'go to day' box.
$allow_webcals 			= 'no';				// Allow http:// and webcal:// prefixed URLs to be used as the $cal for remote viewing of "subscribe-able" calendars. This does not have to be enabled to allow specific ones below.
$enable_rss				= 'no';			// Enable RSS access to your calendars (good thing).
$allow_preferences		= 'no';			// Allow visitors to change various preferences via cookies.
$printview_default		= 'no';				// Set print view as the default view. day, week, and month only supported views for $default_view (listed well above).
										
$blacklisted_cals[] = '';					// Fill in between the quotes the name of the calendars 
$blacklisted_cals[] = '';					// you wish to 'blacklist' or that you don't want to show up in your calendar
$blacklisted_cals[] = '';					// list. This should be the exact calendar filename without .ics
$blacklisted_cals[] = '';					// the parser will *not* parse any cal that is in this list (it will not be Web accessible)
// add more lines as necessary

$list_webcals[] = '';						// Fill in between the quotes exact URL of a calendar that you wish
$list_webcals[] = '';						// to show up in your calendar list. You must prefix the URL with http://
$list_webcals[] = '';						// or webcal:// and the filename should contain the .ics suffix
$list_webcals[] = '';						// $allow_webcals does *not* need to be "yes" for these to show up and work
// add more lines as necessary

$color_cals[] = 'silver';					// Fill in between the quotes the colors you want to display
$color_cals[] = 'red';						// multiple calendars in.
$color_cals[] = 'orange';					// The first color will be used if no color is selected.
$color_cals[] = 'grey';						// 
$color_cals[] = 'green';					// 
$color_cals[] = 'tan';						// 
// add more lines as necessary
?>