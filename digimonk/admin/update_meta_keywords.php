<?php

	include('connection.php');

	if(isset($_POST['update']))
	{	
		$id = $_POST['update_id'];
		$page_name = mysqli_real_escape_string($conn,$_POST['page_name']);
		$page_title = mysqli_real_escape_string($conn,$_POST['page_title']);
		$meta_keywords = mysqli_real_escape_string($conn,$_POST['meta_keywords']);
		$meta_description = mysqli_real_escape_string($conn,$_POST['meta_description']);
		$date = date('d/m/Y H:i:s ');

		$update_query = mysqli_query($conn,"UPDATE meta_keywords SET page_name='".$page_name."',page_title='".$page_title."',mete_keywords='".$meta_keywords."',meta_description='".$meta_description."',date='".$date."' WHERE id='".$id."'");

		if($update_query)
		{
			header('location:meta-keywords-list.php?update=true');
		}else
		{
			header('location:meta-keywords-list.php?update_fail=failed');
		}
	}
?>