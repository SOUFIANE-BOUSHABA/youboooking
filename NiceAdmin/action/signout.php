<?php 
unset($_SESSION['role_id']);
session_destroy();
  header('location:../login.php');

?>