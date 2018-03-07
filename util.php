<?php

function writeAppLog($msg = "no msg"){
	date_default_timezone_set('America/Los_Angeles');
	$date_str = date("H:i:s");
	$msg = "[".$date_str."]: ".$msg;
	//Save string to log, use FILE_APPEND to append.
	file_put_contents('./logs/log_'.date("j.n.Y").'.txt', $msg, FILE_APPEND);
}

function getConneciton(){
	// build connection
	$conn = new mysqli("localhost", "app", "app", "cmpe226_team_project");

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	return $conn;
}

function queryAll($tableName){
	$conn = getConneciton();
	if($conn == NULL){
		return NULL;
	}
	$sql = "SELECT * FROM $tableName";
	$result = $conn->query($sql);

	$conn->close();
	return $result;
}

function queryBySQL($sql) {
	$conn = getConneciton();
	if($conn == NULL){
		return NULL;
	}
	$result = $conn->query($sql);

	$conn->close();
	return $result;
}


?>
