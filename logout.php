<?php
   session_start();
   session_destroy();
    header('location:http://localhost/userregistration/login.php');
?>