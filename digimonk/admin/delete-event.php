<?php include('connection.php');
if(@$_GET['event_id']) 
	{
	    $ids=explode(",",$_GET['event_id']);
	    for($i=0; $i<count($ids); $i++)
	    {
	     $id=$ids[$i];
	     //var_dump($id);
        $sql="DELETE FROM event WHERE id='".$id."'";
		mysqli_query($conn, $sql);    
	    }
        
		header('location:manage-event-list.php?delete=true');
	}

?>
