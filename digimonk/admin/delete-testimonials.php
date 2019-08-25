<?php include('connection.php');
if(@$_GET['testimonil_id']) 
	{
	    $ids=explode(",",$_GET['testimonil_id']);
	    for($i=0; $i<count($ids); $i++)
	    {
	     $id=$ids[$i];
	     //var_dump($id);
        $sql="DELETE FROM testimonial WHERE id='".$id."'";
		mysqli_query($conn, $sql);    
	    }
        
		header('location:manage-testimonials-list.php?delete=true');
	}

?>
