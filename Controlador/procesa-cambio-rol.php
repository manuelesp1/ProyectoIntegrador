<?php
    session_start();
    include('conexion.php');

    $id_padre = mysqli_real_escape_string($link, $_POST['id_padre']);
    $nuevo_rol = mysqli_real_escape_string($link, $_POST['nuevo_rol']);

    $update = mysqli_query($link, "update padre set tipo = '$nuevo_rol' where id_padre = '$id_padre'");


    header("Location: ./../Vista/cambiar-rol.php");


?>