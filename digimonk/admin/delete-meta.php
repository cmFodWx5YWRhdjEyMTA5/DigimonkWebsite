<?php include('connection.php');
if(@$_GET['meta_id']) 
	{
	    $ids=explode(",",$_GET['meta_id']);
	    for($i=0; $i<count($ids); $i++)
	    {
	     $id=$ids[$i];
	     //var_dump($id);
        $sql="DELETE FROM meta_keywords WHERE id='".$id."'";
		mysqli_query($conn, $sql);    
	    }
        
		header('location:meta-keywords-list.php?delete=true');
	}

?>
