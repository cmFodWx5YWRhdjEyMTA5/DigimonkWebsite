<?php
      include('connection.php');

      if(isset($_POST['save']))
      {

      	$heading = mysqli_real_escape_string($conn,$_POST['heading']);
      	$title = mysqli_real_escape_string($conn,$_POST['title']);
            $short_description = mysqli_real_escape_string($conn,$_POST['short_description']);
      	$description = mysqli_real_escape_string($conn,$_POST['description']);
            $meta_keyword = mysqli_real_escape_string($conn,$_POST['meta_keywords']);
      	$date_time = date('d/m/Y H:i:s ');

      	$name = $_FILES['img']['name'];
      	$error = $_FILES['img']['error'];
      	$size = $_FILES['img']['size'];
      	$type = $_FILES['img']['type'];
      	$temp = $_FILES['img']['tmp_name'];

      	$imagename = Null;

      	$filearra= explode(".", $name);
      	@$imagename = date('Ydmism')."."."$filearra[1]";
      	move_uploaded_file($temp, "images/our_blog_img/".$imagename);

      	$query = mysqli_query($conn,"INSERT INTO our_blog(heading,title,short_description,description,image,date_time,meta_keyword)VALUES('".$heading."','".$title."','".$short_description."','".$description."','".$imagename."','".$date_time."','".$meta_keyword."')");

      	// var_dump($query);

      	if($query)
      	{
      		header('location:add-our-blog.php?save=true');
      	}else
      	{
      		header('location:add-our-blog.php?save-fail=failed');
      	}


      }
?>