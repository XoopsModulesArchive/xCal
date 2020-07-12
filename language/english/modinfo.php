<?php
// $Id: modinfo.php,v 1.8 2003/02/12 11:37:52 okazu Exp $
// Module Info

// The name of this module
define('_MI_XCAL_NAME','xCal');

// A brief description of this module
define('_MI_XCAL_DESC','An Xoopified version of phpicalendar.');

// Title of config items
define('_MI_STYLE_SHEET', 'Use this theme:');
define('_MI_STYLE_SHEET_DESC', '');
define('_MI_DEFAULT_VIEW', 'Startup Calendar Mode:');
define('_MI_DEFAULT_VIEW_DESC', '');
define('_MI_MINICAL_VIEW', 'Mini-Calendar View');
define('_MI_MINICAL_VIEW_DESC', 'Which calendar view should a mini-calendar link go to?');
define('_MI_DEFAULT_CAL', 'Default Calendar:');
define('_MI_DEFAULT_CAL_DESC', 'When entering the module, which calendar should a user see?  This should be the name of the ICS file you want to view - i.e. <span style="color:#804000">School</span> for School.ics');
define('_MI_LANGUAGE', 'Calendar Language:');
define('_MI_LANGUAGE_DESC', '');
define('_MI_WEEK_START_DAY', 'First day of week:');
define('_MI_WEEK_START_DAY_DESC', '');
define('_MI_DAY_START', 'Start of day:');
define('_MI_DAY_START_DESC', 'Enter the time of day military style - e.g. "<span style="color:#804000">0700</span>" for 7:00 a.m.');
define('_MI_GRIDLENGTH', 'Block Length:');
define('_MI_GRIDLENGTH_DESC', 'Choose the number of minutes between blocks in the day view.');
define('_MI_NUM_YEARS', '"Jump To" Years:');
define('_MI_NUM_YEARS_DESC', 'Determines the number of years available in the "Jump To" Block.');
define('_MI_MONTH_EVENT_LINES', 'Month Event Title Wrap:');
define('_MI_MONTH_EVENT_LINES_DESC', 'How many lines of text should be shown for each event in month view?  Enter "0" for all lines');
define('_MI_TOMORROWS_EVENT_LINES', '"Tomorrow\'s Events" Title Wrap:');
define('_MI_TOMORROWS_EVENT_LINES_DESC', 'How many lines of text should be shown for each event in month view?  Enter "0" for all lines');
define('_MI_ALLDAY_WEEK_LINES', 'All-Day Event Lines:');
define('_MI_ALLDAY_WEEK_LINES_DESC', 'How many lines of text should be shown for all day events in week view? Enter "0" for all lines');
define('_MI_WEEK_EVENTS_LINES', 'Week Event Lines:');
define('_MI_WEEK_EVENTS_LINES_DESC', 'How many lines of text should be shown for each event in week view? Enter "0" for all lines');
define('_MI_TIMEZONE', 'Calendar Timezone');
define('_MI_TIMEZONE_DESC', 'Specifiy a timezone for your calendar if differs from the server.  Enter "<span style="color:#804000">Same as Server</span>" to use the server\'s time settings.');
define('_MI_SAVE_PARSED_CALS', 'Cache Parsed Calendars:');
define("_MI_SAVE_PARSED_CALS_DESC", "Should xCal cache parsed calendars?  Improves performance but requires write access to <span style=\"color:#804000\">/modules/xCal/cache/</span> directory");
define('_MI_DISPLAY_ICAL_LIST', 'Allow calendar select?');
define('_MI_DISPLAY_ICAL_LIST_DESC', 'If allowed, shows a list of all calendar files in the calendar directory.');
define('_MI_THIS_MONTHS_EVENTS', 'Display "This Month\'s Events"?');
define('_MI_THIS_MONTHS_EVENTS', 'If enabled, the current months events at the bottom of month view');
define('_MI_USE_COLOR_CALS', 'Display calendars in different colors?');
define('_MI_USE_COLOR_CALS_DESC', 'If enabled, each calendar is shown using a different color');
define('_MI_DAYSOFWEEK_DAYVIEW', 'Display days of the week in Day View?');
define('_MI_DAYSOFWEEK_DAYVIEW_DESC', '');
define('_MI_SHOW_SEARCH', 'Display search box?');
define('_MI_SHOW_SEARCH_DESC', 'If enabled, displays a search box in the sidebar');
define('_MI_HEADER_ALWAYS', 'Header in print view?');
define('_MI_HEADER_ALWAYS_DESC', '');
define('_MI_SHOW_TODOS', 'Show todo list?');
define('_MI_SHOW_TODOS_DESC', 'Shows a todo list of tasks on the side of the day and week view');
define('_MI_SHOW_COMPLETED', 'Show completed tasks?');
define('_MI_SHOW_COMPLETED_DESC', 'Should the todo list display completed tasks?');

define('_MI_YES', 'Yes');
define('_MI_NO', 'No');

define('_MI_WEEK_SUN', 'Sunday');
define('_MI_WEEK_MON', 'Monday');
define('_MI_WEEK_TUES', 'Tuesday');
define('_MI_WEEK_WED', 'Wednesday');
define('_MI_WEEK_THUR', 'Thursday');
define('_MI_WEEK_FRI', 'Friday');
define('_MI_WEEK_SAT', 'Saturday');

// Description of each config items
define('_MI_STORYHOMEDSC', '');
define('_MI_NOTIFYSUBMITDSC', '');
define('_MI_DISPLAYNAVDSC', '');
define('_MI_AUTOAPPROVEDSC', '');
?>