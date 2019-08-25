<?php 
include('admin/connection.php');

   if(isset($_POST['save_service']))
	 {
	 	if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
      {
        
	    $secret = '6Le80agUAAAAALry2fB_OeIgNBMUKatb5KpPnWz5';
	    //get verify response data
	    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);

	    $responseData = json_decode($verifyResponse);
    
    if($responseData->success)
    {
	 	$fname = $_POST['fname'];
	 	$lname = $_POST['lname'];
	 	$fullname = $fname ." ".$lname;
	 	$business_email = $_POST['email'];
	 	$phone = $_POST['phone'];
	 	$company = $_POST['company'];
	 	$requirement = $_POST['requirement'];
	 	$date_time = date('d/m/Y H:i:s');

	 	$query = mysqli_query($conn,"INSERT INTO request_for_services(full_name,business_email,phone_no,company_name,requirement,date_time)VALUES('".$fullname."','".$business_email."','".$phone."','".$company."','".$requirement."','".$date_time."')");


	 	// var_dump("INSERT INTO request_for_services(full_name,business_email,phone_no,company_name,requirement,date_time)VALUES('".$fullname."','".$business_email."','".$phone."','".$company."','".$requirement."','".$date_time."')");

	 	require 'mail/PHPMailer/PHPMailerAutoload.php';

				$mail = new PHPMailer;

				$mail->SMTPDebug = 0;                               // Enable verbose debug output

				$mail->isSMTP();                                      // Set mailer to use SMTP
				$mail->Host = 'mail.digimonk.website';                   // Specify main and backup SMTP servers
				$mail->SMTPAuth = true;                               // Enable SMTP authentication
				$mail->Username = 'demo@digimonk.website';                 // SMTP username
				$mail->Password = '12345';                           // SMTP password
				$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
				$mail->Port = 465;                                    // TCP port to connect to

				/* THIS IS CODE ADD BY DEEPAK SINGH PATEL */
				$mail->SMTPOptions = array(
				    'ssl' => array(
				        'verify_peer' => false,
				        'verify_peer_name' => false,
				        'allow_self_signed' => true
				    )
				);

				/* THIS IS CODE ADD BY DEEPAK SINGH PATEL END */

				$mail->setFrom('demo@digimonk.website', 'Digimonk');
				$mail->addAddress($business_email, $fullname);    				 // Add a recipient
				//$mail->addAddress('ellen@example.com');               // Name is optional
				//$mail->addReplyTo('', 'Information');
			    // Optional name
				$mail->isHTML(true);                                  // Set email format to HTML

				$mail->Subject = "Thank you for Service Digimonk";
				$mail->Body    = "Hello:".$fullname.",<br><br/>Thank you for contacting us. Someone from the concerning department will contact you in two business days. <br><br> Regards, <br> Digimonk - India";

				$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
				 $data=$mail->send();


				  // Admin Email Start 

				$mail = new PHPMailer;

				$mail->SMTPDebug = 0;                               // Enable verbose debug output

				$mail->isSMTP();                                      // Set mailer to use SMTP
				$mail->Host = 'mail.digimonk.website';                   // Specify main and backup SMTP servers
				$mail->SMTPAuth = true;                               // Enable SMTP authentication
				$mail->Username = 'demo@digimonk.website';                 // SMTP username
				$mail->Password = '12345';                           // SMTP password
				$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
				$mail->Port = 465;                                    // TCP port to connect to

				/* THIS IS CODE ADD BY DEEPAK SINGH PATEL */
				$mail->SMTPOptions = array(
				    'ssl' => array(
				        'verify_peer' => false,
				        'verify_peer_name' => false,
				        'allow_self_signed' => true
				    )
				);

				/* THIS IS CODE ADD BY DEEPAK SINGH PATEL END */

				$mail->setFrom('demo@digimonk.website', 'Digimonk');
				  $mail->addAddress('info@digimonk.in');
				// $mail->addAddress($row['alternate_email_id']);    				 // Add a recipient
				//$mail->addAddress('ellen@example.com');               // Name is optional
				//$mail->addReplyTo('', 'Information');
			    // Optional name
				$mail->isHTML(true);                                  // Set email format to HTML

				$mail->Subject = "New Enquiry Received Service";
				$mail->Body    = "Hello, <br><br/>A new query has been received.<br><br><html><body><table border='1'><tr><td>Name:</td><td>".$fullname."</td></tr><tr><td>Business Email id:</td><td>".$business_email."</td></tr><tr><td>Phone number:</td><td>".$phone."</td></tr><tr><td>Company Name:</td><td>".$company."</td></tr><tr><td>Requirement:</td><td>".$requirement."</td></tr></table></body></html>";

				$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
				 $data=$mail->send();

				 

				  if($query)
				 {
				 	header('location:contact-us.php?submit=true');
				 }else
				 {
				 	header('location:contact-us.php?submit_fail=failed');
				 }

	       }else
	       {
	       	   header('location:contact-us.php');
	       }
	 }
		else
		{
			header('location:contact-us.php?empty_captcha=fail');
		}


}

?>