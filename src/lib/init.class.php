<?php
/*
*@ package: dpCHAT
*@ author: David Paul
*@ started at: 20.05.2015
*/

// Load all classes:
function __autoload($class)
{
	require $class.'.class.php';
}