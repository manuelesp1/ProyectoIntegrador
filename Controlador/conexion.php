<?php 

$dbhost="127.0.0.1:3306";
$dbuser="root";
$dbpass="";
$dbname="proyectoleona3";

$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$link){
	die("conexion fallida: ".mysqli_connect_error());
}

 ?>