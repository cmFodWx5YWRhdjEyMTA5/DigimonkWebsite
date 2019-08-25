<?php
	include('connection.php');

	if(isset($_POST['user_name_update']))
	{
		$id = $_POST['username_update'];
		$username = $_POST['username'];

		$user_query = mysqli_query($conn,"UPDATE admin_login SET user_name='".$username."' WHERE id='".$id."'");

		if($user_query)
		{
			header("location:account-profile.php?update_username=true");
		}else
		{
			header("location:account-profile.php?user_fail=failed");
		}
    }


	// start update code
	if(isset($_POST['email_update']))
	{	
		$email_id= $_POST['update_email'];
		$email = $_POST['email'];


		$email_query = mysqli_query($conn,"UPDATE admin_login SET email='".$email."' WHERE id='".$email_id."'");

		if($email_query)
		{
			header('location:account-profile.php?update_email=true');
		}else
		{
			header('location:account-profile.php?update_email_fail=failed');
		}
	}

	// End update code


	if(isset($_POST['update_password']))
	{
		$pass_id = addslashes($_POST['update_pass']);
		$old_pass = addslashes($_POST['old_pass']);
		$new_pass = addslashes($_POST['new_pass']);

	$old_pass_query = mysqli_query($conn,"SELECT * FROM admin_login WHERE id='".$pass_id."'AND password='".$old_pass."'");
	  if(mysqli_num_rows($old_pass_query)>0)
	  {

	  	$update_pass_sql = mysqli_query($conn,"UPDATE admin_login SET password='".$new_pass."' WHERE id='".$pass_id."'");

	  	 header('location:account-profile.php?update_password=true');
	  }else
	  {
	  	echo "<script>alert('Your old Password Is Wrong')
	  		   window.location='account-profile.php';</script>";

	  }


	}



	if(isset($_POST['update_img']))
	{
		$imgid = $_POST['update_image'];

		$name = $_FILES['img']['name'];
		$type = $_FILES['img']['type'];
		$error = $_FILES['img']['error'];
		$size = $_FILES['img']['size'];
		$temp = $_FILES['img']['tmp_name'];

		$Imgname = Null;

		$fileArr = explode('.', $name);
		@$Imgname=date('Ymdism')."."."$fileArr[1]";
		move_uploaded_file($temp, "images/profile_img/".$Imgname);

		$old_img = mysqli_query($conn,"SELECT image FROM admin_login WHERE id='".$imgid."'");
		$sql_row = mysqli_fetch_array($old_img);

		unlink('images/profile_img/'.$sql_row['image']);

		$update_pic = mysqli_query($conn,"UPDATE admin_login SET image='".$Imgname."' WHERE id='".$imgid."'");

		if($update_pic)
		{
			header("location:account-profile.php?update_profile=true");
		}else
		{
			header("location:account-profile.php?update_profile_fail=failed");
		}

		

		
	}
?>