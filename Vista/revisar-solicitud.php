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
                <a href="admin-pendiente.php"><li>Solicitudes pendientes</li></a>
                <a href="admin-revisado.php"><li>Solicitudes revisadas</li></a>
                <a href="admin-observado.php"><li>Solicitudes observadas</li></a>
                <a href="../Controlador/logout.php"><li>Cerrar sesión</li></a>
            </ul>
        </div>
        <div class="reportes">
            <a href="admin-pendiente.php">
                <p>Atras</p>
            </a>

            <?php
                $id = $_GET['id'];
                include("../Controlador/conexion.php");
                $consulta = mysqli_query($link, "select id_matricula, dni_padre, dni_hijo, nombre_hijo, appat_hijo, apmat_hijo  from matricula where id_matricula = $id");

                while($f = mysqli_fetch_array($consulta)){
                    $id_matricula = $f['id_matricula'];
                    $dni_padre = $f['dni_padre'];
                    $dni_hijo = $f['dni_hijo'];
                    $nombre_hijo = $f['nombre_hijo'];
                    $appat_hijo = $f['appat_hijo'];
                    $apmat_hijo = $f['apmat_hijo'];
                }
            ?>

            <table border=1>
                <tr>
                    <td>ID</td>
                    <td>DNI del padre</td>
                    <td>DNI del hijo</td>
                    <td>Nombre del hijo</td>
                    <td>Apellido paterno del hijo</td>
                    <td>Apellido materno del hijo</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><?php echo $id_matricula; ?> </td>
                    <td><?php echo $dni_padre; ?> </td>
                    <td><?php echo $dni_hijo; ?> </td>
                    <td><?php echo $nombre_hijo; ?> </td>
                    <td><?php echo $appat_hijo; ?> </td>
                    <td><?php echo $apmat_hijo; ?> </td>
                    <td>
                        <!-- <form action="../Controlador/cambiar-estado.php" method="post"> -->
                        <form action="../Controlador/matricula-control.php" method="post">
                            <input type="hidden" name="id_matricula" value="<?php echo $id_matricula ?>">
                            <input type="hidden" name="estado" value="revisado">
                            <input type="hidden" name="pagina" value="admin-pendiente">
                            <input type="hidden" name="accion" value="cambiar-estado">
                            <input type="submit" name="submit" value="Revisado">
                        </form>
                    </td>
                    <td>
                        <!-- <form action="../Controlador/cambiar-estado.php" method="post"> -->
                        <form action="../Controlador/matricula-control.php" method="post">
                            <input type="hidden" name="id_matricula" value="<?php echo $id_matricula ?>">
                            <input type="hidden" name="estado" value="observado">
                            <input type="hidden" name="pagina" value="admin-pendiente">
                            <input type="hidden" name="accion" value="cambiar-estado">
                            <input type="submit" name="submit" value="Observado">
                        </form>
                    </td>
                </tr>

            </table>

            <div class="imagen">
            <?php
        
        $consulta = mysqli_query($link, "select dni_padre_img_del, dni_padre_img_tra,  dni_hijo_img_del, dni_hijo_img_tra, certificado, comprobante from matricula where id_matricula = $id");

        while($f = mysqli_fetch_array($consulta)){
            
    ?>
            <img src="data:image/jpg;base64,<?php echo base64_encode($f['dni_padre_img_del']); ?>" >
            <img src="data:image/jpg;base64,<?php echo base64_encode($f['dni_padre_img_tra']); ?>" >
            <img src="data:image/jpg;base64,<?php echo base64_encode($f['dni_hijo_img_del']); ?>" >
            <img src="data:image/jpg;base64,<?php echo base64_encode($f['dni_hijo_img_del']); ?>" >
            <img src="data:image/jpg;base64,<?php echo base64_encode($f['certificado']); ?>" >
            <img src="data:image/jpg;base64,<?php echo base64_encode($f['comprobante']); ?>" >
        
        <?php
        }
        ?>
            </div>

            
        </div>
    </section>

</body>

</html>