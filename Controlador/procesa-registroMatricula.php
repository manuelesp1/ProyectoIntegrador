<?php 
include('conexion.php');
$dni_padre = mysqli_real_escape_string($link,$_POST['dni_padre']);
$nombre_hijo = mysqli_real_escape_string($link,$_POST['nombre_hijo']);
$appat_hijo = mysqli_real_escape_string($link,$_POST['appat_hijo']);
$apmat_hijo = mysqli_real_escape_string($link,$_POST['apmat_hijo']);
$dni_hijo = mysqli_real_escape_string($link,$_POST['dni_hijo']);
$dni_padre_img_del = mysqli_real_escape_string($link,$_POST['dni_padre_img_del']);
$dni_padre_img_tra = mysqli_real_escape_string($link,$_POST['dni_padre_img_tra']);
$dni_hijo_img_del = mysqli_real_escape_string($link,$_POST['dni_hijo_img_del']);
$dni_hijo_img_tra = mysqli_real_escape_string($link,$_POST['dni_hijo_img_tra']);
$certficado = mysqli_real_escape_string($link,$_POST['certificado']);
$acta_directorial = mysqli_real_escape_string($link,$_POST['acta_directorial']);
$comprobante = mysqli_real_escape_string($link,$_POST['comprobante']);


// $consulta = mysqli_query($link, "select * from usuario where dni = '$nomb_usuario'");


mysqli_query($link, "insert into matricula (dni_padre, dni_hijo, nombre_hijo, appat_hijo, apmat_hijo,  dni_padre_img_del, dni_padre_img_tra, dni_hijo_img_del, dni_hijo_img_tra, certificado, acta_directorial, comprobante) values ('$dni_padre', '$nombre_hijo', '$appat_hijo', '$apmat_hijo', '$dni_hijo', '$dni_padre_img_del', '$dni_padre_img_tra', '$dni_hijo_img_del', '$dni_hijo_img_tra', '$certificado', '$acta_directorial', '$comprobante')");

header("Location: ./../index.php");

mysqli_close($link);
 ?>