<?php 
include('conexion.php');
$nombre = mysqli_real_escape_string($link,$_POST['nombre']);
$apepat = mysqli_real_escape_string($link,$_POST['apepat']);
$apemat = mysqli_real_escape_string($link,$_POST['apemat']);
$correo = mysqli_real_escape_string($link,$_POST['correo']);
$contraseña = mysqli_real_escape_string($link,$_POST['contraseña']);
$tipo = mysqli_real_escape_string($link,$_POST['tipo']);

mysqli_query($link, "insert into padre (nombres, ap_materno, ap_paterno, correo, contraseña, tipo) values ('$nombre', '$apepat', '$apemat', '$correo', '$contraseña', '$tipo')");

header("Location: ../index.php");

mysqli_close($link);
 ?>