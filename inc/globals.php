<?php
$conn = mysqli_connect('localhost','root', '1234', 'phpecommerce');
$loggedInUser=null;


if (isset($_SESSION['user'])) {
    $loggedInUser = $_SESSION['user'];
  }