<?php

	include('connection.php');

	if(isset($_POST['update']))
	{
		$id= $_POST['update_id'];
		$page_name = mysqli_real_escape_string($conn,$_POST['page_name']);
		$google_analytics_code = mysqli_real_escape_string($conn,$_POST['google_code']);
		$date = date('d/m/Y H:i:s');

		$query = mysqli_query($conn,"UPDATE google_analytics_code SET page_name='".$page_name ."',	google_analy_code='".$google_analytics_code."',date='".$date ."' WHERE id='".$id."'");

		if($query)
		{
			header('location:google-analytics.php?update=true');
		}else{
			header('location:google-analytics.php?update_fail=failed');
		}


	}
?>