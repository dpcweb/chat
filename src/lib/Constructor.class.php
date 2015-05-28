<?php
/*
*@ package: dpCHAT
*@ author: David Paul
*@ started at: 20.05.2015
*/

class Constructor
{
	// vars
	protected $db;

	public function __construct()
	{
		$this->db = new PDO("mysql:host=localhost;dbname=chat", "root", "pulamea123");
	}

	// Render tempalate
	public function view($template, $data = [])
	{
		require 'template/'.$template.'.php';
	}
}