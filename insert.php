<?php
$username=$_POST['uname'];
$password=$_POST['password'];

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'logindb');

$q="INSERT INTO user(username ,password) values('$username',$password)";
$status=mysqli_query($con,$q);
mysqli_close($con);
?>

<html>
  <head>
     <title>Insertion</title>
  </head>
  <body>
     <h1>Registration</h1>
      <p><?php if($status==1)
                  echo "Registration Successful";
               else
                   echo "Registration Failed";
         ?></p>
  </body>
</html>