<?php  include('connection.php');

	if(isset($_POST['save']))
	{
		$member_name = mysqli_real_escape_string($conn,$_POST['name']);
		$designation = mysqli_real_escape_string($conn,$_POST['designation']);
	    $facebook = mysqli_real_escape_string($conn,$_POST['facebook']);
		$instagram = mysqli_real_escape_string($conn,$_POST['instagram']);
		$twitter = mysqli_real_escape_string($conn,$_POST['twitter']);
		$googleplus = mysqli_real_escape_string($conn,$_POST['googlep']);
		$linkedin = mysqli_real_escape_string($conn,$_POST['linkedin']);
		$pinterest = mysqli_real_escape_string($conn,$_POST['pinterest']);
		$description = mysqli_real_escape_string($conn,$_POST['description']);
		$email_id = mysqli_real_escape_string($conn,$_POST['email_id']);
		$date_time = date('d/m/Y H:i:s');

		$name = $_FILES['img']['name'];
		$error = $_FILES['img']['error'];
		$type = $_FILES['img']['type'];
		$size = $_FILES['img']['size'];
		$temp = $_FILES['img']['tmp_name'];
		 
		 

		 $image_name = Null;
		 $filearr = explode(".",$name);

		 @$image_name=date("dmyism")."."."$filearr[1]";
		 move_uploaded_file($temp,"images/members_img/".$image_name);

		 $query = mysqli_query($conn,"INSERT INTO members(name,designation,facebook,instagram,twitter,googleplus,linkedin,pinterest,description,image,date_time,email_id)VALUES('".$member_name."','".$designation."','".$facebook."','".$instagram."','".$twitter."','".$googleplus."','".$linkedin."','".$pinterest."','".$description."','".$image_name."','".$date_time."','".$email_id."')");
 

		 if($query)
		 {
		 	header('location:add-team.php?save=true');
		 }else
		 {
		 	header('location:add-team.php?save_fail=failed');
		 }

	}

	// update members

	if(isset($_POST['update']))
	{
		$id=$_POST['update_id'];
		$member_name = mysqli_real_escape_string($conn,$_POST['name']);
		$designation = mysqli_real_escape_string($conn,$_POST['designation']);
	    $facebook = mysqli_real_escape_string($conn,$_POST['facebook']);
		$instagram = mysqli_real_escape_string($conn,$_POST['instagram']);
		$twitter = mysqli_real_escape_string($conn,$_POST['twitter']);
		$googleplus = mysqli_real_escape_string($conn,$_POST['googlep']);
		$linkedin = mysqli_real_escape_string($conn,$_POST['linkedin']);
		$pinterest = mysqli_real_escape_string($conn,$_POST['pinterest']);
		$description = mysqli_real_escape_string($conn,$_POST['description']);
		$email_id = mysqli_real_escape_string($conn,$_POST['email_id']);
		$date_time = date('d/m/Y H:i:s');

		$name = $_FILES['img']['name'];
		$error = $_FILES['img']['error'];
		$type = $_FILES['img']['type'];
		$size = $_FILES['img']['size'];
		$temp = $_FILES['img']['tmp_name'];
		 
		 $image_name = Null;
		 $filearr = explode(".",$name);

		 @$image_name=date("dmyism")."."."$filearr[1]";
		 if(move_uploaded_file($temp,"images/members_img/".$image_name))
		 {
		 	$old_img = mysqli_query($conn,"SELECT image FROM members WHERE id='".$id."'");
		 	$old_row = mysqli_fetch_array($old_img);
		 	unlink("images/members_img/".$old_row['image']);

		 	$update_query = mysqli_query($conn,"UPDATE members SET name='".$member_name."',designation='".$designation."',facebook='".$facebook."',instagram='".$instagram."',twitter='".$twitter."',googleplus='".$googleplus."',linkedin='".$linkedin."',pinterest='".$pinterest."',description='".$description."',image='".$image_name."',date_time='".$date_time."',email_id='".$email_id."' WHERE id='".$id."'");
		 }else
		 {
		 	$update_query = mysqli_query($conn,"UPDATE members SET name='".$member_name."',designation='".$designation."',facebook='".$facebook."',instagram='".$instagram."',twitter='".$twitter."',googleplus='".$googleplus."',linkedin='".$linkedin."',pinterest='".$pinterest."',description='".$description."',date_time='".$date_time."', email_id='".$email_id."' WHERE id='".$id."'");
		 }

		 
 

		 if($update_query)
		 {
		 	header('location:team-list.php?update=true');
		 }else
		 {
		 	header('location:team-list.php?update_fail=failed');
		 }

	}
?>