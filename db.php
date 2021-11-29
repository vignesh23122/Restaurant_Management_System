<?php
// Enter your Host, username, password, database below.

// I left password empty because i do not set password on 3diots.unaux.com.
$con = mysqli_connect("sql205.unaux.com","unaux_28726978","m1ig9xl7","unaux_28726978_sign_up");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>