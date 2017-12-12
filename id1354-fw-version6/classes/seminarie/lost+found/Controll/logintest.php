<?php
//session_start();
//include 'dbh.php';bh;
use seminarie/Model/dbh;
$username = $_POST['uid'];
$password = $_POST['psw'];

$sql= "SELECT * FROM logintable WHERE uid= '$username' AND psw='$password'";
$result = mysqli_query($conn, $sql); 
/*creating a row == equal to the result from the database if it got a resultfrom the sql-statement*/
 if (!$row= mysqli_fetch_assoc($result))
{
	echo "Your username or/and password is incorrect";
} 
else{ 
	$_SESSION['id']=$row['id'];
	$_SESSION['user']=$row['uid'];
	$_SESSION['psw']=$row['psw'];
	echo" Your are now logged in";
	//sleep(2);
	//header("Location: logins.php");
}
header("Location: /id1354-fw-version6/seminarie/View/LoginPage");