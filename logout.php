<?php
session_start();
session_destroy();
header('location:memb_login.php'); 
exit();
?>
