<?php
    include('connection.php');


    if(isset($_POST['login']))
     {

     	$username = $_POST['username'];
     	$password = $_POST['password'];

        $query = mysqli_query($conn,"SELECT * FROM admin_login WHERE user_name='".$username."' AND password='".$password."'");

        $sql = mysqli_num_rows($query);
     	$row = mysqli_fetch_array($query);
 
     	 if($sql>=1)
     	 {
     	 	$_SESSION['admin']=$row;

     	 	header("location:job-career-list.php");

     	 }
     	 else
     	 {
     	 	header("location:index.php?wrong=failed");
     	 }
     }

?>