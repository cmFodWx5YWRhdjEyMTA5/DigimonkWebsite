<?php include('connection.php');

		if(isset($_POST['save']))
		{
			$type_heading = $_POST['language'];
			$experience = $_POST['experience'];
			$location = $_POST['location'];
			$education = $_POST['education'];
			$description = $_POST['description'];
			// $date_time = date('d/m/Y H:i:s ');

			$query = mysqli_query($conn,"INSERT INTO job_type(language_type,experience,location,education,description)VALUES('".$type_heading."','".$experience."','".$location."','".$education."','".$description."')");

			if($query)
			{
					header("location:add-job.php?save=true");
			}else{
					header("location:add-job.php?save-fail=true");
			}
			
			
		}


		// Update job


		if(isset($_POST['update']))
		{	
			$id = $_POST['update_job'];
			$type_heading = $_POST['language'];
			$experience = $_POST['experience'];
			$location = $_POST['location'];
			$education = $_POST['education'];
			$description = $_POST['description'];
			$date_time = date('d/m/Y H:i:s ');

			$update_query = mysqli_query($conn,"UPDATE job_type SET language_type='".$type_heading."',experience='".$experience."',location='".$location."',education='".$education."',description='".$description."',date_time='".$date_time."' WHERE id='".$id."'");

			// var_dump($update_query);

			// var_dump("UPDATE job_type SET language_type='".$type_heading."',experience='".$experience."',location='".$location."',education='".$education."',description='".$description."',date_time='".$date_time."' WHERE id='".$id."'");
			

			if($update_query)
			{
					header("location:manage-job-list.php?update=true");
			}else{
					header("location:manage-job-list.php?update-fail=true");
			}
			
			
		}
?>