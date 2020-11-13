<?php 
require_once("../Modelo/padre_modelo.php");

if(isset($_POST['submit'])){
    $accion = $_POST['accion'];

    if($accion == 'agregar-padre'){
        $dni = $_POST['dni'];
        $nombre = $_POST['nombre'];
        $apepat = $_POST['apepat'];
        $apemat = $_POST['apemat'];
        $telefono = $_POST['telef'];
        $direccion = $_POST['direccion'];
        $correo = $_POST['correo'];
        $contraseña = $_POST['contraseña'];
        $rol = $_POST['rol'];
        echo $dni;
        echo $nombre;
        echo $apepat;
        echo $apemat;
        echo $telefono;
        echo $direccion;
        echo $correo;
        echo $contraseña;
        echo $rol;

        $padre = new Padre_modelo();
        $padre->agregar_padre($dni, $nombre, $apepat, $apemat, $telefono, $direccion, $correo, $contraseña, $rol);
        header("location: ./../index.php");
    }
}





 ?>