<?php
namespace seminarie\Model;

class dbh{
public function __construct(){}

	function getConn(){
		$conn = mysqli_connect("localhost", "tastyrecipes", "KZflEMIVcQKsQKkL", "tastyrecipes");
		if(!$conn) {
			die("Connection failed:".mysqli_connect_error());
		}

		return $conn;
	}
}