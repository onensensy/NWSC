<?php 
include("nswc_connect.php");
if(isset($_POST['submit'])){

$branchNo = $_POST["branchNo"];
$branchName = $_POST["branchName"];
$location = $_POST["location"];
$address = $_POST["address"];

echo $branchNo."<br>";
echo $branchName."<br>";
echo $location."<br>";
echo $address."<br>";

$insert_query = "INSERT INTO branch VALUES('$branchNo','$branchName','$location','$address')";

$execute_query = mysqli_query($con,$insert_query);
     if($execute_query==TRUE)
   {
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
    <style type="text/css">
    < !-- .style1 {
        font-size: 50px
    }

    ul {
        list-style: none;

    }

    ul li a {
        text-decoration: none;
        color: aliceblue;

    }

    ul li {
        display: inline-block;
        border-right: 1px solid #333;
        margin-left: 20px;
        padding-right: 30px;
        font-size: 30px;

    }
    </style>
</head>

<body>
    <h1 align="center"><img src="logoo.jpeg" height="90px">NSWC BILLS COMPLAINT SYSTEM</h1>
    <div align="center" style="background: #0A1172">
        <ul>
            <li>Home</li>
            <li><a href="aboutus.html">About Us</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="faqs.html">FAQs</a></li>
        </ul>
    </div>
    <form id="form1" name="form1" method="post" action="branch.php">
        <table width="500" align="center">
            <tr>
                <td colspan="2" bgcolor="#0000FF">
                    <h1 align="center">Branch's Details</h1>
                </td>
            </tr>
            <tr>
                <td width="140">
                    <div align="right"><strong>BranchNumber </strong></div>
                </td>
                <td width="300"><label>
                        <input type="text" name="branchNo" size="50" />
                    </label></td>
            </tr>
            <tr>
                <td>
                    <div align="right"><strong>BranchName </strong></div>
                </td>
                <td width="300"> <input type="text" name="branchName" size="50" /></td>
            </tr>
            <tr>
                <td>
                    <div align="right"><strong>Location</strong></div>
                </td>
                <td width="300"><select name="location">
                        <option value="">select location</option>
                        <option value="kenyan">kampala</option>
                        <option value="ugandan">wakiso</option>
                        <option value="ugandan">wakiso</option>
                        <option value="ugandan">mukono</option>
                        <option value="ugandan">jinja</option>
                        <option value="ugandan">others</option>
                    </select></td>
            </tr>
            <tr>
                <td>
                    <div align="right"><strong>Address</strong></div>
                </td>
                <td width="300"><label>
                        <input type="text" name="address" size="50" />
                    </label></td>
            </tr>
            <tr>
                <td bgcolor="#0000FF"><input type="reset" name="rest" value="reset" /> </td>
                <td bgcolor="#0000FF"><input name="submit" type="submit" id="submit" value="Submit" /></td>
            </tr>
        </table>
    </form>
</body>

</html>