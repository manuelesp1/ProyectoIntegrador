<?php 
session_start();
include('conexion.php');

$nombre = mysqli_real_escape_string($link, $_POST['nombre']);
$contraseña = mysqli_real_escape_string($link, $_POST['contraseña']);

$consulta = "select*from padre where nombres ='$nombre' and contraseña = '$contraseña'";

$result = mysqli_query($link, $consulta);
$row = mysqli_fetch_array($result); 

if(mysqli_num_rows($result) != 0){
	$_SESSION['nombre'] = $row['nombres'];
	$_SESSION['tipo'] = $row['tipo'];

	if($_SESSION['tipo'] == 'administracion'){
		header("Location: ./../Vista/admin.php");
	}
	else{
		header("Location: ./../index.php");
	}
}
else{
	header("Location: ./../index.php");
}

mysqli_free_result($result);
mysqli_close($link);

 ?>