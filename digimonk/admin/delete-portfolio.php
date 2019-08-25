<?php include('connection.php');
if(@$_GET['project_id']) 
	{
	    $ids=explode(",",$_GET['project_id']);
	    for($i=0; $i<count($ids); $i++)
	    {
	     $id=$ids[$i];
	     //var_dump($id);
        $sql="DELETE FROM project WHERE id='".$id."'";
		mysqli_query($conn, $sql);    
	    }
        
		header('location:manage-portfolio-list.php?delete=true');
	}

?>
