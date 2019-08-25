<?php include('connection.php');
if(@$_GET['faq_id']) 
	{
	    $ids=explode(",",$_GET['faq_id']);
	    for($i=0; $i<count($ids); $i++)
	    {
	     $id=$ids[$i];
	     //var_dump($id);
        $sql="DELETE FROM faq WHERE id='".$id."'";
		mysqli_query($conn, $sql);    
	    }
        
		header('location:faq-list.php?delete=true');
	}

?>
