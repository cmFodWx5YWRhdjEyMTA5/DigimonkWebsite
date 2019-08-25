<?php 
    
    $data = $_POST["image"];
	$image_array_1 = explode(";", $data);
    $file_type_in_array= explode("/",$image_array_1[0]);
	$image_array_2 = explode(",", $image_array_1[1]);
	$data = base64_decode($image_array_2[1]);
	$imageName_only = time() . '.'.$file_type_in_array[1];
	$imageName = "img/resume_file/".$imageName_only;

	file_put_contents($imageName, $data);

     echo $imageName_only;
?>