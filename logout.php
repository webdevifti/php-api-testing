<?php 

session_start();

unset($_SESSION['LOGGED_IN']);

header('location: login.php');

session_destroy();

?>