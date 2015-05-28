<html>
	<head>
		<title>Chat</title>

		<meta charset="UTF-8">
		<link rel="stylesheet" href="/chat/template/style.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	</head>

	<body>
		<div class="chat">
			<?php foreach($data['messages'] as $key => $value): ?>
				<li><?php echo $value->message; ?></li>
			<?php endforeach; ?>;
		</div>
		<textarea id="message"></textarea>
		<input type="submit" id="submit" value="Send">
		
		<script src="/chat/js/func.js"></script>
	</body>
</html>