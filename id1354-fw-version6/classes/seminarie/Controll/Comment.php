<?php
namespace seminarie\Controll;
require_once('classes/seminarie/Model/dbh.php');

class Comment{
	
	private $conn;

	public function __construct(){
		$dbh = new \seminarie\Model\dbh();
		$this->conn = $dbh->getConn();
	}

	function getComments($recipe)
	{
		$list_of_comments = array();

		$sql="SELECT * FROM comments WHERE recipe = '" . $recipe . "'";
		$result=mysqli_query($this->conn,$sql);

		while($row= mysqli_fetch_assoc($result)){
			array_push($list_of_comments, $row);
		}

		return $list_of_comments;
	}

	function deleteComment($uid, $cid){

		$sql = "DELETE FROM comments WHERE cid=$cid AND uid='$uid'";
		$result = mysqli_query($this->conn, $sql);
	}

	function saveComment( $uid, $date, $message, $recipe){

		// escape user-provided parameters
		$recipe = mysqli_real_escape_string($this->conn, $recipe);
		$message = mysqli_real_escape_string($this->conn, $message);

		//Insert into the database
		$sql = "INSERT INTO comments (uid, recipe, date, message) VALUES ('$uid', '$recipe', '$date', '$message')";
		mysqli_query($this->conn, $sql);
	}
}