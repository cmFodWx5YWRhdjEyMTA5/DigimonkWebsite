<?php include('connection.php');
if(@$_GET['google_id']) 
	{
	    $ids=explode(",",$_GET['google_id']);
	    for($i=0; $i<count($ids); $i++)
	    {
	     $id=$ids[$i];
	     //var_dump($id);
        $sql="DELETE FROM google_analytics_code WHERE id='".$id."'";
		mysqli_query($conn, $sql);    
	    }
        
		header('location:manage-google-analytics-list.php?delete=true');
	}

?>
