<?php
  session_start();
  error_reporting(0);
  unset($_SESSION['u_name']);
  echo "<script>alert('Log Out!!');window.location.href='adminlogin.php';</script>";
  
?>