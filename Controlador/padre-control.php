<?php 
require_once("../Modelo/padre_modelo.php");
$nombre = $_POST['nombre'];
$apepat = $_POST['apepat'];
$apemat = $_POST['apemat'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
$tipo = $_POST['tipo'];

$padre = new Padre_modelo();
$padre->agregar_padre($nombre, $apepat, $apemat, $correo, $contraseña, $tipo);
header("location: ./../index.php");




 ?>