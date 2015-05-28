<?php
/*
*@ package: dpCHAT
*@ author: David Paul
*@ started at: 20.05.2015
*/

class Chat extends Constructor
{
	public function __construct()
	{
		// Render template
		$m = new MySQL();
		$this->view("index", ['messages' => json_decode($m->messages())]);
	}

}