<?php

	include('connection.php');

	if(isset($_POST['update']))
	{	
		$id = $_POST['update_privacy'];
		$heading = mysqli_real_escape_string($conn,$_POST['heading']);
		$description = mysqli_real_escape_string($conn,$_POST['description']);

		$query = mysqli_query($conn,"UPDATE privacy_policy SET heading='".$heading."',description='".$description."' WHERE id='".$id."'");

		if($query)
		{
			header('location:manage-privacy-policy.php?update=true');
		}else
		{
			header('location:manage-privacy-policy.php?update_fail=failed');
		}
	}
?>