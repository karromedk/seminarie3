<?php
namespace seminarie\Controll;

require_once('classes/seminarie/Model/dbh.php');

class Login{

	private $conn;

	public function __construct(){
		$dbh = new \seminarie\Model\dbh();
		$this->conn = $dbh->getConn();
	}

	function getLogin($uid, $psw){

		$sql= "SELECT * FROM logintable WHERE uid= '$uid' AND psw='$psw'";
		$result = mysqli_query($this->conn, $sql);

		if (mysqli_num_rows($result)==1){
			return mysqli_fetch_assoc($result);
		} else{
			return null;
		}
		/*creating a row == equal to the result from the database if it got a resultfrom the sql-statement*/
	}
}