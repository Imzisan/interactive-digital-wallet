<?php
 require './model/DbConnect.php';
 function getAllRecords(){

	$conn =connect();
	$sql = $ conn-> prepare("SELECT phone,amount FROM USERS ");
	$sql->execute();
	$res=$sql->get_result();
	return $res->fetch_all(MYSQLI_ASSOC);

	}
	function getUSER($phone){
		$conn =connect();
		$sql= $conn->prepare("SELECT phone,amount FROM Users WHERE phone = ?");
		sql->bind_param("s",$phone);
		$sql->execute();
		$res =$sql-> get_result();
		return $res _> fetch_all(MYSQLI_ASSOC);

	}

?>