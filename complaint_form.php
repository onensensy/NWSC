<?php

include("nswc_connect.php");
if(isset($_POST['submit'])){

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

$insert_query = "INSERT INTO compliantform VALUES('$complaintNo','$date','$staffId','$resolution', '$status', 'compliantType')";

mysqli_query($mysql,$sql)
$execute_query=mysqli_query($connect,$insert_query);
     if($execute_query==TRUE){
      echo "Data Submitted";
     }else{
      echo mysqli_error($connect);
     }
}
?>

