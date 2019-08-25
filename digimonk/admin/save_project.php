<?php
      include('connection.php');

      if(isset($_POST['save']))
      {
        $types_application = mysqli_real_escape_string($conn,$_POST['types_application']);
      	$heading = mysqli_real_escape_string($conn,$_POST['heading']);
      	$project_url = mysqli_real_escape_string($conn,$_POST['project_url']);
        $short_description = mysqli_real_escape_string($conn,$_POST['short_description']);
        $clien_name = mysqli_real_escape_string($conn,$_POST['clien_name']);
      	$description = mysqli_real_escape_string($conn,$_POST['description']);
        $technology = mysqli_real_escape_string($conn,$_POST['technology_part']);
        $location = mysqli_real_escape_string($conn,$_POST['location']);
        $complate_date = mysqli_real_escape_string($conn,$_POST['complete_date']);
        $meta_keyword = mysqli_real_escape_string($conn,$_POST['meta_keyword']);
      	$date_time = date('d/m/Y H:i:s ');


      	$name =  $_FILES['img']['name'];
      	$error = $_FILES['img']['error'];
      	$size =  $_FILES['img']['size'];
      	$type =  $_FILES['img']['type'];
      	$temp =  $_FILES['img']['tmp_name'];

      	$imagename = Null;

      	$filearra= explode(".", $name);
      	@$imagename = date('Ydmism')."."."$filearra[1]";
      	move_uploaded_file($temp, "images/project_img/".$imagename);

        if(@$_FILES["project_img"]["name"][0])
        {
           for($i=0; $i<count($_FILES["project_img"]["name"]); $i++)
            {

                  $name1=$_FILES['project_img']['name'][$i];
                  $type1=$_FILES['project_img']['type'][$i];
                  $error1=$_FILES['project_img']['error'][$i];
                  $size1=$_FILES['project_img']['size'][$i];
                  $temp=$_FILES['project_img']['tmp_name'][$i];

                  $ImgName1=Null;
                  $fileArr1=explode('.',$name1);
                  $ImgName1 = $i."_".round(microtime(true) * 1000).".".$fileArr1["1"];
            
          
                  $images[$i]=$ImgName1;
                  move_uploaded_file($temp,"images/project_img/".$ImgName1);
           

            }
             $all_image=implode("*#*",$images);
        }else
        {
           $all_image=""; 
        }
          
          $query = mysqli_query($conn,"INSERT INTO project(types_web,heading,project_url,description,image,date_time,short_description,client_name,multi_imag,technology,location,complete_date,meta_keyword)VALUES('".$types_application."','".$heading."','".$project_url."','".$description."','".$imagename."','".$date_time."','".$short_description."','".$clien_name."','".$all_image."','".$technology."','".$location."','".$complate_date."','".$meta_keyword."')");

            

      	// var_dump($query);


      	if($query)
      	{
      		header('location:add-portfolio.php?save=true');
      	}else
      	{
      		header('location:add-portfolio.php?save-fail=failed');
      	}


      }





      // Update Project

       if(isset($_POST['update']))
      {
            if(@$_POST["old_image"])
            {
               $old_image=implode("*#*",$_POST["old_image"]);  
            }
            else
            {
                  $old_image="";    
            }

            $id = $_POST['update_project'];
            $types_application = mysqli_real_escape_string($conn,$_POST['types_application']);
            $heading = mysqli_real_escape_string($conn,$_POST['heading']);
            $project_url = mysqli_real_escape_string($conn,$_POST['project_url']);
            $description = mysqli_real_escape_string($conn,$_POST['description']);
             $short_description = mysqli_real_escape_string($conn,$_POST['short_description']);
            $clien_name = mysqli_real_escape_string($conn,$_POST['clien_name']);
            $technology = mysqli_real_escape_string($conn,$_POST['technology_part']);
            $location = mysqli_real_escape_string($conn,$_POST['location']);
            $complate_date = mysqli_real_escape_string($conn,$_POST['complete_date']);
            $meta_keyword = mysqli_real_escape_string($conn,$_POST['meta_keyword']);
            $date_time = date('d/m/Y H:i:s ');
            
            $single_old_image=$_POST['single_old_img'];
           
            $name = $_FILES['img']['name'];
            $error = $_FILES['img']['error'];
            $size = $_FILES['img']['size'];
            $type = $_FILES['img']['type'];
            $temp = $_FILES['img']['tmp_name'];

            $imagename = Null;

            $filearra= explode(".", $name);
            if($name)
            {
               @$imagename = date('Ydmism')."."."$filearra[1]";
                move_uploaded_file($temp, "images/project_img/".$imagename);
            }else
            {
               @$imagename=$single_old_image;
            }
            

        if($_FILES["project_img"]["name"]["0"]!="")
          {
             for($i=0; $i<count($_FILES["project_img"]["name"]); $i++)
            {

            $name1=$_FILES['project_img']['name'][$i];
            $type1=$_FILES['project_img']['type'][$i];
            $error1=$_FILES['project_img']['error'][$i];
            $size1=$_FILES['project_img']['size'][$i];
            $temp=$_FILES['project_img']['tmp_name'][$i];

            $ImgName1=Null;
            $fileArr1=explode('.',$name1);
           // $ImgName1 = round(microtime(true) * 1000).".".$fileArr1["1"];
           $ImgName1 = $i."_".round(microtime(true) * 1000).".".$fileArr1["1"];
           // var_dump($ImgName1);
    
            $images[$i]=$ImgName1;
            move_uploaded_file($temp,"images/project_img/".$ImgName1);

          }
      }
      else
      {
        $images=null;
      }
      //var_dump($old_image);
        $all_image=implode("*#*",$images);
      //var_dump();

      if($images==null)
      {
            $all_image=$old_image;
      }
      else
      {
            if(@$old_image)
         {
            $all_image=$all_image."*#*".@$old_image;
         }
      }
           
            // $old_img = mysqli_query($conn,"SELECT image FROM project WHERE id='".$id."'");
            // $old_row = mysqli_fetch_array($old_img);

            // unlink("images/project_img/".$old_row['image']);

      $update_query = mysqli_query($conn,"UPDATE project SET types_web='".$types_application."',heading='".$heading."',project_url='".$project_url."',description='".$description."',image='".$imagename."',date_time='".$date_time."',short_description='".$short_description."',client_name='".$clien_name."',multi_imag='".$all_image."',technology='".$technology."',location='".$location."',complete_date='".$complate_date."',meta_keyword='".$meta_keyword."' WHERE id='".$id."'");

             
              

            // var_dump($query);

            if($update_query)
            {
                  header('location:manage-portfolio-list.php?update_project=true');
            }else
            {
                  header('location:manage-portfolio-list.php?update-fail=failed');
            }


      }
?>