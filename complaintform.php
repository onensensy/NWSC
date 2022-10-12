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

$execute_query=mysqli_query($con,$insert_query);
     if($execute_query==TRUE){
      echo "Data Submitted";
     }else{
      echo mysqli_error($con);
     }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Untitled Document</title>
</head>

<body>
    <h1 align="center">NSWC BILLS COMPLAINT SYSTEM</h1>
    <form id="form1" name="form1" method="post" action="complaintform.php">
        <table width="500" border="1" align="center">
            <tr>
                <td colspan="2">
                    <h1>Branch's Details</h1>
                </td>
            </tr>
            <tr>
                <td width="197">Complaint Number </td>
                <td width="197"><label>
                        <input type="text" name="complaintNo" />
                    </label></td>
            </tr>
            <tr>
                <td>Date</td>
                <td> <label>
                        <input type="date" name="date" id="date" />
                    </label></td>
            </tr>
            <tr>
                <td>staff ID </td>
                <td><label>
                        <input type="text" name="staffId" />
                    </label></td>
            </tr>
            <tr>
                <td>Resolution</td>
                <td><label>
                        <input type="text" name="resolution" />
                    </label></td>
            </tr>
            <tr>
                <td>Status</td>
                <td><label>
                        <input type="text" name="status" />
                    </label></td>
            </tr>
            <tr>
                <td>Complaint type </td>
                <td><label>
                        <input type="text" name="compliantType" />
                    </label></td>
            </tr>
        </table>
    </form>
</body>

</html>