<?php
include 'dhd.inc.php'; 
include 'getcomments.php';
		if (isset($_POST['commentDelete'])){
			$cid=$_POST['cid'];
			$sql="DELETE FROM comments WHERE cid='$cid'";
			$result=mysqli_query($conn,$sql);
			
			if(isset($recipe["meatballs"])){
				header('Location: ../meatballs.php');

	} else {
				header('Location: ../panncakes.php');
			} 
		}

