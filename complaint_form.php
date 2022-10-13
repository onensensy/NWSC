<?php
session_start();

include("nswc_connect.php");
if(isset($_POST['submit'])){

$complaintNo  = $_POST["complaintNo"];
$date = $_POST["date"];
$staffId = $_POST["staffId"];
$status = $_POST["status"];
$compliantType= $_POST["compliantType"];

echo $complaintNo ."<br>";
echo $date."<br>";
echo $staffId."<br>";
echo $status."<br>";
echo $compliantType."<br>";

$insert_query = "INSERT INTO complaintform VALUES('$complaintNo','$date','$staffId','', '$status', '$compliantType')";

$execute_query=mysqli_query($con,$insert_query);
     if($execute_query==TRUE){
      echo "Data Submitted";
     }else{
      echo mysqli_error($con);
     }
}

if(isset($_POST['resolve'])){

$complaintNo  = $_POST["complaintNo"];
$date = $_POST["date"];
$staffId = $_POST["staffId"];
$resolution = $_POST["resolution"];
$status = $_POST["status"];
$compliantType= $_POST["compliantType"];

echo $complaintNo ."<br>";
echo $date."<br>";
echo $staffId."<br>";
echo $resolution."<br>";
echo $status."<br>";
echo $compliantType."<br>";

$insert_query = "UPDATE complaintform SET staffId = '$staffId', date = '$date', resolution='$resolution', status='$status' WHERE complaintNo = '$complaintNo'";

$execute_query=mysqli_query($con,$insert_query);
     if($execute_query==TRUE){
      echo "Data Submitted";
     }else{
      echo mysqli_error($con);
     }
}


?>