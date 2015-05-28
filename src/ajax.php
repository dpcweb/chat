<?php
/*
*@ package: dpCHAT
*@ author: David Paul
*@ started at: 20.05.2015
*/

// Define this page as a ajax content page:

// Include classes:
require 'lib/Constructor.class.php';
require 'lib/MySQL.class.php';

// Initialized Chat:
$m = new MySQL();

// Parse messages from MySQL
if(isset($_POST['parse'])){
	header("Content-type: application/json");
	echo $m->messages();
}

//Add messages
if(isset($_POST['message']))
{
	$m->add();
}