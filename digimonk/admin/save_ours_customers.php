<?php  include('connection.php');

	if(isset($_POST['save']))
	{
		$heading = mysqli_real_escape_string($conn,$_POST['heading']);
		$title = mysqli_real_escape_string($conn,$_POST['title']);
	    // $facebook = mysqli_real_escape_string($conn,$_POST['facebook']);
		// $instagram = mysqli_real_escape_string($conn,$_POST['instagram']);
		// $twitter = mysqli_real_escape_string($conn,$_POST['twitter']);
		// $googleplus = mysqli_real_escape_string($conn,$_POST['googlep']);
		// $linkedin = mysqli_real_escape_string($conn,$_POST['linkedin']);
		// $pinterest = mysqli_real_escape_string($conn,$_POST['pinterest']);
		$description = mysqli_real_escape_string($conn,$_POST['description']);
		// $email_id = mysqli_real_escape_string($conn,$_POST['email_id']);
		$date_time = date('d/m/Y H:i:s');

		$name = $_FILES['img']['name'];
		$error = $_FILES['img']['error'];
		$type = $_FILES['img']['type'];
		$size = $_FILES['img']['size'];
		$temp = $_FILES['img']['tmp_name'];
		 
		 

		 $image_name = Null;
		 $filearr = explode(".",$name);

		 @$image_name=date("dmyism")."."."$filearr[1]";
		 move_uploaded_file($temp,"images/ours_customers_img/".$image_name);

		 $query = mysqli_query($conn,"INSERT INTO our_customer(heading,title,description,image,date_time)VALUES('".$heading."','".$title."','".$description."','".$image_name."','".$date_time."')");
 

		 if($query)
		 {
		 	header('location:add-ours-customer.php?save=true');
		 }else
		 {
		 	header('location:add-ours-customer.php?save_fail=failed');
		 }

	}

	// update members

	if(isset($_POST['update']))
	{
		$id=$_POST['update_id'];
		$heading = mysqli_real_escape_string($conn,$_POST['heading']);
		$title = mysqli_real_escape_string($conn,$_POST['title']);
	    // $facebook = mysqli_real_escape_string($conn,$_POST['facebook']);
		// $instagram = mysqli_real_escape_string($conn,$_POST['instagram']);
		// $twitter = mysqli_real_escape_string($conn,$_POST['twitter']);
		// $googleplus = mysqli_real_escape_string($conn,$_POST['googlep']);
		// $linkedin = mysqli_real_escape_string($conn,$_POST['linkedin']);
		// $pinterest = mysqli_real_escape_string($conn,$_POST['pinterest']);
		$description = mysqli_real_escape_string($conn,$_POST['description']);
		// $email_id = mysqli_real_escape_string($conn,$_POST['email_id']);
		$date_time = date('d/m/Y H:i:s');

		$name = $_FILES['img']['name'];
		$error = $_FILES['img']['error'];
		$type = $_FILES['img']['type'];
		$size = $_FILES['img']['size'];
		$temp = $_FILES['img']['tmp_name'];
		 
		 $image_name = Null;
		 $filearr = explode(".",$name);

		 @$image_name=date("dmyism")."."."$filearr[1]";
		 if(move_uploaded_file($temp,"images/ours_customers_img/".$image_name))
		 {
		 	$old_img = mysqli_query($conn,"SELECT image FROM our_customer WHERE id='".$id."'");
		 	$old_row = mysqli_fetch_array($old_img);
		 	unlink("images/ours_customers_img/".$old_row['image']);

		 	$update_query = mysqli_query($conn,"UPDATE our_customer SET heading='".$heading."',title='".$title."',description='".$description."',image='".$image_name."',date_time='".$date_time."' WHERE id='".$id."'");
		 }else
		 {
		 	$update_query = mysqli_query($conn,"UPDATE our_customer SET heading='".$heading."',title='".$title."',description='".$description."',date_time='".$date_time."' WHERE id='".$id."'");
		 }

		 
 

		 if($update_query)
		 {
		 	header('location:ours-customers-list.php?update=true');
		 }else
		 {
		 	header('location:ours-customers-list.php?update_fail=failed');
		 }

	}
?>