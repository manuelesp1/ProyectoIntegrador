<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <a href="#"><li>Reporte</li></a>
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