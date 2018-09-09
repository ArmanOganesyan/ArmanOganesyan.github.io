<?php	
	if(empty($_POST['name4']) && strlen($_POST['name4']) == 0 || empty($_POST['name']) && strlen($_POST['name']) == 0 || empty($_POST['input_1359']) && strlen($_POST['input_1359']) == 0 || empty($_POST['input_1581']) && strlen($_POST['input_1581']) == 0 || empty($_POST['message']) && strlen($_POST['message']) == 0)
	{
		return false;
	}
	
	$name4 = $_POST['name4'];
	$name = $_POST['name'];
	$input_1359 = $_POST['input_1359'];
	$select_1891 = $_POST['select_1891'];
	$select_1659 = $_POST['select_1659'];
	$input_1581 = $_POST['input_1581'];
	$message = $_POST['message'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Name4: $name4 \nName: $name \nInput_1359: $input_1359 \nSelect_1891: $select_1891 \nSelect_1659: $select_1659 \nInput_1581: $input_1581 \nMessage: $message \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: DoNotReply@yoursite.com";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>