<?php
include_once "config.php";
error_reporting(0);
session_start();
if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    if ($password == $cpassword) {
        $sql = "SELECT * FROM users WHERE email='$email' AND password = '$password'";
        $result = mysqli_query($connection, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO users (username,email,password) 
            VALUES ('$username','$email','$password')";
            $result = mysqli_query($connection, $sql);
            if ($result) {
                echo "<script>alert('WOW... User Register Completed.')</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Oops.. Sorry something went wrong.')</script>";
            }
        } else {
            echo "<script>alert('opps... Email Already Exist')</script>";
        }
    } else {
        echo "<script>alert('Password not matched')</script>";
    }

    # code...
}

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7
.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="styles.css">

    <title>Register Form - Pure Coding</title>
</head>

<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font: size 2rem;font: weight 800;">Register</p>
            <div class="input-group">
                <input type="text" placeholder="User name" name="username" value="<?php echo $username ?>" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="<?php echo $email ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password'] ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword'] ?>" required>
            </div>
            <div class="input-group">
                <button class="btn" name="submit">Register</button>
            </div>
            <p class="login-register-text">Have a account <a href="index.php">Log in Here</a></p>
        </form>
    </div>
</body>

</html>