<?php include('connection.php');
if(@$_GET['memberid']) 
	{
	    $ids=explode(",",$_GET['memberid']);
	    for($i=0; $i<count($ids); $i++)
	    {
	     $id=$ids[$i];
	     //var_dump($id);
        $sql="DELETE FROM members WHERE id='".$id."'";
		mysqli_query($conn, $sql);    
	    }
        
		header('location:team-list.php?delete=true');
	}

?>
