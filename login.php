<?php
if (isset($_GET['userType'])) {
    // code...

$_SESSION['userType']=$_GET['userType'];
}

include("nswc_connect.php");

    if(isset($_POST['signin'])){
        if($_POST['email'] != "" || $_POST['password'] != ""){

         /*   $email = $_POST['email'];
            $password = $_POST['password'];
                if ($usertype=='Admin') {

            $sql = "SELECT * FROM `administrator.php` WHERE `administratrId`= ? AND `administratorPassword`=? ";
                
                }elseif ($usertype=='client') {

            $sql = "SELECT * FROM `staff` WHERE `staffID`= ? AND `password`=? ";
                    
                }else{

            $sql = "SELECT * FROM `client` WHERE `clientNo`= ? AND `cPassword`=? ";

                }
            mysqli_query($con,$sql);
            $query = $conn->prepare($sql);
            $query->execute(array($email,$password));

            $row = $query->rowCount();
            $fetch = $query->fetch();
            if($row > 0) {

            // Store data in session variables
                $_SESSION["loggedin"] = true;
                $_SESSION["username"] = $username;
                $_SESSION['userType'] = $usertype;*/

                if ($_SESSION['userType']='Admin') {
                header("location: ./report.php");
                    
                }elseif ($_SESSION['userType']='client') {
                    // code...
                header("location: ./rport.html");
                }else{
                header("location: ./complain.php");
                }
            
        }else{
            echo "
                <script>alert('Please complete the required field!')</script>
                <script>window.location = 'login.php'</script>
            ";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.js

    delivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <div class="container p-5 my-5 border">
        <h2>Please login</h2>
        <form action="login.php" method="post" class="was-validated">
            <div class="mb-3 mt-3">
                <input type="hidden" name="userType" value="<?php echo $userType?>">
                <label for="Account" class="form-label">Account Number:</label><br>
                <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Password:</label><br>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="myCheck" name="remember" required>
                <label class="form-check-label" for="myCheck">I agree</label>
                <button type="submit" name="signin" class="btn btn-success">Login</button>
            </div>
        </form>
        <div class="mb-3 mt-3">
            <p style="text-align:left">Is this your first time here? Please click the link below to create an account</p>
            <a href="client.html">
                <button type="submit" class="btn btn-success">CREATE ACCOUNT</button>
            </a>
        </div>
    </div>
</body>

</html>