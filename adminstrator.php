<?php

session_start();

include("nswc_connect.php");

if(isset($_POST['submit'])){

$adminstratorId  = $_POST["adminstratorId "];
$adminstratorName = $_POST["adminstratorName"];
$contact = $_POST["contact"];
$email = $_POST["email"];
$adminstratorPassword = $_POST["adminstratorPassword"];

echo $adminstratorId ."<br>";
echo $adminstratorName."<br>";
echo $contact."<br>";
echo $email."<br>";
echo $adminstratorPassword."<br>";

//$insert_query = "INSERT INTO adminstrator (adminstratorId,adminstratorName,contact,email,adminstratorPassword)VALUES('$adminstratorId','$adminstratorName','$contact','$email', '$adminstratorPassword')";
	$insert_query = "select * from adminstrator where adminstratorId = $adminstratorId ";

//mysqli_query($mysql,$sql)
//$execute_query = mysqli_query($connect,$insert_query);
//     if($execute_query==TRUE){
//      echo "Data Submitted";
//     }else{
//      echo mysqli_error($connect);
//     }
//}
	$result = mysqli_query($con, $insert_query);
	$num = mysqli_num_row($result);
	
	if($num ==1){
		
		echo "exists";
	} else
	{
		$sql  = "INSERT INTO adminstrator (adminstratorId,adminstratorName,contact,email,adminstratorPassword) VALUES ('$adminstratorId','$adminstratorName','$contact','$email', '$adminstratorPassword')";
		
		mysqli_query($con,$sql);
		
		echo "user added";
	}
?>