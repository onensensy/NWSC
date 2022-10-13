<?php
session_start();

include("nswc_connect.php");
if(isset($_POST['submit'])){

$staffId  = $_POST["staffId"];
$staffName = $_POST["staffName"];
$dob = $_POST["dob"];
$phone = $_POST["phone"];
$address = $_POST["address"];
$email = $_POST["email"];
$position = $_POST["position"];

echo $staffId ."<br>";
echo $staffName."<br>";
echo $dob."<br>";
echo $phone."<br>";
echo $address."<br>";
echo $position."<br>";

$insert_query = "INSERT INTO staff VALUES('$staffId','$staffName','$dob','$phone','$address','$email', '$position')";

$execute_query=mysqli_query($con,$insert_query);
     if($execute_query==TRUE){
      echo "Data Submitted";
     }else{
      echo mysqli_error($con);
     }
}
?>