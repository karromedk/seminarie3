<?php
session_start();
include 'dbh.php';
$username = $_POST['uid'];
$password = $_POST['psw'];
// echo $username;
//echo $password;

$sql= "INSERT INTO logintable (uid, psw) VALUES ('$username', '$password')";
$result = mysqli_query($conn, $sql);
header("Location: tasty.html?=registred");
// titta runt 1h