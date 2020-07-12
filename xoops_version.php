<?php
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //
$modversion['name'] = ""._MI_XCAL_NAME."";
$modversion['version'] = "0.1";
$modversion['description'] = ""._MI_XCAL_DESC."";
$modversion['credits'] = "phpicalendar development team see AUTHORS";
$modversion['help'] = "xCal.html";
$modversion['license'] = "GPL see COPYING";
$modversion['official'] = 1;
$modversion['image'] = "images/phpical-logo.gif";
$modversion['dirname'] = "xCal";

$modversion['hasAdmin'] = 1;
//$modversion['adminindex'] = "admin/index.php";
//$modversion['adminmenu'] = "admin/menu.php";

$modversion['hasMain'] = 1;
$modversion['hasSearch'] = 0;
$modversion['hasComments'] = 0;

// Config Settings (only for modules that need config settings generated automatically)

$modversion['config'][1]['name'] = 'style_sheet';
$modversion['config'][1]['title'] = '_MI_STYLE_SHEET';
$modversion['config'][1]['description'] = '_MI_STYLE_SHEET_DESC';
$modversion['config'][1]['formtype'] = 'select'; // can be textbox, textarea, select, select_multi, yesno, group, group_multi
$modversion['config'][1]['valuetype'] = 'text'; // can be one of either int, text, float, array, or other
// ignore it if no default
// 'yesno' formtype must be either 0(no) or 1(yes)
$modversion['config'][1]['default'] = 'silver';
$modversion['config'][1]['options'] = array('silver' => 'silver', 'red' => 'red', 'green' => 'green', 'orange' => 'orange', 'grey' => 'grey', 'tan' => 'tan');


$modversion['config'][2]['name'] = 'default_view';
$modversion['config'][2]['title'] = '_MI_DEFAULT_VIEW';
$modversion['config'][2]['description'] = '_MI_DEFAULT_VIEW_DESC';
$modversion['config'][2]['formtype'] = 'select';
$modversion['config'][2]['valuetype'] = 'text';
$modversion['config'][2]['default'] = 'day';
$modversion['config'][2]['options'] = array('day'=>'day', 'week'=>'week', 'month'=>'month','year'=>'year');

$modversion['config'][3]['name'] = 'minical_view';
$modversion['config'][3]['title'] = '_MI_MINICAL_VIEW';
$modversion['config'][3]['description'] = '_MI_MINICAL_VIEW_DESC';
$modversion['config'][3]['formtype'] = 'select';
$modversion['config'][3]['valuetype'] = 'text';
$modversion['config'][3]['default'] = 'current';
$modversion['config'][3]['options'] = array('day'=>'day', 'week'=>'week', 'month'=>'month','year'=>'year','current'=>'current');

$modversion['config'][4]['name'] = 'default_cal';
$modversion['config'][4]['title'] = '_MI_DEFAULT_CAL';
$modversion['config'][4]['description'] = '_MI_DEFAULT_CAL_DESC';
$modversion['config'][4]['formtype'] = 'textbox';
$modversion['config'][4]['valuetype'] = 'text';
$modversion['config'][4]['default'] = 'School';

$modversion['config'][5]['name'] = 'language';
$modversion['config'][5]['title'] = '_MI_LANGUAGE';
$modversion['config'][5]['description'] = '_MI_LANGUAGE_DESC';
$modversion['config'][5]['formtype'] = 'select';
$modversion['config'][5]['valuetype'] = 'text';
$modversion['config'][5]['default'] = 'English';
$modversion['config'][5]['options'] = array(
		'English'=>'English',
		'Polish'=>'Polish',
		'German'=>'German',
		'French'=>'French',
		'Dutch'=>'Dutch',
		'Danish'=>'Danish',
		'Italian'=>'Italian',
		'Japanese'=>'Japanese',
		'Norwegian'=>'Norwegian',
		'Spanish'=>'Spanish',
		'Swedish'=>'Swedish',
		'Portuguese'=>'Portuguese',
		'Catalan'=>'Catalan',
		'Traditional Chinese'=>'Traditional_Chinese');

$modversion['config'][6]['name'] = 'week_start_day';
$modversion['config'][6]['title'] = '_MI_WEEK_START_DAY';
$modversion['config'][6]['description'] = '_MI_WEEK_START_DESC';
$modversion['config'][6]['formtype'] = 'select';
$modversion['config'][6]['valuetype'] = 'text';
$modversion['config'][6]['default'] = '_MI_WEEK_SUN';
$modversion['config'][6]['options'] = array(
		'_MI_WEEK_SUN'=>'Sunday', 
		'_MI_WEEK_MON'=>'Monday', 
		'_MI_WEEK_TUES'=>'Tuesday',
		'_MI_WEEK_WED'=>'Wednesday',
		'_MI_WEEK_THUR'=>'Thursday',
		'_MI_WEEK_FRI'=>'Friday',
		'_MI_WEEK_SAT'=>'Saturday');

$modversion['config'][7]['name'] = 'day_start';
$modversion['config'][7]['title'] = '_MI_DAY_START';
$modversion['config'][7]['description'] = '_MI_DAY_START_DESC';
$modversion['config'][7]['formtype'] = 'textbox';
$modversion['config'][7]['valuetype'] = 'text';
$modversion['config'][7]['default'] = '0700';

$modversion['config'][8]['name'] = 'gridLength';
$modversion['config'][8]['title'] = '_MI_GRIDLENGTH';
$modversion['config'][8]['description'] = '_MI_GRIDLENGTH_DESC';
$modversion['config'][8]['formtype'] = 'select';
$modversion['config'][8]['valuetype'] = 'int';
$modversion['config'][8]['default'] = 15;
$modversion['config'][8]['options'] = array('15'=>15, '30'=>30, '45'=>45,'60'=>60);

$modversion['config'][9]['name'] = 'num_years';
$modversion['config'][9]['title'] = '_MI_NUM_YEARS';
$modversion['config'][9]['description'] = '_MI_NUM_YEARS_DESC';
$modversion['config'][9]['formtype'] = 'select';
$modversion['config'][9]['valuetype'] = 'int';
$modversion['config'][9]['default'] = 3;
$modversion['config'][9]['options'] = array('2'=>2, '3'=>3, '4'=>4,'5'=>5,'6'=>6);

$modversion['config'][10]['name'] = 'month_event_lines';
$modversion['config'][10]['title'] = '_MI_MONTH_EVENT_LINES';
$modversion['config'][10]['description'] = '_MI_MONTH_EVENT_LINES_DESC';
$modversion['config'][10]['formtype'] = 'textbox';
$modversion['config'][10]['valuetype'] = 'int';
$modversion['config'][10]['default'] = 1;

$modversion['config'][11]['name'] = 'tomorrows_events_lines';
$modversion['config'][11]['title'] = '_MI_TOMORROWS_EVENT_LINES';
$modversion['config'][11]['description'] = '_MI_TOMORROWS_EVENT_LINES_DESC';
$modversion['config'][11]['formtype'] = 'textbox';
$modversion['config'][11]['valuetype'] = 'int';
$modversion['config'][11]['default'] = 1;

$modversion['config'][12]['name'] = 'allday_week_lines';
$modversion['config'][12]['title'] = '_MI_ALLDAY_WEEK_LINES';
$modversion['config'][12]['description'] = '_MI_ALLDAY_WEEK_LINES_DESC';
$modversion['config'][12]['formtype'] = 'textbox';
$modversion['config'][12]['valuetype'] = 'int';
$modversion['config'][12]['default'] = 1;

$modversion['config'][13]['name'] = 'week_events_lines';
$modversion['config'][13]['title'] = '_MI_WEEK_EVENTS_LINES';
$modversion['config'][13]['description'] = '_MI_WEEK_EVENTS_LINES_DESC';
$modversion['config'][13]['formtype'] = 'textbox';
$modversion['config'][13]['valuetype'] = 'int';
$modversion['config'][13]['default'] = 1;

$modversion['config'][14]['name'] = 'timezone';
$modversion['config'][14]['title'] = '_MI_TIMEZONE';
$modversion['config'][14]['description'] = '_MI_TIMEZONE_DESC';
$modversion['config'][14]['formtype'] = 'textbox';
$modversion['config'][14]['valuetype'] = 'text';
$modversion['config'][14]['default'] = 'Same as Server';

$modversion['config'][15]['name'] = 'save_parsed_cals';
$modversion['config'][15]['title'] = '_MI_SAVE_PARSED_CALS';
$modversion['config'][15]['description'] = '_MI_SAVE_PARSED_CALS_DESC';
$modversion['config'][15]['formtype'] = 'select';
$modversion['config'][15]['valuetype'] = 'text';
$modversion['config'][15]['default'] = 'yes';
$modversion['config'][15]['options'] = array('_MI_YES'=>'yes','_MI_NO'=>'no');

$modversion['config'][16]['name'] = 'display_ical_list';
$modversion['config'][16]['title'] = '_MI_DISPLAY_ICAL_LIST';
$modversion['config'][16]['description'] = '_MI_DISPLAY_ICAL_LIST_DESC';
$modversion['config'][16]['formtype'] = 'select';
$modversion['config'][16]['valuetype'] = 'text';
$modversion['config'][16]['default'] = 'yes';
$modversion['config'][16]['options'] = array('_MI_YES'=>'yes','_MI_NO'=>'no');

$modversion['config'][17]['name'] = 'this_months_events';
$modversion['config'][17]['title'] = '_MI_THIS_MONTHS_EVENTS';
$modversion['config'][17]['description'] = '_MI_THIS_MONTHS_EVENTS_DESC';
$modversion['config'][17]['formtype'] = 'select';
$modversion['config'][17]['valuetype'] = 'text';
$modversion['config'][17]['default'] = 'yes';
$modversion['config'][17]['options'] = array('_MI_YES'=>'yes','_MI_NO'=>'no');

$modversion['config'][18]['name'] = 'use_color_cals';
$modversion['config'][18]['title'] = '_MI_USE_COLOR_CALS';
$modversion['config'][18]['description'] = '_MI_USE_COLOR_CALS_DESC';
$modversion['config'][18]['formtype'] = 'select';
$modversion['config'][18]['valuetype'] = 'text';
$modversion['config'][18]['default'] = 'yes';
$modversion['config'][18]['options'] = array('_MI_YES'=>'yes','_MI_NO'=>'no');

$modversion['config'][19]['name'] = 'daysofweek_dayview';
$modversion['config'][19]['title'] = '_MI_DAYSOFWEEK_DAYVIEW';
$modversion['config'][19]['description'] = '_MI_DAYSOFWEEK_DAYVIEW_DESC';
$modversion['config'][19]['formtype'] = 'select';
$modversion['config'][19]['valuetype'] = 'text';
$modversion['config'][19]['default'] = 'yes';
$modversion['config'][19]['options'] = array('_MI_YES'=>'yes','_MI_NO'=>'no');

$modversion['config'][20]['name'] = 'show_search';
$modversion['config'][20]['title'] = '_MI_SHOW_SEARCH';
$modversion['config'][20]['description'] = '_MI_SHOW_SEARCH_DESC';
$modversion['config'][20]['formtype'] = 'select';
$modversion['config'][20]['valuetype'] = 'text';
$modversion['config'][20]['default'] = 'yes';
$modversion['config'][20]['options'] = array('_MI_YES'=>'yes','_MI_NO'=>'no');

$modversion['config'][21]['name'] = 'header_always';
$modversion['config'][21]['title'] = '_MI_HEADER_ALWAYS';
$modversion['config'][21]['description'] = '_MI_HEADER_ALWAYS_DESC';
$modversion['config'][21]['formtype'] = 'select';
$modversion['config'][21]['valuetype'] = 'text';
$modversion['config'][21]['default'] = 'yes';
$modversion['config'][21]['options'] = array('_MI_YES'=>'yes','_MI_NO'=>'no');

$modversion['config'][22]['name'] = 'show_todos';
$modversion['config'][22]['title'] = '_MI_SHOW_TODOS';
$modversion['config'][22]['description'] = '_MI_SHOW_TODOS_DESC';
$modversion['config'][22]['formtype'] = 'select';
$modversion['config'][22]['valuetype'] = 'text';
$modversion['config'][22]['default'] = 'yes';
$modversion['config'][22]['options'] = array('_MI_YES'=>'yes','_MI_NO'=>'no');

$modversion['config'][23]['name'] = 'show_completed';
$modversion['config'][23]['title'] = '_MI_SHOW_COMPLETED';
$modversion['config'][23]['description'] = '_MI_SHOW_COMPLETED_DESC';
$modversion['config'][23]['formtype'] = 'select';
$modversion['config'][23]['valuetype'] = 'text';
$modversion['config'][23]['default'] = 'yes';
$modversion['config'][23]['options'] = array('_MI_YES'=>'yes','_MI_NO'=>'no');
?>
