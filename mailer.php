<?
	// check form submission - if doesn't exist send back to contact form  
	if(isset($_POST['url']) && $_POST['url'] == '')
	{

		session_start();
		if(($_SESSION['security_code'] == $_POST['security_code']) && (!empty($_SESSION['security_code']))) {

			// michaelanthonysimon@hotmail.com
			$my_email = 'shawn@shawnroe.com, leroyscroggins@gmail.com';
			$subject = 'Website Message';

			// get posted data
			$name = $_POST['cf_name'];
			$email_address = $_POST['cf_email'];
			$message = $_POST['cf_message'];

			// write email content 
			$email_content = "Message from the website vultor.com/simonart\n\n\nName: $name\n"; 
			$email_content .= "Email: $email_address\n"; 
			$email_content .= "Message:\n" . stripslashes($message) . "\n\n -- This is the end of the message sent from the website contact form. --";
			$from = "$name <$email_address>";
			     
			// send email 
			mail($my_email, $subject, $email_content, $from); 
			     
			unset($_SESSION['security_code']);

		}

		else {
			// Insert your code for showing an error message here
			header('Location: /simonart/error.php');
			exit;
		}

		// send user to success page 
		header('Location: /simonart/success.php');
		exit;
	}

	
?>