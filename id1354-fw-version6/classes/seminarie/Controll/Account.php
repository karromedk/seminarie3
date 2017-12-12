<?php
namespace seminarie\Controll;

require_once('classes/seminarie/Model/dbh.php');

class Account{

	private $conn;

	public function __construct(){
		$dbh = new \seminarie\Model\dbh();
		$this->conn = $dbh->getConn();
	}

	function getLogin($uid, $pwd){

		$uid = mysqli_real_escape_string($this->conn, $uid);

		$sql= "SELECT * FROM logintable WHERE uid= '$uid'";
		$result = mysqli_query($this->conn, $sql);

		if (mysqli_num_rows($result)==1){
			$result = mysqli_fetch_assoc($result);

			if(password_verify($pwd, $result['pwd'])){
				return $result;
			} else {
				return null;
			}

		} else {
			return null;
		}
		/*creating a row == equal to the result from the database if it got a resultfrom the sql-statement*/
	}
	function createAccount($uid,$pwd) {
		if(!preg_match('/^[a-z0-9åäöA-ZÅÄÖØÆæø]{2,20}$/', $uid)) {
			return 'The username is invalid.';
		}

		if(strlen($pwd)<4){
			return 'Password is to short';
		}

		$sql= "SELECT * FROM logintable WHERE uid= '$uid'";
		$result = mysqli_query($this->conn, $sql);
		
		if (mysqli_num_rows($result) !== 0){
			return 'username already exists';
		}

		$pwd=password_hash($pwd, PASSWORD_DEFAULT);

		$sql= "INSERT INTO logintable (uid, pwd) VALUES ('$uid', '$pwd')";
		mysqli_query($this->conn, $sql);

		return true;
	}
}