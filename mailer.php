<?
	// check form submission - if doesn't exist send back to contact form  
	if(isset($_POST['url']) && $_POST['url'] == '')
	{

		session_start();
		if(($_SESSION['security_code'] == $_POST['security_code']) && (!empty($_SESSION['security_code']))) {

			$my_email = 'shawn@shawnroe.com';
			$subject = 'SimonArt Note Contact Form';

			// get posted data
			$name = $_POST['cf-name'];
			$email_address = $_POST['cf-email'];
			$message = $_POST['cf-message'];

			// write email content 
			$email_content = "Message from SimonArt vultor.com/simonart\n\n\nName: $name\n"; 
			$email_content .= "Email: $email_address\n"; 
			$email_content .= "Message:\n\n" . stripslashes($message);
			$from = "$name <$email_address>";
			     
			// send email 
			mail($my_email, $subject, $email_content, $from); 
			     
			unset($_SESSION['security_code']);

		}

		else {
			// Insert your code for showing an error message here
			header('Location: /simonart/contact.php?s='.urlencode('Uh-oh! Message not sent. Try the security code again.'));
			exit;
		}

		// send user back to form 
		header('Location: /simonart/contact.php?s='.urlencode('Thanks for the note.'));
		exit;
	}

	
?>