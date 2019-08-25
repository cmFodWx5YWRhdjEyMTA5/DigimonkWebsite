<?php include('connection.php');

	if(isset($_POST['save']))
	{
		$name = mysqli_real_escape_string($conn,$_POST['name']);
		$designation = mysqli_real_escape_string($conn,$_POST['designation']);
		$description = mysqli_real_escape_string($conn,$_POST['description']);
		$date = date('d/m/Y H:i:s a');
		
		$name1 = $_FILES['img']['name'];
		$error = $_FILES['img']['error'];
		$type = $_FILES['img']['type'];
		$size = $_FILES['img']['size'];
		$temp = $_FILES['img']['tmp_name'];

		$imagename = Null;

		$filearray = explode(".",$name1);
		@$imagename = date('Ydmism')."."."$filearray[1]";
		move_uploaded_file($temp, "images/testimonials_img/".$imagename);

		$query = mysqli_query($conn,"INSERT INTO testimonial(name,designation,image,description,date_time)VALUES('".$name."','".$designation."','".$imagename."','".$description."','".$date."')");

		if($query)
		{
			header('location:add-testimonials.php?save=true');
		}else
		{
			header('location:add-testimonials.php?save_fail=failed');
		}
	}



	// update testimonials_img


	if(isset($_POST['update']))
	{
		$id=$_POST['updateid'];
		$name = mysqli_real_escape_string($conn,$_POST['name']);
		$designation = mysqli_real_escape_string($conn,$_POST['designation']);
		$description = mysqli_real_escape_string($conn,$_POST['description']);
		$date = date('d/m/Y H:i:s a');
		
		$name1 = $_FILES['img']['name'];
		$error = $_FILES['img']['error'];
		$type = $_FILES['img']['type'];
		$size = $_FILES['img']['size'];
		$temp = $_FILES['img']['tmp_name'];

		$imagename = Null;

		$filearray = explode(".",$name1);
		@$imagename = date('Ydmism')."."."$filearray[1]";
		if(move_uploaded_file($temp, "images/testimonials_img/".$imagename))
		{	
			$old_img = mysqli_query($conn,"SELECT image FROM testimonial WHERE id='".$id."'");
			$old_row_img = mysqli_fetch_array($old_img);

			unlink("images/testimonials_img/".$old_row_img['image']);

			$update_query = mysqli_query($conn,"UPDATE testimonial SET name='".$name."',designation='".$designation."',image='".$imagename."',description='".$description."',date_time='".$date."' WHERE id='".$id."'");
		}else
		{
			$update_query = mysqli_query($conn,"UPDATE testimonial SET name='".$name."',designation='".$designation."',description='".$description."',date_time='".$date."' WHERE id='".$id."'");
		}

       if($update_query)
		{
			header('location:manage-testimonials-list.php?update=true');
		}else
		{
			header('location:manage-testimonials-list.php?update_fail=failed');
		}
	}


?>