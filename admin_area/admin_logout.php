<?php 

session_start();
session_unset();
session_destroy();
echo "<script>alert('You need to login in again')</script>";
echo "<script>window.open('./admin_login.php','_self')</script>"


?>