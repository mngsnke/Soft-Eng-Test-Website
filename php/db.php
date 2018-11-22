<?php
function Connect(){
  $host = "localhost";
  $root = "root";
  $password = "";
  $dbname = "soft_eng";
  $connect = new mysqli($host,$root,$password,$dbname) or die("Connection Error: " . $connect->error);
}
function Disconnect($connect){
  $connect->close();
}
 ?>
