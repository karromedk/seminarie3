<?php
include 'dhd.inc.php';
if(isset($_POST['commentSubmit'])){
	$uid= $_POST['uid'];
	$date= $_POST['date'];
	$recipe= $_POST['recipe'];
	$message= $_POST['message'];
	
	$sql="INSERT INTO comments (uid, date, recipe, message) VALUES ('$uid', '$date', '$recipe', '$message')";
	$result=mysqli_query($conn,$sql);
	if($recipe=='meatballs'){
				header('Location: ../meatballs.php');

	} elseif($recipe=='panncakes'){
				header('Location: ../panncakes.php');
			} 

}


