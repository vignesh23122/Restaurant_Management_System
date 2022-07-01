<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<link rel="stylesheet" href="./styles/loginstyle.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
<link rel="shortcut icon" href="https://img.icons8.com/fluent/48/000000/login-rounded-right.png" type="image/x-icon">

</head>
<body>
<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
    $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
    $username = mysqli_real_escape_string($con,$username);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con,$password);
    //Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
    $result = mysqli_query($con,$query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
        if($rows==1){
        $_SESSION['username'] = $username;
            // Redirect user to index.php
        header("Location: index.php");
         }else{
            function function_alert($message){
                echo "<script>alert('$message');</script>";
                echo "<div class='alet'>Click here to  <a href='login.php'>Login</a> </div>";
            }
            function_alert("Username or Password is incorrect");
        
        }
    }else{
       
        
?>
<div class="lgtext">
    <h1>Fri-ed</h1>
</div>

<div class="form">
        <h1>Log In</h1>
        <form class="form-login" autocomplete="off" action="" method="post" name="login">
            <legend>Username</legend>
            <input type="text" name="username" id="username" 
            placeholder="username" required>
            <legend>password</legend>
            <main><input type="password" name="password" id="password" placeholder="password" required>
            <i style="margin-left: -25px; cursor:pointer;" class="bi bi-eye-slash" id="togglePassword"></i>
        </main>
            
            <button class="btn">Login</button>
        </form>




        <p>Not registered yet? <a href='registration.php'>Register Here</a></p>
        </div>
<?php } ?>
<script src="app.js">
</script>
</body>
</html>
