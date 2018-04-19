<?php	
	if(empty($_POST['input_843']) && strlen($_POST['input_843']) == 0)
	{
		return false;
	}
	
	$input_1415 = $_POST['input_1415'];
	$input_843 = $_POST['input_843'];
	
	$to = 'armadeo@gmail.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Вфыфыв";
	$email_body = "You have received a new message. \n\n".
				  "Input_1415: $input_1415 \nInput_843: $input_843 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: DoNotReply@yoursite.com";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>