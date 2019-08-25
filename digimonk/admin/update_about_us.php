<?php
	   include('connection.php');

	   if(isset($_POST['update']))
	   {
	   	 $id = $_POST['update_about'];
	   	 $heading = mysqli_real_escape_string($conn,$_POST['heading']);
	   	 $description = mysqli_real_escape_string($conn, $_POST['description']);
	   	 $date_time = date('d/m/Y H:i:s ');


	   	 $name = $_FILES['img']['name'];
	   	 $error = $_FILES['img']['error'];
	   	 $size = $_FILES['img']['size'];
	   	 $type = $_FILES['img']['type'];
	   	 $temp = $_FILES['img']['tmp_name'];

	   	 $imagename = Null;
	   	 $filearr = explode(".", $name);

	   	 @$imagename=date('Ymdism')."."."$filearr[1]";
	   	 if(move_uploaded_file($temp,"images/about-img/".$imagename))
	   	 {
	   	 	$old_img = mysqli_query($conn,"SELECT image FROM about_us WHERE id='".$id."'");
	   	 	$old_row = mysqli_fetch_array($old_img);

	   	 	unlink('images/about-img/'.$old_row['image']);

	   	 	$update_query = mysqli_query($conn,"UPDATE about_us SET heading='".$heading."',description='".$description."',image='".$imagename."',date_time='".$date_time."'");

	   	 	 
	   	 }else{

	   	 	$update_query = mysqli_query($conn,"UPDATE about_us SET heading='".$heading."',description='".$description."',date_time='".$date_time."'");
        }
              // var_dump($update_query);

           header('location:manage-about-us.php?update=true');

	  
	   }
?>