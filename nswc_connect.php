<?php
$con = mysqli_connect("localhost","root","","nswc_complaintbillingsystem");



if (!$con){
	die("cannot connect to the database");
}

$conn = new PDO( 'mysql:host=localhost;dbname=nswc_complaintbillingsystem', 'root', '' );
	if(!$conn){
		die("Fatal Error: Connection Failed!");
	}
?>