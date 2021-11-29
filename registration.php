<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration</title>
<link rel="stylesheet" href="style.css"/>
<link rel="shortcut icon" href="https://img.icons8.com/nolan/64/user-folder.png" type="image/x-icon">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

</head>
<body>
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
    $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
    $username = mysqli_real_escape_string($con,$username);
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con,$email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con,$password);
    $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result == true){
            echo "<div class='form'>
            <h3>You are registered successfully.</h3>
            <br/>Click here to <a href='login.php'>Login</a></div>";
                    }
                    elseif($result==false){echo "<div class='danger' align='center'>
                    <h3>username and email is already existed</h3>
                    <br/>Click here to <a href='registration.php'>Register</a></div>";}
                }else{
                    
                
                    ?>
<div>
<img src="logos\logo 2.png" alt="main-logo" style="height: 45px; width: 100px;" srcset=""></div>
<div class="form" align="center">
<h1>Registration</h1>
<form name="registration" autocomplete="off" method="post">
<input type="text" max="15" min="5" title="Username should be of words with numeric " name="username" placeholder="Username" required /><br>
<input type="email" name="email" placeholder="Email" required /><br>
<div>
<main>
<input type="password" name="password" id="password" placeholder="Password" 
pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
 required /> <i style="margin-left: -25px; cursor:pointer;" class="bi bi-eye-slash" id="togglePassword"></i>
</main>
</div>
<input type="submit" name="submit" value="sign up" />
</form>
<p>Already have an account? <a href='login.php'>Login </a></p>
</div>
<?php } ?>
<script src="app.js"></script>
</body>
</html>
