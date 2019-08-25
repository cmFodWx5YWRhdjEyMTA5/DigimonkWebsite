<?php include('connection.php');
if(@$_GET['subscribe_id']) 
	{
	    $ids=explode(",",$_GET['subscribe_id']);
	    for($i=0; $i<count($ids); $i++)
	    {
	     $id=$ids[$i];
	     //var_dump($id);
        $sql="DELETE FROM subscribe_now WHERE id='".$id."'";
		mysqli_query($conn, $sql);    
	    }
        
		header('location:subscribe-list.php?delete=true');
	}

?>
