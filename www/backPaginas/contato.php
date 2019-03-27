<?php

if (isset($_POST['email'])) {
	$email = $_POST['email'];
	$text = $_POST['text'];


		// The message
	$message = "Line 1\nLine 2\nLine 3";

	// In case any of our lines are larger than 70 characters, we should use wordwrap()
	$message = wordwrap($message, 70);

	// Send
	mail('guilhermeptbr1@gmail.com', 'My Subject', $text);

	echo $email;
}




?>