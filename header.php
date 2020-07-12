<?php
include "../../mainfile.php";
include_once XOOPS_ROOT_PATH.'/header.php';
$myts =& MyTextSanitizer::getInstance();

//Make each module config var available as a local var
foreach ($xoopsModuleConfig as $key => $value) {
	${$key} = $value;
}

?>