<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
    <script  type = "text/javascript"  src = "js/jquery.js" > </script>
    <title>Document</title>
</head>

<body>
    <section class="banner">
        <p>Bienvenido, <?php echo $_SESSION['nombre'] ?></p>
    </section>
    <section class="principal">
        <div class="menu">
            <ul>
                <a href="#"><li>Reporte</li></a>
                <a onclick=pendientes()><li>Solicitudes pendientes</li></a>
                <a onclick=revisados()><li>Solicitudes revisadas</li></a>
                <a onclick=observados()><li>Solicitudes observadas</li></a>
                <a href="../Controlador/logout.php"><li>Cerrar sesión</li></a>
            </ul>
        </div>
        <div id="solicitudes">
            
        </div>
    </section>

</body>
    <script>
        function pendientes() {
            $.post("admin-pendiente.php", {})
                    .done(function (data) {
                        $ ('#solicitudes'). html (data);
//                 console.log (datos);
                    });
        }
    </script>
</html>