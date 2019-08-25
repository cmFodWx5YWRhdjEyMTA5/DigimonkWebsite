<?php

	include('connection.php');

if(isset($_POST['update1']))
	{	
		$id = $_POST['id'];

		$youtube_link1 = $_POST['youtube_linl1'];
		$set_youtube = implode("*#*", $youtube_link1);
		$date = date('d/m/Y H:i:s ');

		$query = mysqli_query($conn,"UPDATE youtube_link SET youtube1='".$set_youtube."' WHERE id='".$id."'");

		if($query)
		{
			header('location:manage-youtube-link.php?update=true');
		}else
		{
			header('location:manage-youtube-link.php?update_fail=failed');
		}
	}




	if(isset($_POST['update2']))
	{	
		$id = $_POST['id'];
		$youtube_link2 = mysqli_real_escape_string($conn,$_POST['youtube_linl2']);
		$date = date('d/m/Y H:i:s ');

		$query = mysqli_query($conn,"UPDATE youtube_link SET youtube2='".$youtube_link2."' WHERE id='".$id."'");

		if($query)
		{
			header('location:manage-youtube-link.php?update=true');
		}else
		{
			header('location:manage-youtube-link.php?update_fail=failed');
		}
	}
?>