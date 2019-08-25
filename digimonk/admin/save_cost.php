<?php include('connection.php');

	 


	 if(isset($_POST['update_cost']))
	 {
	 	$costid = $_POST['update_id'];
	 	$cost_heading = mysqli_real_escape_string($conn, $_POST['cost_heading']);
	 	$cost_description = mysqli_real_escape_string($conn, $_POST['cost_description']);

 
	 	$cost_query = mysqli_query($conn,"UPDATE how_it_works_cost SET cost_heading='".$cost_heading."',cost_description='".$cost_description."' WHERE id='".$costid."'");

	  
	 	header("location:manage-how-it-work.php?save=true");

	 }


// cloud code

	 if(isset($_POST['update_cloud']))
	 {
	 	$cloudid = $_POST['update_cloud_id'];
	 	$cloud_heading = mysqli_real_escape_string($conn, $_POST['cloud_heading']);
	 	$cloud_description = mysqli_real_escape_string($conn, $_POST['cloud_description']);

 
	 	$cloud_query = mysqli_query($conn,"UPDATE how_it_works_cloud SET cloud_heading='".$cloud_heading."',cloud_description='".$cloud_description."' WHERE id='".$cloudid."'");

	  
	 	header("location:manage-how-it-work.php?save=true");

	 }




// Dedication Code


	  if(isset($_POST['update_dedication']))
	 {
	 	$dedicationid = $_POST['update_dedication_id'];
	 	$dedication_heading = mysqli_real_escape_string($conn, $_POST['dedication_heading']);
	 	$dedication_description = mysqli_real_escape_string($conn, $_POST['dedication_description']);

 
	 	$cloud_query = mysqli_query($conn,"UPDATE how_it_works_dedication SET dedication_heading='".$dedication_heading."',dedication_description='".$dedication_description."' WHERE id='".$dedicationid."'");

	  
	 	header("location:manage-how-it-work.php?save=true");

	 }

?>