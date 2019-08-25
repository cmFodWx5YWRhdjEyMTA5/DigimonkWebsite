<?php include('connection.php');
if(@$_GET['slider_id']) 
	{
	    $ids=explode(",",$_GET['slider_id']);
	    for($i=0; $i<count($ids); $i++)
	    {
	     $id=$ids[$i];
	     //var_dump($id);
        $sql="DELETE FROM slider_img WHERE id='".$id."'";
		mysqli_query($conn, $sql);    
	    }
        
		header('location:manage-slider-list.php?delete=true');
	}

?>
