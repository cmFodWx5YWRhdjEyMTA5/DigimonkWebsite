<?php include('connection.php');
if(@$_GET['blogid']) 
	{
	    $ids=explode(",",$_GET['blogid']);
	    for($i=0; $i<count($ids); $i++)
	    {
	     $id=$ids[$i];
	     //var_dump($id);
        $sql="DELETE FROM our_blog WHERE id='".$id."'";
		mysqli_query($conn, $sql);    
	    }
        
		header('location:manage-our-blog-list.php?delete=true');
	}

?>
