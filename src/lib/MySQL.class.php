<?php
/*
*@ package: dpCHAT
*@ author: David Paul
*@ started at: 20.05.2015
*/

class MySQL extends Constructor
{
	// Extract user messeges from MySQL, and encode to json
	public function messages()
	{
		$messages = $this->db->prepare("SELECT `id`, `user`, `message` FROM `messages` ORDER by `id` DESC LIMIT 5");
		$messages->execute();

		$items = $messages->fetchAll();
		sort($items);

		foreach($items as $key => $value)
		{
			$items[$key]['message'] = htmlentities($value['message'], ENT_QUOTES, "UTF-8");
		}
		
		return json_encode($items);
	}

	// Add user message to MySQL
	public function add()
	{
		$q = $this->db->prepare("INSERT INTO `messages` (`user`, `message`) VALUES (?, ?)");
		$q->bindParam(1, $_POST['user_name']);
		$q->bindParam(2, $_POST['message']);
		
		$q->execute();
	}
}
