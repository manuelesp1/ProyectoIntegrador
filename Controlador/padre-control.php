<?php 
require_once("../Modelo/padre_modelo.php");

class Padre_control{
    public function mostrar_padre($id_padre){
        $datos = new Padre_modelo();
        $padre = $datos->mostrar_padre($id_padre);
        return $padre;
    }
}




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

    if($accion == 'editar_datos_padre'){
        $dni = $_POST['dni'];
        $nombre = $_POST['nombre'];
        $apepat = $_POST['apepat'];
        $apemat = $_POST['apemat'];
        $telefono = $_POST['telef'];
        $direccion = $_POST['direccion'];
        $correo = $_POST['correo'];
        $contraseña = $_POST['contraseña'];
        $id_padre = $_POST['id_padre'];
        echo $dni;
        echo $nombre;
        echo $apepat;
        echo $apemat;
        echo $telefono;
        echo $direccion;
        echo $correo;
        echo $contraseña;
        echo $id_padre;

        $padre = new Padre_modelo();
        $padre->editar_padre($dni, $nombre, $apepat, $apemat, $telefono, $direccion, $correo, $contraseña, $id_padre);
        header("location: ./../index.php");
    }

}





 ?>