<?php 
include('conexion.php');
$dni_padre = mysqli_real_escape_string($link,$_POST['dni_padre']);
$nombre_hijo = mysqli_real_escape_string($link,$_POST['nombre_hijo']);
$appat_hijo = mysqli_real_escape_string($link,$_POST['appat_hijo']);
$apmat_hijo = mysqli_real_escape_string($link,$_POST['apmat_hijo']);
$dni_hijo = mysqli_real_escape_string($link,$_POST['dni_hijo']);

$dni_padre_del = $_FILES['dni_padre_img_del']['tmp_name'];
$dni_padre_img_del = addslashes(file_get_contents($dni_padre_del));

$dni_padre_tra = $_FILES['dni_padre_img_tra']['tmp_name'];
$dni_padre_img_tra = addslashes(file_get_contents($dni_padre_tra));

$dni_hijo_del = $_FILES['dni_hijo_img_del']['tmp_name'];
$dni_hijo_img_del = addslashes(file_get_contents($dni_hijo_del));

$dni_hijo_tra = $_FILES['dni_hijo_img_tra']['tmp_name'];
$dni_hijo_img_tra = addslashes(file_get_contents($dni_hijo_tra));

$certif = $_FILES['certificado']['tmp_name'];
$certificado = addslashes(file_get_contents($certif));

$comprob = $_FILES['comprobante']['tmp_name'];
$comprobante = addslashes(file_get_contents($comprob));

$estado = mysqli_real_escape_string($link,$_POST['estado']);

mysqli_query($link, "insert into matricula (dni_padre, dni_hijo, nombre_hijo, appat_hijo, apmat_hijo, dni_padre_img_del,dni_padre_img_tra, dni_hijo_img_del,dni_hijo_img_tra, certificado, comprobante, estado) values ('$dni_padre', '$nombre_hijo', '$appat_hijo', '$apmat_hijo', '$dni_hijo', '$dni_padre_img_del', '$dni_padre_img_tra', '$dni_hijo_img_del', '$dni_hijo_img_tra', '$certificado', '$comprobante', '$estado')");

header("Location: ./../index.php");

mysqli_close($link);
 ?>