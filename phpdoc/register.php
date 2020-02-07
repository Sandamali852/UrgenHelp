<?php
include('conn.php');
$email = "";
if (isset($_POST['Submit'])) {
    
    $username = $_POST['username'];
    $password =  sha1($_POST['password']);
    $cpassword = sha1($_POST['cpassword']);
    $email = $_POST['email'];

  	$sql_e = "SELECT * FROM login WHERE username='$username'";
    $res_e = mysqli_query($db, $sql_e);
     

    
    if (mysqli_num_rows($res_e) > 0) {
        $name_error = "Sorry... Username already exist";

       

    }
    else{
        if ($password == $cpassword) {
            $name_error = "Registration successfully done";
            mysqli_query($conn, " INSERT INTO `login` (`username`,`password`,`email`) VALUE ('$username','$password','$email')");
            
        }
            header('location:login.php');
        
    }
   



    
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>URGENT HELP-register</title>
    <link rel="icon" href="logo.png">
    <link rel="stylesheet" href="registerstyle.css" type="text/css"><!--inserting style sheet-->


</head>

<body>
    <div class="registerback"><!--inserting background image to the register page-->
        <div class="register-box"><!--Inserting register box-->
            <img src="register.png" class="regist">
            <h1></h1>
            <form class="registeruser" method="post" action=""><!--post method is used to send dat to the database-->
                <p>User name</p>
                <input type="text" name="username" placeholder="Enter Username"><!--atributes of register entity-->
                <p>Password</p>
                <input type="password" name="password" placeholder="Enter password">
                <p>Confirm Password</p>
                <input type="password" name="cpassword" placeholder="confirm password">
                <p>Email Address </p>
                <input type="email" name="email" placeholder="Enter email">

                <button input type="submit" name="Submit" value="Register" >REGISTER
                 </button>

                 <p><?php 
                 if(isset($name_error)){
                   echo $name_error;
                 }
                 
                 ?></p>
            </form>


            
        </div>
    </div>
</body>
</html>
