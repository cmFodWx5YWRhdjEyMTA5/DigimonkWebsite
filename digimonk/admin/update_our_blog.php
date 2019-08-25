<?php
      include('connection.php');

      if(isset($_POST['update']))
      {
      	$id = $_POST['update_blog'];
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
      	if(move_uploaded_file($temp, "images/our_blog_img/".$imagename))
      	{
      		$old_img = mysqli_query($conn,"SELECT image FROM our_blog WHERE id='".$id."'");
      		$old_row = mysqli_fetch_array($old_img);

      		unlink("images/our_blog_img/".$old_row['image']);

      	     $query = mysqli_query($conn,"UPDATE our_blog SET heading='".$heading."',title='".$title."',short_description='".$short_description."',description='".$description."',image='".$imagename."',date_time='".$date_time."',meta_keyword='".$meta_keyword."' WHERE id='".$id."'");

                   
            }else
            {
                  $query = mysqli_query($conn,"UPDATE our_blog SET heading='".$heading."',title='".$title."',short_description='".$short_description."', description='".$description."',date_time='".$date_time."',meta_keyword='".$meta_keyword."' WHERE id='".$id."'");
            }
         if($query)
      	  {
      		 header('location:manage-our-blog-list.php?update-blog=true');
      	  }else
      	   {
      		   header('location:manage-our-blog-list.php?update-fail=failed');
      	   }


      }
?>