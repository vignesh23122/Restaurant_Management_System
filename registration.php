<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration</title>
<link rel="stylesheet" href="./styles/loginstyle.css"/>
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
                    <h3>username or email is already existed</h3>
                    <br/>Click here to <a href='registration.php'>Register</a></div>";}
                }else{
                    
                
                    ?>
<div class="lgtext">
    <h1>Fri-ed</h1>
</div>
<div class="register">
    <h1>Sign up </h1>
    <form  class="signup-form" >
        <legend>Username</legend>
        <input type="text" name="username" id="username" placeholder="username" required>
        <legend>Emain</legend>
        <input type="email" name="email" id="email" required placeholder="Email">
        <legend>password</legend>
        <div>
            <input type="password" name="password" id="password" placeholder="Password" 
pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
 required />
 <i style="margin-left: -25px; cursor:pointer;" class="bi bi-eye-slash" id="togglePassword"></i>
                </div>
<button class="btn">signup</button>
    </form>
    <p>Already have an account? <a href='login.php'>Login </a></p>
</div>

<?php } ?>
<script src="app.js"></script>
</body>
</html>
