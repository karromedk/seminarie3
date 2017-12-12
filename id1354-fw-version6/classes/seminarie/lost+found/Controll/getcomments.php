<?php
class commensection{
include 'dbh';

function getComments($recipe)
{
	$list_of_comments = array();

	$sql="SELECT * FROM comments WHERE recipe = '" . $recipe . "'";
	$result=mysqli_query($conn,$sql);
	while($row= mysqli_fetch_assoc($result)){

		array_push($list_of_comments, $row);

		/*
		echo"<div class='c1'><p>";
		echo $row['uid']."<br>";
		echo $row['date']."<br>";
		echo nl2br($row['message']."<br>");
			if (isset($_SESSION['user']) and $_SESSION['user'] == $row['uid']) {
				echo "</p>
				<form class='delete-form' action= 'deletecomments.php' method='POST' >
				<input type='hidden' name='cid' value='".$row['cid']."'>
				<button type='submit' name=commentDelete>Delete</button>
				</form>";
			} echo "</div>";
		*/
	}
function deleteComments($commentDelete, $cid){

			$sql = "DELETE FROM comments WHERE cid='$cid'";
			$result = mysqli_query($this->conn, $sql);
	}
function setComments($commentSubmit, $uid, $date, $message, $recipe){


			//Insert into the database
			$sql = "INSERT INTO comments (uid, recipe, date, message) VALUES ('$uid', '$recipe', '$date', '$message')";
			$result = mysqli_query($this->conn, $sql);
	}
}