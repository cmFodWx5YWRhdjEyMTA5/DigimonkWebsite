<?php include('connection.php');
if(@$_GET['id']) 
	{
	    $ids=explode(",",$_GET['id']);
	    for($i=0; $i<count($ids); $i++)
	    {
	     $id=$ids[$i];
	     //var_dump($id);
        $sql="DELETE FROM contact_us WHERE id='".$id."'";
		mysqli_query($conn, $sql);    
	    }
        
		header('location:contact-us-list.php?delete=true');
	}

?>
