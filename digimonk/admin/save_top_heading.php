<?php include('connection.php');

	 if(isset($_POST['top_update']))
	 {
	 	$id = $_POST['update_top_heading'];
	 	$main_heading = mysqli_real_escape_string($conn,$_POST['top_heading']);
	 	$main_description = mysqli_real_escape_string($conn,$_POST['top_description']);

	 	$query = mysqli_query($conn,"UPDATE how_it_works_heading SET heading='".$main_heading."',description='".$main_description."' WHERE id='".$id."'");

	 	header("location:manage-how-it-work.php?save=true");

	 }




	 // cost code


	 if(isset($_POST['update_cost']))
	 {
	 	$costid = $_POST['update_cost'];
	 	$cost_heading = mysqli_real_escape_string($conn,$_POST['cost_heading']);
	 	$cost_description = mysqli_real_escape_string($conn,$_POST['cost_description']);

	 	$cost_query = mysqli_query($conn,"UPDATE how_it_works_cost SET cost_heading='".$cost_heading."',cost_description='".$cost_description."' WHERE id='".$costid."'");

	 	var_dump($cost_query);

	 	var_dump("UPDATE how_it_works_cost SET cost_heading='".$cost_heading."',cost_description='".$cost_description."' WHERE id='".$costid."'");
	 	
	 	// header("location:manage-how-it-work.php?save=true");

	 }
?>