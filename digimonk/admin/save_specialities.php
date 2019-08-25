<?php
      include('connection.php');

      if(isset($_POST['save']))
      {

      	$heading = mysqli_real_escape_string($conn,$_POST['heading']);
      	// $project_url = mysqli_real_escape_string($conn,$_POST['project_url']);
        // $short_description = mysqli_real_escape_string($conn,$_POST['short_description']);
        // $clien_name = mysqli_real_escape_string($conn,$_POST['clien_name']);
      	$description = mysqli_real_escape_string($conn,$_POST['description']);
      	$date_time = date('d/m/Y H:i:s ');


      	$name = $_FILES['img']['name'];
      	$error = $_FILES['img']['error'];
      	$size = $_FILES['img']['size'];
      	$type = $_FILES['img']['type'];
      	$temp = $_FILES['img']['tmp_name'];

      	$imagename = Null;

      	$filearra= explode(".", $name);
      	@$imagename = date('Ydmism')."."."$filearra[1]";
      	move_uploaded_file($temp, "images/specialities_img/".$imagename);

           // for($i=0; $i<count($_FILES["project_img"]["name"]); $i++)
           //  {

           //        $name1=$_FILES['project_img']['name'][$i];
           //        $type1=$_FILES['project_img']['type'][$i];
           //        $error1=$_FILES['project_img']['error'][$i];
           //        $size1=$_FILES['project_img']['size'][$i];
           //        $temp=$_FILES['project_img']['tmp_name'][$i];

           //        $ImgName1=Null;
           //        $fileArr1=explode('.',$name1);
           //        $ImgName1 = $i."_".round(microtime(true) * 1000).".".$fileArr1["1"];
            
          
           //        $images[$i]=$ImgName1;
           //        move_uploaded_file($temp,"images/project_img/".$ImgName1);
           

           //  }

           //    $all_image=implode("*#*",$images);


      	$query = mysqli_query($conn,"INSERT INTO specialities(heading,description,image,date_time)VALUES('".$heading."','".$description."','".$imagename."','".$date_time."')");

            

      var_dump($query);


      	if($query)
      	{
      		header('location:add-specialities.php?save=true');
      	}else
      	{
      		header('location:add-specialities.php?save-fail=failed');
      	}


      }





      // Update Project

       if(isset($_POST['update']))
      {
            // if(@$_POST["old_image"])
            // {
            //    $old_image=implode("*#*",$_POST["old_image"]);  
            // }
            // else
            // {
            //       $old_image="";    
            // }

            $id = $_POST['update_specialities'];
            $heading = mysqli_real_escape_string($conn,$_POST['heading']);
            // $project_url = mysqli_real_escape_string($conn,$_POST['project_url']);
            $description = mysqli_real_escape_string($conn,$_POST['description']);
             // $short_description = mysqli_real_escape_string($conn,$_POST['short_description']);
            // $clien_name = mysqli_real_escape_string($conn,$_POST['clien_name']);
            $date_time = date('d/m/Y H:i:s ');
            
            $name = $_FILES['img']['name'];
            $error = $_FILES['img']['error'];
            $size = $_FILES['img']['size'];
            $type = $_FILES['img']['type'];
            $temp = $_FILES['img']['tmp_name'];

            $imagename = Null;

            $filearra= explode(".", $name);
            @$imagename = date('Ydmism')."."."$filearra[1]";
            if(move_uploaded_file($temp, "images/specialities_img/".$imagename))
            {
               $old_img = mysqli_query($conn,"SELECT image FROM specialities WHERE id='".$id."'");
               $old_row = mysqli_fetch_array($old_img);

               unlink("images/specialities_img/".$old_row['image']);

               $update_query = mysqli_query($conn,"UPDATE specialities SET heading='".$heading."',description='".$description."',image='".$imagename."',date_time='".$date_time."' WHERE id='".$id."'");
            }else
            {
              $update_query = mysqli_query($conn,"UPDATE specialities SET heading='".$heading."',description='".$description."',date_time='".$date_time."' WHERE id='".$id."'");
            }
           
            // var_dump($update_query);

            if($update_query)
            {
                  header('location:manage-specialities-list.php?update_project=true');
            }else
            {
                  header('location:manage-specialities-list.php?update-fail=failed');
            }


      }
?>