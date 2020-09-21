<?php 

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="bdColegio";

$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$link){
	die("conexion fallida: ".mysqli_connect_error());
}

 ?>