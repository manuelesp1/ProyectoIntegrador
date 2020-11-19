<?php
    session_start();
    $id_rol = $_SESSION['usuario']['id_rol'];
    if($id_rol == 1){
        header("location: ./../index.php");
    }
    else if($id_rol == 2){
        header("location: ./administracion.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css" />
    <script  type = "text/javascript"  src = "js/jquery.js" > </script>
    <link rel="stylesheet" href="css/admin.css">
    <title>Document</title>
</head>
<body>
    <section class="banner">
        
    </section>
    <section class="principal">
        <div class="menu">
            <ul>
                <a href="#"><a align="center"><img src="img/escudo-laLetona-b.png" alt="" width="20%" height="20%" ></a><li>Reporte</li></a>
                <a onclick=pendientes()><li>Solicitudes pendientes</li></a>
                <a onclick=aprobados()><li>Solicitudes aprobadas</li></a>
                <a onclick=rechazados()><li>Solicitudes rechazadas</li></a>
                <a onclick=nuevo_personal()><li>Nuevo personal</li></a>
                <a onclick=cambiar_rol()><li>Editar personal</li></a>

                <a href="../Controlador/logout.php"><li>Cerrar sesión</li></a>
            </ul>
        </div>
        <div id="solicitudes">
            <p>Resumen de solicitudes: </p>
            <p>Solicitudes pendientes: </p>
            <p>Soliditudes revisadas: </p>
            <p>Solicitudes observadas: </p>
        </div>
    </section>
</body>
    <script>
        function pendientes() {
            $.post("gerencia-pendiente.php", {})
                    .done(function (data) {
                        $ ('#solicitudes'). html (data);
//                 console.log (datos);
                    });
        }
        function aprobados() {
            $.post("gerencia-aprobado.php", {})
                    .done(function (data) {
                        $ ('#solicitudes'). html (data);
//                 console.log (datos);
                    });
        }
        function rechazados() {
            $.post("gerencia-rechazado.php", {})
                    .done(function (data) {
                        $ ('#solicitudes'). html (data);
//                 console.log (datos);
                    });
        }
        function nuevo_personal() {
            $.post("asignar-rol.php", {})
                    .done(function (data) {
                        $ ('#solicitudes'). html (data);
//                 console.log (datos);
                    });
        }
        function cambiar_rol() {
            $.post("cambiar-rol.php", {})
                    .done(function (data) {
                        $ ('#solicitudes'). html (data);
//                 console.log (datos);
                    });
        }
    </script>
</html>