<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
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
                <a href="gerencia-pendiente.php"><li>Solicitudes pendientes</li></a>
                <a href="gerencia-aprobado.php"><li>Solicitudes aprobadas</li></a>
                <a href="gerencia-rechazado.php"><li>Solicitudes rechazadas</li></a>
                <a href="asignar-rol.html"><li>Nuevo personal</li></a>
                <a href="cambiar-rol.php"><li>Cambiar rol</li></a>
                <a href="../Controlador/logout.php"><li>Cerrar sesión</li></a>

            </ul>
        </div>
        <div class="reportes">
            <table border=1>
                <tr>
                    <td>ID</td>
                    <td>Nombre</td>
                    <td>Apellido materno</td>
                    <td>Apellido paterno</td>
                    <td>Correo</td>
                    <td>Rol</td>
                    <td>Cambiar rol</td>
                </tr>
                <?php
        
        
        include("../Controlador/conexion.php");
        $consulta = mysqli_query($link, "select * from padre where tipo <> 'padre'");

        while($f = mysqli_fetch_array($consulta)){
            $id_padre = $f['id_padre'];
            $nombres = $f['nombres'];
            $ap_materno = $f['ap_materno'];
            $ap_paterno = $f['ap_paterno'];
            $correo = $f['correo'];
            $tipo = $f['tipo'];

        ?>
                <tr>
                    <td><?php echo $id_padre; ?></td>
                    <td><?php echo $nombres; ?></td>
                    <td><?php echo $ap_materno; ?></td>
                    <td><?php echo $ap_paterno; ?></td>
                    <td><?php echo $correo; ?></td>
                    <td><?php echo $tipo; ?></td>
                    <td>
                        <form action="../Controlador/procesa-cambio-rol.php" method="post">
                            <input type="hidden" name="id_padre" value="<?php echo $id_padre ?>">
                            <input type="hidden" name="nuevo_rol" value="<?php 
                            if($tipo == 'administracion'){
                                echo 'gerencia';
                            }
                            else if($tipo == 'gerencia'){
                                echo 'administracion';
                            }
                            ?>">
                            <input type="submit" name="submit" value="Cambiar">
                        </form>
                    </td>
                </tr>


                <?php
        }
        ?>



            </table>
        </div>
    </section>

</body>

</html>