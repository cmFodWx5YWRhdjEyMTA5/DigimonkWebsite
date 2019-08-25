<?php include('connection.php');
if(@$_GET['job_career_id']) 
	{
	    $ids=explode(",",$_GET['job_career_id']);
	    for($i=0; $i<count($ids); $i++)
	    {
	     $id=$ids[$i];
	     //var_dump($id);
        $sql="DELETE FROM career WHERE id='".$id."'";
		mysqli_query($conn, $sql);    
	    }
        
		header('location:job-career-list.php?delete=true');
	}

?>
