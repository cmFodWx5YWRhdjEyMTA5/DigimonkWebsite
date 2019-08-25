<?php include('connection.php');
if(@$_GET['request_id']) 
	{
	    $ids=explode(",",$_GET['request_id']);
	    for($i=0; $i<count($ids); $i++)
	    {
	     $id=$ids[$i];
	     //var_dump($id);
        $sql="DELETE FROM request_quote WHERE id='".$id."'";
		mysqli_query($conn, $sql);    
	    }
        
		header('location:request-quote-list.php?delete=true');
	}

?>
