<?php 
session_start();

?>
<?php 
if ($_SESSION['userType']=="Admin") {?>
<!-- Admin -->
<div align="center" style="background: #0A1172">
    <ul>
        <li>Home</li>
        <li><a href="report.html">Complaint Reports</a></li>
        <li><a href="staff.html">Add User</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</div>
<?php } elseif($_SESSION['userType']=="staff"){ ?>
<!-- Users -->
<div align="center" style="background: #0A1172">
    <ul>
        <li>Home</li>
        <li><a href="complain.php">Log Complaint</a></li>
        <li><a href="billing.php">Billing Details</a></li>
        <li><a href="faqs.html"></a></li>
    </ul>
</div>
<?php }?>