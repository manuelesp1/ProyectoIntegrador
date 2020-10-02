<?php 

$dbhost="127.0.0.1:3307";
$dbuser="root";
$dbpass="";
$dbname="proyectoleona";

$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$link){
	die("conexion fallida: ".mysqli_connect_error());
}

 ?>