<?php
session_start();
if(!isset($_SESSION['LOGGED_IN'])){
  header('location: login.php');
}
require './db.php';
require './functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start Tech Product Manager</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container-fluid header-container">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Start Tech Product Manager</a>
    <?php if(isset($_SESSION['LOGGED_IN'])){
      ?>
      <span><?php echo $_SESSION['LOGGED_IN']; ?></span>
      <a href="logout.php">Logout</a>
      <?php 
    } ?>
  </div>
</nav>
</div>