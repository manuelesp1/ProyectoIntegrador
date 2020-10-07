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
                    <td>DNI del padre</td>
                    <td>DNI del hijo</td>
                    <td>Nombre del hijo</td>
                    <td>Apellido paterno del hijo</td>
                    <td>Apellido materno del hijo</td>
                    <td>Documentos</td>
                    <td></td>
                </tr>
                <?php
        
        
        include("../Controlador/conexion.php");
        $consulta = mysqli_query($link, "select * from matricula where estado = 'aprobado'");

        while($f = mysqli_fetch_array($consulta)){
            $id_matricula = $f['id_matricula'];
            $dni_padre = $f['dni_padre'];
            $dni_hijo = $f['dni_hijo'];
            $nombre_hijo = $f['nombre_hijo'];
            $appat_hijo = $f['appat_hijo'];
            $apmat_hijo = $f['apmat_hijo'];

        ?>
                <tr>
                    <td><?php echo $id_matricula; ?></td>
                    <td><?php echo $dni_padre; ?></td>
                    <td><?php echo $dni_hijo; ?></td>
                    <td><?php echo $nombre_hijo; ?></td>
                    <td><?php echo $appat_hijo; ?></td>
                    <td><?php echo $apmat_hijo; ?></td>
                    <td><a href="revisar-solicitud-gerencia.php?id=<?php echo $id_matricula; ?>">Revisar documentos</a></td>
                    <td>
                        <form action="../Controlador/cambiar-estado.php" method="post">
                            <input type="hidden" name="id_matricula" value="<?php echo $id_matricula ?>">
                            <input type="hidden" name="estado" value="revisado">
                            <input type="hidden" name="pagina" value="gerencia-aprobado">
                            <input type="submit" name="submit" value="Pendiente">
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