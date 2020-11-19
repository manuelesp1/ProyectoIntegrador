<?php
    session_start();
    $id_rol = $_SESSION['usuario']['id_rol'];
    if($id_rol == 1){
        header("location: ./../index.php");
    }
    else if($id_rol == 3){
        header("location: ./gerencia.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="solicitudes">
            <p>Resumen de solicitudes: </p>
            <p>Solicitudes pendientes: </p>
            <p>Soliditudes revisadas: </p>
            <p>Solicitudes observadas: </p>
        </div>
</body>
</html>