<?php 

session_start();
session_destroy();
header('location: /groupe2/index.php');
?>