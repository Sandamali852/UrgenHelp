<?php
session_start();
include('conn.php');
$error ="";

if (isset($_POST['Submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "<br>Please insert only letters or numbers.";


    }else{
    $username = $_POST['username'];//post method used post data to the database
    $password = sha1($_POST['password']) ;//sha1 command is used to encript the pass word

    $login_details = mysqli_query($conn, " SELECT * FROM `login` WHERE `username`='" . $username . "' AND `password`='" . $password . "' ");//query to select username and pw
    $login_details_vals = mysqli_fetch_assoc($login_details);

    $username_val = $login_details_vals['username'];
    $password_val = $login_details_vals['password'];
   
    }

    if ($username_val == "") { //if username value is empty keep in login page
        header('location:login.php');
    } else {
        $_SESSION['username'] = $username_val;
        header('location:index.php'); 
        
    }

}
?>

<!DOCTYPE html>
<html>

<head>
    <title>urgent help-login</title>
    <link rel="icon" href="logo.png">
    <link rel="stylesheet" href="loginstyle.css" type="text/css">


</head>

<body>

      
    <div class="Login">
        <div class="Login-box">
            <img src="Login.png" class="log">
            <h1></h1>
            <form class="user" method="post" action="">
                <p>Username</p>
                <input type="text" name="username" placeholder="Enter Username">
                <p>Password</p>
                <input type="password" name="password" placeholder="Enter password">
                <input type="Submit" name="Submit" value="Login">

                <a href="register.php"> Or <u> Register here </u> </a>
            </form>
        </div>
    </div>
 


</body>

</html>