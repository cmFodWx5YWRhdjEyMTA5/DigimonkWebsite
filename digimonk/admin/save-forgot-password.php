<?php 

	include_once('connection.php');

     // Start Forgot Password

	if(isset($_POST['email_submit']))
	{     
	  
	  	$email=$_POST['email'];
		$sql="SELECT * FROM admin_login WHERE email='".$email."'";
		$run=mysqli_query($conn,$sql);
		$result=mysqli_num_rows($run);

		$mail_query = mysqli_query($conn,"SELECT * FROM manage_setting");
     	$row_mail = mysqli_fetch_array($mail_query);

		if($result>0)
		{
			$row=mysqli_fetch_array($run);
			$id=$row["id"];
			$_SESSION['v_id']=$id;
			$otp=rand(100000,999999);
			$_SESSION['v_code']=$otp;
            // var_dump($_SESSION['v_code']);

			if(!empty($id)) 
			{
		 
		 	   require 'mail/PHPMailer/PHPMailerAutoload.php';

				$mail = new PHPMailer;

				$mail->SMTPDebug = 0;                               // Enable verbose debug output

				$mail->isSMTP();                                      // Set mailer to use SMTP
				$mail->Host = $row_mail['host_mail'];   // Specify main and backup SMTP servers
				$mail->SMTPAuth = true;                               // Enable SMTP authentication
				$mail->Username = $row_mail['email_id'];                 // SMTP username
				$mail->Password = $row_mail['password'];                           // SMTP password
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

				$mail->setFrom($row_mail['email_id'], 'Digimonk');
				$mail->addAddress($email);     // Add a recipient
				//$mail->addAddress('ellen@example.com');               // Name is optional
				//$mail->addReplyTo('', 'Information');
			    // Optional name
				$mail->isHTML(true);                                  // Set email format to HTML

			$mail->Subject = "Your Forgot password OTP at Digimonk.";
			$mail->Body = "<html><body><br><table align='center' cellpadding='0' cellspacing='0' border='0' style='border-spacing:0;font-family:gt-eesti,ArialMT,Helvetica,Arial,sans-serif;width:100%;>
             <tbody>
                <tr>
                 <td>
                    <table style='margin-bottom:40px;'>
                 <tbody>
                 <tr>
                    <td>
                     <a href='' style='font-family:Helvetica,Arial,sans-serif;color:#0086bf' target='_blank'>
                        </a>
                     </td>
                 </tr>
                 </tbody>
                </table>
            </td>
          </tr>
        <tr>
    <td style='text-align:left;word-break:break-all'>
    <table style='margin-bottom:20px;'>
         <tbody>
                <tr>
                    <td>
                        <table style='width:100%;margin-bottom:20px' width='100%' cellpadding='0' cellspacing='0'>
                            <tbody>
                              <tr>
                                <td>
                                  <h1 style='font-size:20px;line-height:30px;color:#054752;word-break:normal'>
                                     Your One Time Password for completing your forgot password <span style='color:#f5c000;'>'Digimonk'</span> <b>".$otp.".</b><br><span style=color:#054752;>Please click this url to complete your forgot Password Process.</span>
                                    </h1>
                                </td>
                              </tr>
                          </tbody>
                       </table>
                    </td>
                </tr>
            <tr>
                   <td>
                      <center>
                         <table style='background-color:#fff;margin-bottom:20px;table-layout:fixed' align='center' cellspacing='0' cellpadding='0'>
                                   <tbody>
                                        <tr>
                                          <td style='background-color:#f5c000;;color:#fff;text-align:center;border-radius:48px;padding:16px 24px;border-color:transparent;font-weight:bold;font-size:16px;line-height:1'>
                                            <a href='http://digimonk.website/live/digimonk/admin/index.php?verification_step1=true'style='color:#fff;text-decoration:inherit!important;' target='_blank'>Change my password
                                            </a>
                                         </td>
                                       </tr>
                                    </tbody>
                               </table>
                            </center>
                           </td>
                        </tr>
                    </tbody>
               </table>
           </td>
         </tr>
       </tbody>
   </table>
   </body>
   </html>";

			$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
		    $data=$mail->send();

             header('location:index.php?verification_step1=true');
			}
			else{

				}
		}
		 else{
			header('location:index.php?email=false');
		}
		 
	}


// use for verify otp while forget password
	if(isset($_POST['otp_submit']))
	{
 		$otp_v=$_POST['otp_value'];
	 	$otp_d=$_SESSION['v_code'];
	  //var_dump($otp_v);
	   // var_dump($otp_d);
// 	 	var_dump($_SESSION["v_code"]);

	   if($otp_v==$otp_d) {
         
	     	header('location:index.php?verification_step2=true');
	   }
	   else
	   {
	   	    header('location:index.php?verification_ste=failed');
	   }

 		 
	}


	// use for Change password while forget password
	if(isset($_POST['s_pass']))
	{
		$pass=$_POST['new_password'];
		$id=$_SESSION["v_id"];
		$sql="UPDATE admin_login SET password='".$pass."' WHERE id='".$id."'";
		$run=mysqli_query($conn,$sql);
		   
		   if($run) 
		   {
		   	 header('location:index.php?change_password=true');
		   } 
		     else{
		   	header('location:index.php?verification_step2=failed');
		   }
 	
	}

?>