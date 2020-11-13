<?php 
session_start();
require_once("../Modelo/usuario_modelo.php");

if(isset($_POST['submit'])){
    $accion = $_POST['accion'];

    
    if($accion == 'verificar-usuario'){
        $correo = $_POST['correo'];
        $contraseña = $_POST['contraseña'];
        $datos = new Usuario_modelo();
        $usuario = $datos->verificar_usuario($correo, $contraseña);
        $_SESSION['usuario'] = $usuario;

        if($_SESSION['usuario'] == null){
            echo("sus datos son incorrectos");
            header("location: ./../Vista/login.html");//aqui reenvia si no coinciden las credenciales
        }

        if($_SESSION['usuario']['id_rol'] == '1'){
            header("location: ./../index.php");
        }
        else if($_SESSION['usuario']['id_rol'] == '2'){
            header("location: ./../Vista/admin-pendiente.php");
        }
        else if($_SESSION['usuario']['id_rol'] == '3'){
            header("location: ./../Vista/gerencia-pendiente.php");
        }
    }
}
 ?>