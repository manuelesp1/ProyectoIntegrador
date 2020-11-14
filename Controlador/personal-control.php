<?php
session_start();
require_once("../Modelo/personal_modelo.php");

    class Personal_control{
        public function mostrar_personal(){
            $datos = new Personal_modelo();
            $personal = $datos->mostrar_personal();
            return $personal;
        }

        public function datos_personal($id_trabajador){
            $datos = new Personal_modelo();
            $personal = $datos->datos_personal($id_trabajador);
            return $personal;
        }
    }

if(isset($_POST['submit'])){
    $accion = $_POST['accion'];

    if($accion == 'nuevo-personal'){
    
        $nombre = $_POST['nombre'];
        $apepat = $_POST['apepat'];
        $apemat = $_POST['apemat'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telef'];
        $contraseña = $_POST['contraseña'];
        $tipo = $_POST['tipo'];
        $personal = new Personal_modelo();
        $personal->nuevo_personal($nombre, $apepat, $apemat, $telefono, $correo, $contraseña, $tipo);
        header("location: ./../Vista/gerencia.php");
    }
    else if($accion == 'cambiar-rol'){
        $nuevo_rol = $_POST['nuevo_rol'];
        $id_trabajador = $_POST['id_trabajador'];
        $personal = new Personal_modelo();
        $personal->cambio_rol($id_trabajador, $nuevo_rol);
        header("location: ../Vista/gerencia.php");
    }
    else if($accion == 'editar_datos'){
        $nombre = $_POST['nombre'];
        $apepat = $_POST['apepat'];
        $apemat = $_POST['apemat'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telef'];
        $contraseña = $_POST['contraseña'];
        $tipo = $_POST['tipo'];
        $id_trabajador = $_POST['id_trabajador'];

        $personal = new Personal_modelo();
        $personal->editar_datos($nombre, $apepat, $apemat, $telefono, $correo, $contraseña, $tipo, $id_trabajador );
        header("location: ./../Vista/gerencia.php");
    }

    else if($accion == 'eliminar_personal'){
        $id_trabajador = $_POST['id_trabajador'];

        $personal = new Personal_modelo();
        $personal->eliminar_personal($id_trabajador);
        header("location: ./../Vista/gerencia.php");
    }
}
?>