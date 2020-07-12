<?php
// $Id: modinfo.php,v 1.11 2003/02/12 11:36:35 okazu Exp $
// Module Info

// The name of this module
define("_MI_MYDOWNLOADS_NAME","Downloads");

// A brief description of this module
define("_MI_MYDOWNLOADS_DESC","Creates a downloads section where users can download/submit/rate various files.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_MYDOWNLOADS_BNAME1","Recent Downloads");
define("_MI_MYDOWNLOADS_BNAME2","Top Downloads");

// Sub menu titles
define("_MI_MYDOWNLOADS_SMNAME1","Submit");
define("_MI_MYDOWNLOADS_SMNAME2","Popular");
define("_MI_MYDOWNLOADS_SMNAME3","Top Rated");

// Names of admin menu items
define("_MI_MYDOWNLOADS_ADMENU2","Add/Edit Downloads");
define("_MI_MYDOWNLOADS_ADMENU3","Submitted Downloads");
define("_MI_MYDOWNLOADS_ADMENU4","Broken Downloads");
define("_MI_MYDOWNLOADS_ADMENU5","Modified Downloads");

// Title of config items
define('_MI_MYDOWNLOADS_POPULAR', 'Number of hits for downloadable items to be marked as popular');
define('_MI_MYDOWNLOADS_NEWDLS', 'Maximum number of new download items displayed on top page');
define('_MI_MYDOWNLOADS_PERPAGE', 'Maximum number of download items displayed on each page');
define('_MI_MYDOWNLOADS_USESHOTS', 'Select yes to display screenshot images for each download item');
define('_MI_MYDOWNLOADS_SHOTWIDTH', 'Type in the maximum width of screenshot images');
define('_MI_MYDOWNLOADS_CHECKHOST', 'Disallow direct download linking? (leeching)');
define('_MI_MYDOWNLOADS_REFERERS', 'This Sites can directly link you files <br />Separate each one with | ');
define("_MI_MYDOWNLOADS_ANONPOST","Allow anonymous users to post download items?");
define('_MI_MYDOWNLOADS_AUTOAPPROVE','Auto approve new downloads without admin intervention?');

// Description of each config items
define('_MI_MYDOWNLOADS_POPULARDSC', '');
define('_MI_MYDOWNLOADS_NEWDLSDSC', '');
define('_MI_MYDOWNLOADS_PERPAGEDSC', '');
define('_MI_MYDOWNLOADS_USESHOTSDSC', '');
define('_MI_MYDOWNLOADS_SHOTWIDTHDSC', '');
define('_MI_MYDOWNLOADS_REFERERSDSC', '');
define('_MI_MYDOWNLOADS_AUTOAPPROVEDSC', '');
?>