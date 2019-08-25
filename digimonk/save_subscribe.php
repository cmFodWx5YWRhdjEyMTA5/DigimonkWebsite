<?php include('admin/connection.php');

	$name=stripslashes($_POST["name"]);
	$lname=stripslashes($_POST["lname"]);
	$full_name = $name ." ".$lname;
	$subscribe_email=stripslashes($_POST["subscribe_email"]);
	// $secret="6Le80agUAAAAALry2fB_OeIgNBMUKatb5KpPnWz5";
	// $response=$_POST["captcha"];
	$date_time = date('d/m/Y H:i:s ');

	// $verify=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$response}");
	// $captcha_success=json_decode($verify);
	// if ($captcha_success->success==false) {
	//   //This user was not verified by recaptcha.
	// 	echo 0;

	// }
 //     else{
    //This user is verified by recaptcha
     

     // try{

     	$query = mysqli_query($conn,"INSERT INTO subscribe_now(name,email_id,date_time)VALUES('".$full_name."','".$subscribe_email."','".$date_time."')");

     	// var_dump("INSERT INTO subscribe_now(name,email_id,date_time)VALUES('".$full_name."','".$subscribe_email."','".$date_time."')");

     	$mail_query = mysqli_query($conn,"SELECT * FROM manage_setting");
     	$row = mysqli_fetch_array($mail_query);

     	// var_dump($row);

     	  require 'mail/PHPMailer/PHPMailerAutoload.php';

				$mail = new PHPMailer;

				$mail->SMTPDebug = 1;                              // Enable verbose debug output

				$mail->isSMTP();                                 // Set mailer to use SMTP
				$mail->Host = $row['host_mail'];                // Specify main and backup SMTP servers
				$mail->SMTPAuth = true;                        // Enable SMTP authentication
				$mail->Username = $row['email_id'];           // SMTP username
				$mail->Password = $row['password'];          // SMTP password
				$mail->SMTPSecure = 'ssl';                  // Enable TLS encryption, `ssl` also accepted
				$mail->Port = 465;                         // TCP port to connect to

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
				$mail->addAddress($subscribe_email);    				 // Add a recipient
				 //$mail->addAddress('ellen@example.com');               // Name is optional
				//$mail->addReplyTo('', 'Information');
			   // Optional name
				$mail->isHTML(true);                                  // Set email format to HTML

				$mail->Subject = "Subscription Confirmation from Digimonk.";
				$mail->Body    = "Dear: ".$full_name.",<br></br>Thank you for subscribing us. We really appriciate your interest in our services. We assure you to keep you updated with latest developments.<br><br> Regards, <br> Digimonk ";

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
				// $mail->addAddress($row['email_id']);
				$mail->addAddress($row['alternate_email']);    				 // Add a recipient
				//$mail->addAddress('ellen@example.com');               // Name is optional
				//$mail->addReplyTo('', 'Information');
			    // Optional name
				$mail->isHTML(true);                                  // Set email format to HTML

				$mail->Subject = "New Subscribe.";
				$mail->Body    = "Hello, <br><br/>A new Subscribe has been received.<br><br><html><body><table border='1'><tr><td>Name:</td><td>".$full_name."</td></tr><tr><td>Subscribe Email id:</td><td>".$subscribe_email."</td></tr></table></body></html>";

				$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
				 $data=$mail->send();
				 // var_dump($data);
				 // if($mail->send()){
				 // 	echo 1;
				 // }else{
				 // 	echo 0;
				 // }
				 // echo 1;
     // }catch(Exeption $e)
     // {
     // 	echo 0;
     // }

  

     // }