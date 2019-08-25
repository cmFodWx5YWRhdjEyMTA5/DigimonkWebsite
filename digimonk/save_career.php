<?php include('admin/connection.php');
 
 var_dump($_POST);
	$team_name=stripslashes($_POST["teamname"]);
	$team_email=stripslashes($_POST["team_email"]);
	 
	$team_phone=stripslashes($_POST["team_phone"]);
	$team_experience=stripslashes($_POST["team_experience"]);
	$team_skill=stripslashes($_POST["team_skill"]);
	$team_location=stripslashes($_POST["team_location"]);
	$team_resume=stripslashes($_POST["team_resume"]);
	$date_time = date('d/m/Y H:i:s ');

 
   //  $name  =  $_FILES['team_resume']['name'];
  	// $error =  $_FILES['team_resume']['error'];
  	// $size =   $_FILES['team_resume']['size'];
  	// $type =   $_FILES['team_resume']['type'];
  	// $temp =   $_FILES['team_resume']['tmp_name'];



   //   $imagename = Null;

   //   $filearra= explode(".", $name);
   //   @$imagename = date('Ydmism').".".$type;
   //   move_uploaded_file($temp, "img/resume_file/".$imagename);

 //     $uploadedFile = '';

	// if(!empty($_POST["team_resume"]["type"])){
 //        $fileName = time().'_'.$_POST['team_resume']['name'];
 //        $valid_extensions = array("jpeg", "jpg", "png");
 //        $temporary = explode(".", $_POST["team_resume"]["name"]);
 //        $file_extension = end($temporary);
 //        if((($_POST["team_resume"]["type"]) || ($_POST["team_resume"]["type"]) || ($_POST["team_resume"]["type"])) && in_array($file_extension, $valid_extensions)){
 //            $sourcePath = $_POST['team_resume']['tmp_name'];
 //            $targetPath = "img/resume_file/".$fileName;
 //            if(move_uploaded_file($sourcePath,$targetPath)){
                
 //                $uploadedFile = $fileName;
 //            }
 //        }
 //    }

  

    // echo "INSERT INTO career(name,email,phone_no,exprience,skills,location,resume_file,date_time)VALUES('".$team_name."','".$team_email."','".$team_phone."','".$team_experience."','".$team_skill."','".$team_location."','".$imagename."','".$date_time."')";

	$secret="6Lc086oUAAAAAD_EDopBFX8e7jM4SuFkdZm4GK2B";
	$response=$_POST["captcha"];
	 

	$verify=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$response}");
	$captcha_success=json_decode($verify);
	$set_status=$captcha_success->success;
	$set_status=true;
	if ($captcha_success->success==false) {
	  //This user was not verified by recaptcha.
		echo 0;

	$query = mysqli_query($conn,"INSERT INTO career(name,email,phone_no,exprience,skills,location,date_time,resume_file)VALUES('".$team_name."','".$team_email."','".$team_phone."','".$team_experience."','".$team_skill."','".$team_location."','".$date_time."','".$team_resume."')");

	$mail_query = mysqli_query($conn,"SELECT * FROM manage_setting");
     	$row = mysqli_fetch_array($mail_query);
         
        require 'mail/PHPMailer/PHPMailerAutoload.php';

				$mail = new PHPMailer;

				$mail->SMTPDebug = 0;                               // Enable verbose debug output

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
				$mail->addAddress($team_email);    				 // Add a recipient
				//$mail->addAddress('ellen@example.com');               // Name is optional
				//$mail->addReplyTo('', 'Information');
			    // Optional name
				$mail->isHTML(true);                                  // Set email format to HTML

				$mail->Subject = "Thank You for submit application form from Digimonk.";
				$mail->Body    = "Dear: ".$team_name.",<br></br>Thank you for submit application. We really appriciate your interest in our services. We assure you to keep you updated with latest developments.<br><br> Regards, <br> Digimonk ";

				$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
				 $data=$mail->send();

				 // var_dump($data);

				  // Admin Email Start 

				$mail = new PHPMailer;

				$mail->SMTPDebug = 0;                               // Enable verbose debug output

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

				$mail->Subject = "New submit application Enquery.";
				$mail->Body    = "Hello, <br><br/>A new submit application Enquery has been received.<br><br><html><body><table border='1'><tr><td>Name:</td><td>".$team_name."</td></tr><tr><td>Email id:</td><td>".$team_email."</td></tr><tr><td>Phone Number:</td><td>".$team_phone."</td></tr><tr><td>Team Experience:</td><td>".$team_experience."</td></tr><tr><td>Team skill:</td><td>".$team_skill."</td></tr><tr><td>Team location:</td><td>".$team_location."</td></tr><tr><td>Resume file:</td><td><a href='http://digimonk.website/live/digimonk/img/resume_file/".$team_resume."' target='_blank'>".$team_resume."</a></td></tr></table></body></html>";

				$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
				 $data=$mail->send();



	}
     else{
    //This user is verified by recaptcha
     

     try{

     	$query = mysqli_query($conn,"INSERT INTO career(name,email,phone_no,exprience,skills,location,date_time,resume_file)VALUES('".$team_name."','".$team_email."','".$team_phone."','".$team_experience."','".$team_skill."','".$team_location."','".$date_time."','".$team_resume."')");
           var_dump("kjhvfbvgjnbg");

     	// var_dump("INSERT INTO career(name,email,phone_no,exprience,skills,location,resume_file,date_time)VALUES('".$team_name."','".$team_email."','".$team_phone."','".$team_experience."','".$team_skill."','".$team_location."','".$uploadedFile."','".$date_time."')");

     	  require 'mail/PHPMailer/PHPMailerAutoload.php';

				$mail = new PHPMailer;

				$mail->SMTPDebug = 0;                               // Enable verbose debug output

				$mail->isSMTP();                                      // Set mailer to use SMTP
				$mail->Host = 'mail.digimonk.net';                   // Specify main and backup SMTP servers
				$mail->SMTPAuth = true;                               // Enable SMTP authentication
				$mail->Username = 'info@digimonk.net';                 // SMTP username
				$mail->Password = 'digimonk@123';                           // SMTP password
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

				$mail->setFrom('info@digimonk.net', 'Digimonk');
				$mail->addAddress($team_email);    				 // Add a recipient
				//$mail->addAddress('ellen@example.com');               // Name is optional
				//$mail->addReplyTo('', 'Information');
			    // Optional name
				$mail->isHTML(true);                                  // Set email format to HTML

				$mail->Subject = "Thank You for submit application form from Digimonk.";
				$mail->Body    = "Dear: ".$team_name.",<br></br>Thank you for submit application. We really appriciate your interest in our services. We assure you to keep you updated with latest developments.<br><br> Regards, <br> Digimonk ";

				$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
				 $data=$mail->send();

				 // var_dump($data);

				  // Admin Email Start 

				$mail = new PHPMailer;

				$mail->SMTPDebug = 0;                               // Enable verbose debug output

				$mail->isSMTP();                                      // Set mailer to use SMTP
				$mail->Host = 'mail.digimonk.net';                   // Specify main and backup SMTP servers
				$mail->SMTPAuth = true;                               // Enable SMTP authentication
				$mail->Username = 'info@digimonk.net';                 // SMTP username
				$mail->Password = 'digimonk@123';                           // SMTP password
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

				$mail->setFrom('info@digimonk.net', 'Digimonk');
				  $mail->addAddress('gopalmahor@digimonk.in');
				// $mail->addAddress($row['alternate_email_id']);    				 // Add a recipient
				//$mail->addAddress('ellen@example.com');               // Name is optional
				//$mail->addReplyTo('', 'Information');
			    // Optional name
				$mail->isHTML(true);                                  // Set email format to HTML

				$mail->Subject = "New submit application Enquery.";
				$mail->Body    = "Hello, <br><br/>A new submit application Enquery has been received.<br><br><html><body><table border='1'><tr><td>Name:</td><td>".$team_name."</td></tr><tr><td>Email id:</td><td>".$team_email."</td></tr><tr><td>Phone Number:</td><td>".$team_phone."</td></tr><tr><td>Team Experience:</td><td>".$team_experience."</td></tr><tr><td>Team skill:</td><td>".$team_skill."</td></tr><tr><td>Team location:</td><td>".$team_location."</td></tr><tr><td>Resume file:</td><td><a href='img/resume_file/". $imagename."' target='_blank'>".$imagename."</a></td></tr></table></body></html>";

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