<?php include('connection.php');


	if(isset($_POST['save']))
	{
		$question = mysqli_real_escape_string($conn,$_POST['question']);
		$answers = mysqli_real_escape_string($conn,$_POST['answer']);
		$date = date('d/m/Y H:i:s ');

		$query = mysqli_query($conn,"INSERT INTO faq(question,answer,date_time)VALUES('".$question."','".$answers."','".$date."')");

		if($query)
		{
			header('location:add-faq.php?save=true');
		}else
		{
			header('location:add-faq.php?save_fail=failed');
		}
	}



		// Start update faq?

	if(isset($_POST['update']))
	{	
		$id = $_POST['id'];
		$question = mysqli_real_escape_string($conn,$_POST['question']);
		$answers = mysqli_real_escape_string($conn,$_POST['answer']);
		$date = date('d/m/Y H:i:s ');

		$update_query = mysqli_query($conn,"UPDATE faq SET question='".$question."',answer='".$answers."',date_time='".$date."' WHERE id='".$id."'");

		if($update_query)
		{
			header('location:faq-list.php?update=true');
		}else
		{
			header('location:faq-list.php?update_fail=failed');
		}
	}

	
 ?>