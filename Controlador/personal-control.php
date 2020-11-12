<?php
session_start();
require_once("../Modelo/personal_modelo.php");

if(isset($_POST['submit'])){
    $accion = $_POST['accion'];

    if($accion == 'nuevo-personal'){
    
        $nombre = $_POST['nombre'];
        $apepat = $_POST['apepat'];
        $apemat = $_POST['apemat'];
        $correo = $_POST['correo'];
        $contraseña = $_POST['contraseña'];
        $tipo = $_POST['tipo'];
        $personal = new Personal_modelo();
        $personal->nuevo_personal($nombre, $apepat, $apemat, $correo, $contraseña, $tipo);
        $_SESSION['mostrar-personal'] = $personal;
        header("location: ./../Vista/gerencia-pendiente.php");
    }
    else if($accion == 'cambiar-rol'){
        $nuevo_rol = $_POST['nuevo_rol'];
        $id_padre = $_POST['id_padre'];
        $personal = new Personal_modelo();
        $personal->cambio_rol($id_padre, $nuevo_rol);
        header("location: personal-control.php?accion=mostrar-personal");
    }
    
}else{
    $accion = $_GET['accion'];

    if($accion == 'mostrar-personal'){
        $datos = new Personal_modelo();
        $personal = $datos->mostrar_personal();
        $_SESSION['mostrar-personal'] = $personal;
        header("location: ./../Vista/cambiar-rol.php");
    }
}
?>