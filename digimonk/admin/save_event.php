<?php
      include('connection.php');

      if(isset($_POST['save']))
      {
        $heading = mysqli_real_escape_string($conn,$_POST['heading']);
      	$short_description = mysqli_real_escape_string($conn,$_POST['short_description']);
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
      	move_uploaded_file($temp, "images/event_gallery_img/".$imagename);

        if(@$_FILES["event_img"]["name"][0])
        {
           for($i=0; $i<count($_FILES["event_img"]["name"]); $i++)
            {

                  $name1=$_FILES['event_img']['name'][$i];
                  $type1=$_FILES['event_img']['type'][$i];
                  $error1=$_FILES['event_img']['error'][$i];
                  $size1=$_FILES['event_img']['size'][$i];
                  $temp=$_FILES['event_img']['tmp_name'][$i];

                  $ImgName1=Null;
                  $fileArr1=explode('.',$name1);
                  $ImgName1 = $i."_".round(microtime(true) * 1000).".".$fileArr1["1"];
            
          
                  $images[$i]=$ImgName1;
                  move_uploaded_file($temp,"images/event_gallery_img/".$ImgName1);
           

            }
             $all_image=implode("*#*",$images);
        }else
        {
           $all_image=""; 
        }
          
         $query = mysqli_query($conn,"INSERT INTO event(heading,short_description,image,multi_image,date_time,meta_keyword)VALUES('".$heading."','".$short_description."','".$imagename."','".$all_image."','".$date_time."','".$meta_keyword."')");

      
      	if($query)
      	{
      		header('location:add-event.php?save=true');
      	}else
      	{
      		header('location:add-event.php?save-fail=failed');
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

            $id = $_POST['update_event'];
            $heading = mysqli_real_escape_string($conn,$_POST['heading']);
            $short_description = mysqli_real_escape_string($conn,$_POST['short_description']);
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
                move_uploaded_file($temp, "images/event_gallery_img/".$imagename);
            }else
            {
               @$imagename=$single_old_image;
            }
            

        if($_FILES["event_img"]["name"]["0"]!="")
          {
             for($i=0; $i<count($_FILES["event_img"]["name"]); $i++)
            {

            $name1=$_FILES['event_img']['name'][$i];
            $type1=$_FILES['event_img']['type'][$i];
            $error1=$_FILES['event_img']['error'][$i];
            $size1=$_FILES['event_img']['size'][$i];
            $temp=$_FILES['event_img']['tmp_name'][$i];

            $ImgName1=Null;
            $fileArr1=explode('.',$name1);
           // $ImgName1 = round(microtime(true) * 1000).".".$fileArr1["1"];
           $ImgName1 = $i."_".round(microtime(true) * 1000).".".$fileArr1["1"];
           // var_dump($ImgName1);
    
            $images[$i]=$ImgName1;
            move_uploaded_file($temp,"images/event_gallery_img/".$ImgName1);

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
  
      $update_query = mysqli_query($conn,"UPDATE event SET heading='".$heading."',image='".$imagename."',date_time='".$date_time."',short_description='".$short_description."',multi_image='".$all_image."',meta_keyword='".$meta_keyword."' WHERE id='".$id."'");

             
      // var_dump("UPDATE event SET heading='".$heading."',image='".$imagename."',date_time='".$date_time."',short_description='".$short_description."',multi_image='".$all_image."' WHERE id='".$id."'");

          

            // var_dump($query);

            if($update_query)
            {
                  header('location:manage-event-list.php?update_event=true');
            }else
            {
                  header('location:manage-event-list.php?update-fail=failed');
            }


      }
?>