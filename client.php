<?php

include("nswc_connect.php");
if(isset($_POST['submit'])){

$clientNo = $_POST["clientNo"];
$clientName = $_POST["clientName"];
$District = $_POST["District"];
$Zone = $_POST["Zone"];
$Location = $_POST["Location"];
$plotNo = $_POST["plotNo"];
$email = $_POST["email"];
$cPassword = $_POST["cPassword"];

echo $clientNo."<br>";
echo $clientName."<br>";
echo $District."<br>";
echo $Zone."<br>";
echo $Location."<br>";
echo $plotNo."<br>";
echo $email."<br>";
echo $cPassword."<br>";

$insert_query = "INSERT INTO client VALUES('$clientNo', '$clientName', '$District', '$Zone', '$Location', '$plotNo', '$email', '$cPassword')";

mysqli_query($mysql,$sql)
$execute_query=mysqli_query($connect,$insert_query);
     if($execute_query==TRUE){
      echo "Data Submitted";
     }
	else{
      echo mysqli_error($connect);
     }
}
?>

