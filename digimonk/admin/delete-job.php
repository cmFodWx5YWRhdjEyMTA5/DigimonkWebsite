<?php include('connection.php');
if(@$_GET['job_id']) 
	{
	    $ids=explode(",",$_GET['job_id']);
	    for($i=0; $i<count($ids); $i++)
	    {
	     $id=$ids[$i];
	     //var_dump($id);
        $sql="DELETE FROM job_type WHERE id='".$id."'";
		mysqli_query($conn, $sql);    
	    }
        
		header('location:manage-job-list.php?delete=true');
	}

?>
