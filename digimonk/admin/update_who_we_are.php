<?php
	   include('connection.php');

	   if(isset($_POST['update']))
	   {
	   	 $id = $_POST['update_who_are'];
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
	   	 if(move_uploaded_file($temp,"images/who_we_are_img/".$imagename))
	   	 {
	   	 	$old_img = mysqli_query($conn,"SELECT image FROM who_we_are WHERE id='".$id."'");
	   	 	$old_row = mysqli_fetch_array($old_img);

	   	 	unlink('images/who_we_are_img/'.$old_row['image']);

	   	 	$update_query = mysqli_query($conn,"UPDATE who_we_are SET heading='".$heading."',description='".$description."',image='".$imagename."',date='".$date_time."'");
	   	  
	   	 	 
	   	 }else{

	   	 	$update_query = mysqli_query($conn,"UPDATE who_we_are SET heading='".$heading."',description='".$description."',date='".$date_time."'");
        }
            

           header('location:manage-who-we-are.php?update=true');

	  
	   }
?>