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
                    <td></td>
                    <td></td>
                </tr>
                <?php
                        if(isset($_SESSION['mostrar-matricula'])):
                             foreach($_SESSION['mostrar-matricula'] as $datos):
                    ?>
                <tr>
                    <td><?php echo $datos['id_matricula']; ?></td>
                    <td><?php echo $datos['dni_padre']; ?></td>
                    <td><?php echo $datos['dni_hijo']; ?></td>
                    <td><?php echo $datos['nombre_hijo']; ?></td>
                    <td><?php echo $datos['appat_hijo']; ?></td>
                    <td><?php echo $datos['apmat_hijo']; ?></td>
                    <td>
                        <form action="../Controlador/matricula-control.php" method="post">
                            <input type="hidden" name="id_matricula" value="<?php echo $datos['id_matricula'] ?>">
                            <input type="hidden" name="nuevo-estado" value="aprobado">
                            <input type="hidden" name="pagina" value="gerencia-pendiente">
                            <input type="hidden" name="accion" value="cambiar-estado">
                            <input type="submit" name="submit" value="Aprobado">
                        </form>
                    </td>
                    <td>
                        <form action="../Controlador/matricula-control.php" method="post">
                            <input type="hidden" name="id_matricula" value="<?php echo $datos['id_matricula'] ?>">
                            <input type="hidden" name="nuevo-estado" value="rechazado">
                            <input type="hidden" name="accion" value="cambiar-estado">
                            <input type="hidden" name="pagina" value="gerencia-pendiente">
                            <input type="submit" name="submit" value="Rechazado">
                        </form>
                    </td>
                </tr>
                <?php
                             endforeach;
                            endif;
                    ?>
            </table>

            <div class="imagen">
            
            <img src="data:image/jpg;base64,<?php echo base64_encode($datos['dni_padre_img_del']); ?>" >
            <img src="data:image/jpg;base64,<?php echo base64_encode($datos['dni_padre_img_tra']); ?>" >
            <img src="data:image/jpg;base64,<?php echo base64_encode($datos['dni_hijo_img_del']); ?>" >
            <img src="data:image/jpg;base64,<?php echo base64_encode($datos['dni_hijo_img_del']); ?>" >
            <img src="data:image/jpg;base64,<?php echo base64_encode($datos['certificado']); ?>" >
            <img src="data:image/jpg;base64,<?php echo base64_encode($datos['comprobante']); ?>" >

            </div>

            
        </div>
    </section>

</body>

</html>