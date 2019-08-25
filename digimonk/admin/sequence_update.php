<?php 
include('connection.php'); 

if(@$_POST["types"]=="project")
{
	$ids=$_POST["ids"];
	$priority=$_POST["priority"];
	for($i=0; $i<count($ids); $i++)
{
    mysqli_query($conn,"UPDATE project SET priority='".$priority[$i]."' WHERE id='".$ids[$i]."'");

    

}

}
// var_dump(@$_POST);
if(@$_POST["types"]=="services")
{
	$ids=$_POST["ids"];
	$priority=$_POST["priority"];
	for($i=0; $i<count($ids); $i++)
{
mysqli_query($conn,"UPDATE services SET priority='".$priority[$i]."' WHERE id='".$ids[$i]."'");

}

}

// var_dump(@$_POST);
if(@$_POST["types"]=="blogs")
{
	$ids=$_POST["ids"];
	$priority=$_POST["priority"];
	for($i=0; $i<count($ids); $i++)
{
mysqli_query($conn,"UPDATE our_blog SET priority='".$priority[$i]."' WHERE id='".$ids[$i]."'");

}

}


// var_dump(@$_POST);
if(@$_POST["types"]=="team")
{
	$ids=$_POST["ids"];
	$priority=$_POST["priority"];
	for($i=0; $i<count($ids); $i++)
{
mysqli_query($conn,"UPDATE members SET priority='".$priority[$i]."' WHERE id='".$ids[$i]."'");

}

}

 if(@$_POST["types"]=="job_sequence")
 {
	$ids=$_POST["ids"];
	$priority=$_POST["priority"];
	for($i=0; $i<count($ids); $i++)
 {
   mysqli_query($conn,"UPDATE job_type SET priority='".$priority[$i]."' WHERE id='".$ids[$i]."'");

  }
 }

 if(@$_POST["types"]=="event_gallery")
  {
	$ids=$_POST["ids"];
	$priority=$_POST["priority"];
	for($i=0; $i<count($ids); $i++)
    {
      mysqli_query($conn,"UPDATE event SET priority='".$priority[$i]."' WHERE id='".$ids[$i]."'");

    }
 }
 
?>