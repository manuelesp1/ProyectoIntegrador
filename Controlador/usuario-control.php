<?php 
session_start();
require_once("../Modelo/usuario_modelo.php");

if(isset($_POST['submit'])){
    $accion = $_POST['accion'];

    
    if($accion == 'verificar-usuario'){
        $nombre = $_POST['nombre'];
        $contraseña = $_POST['contraseña'];
        $datos = new Usuario_modelo();
        $usuario = $datos->verificar_usuario($nombre, $contraseña);
        $_SESSION['usuario'] = $usuario;

        if($_SESSION['usuario']['tipo'] == 'padre'){
            header("location: ./../index.php");
        }
        else if($_SESSION['usuario']['tipo'] == 'administracion'){
            header("location: ./../Vista/admin-pendiente.php");
        }
        else if($_SESSION['usuario']['tipo'] == 'gerencia'){
            header("location: ./../Vista/gerencia-pendiente.php");
        }
        else{
            header("location: ./../index.php");
        }
    }
}



// include('conexion.php');

// $nombre = mysqli_real_escape_string($link, $_POST['nombre']);
// $contraseña = mysqli_real_escape_string($link, $_POST['contraseña']);

// $consulta = "select*from padre where nombres ='$nombre' and contraseña = '$contraseña'";

// $result = mysqli_query($link, $consulta);
// $row = mysqli_fetch_array($result); 

// if(mysqli_num_rows($result) != 0){
// 	$_SESSION['nombre'] = $row['nombres'];
// 	$_SESSION['tipo'] = $row['tipo'];

// 	if($_SESSION['tipo'] == 'administracion'){
// 		header("Location: ./../Vista/admin-pendiente.php");
// 	}
// 	else if($_SESSION['tipo'] == 'gerencia'){
// 		header("Location: ./../Vista/gerencia-pendiente.php");
// 	}
// 	else{
// 		header("Location: ./../index.php");
// 	}
// }
// else{
// 	header("Location: ./../index.php");
// }

// mysqli_free_result($result);
// mysqli_close($link);

 ?>