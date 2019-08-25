<?php include('connection.php');
if(@$_GET['our_expertid']) 
	{
	    $ids=explode(",",$_GET['our_expertid']);
	    for($i=0; $i<count($ids); $i++)
	    {
	     $id=$ids[$i];
	     //var_dump($id);
        $sql="DELETE FROM our_expert WHERE id='".$id."'";
		mysqli_query($conn, $sql);    
	    }
        
		header('location:our-expert-list.php?delete=true');
	}

?>
