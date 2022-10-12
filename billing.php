<?php 

include("nswc_connect.php");
if(isset($_POST['submit'])){

$meterNo = $_POST["meterNo"];
$clientNo = $_POST["clientNo"];
$units = $_POST["units"];
$billingMonth = $_POST["billingMonth"];
$readingDate = $_POST["readingDate"];
$previousReading = $_POST["previousReading"];
$curentReading = $_POST["curentReading"];
$payMethod = $_POST["paymentMethod"];

echo $meterNo."<br>";
echo $clientNo."<br>";
echo $units."<br>";
echo $billingMonth."<br>";
echo $readingDate."<br>";
echo $previousReading."<br>";
echo $curentReading."<br>";
echo $payMethod."<br>";

$insert_query = "INSERT INTO billing VALUES('$meterNo','$clientNo','$units','$billingMonth','$readingDate','$previousReading','$curentReading','$payMethod')";

$execute_query=mysqli_query($con,$insert_query);
     if($execute_query==TRUE){
      echo "Data Submitted";
     }
   else{
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
    <form id="form1" name="form1" method="post" action="billing.php">
        <table width="500" border="1" align="center">
            <tr>
                <td colspan="2">
                    <h1>Billing's Details</h1>
                </td>
            </tr>
            <tr>
                <td width="197">MeterNumber </td>
                <td width="197"><label>
                        <input type="text" name="meterNo" />
                    </label></td>
            </tr>
            <tr>
                <td>ClientNumber </td>
                <td> <input type="text" name="clientNo" /></td>
            </tr>
            <tr>
                <td>Units</td>
                <td><label>
                        <input type="text" name="units" />
                    </label></td>
            </tr>
            <tr>
                <td>BillingMonth </td>
                <td><label>
                        <input type="text" name="billingMonth" />
                    </label></td>
            </tr>
            <tr>
                <td>ReadingDate </td>
                <td><label>
                        <input type="date" name="readingDate" id="date" />
                    </label></td>
            </tr>
            <tr>
                <td>PreviousReading </td>
                <td><label>
                        <input type="date" name="previousReading" id="date" />
                    </label></td>
            </tr>
            <tr>
                <td>CurrentReading </td>
                <td><label>
                        <input type="date" name="curentReading" id="date" />
                    </label></td>
            </tr>
            <tr>
                <td>payMethod </td>
                <td>
                <td>
                    <select name="paymentMethod">
                        <option value=""> --Select metthod--</option>
                        <option value="bank">bank</option>
                        <option value="cash">cashk</option>
                        <option value="mobile money">mobile money</option>
                    </select></td>
            </tr>
            <tr>
                <td><input type="reset" name="rest" value="reset" /> </td>
                <td><input name="submit" type="submit" id="submit" value="Submit" /></td>
            </tr>
        </table>
    </form>
</body>

</html>