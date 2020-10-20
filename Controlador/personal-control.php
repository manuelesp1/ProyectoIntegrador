<?
require_once("../Modelo/personal_modelo.php");
$nombre = $_POST['nombre'];
$apepat = $_POST['apepat'];
$apemat = $_POST['apemat'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
$rol = $_POST['tipo'];
$personal = new Personal_modelo();
$personal->nuevo_personal($nombre, $apepat, $apemat, $correo, $contraseña, $tipo);
header("location: ./../index.php");
?>