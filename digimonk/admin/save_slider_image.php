<?php
      include('connection.php');

      if(isset($_POST['save']))
      {

      	$heading = mysqli_real_escape_string($conn,$_POST['heading']);
      	$url = mysqli_real_escape_string($conn,$_POST['url_line']);
      	$description = mysqli_real_escape_string($conn,$_POST['short_description']);
      	$date_time = date('d/m/Y H:i:s ');

      	$name = $_FILES['img']['name'];
      	$error = $_FILES['img']['error'];
      	$size = $_FILES['img']['size'];
      	$type = $_FILES['img']['type'];
      	$temp = $_FILES['img']['tmp_name'];

      	$imagename = Null;

      	$filearra= explode(".", $name);
      	@$imagename = date('Ydmism')."."."$filearra[1]";
      	move_uploaded_file($temp, "images/slider_image/".$imagename);

      	$query = mysqli_query($conn,"INSERT INTO slider_img(heading,url_link,description,image,date_time)VALUES('".$heading."','".$url."','".$description."','".$imagename."','".$date_time."')");

      	// var_dump($query);

      	if($query)
      	{
      		header('location:add-slider-image.php?save=true');
      	}else
      	{
      		header('location:add-slider-image.php?save-fail=failed');
      	}


      }



        if(isset($_POST['update']))
      {
            $id = $_POST['update_slider_image'];
            $heading = mysqli_real_escape_string($conn,$_POST['heading']);
            $url = mysqli_real_escape_string($conn,$_POST['url_line']);
            $description = mysqli_real_escape_string($conn,$_POST['short_description']);
            $date_time = date('d/m/Y H:i:s ');

            $name = $_FILES['img']['name'];
            $error = $_FILES['img']['error'];
            $size = $_FILES['img']['size'];
            $type = $_FILES['img']['type'];
            $temp = $_FILES['img']['tmp_name'];

            $imagename = Null;

            $filearra= explode(".", $name);
            @$imagename = date('Ydmism')."."."$filearra[1]";
            if(move_uploaded_file($temp, "images/slider_image/".$imagename))
            {
                  $old_img = mysqli_query($conn,"SELECT image FROM slider_img WHERE id='".$id."'");
                  $old_row = mysqli_fetch_array($old_img);

                  unlink("images/slider_image/".$old_row['image']);

                  $query = mysqli_query($conn,"UPDATE slider_img SET heading='".$heading."',url_link='".$url."',description='".$description."',image='".$imagename."',date_time='".$date_time."' WHERE id='".$id."'");

                   
            }else
            {
                  $query = mysqli_query($conn,"UPDATE slider_img SET heading='".$heading."',url_link='".$url."',description='".$description."',date_time='".$date_time."' WHERE id='".$id."'");
            }
         if($query)
              {
                   header('location:manage-slider-list.php?update=true');
              }else
               {
                     header('location:manage-slider-list.php?update-fail=failed');
               }


      }
?>