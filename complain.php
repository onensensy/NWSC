<?php 
session_start();
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

    -->
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
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
    <form id="form1" name="form1" method="post" action="complaint_form.php">
        <table width="500" align="center">
            <tr>
                <td colspan="2" bgcolor="#0000FF">
                    <h1 align="center">Complaint Form</h1>
                </td>
            </tr>
            <tr>
                <td width="178">
                    <div align="right"><strong>Complaint Number </strong></div>
                </td>
                <td width="300"><label>
                        <input type="text" value="<?php echo rand(100,300);?>" name="complaintNo" size="50" readonly />
                    </label></td>
            </tr>
            <tr>
                <td>
                    <div align="right"><strong>Date</strong></div>
                </td>
                <td width="300"> <label>
                        <input type="date" name="date" id="date" size="50" />
                    </label></td>
            </tr>
            <tr>
                <td>
                    <div align="right"><strong>staff ID </strong></div>
                </td>
                <td width="300"><label>
                        <input type="text" name="staffId" size="50" />
                    </label></td>
            </tr>
            <tr>
                <td height="58">
                    <div align="right"><strong>Complaint </strong></div>
                </td>
                <td width="300"><label>
                        <input type="text" name="compliantType" size="50" />
                    </label></td>
            </tr>
            <tr>
                <td height="53">
                    <div align="right"><strong>Status</strong></div>
                </td>
                <td width="300"><label>
                        <input type="radio" value="Handled" name="status" size="50" />Handled<br>
                        <input type="radio" value="Not Handled" name="status" size="50" />Not Handled
                    </label>
                </td>
            </tr>
            <tr>
                <td height="55" bgcolor="#0000FF"><input type="reset" name="rest" value="reset" /> </td>
                <td bgcolor="#0000FF"><input name="submit" type="submit" id="submit" value="Submit" /></td>
            </tr>
        </table>
    </form>
</body>

</html>