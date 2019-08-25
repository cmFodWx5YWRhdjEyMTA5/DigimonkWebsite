<?php include('connection.php');

	if(isset($_POST['update']))
	{
		$id=$_POST['update_id'];
		$phone_no = mysqli_real_escape_string($conn,$_POST['phone_no']);
		$email_id = mysqli_real_escape_string($conn,$_POST['email_id']);
		$alternate_email = mysqli_real_escape_string($conn,$_POST['alternate_email']);
		$host_mail = mysqli_real_escape_string($conn,$_POST['host_mail']);
		$password = mysqli_real_escape_string($conn,$_POST['password']);
		$address = mysqli_real_escape_string($conn,$_POST['address']);
		$facebook = mysqli_real_escape_string($conn,$_POST['facebook']);
		$instagram = mysqli_real_escape_string($conn,$_POST['instagram']);
		$google_plus = mysqli_real_escape_string($conn,$_POST['google_plus']);
		$linkedin = mysqli_real_escape_string($conn,$_POST['linkedin']);
		$twitter = mysqli_real_escape_string($conn,$_POST['twitter']);
		$youtube = mysqli_real_escape_string($conn,$_POST['youtube']);
		$pinterest = mysqli_real_escape_string($conn,$_POST['pinterest']);
		$corporate_addresss = mysqli_real_escape_string($conn,$_POST['corporate_addresss']);


		$update_query = mysqli_query($conn,"UPDATE manage_setting SET phone_no='".$phone_no."',email_id='".$email_id."',alternate_email='".$alternate_email."',host_mail='".$host_mail."',password='".$password."',address='".$address."',facebook='".$facebook."',instagram='".$instagram."',google_plus='".$google_plus."',linkedin='".$linkedin."',twitter='".$twitter."',youtube='".$youtube."',pinterest='".$pinterest."',address2='".$corporate_addresss."' WHERE id='".$id."'");

		if($update_query)
		{
			header('location:setting.php?update=true');
		}else
		{
			header('location:setting.php?update_fail=failed');
		}
	}

?>