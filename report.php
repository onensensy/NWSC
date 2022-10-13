<?php
session_start();

include("nswc_connect.php");

$sql = "SELECT * from complaintform where status !='Handled'";
$result=$conn->prepare($sql);
$result->execute();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Admin Page</title>
</head>

<body>
    <a href="index.php">
        <h1 class="index"></h1>
    </a>
    <h1><img src="logoo.jpeg" height="90px">NWSC BILLS COMPLIANT SYSTEMS</h1>
    <div align="center" style="background: #0A1172">
        <ul>
            <li>Home</li>
            <li><a href="aboutus.html">About Us</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="faqs.html">FAQs</a></li>
        </ul>
    </div>
    <h3 id="User">List of Unhandled reports</h3>
    <table>
        <th>Complaint Number</th>
        <th>Complaint Type</th>
        <th>Action</th>
        <th></th>
        <?php while ($item=$result->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <td>
                <?php echo $item['complaintNo']; ?>
            </td>
            </td>
            <td>
                <?php echo $item['compliantType']; ?>
            </td>
            <td>
                <?php if ($_SESSION['userType']!="admin") {?>
                <a href="resolve.php?complaintNo=<?php echo $item['complaintNo'] ?>"><button>Resolve</button></a>
                <?php }?>
            </td>
        </tr>
        <hr>
        <?php } 
$sql = "SELECT * from complaintform where status ='Handled'";
$result=$conn->prepare($sql);
$result->execute();
        ?>
    </table><br><br>
    <br>
    <h3 id="User">List of Unhandled reports</h3>
    <table>
        <th>Complaint Number</th>
        <th>Date</th>
        <th>Staff Incharge</th>
        <th>Resolution</th>
        <th>Status</th>
        <th>Complaint Type</th>
        <?php while ($item=$result->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <td>
                <?php echo $item['complaintNo']; ?>
            </td>
            <td>
                <?php echo $item['date']; ?>
            </td>
            <td>
                <?php echo $item['staffId']; ?>
            </td>
            <td>
                <?php echo $item['resolution']; ?>
            </td>
            <td>
                <?php echo $item['status']; ?>
            </td>
            <td>
                <?php echo $item['compliantType']; ?>
            </td>
        </tr>
        <?php } ?>
        <hr>
    </table>
</body>

</html>