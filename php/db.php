<?php
function Connect(){
	$host = "localhost";
	$user = "user";
	$password = "";
	$dbname = "softeng";
	$connect = new mysqli($host,$user,$password,$dbname) or die("Connection Failure: %s\n". $connect->error);
	return $connect;
}
function Disconnect($connect){
	$connect->close();
}
?>