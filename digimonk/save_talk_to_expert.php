<?php include('admin/connection.php');

	$fname=stripslashes($_POST["fname"]);
	$last_name=stripslashes($_POST["lname"]);
	$full_name = $fname ." ".$last_name;
	$company_name=stripslashes($_POST["company_name"]);
	$phone_number=stripslashes($_POST["phone_number"]);
	$business_email=stripslashes($_POST["business_email"]);
	$expert_msg=stripslashes($_POST["expert_msg"]);
	$secret="6Le80agUAAAAALry2fB_OeIgNBMUKatb5KpPnWz5";
	$response=$_POST["captcha"];
	$date_time = date('d/m/Y H:i:s ');

	$verify=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$response}");
	$captcha_success=json_decode($verify);

	if ($captcha_success->success==false) {
	  //This user was not verified by recaptcha.
		echo 0;

	}
     else{
    //This user is verified by recaptcha
     

     try{

     	$query = mysqli_query($conn,"INSERT INTO our_expert(name,company_name,phone_no,business_email,message,date_time)VALUES('".$full_name."','".$company_name."','".$phone_number."','".$business_email."','".$expert_msg."','".$date_time."')");

   // var_dump("INSERT INTO our_expert(name,company_name,phone_no,business_email,message,date_time)VALUES('".$full_name."','".$company_name."','".$phone_number."','".$business_email."','".$expert_msg."','".$date_time."')");

     	 $mail_query = mysqli_query($conn,"SELECT * FROM  manage_setting");
     	 $row = mysqli_fetch_array($mail_query);

     	 
     	  require 'mail/PHPMailer/PHPMailerAutoload.php';

				$mail = new PHPMailer;

				$mail->SMTPDebug = 1;                               // Enable verbose debug output

				$mail->isSMTP();                                      // Set mailer to use SMTP
				$mail->Host = $row['host_mail'];                   // Specify main and backup SMTP servers
				$mail->SMTPAuth = true;                               // Enable SMTP authentication
				$mail->Username = $row['email_id'];                 // SMTP username
				$mail->Password = $row['password'];                           // SMTP password
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

				$mail->setFrom($row['email_id'], 'Digimonk');
				$mail->addAddress($business_email);    				 // Add a recipient
				//$mail->addAddress('ellen@example.com');               // Name is optional
				//$mail->addReplyTo('', 'Information');
			    // Optional name
				$mail->isHTML(true);                                  // Set email format to HTML

				$mail->Subject = "Thank You for our expert from Digimonk.";
				$mail->Body    = "Dear: ".$full_name.",<br></br>Thank you for our expert. We really appriciate your interest in our services. We assure you to keep you updated with latest developments.<br><br> Regards, <br> Digimonk ";

				$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
				 $data=$mail->send();
  				
  				// var_dump($data);

				  // Admin Email Start 

				$mail = new PHPMailer;

				$mail->SMTPDebug = 1;                               // Enable verbose debug output

				$mail->isSMTP();                                      // Set mailer to use SMTP
				$mail->Host = $row['host_mail'];                   // Specify main and backup SMTP servers
				$mail->SMTPAuth = true;                               // Enable SMTP authentication
				$mail->Username = $row['email_id'];                 // SMTP username
				$mail->Password = $row['password'];                           // SMTP password
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

				$mail->setFrom($row['email_id'], 'Digimonk');
				  $mail->addAddress($row['alternate_email']);
				// $mail->addAddress($row['alternate_email_id']);    				 // Add a recipient
				//$mail->addAddress('ellen@example.com');               // Name is optional
				//$mail->addReplyTo('', 'Information');
			    // Optional name
				$mail->isHTML(true);                                  // Set email format to HTML

				$mail->Subject = "New Our Expert Enquery.";
				$mail->Body    = "Hello, <br><br/>A new Our Expert Enquery has been received.<br><br><html><body><table border='1'><tr><td>Name:</td><td>".$full_name."</td></tr><tr><td>Business Email id:</td><td>".$business_email."</td></tr><tr><td>Company Name:</td><td>".$company_name."</td></tr><tr><td>Phone Number:</td><td>".$phone_number."</td></tr><tr><td>Message:</td><td>".$expert_msg."</td></tr></table></body></html>";

				$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
				 $data=$mail->send();

				 // var_dump($data);
				 // if($mail->send()){
				 // 	echo 1;
				 // }else{
				 // 	echo 0;
				 // }
				 echo 1;
     }catch(Exeption $e)
     {
     	echo 0;
     }

  

     }