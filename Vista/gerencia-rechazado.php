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
                <a href="../Controlador/matricula-control.php?accion=mostrar-matricula-estado&estado=revisado&pagina=gerencia-pendiente"><li>Solicitudes pendientes</li></a>
                <a href="../Controlador/matricula-control.php?accion=mostrar-matricula-estado&estado=aprobado&pagina=gerencia-aprobado"><li>Solicitudes aprobadas</li></a>
                <a href="../Controlador/matricula-control.php?accion=mostrar-matricula-estado&estado=rechazado&pagina=gerencia-rechazado"><li>Solicitudes rechazadas</li></a>
                <a href="asignar-rol.html"><li>Nuevo personal</li></a>
                <a href="../Controlador/personal-control.php?accion=mostrar-personal"><li>Cambiar rol</li></a>
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
                    <td>Motivo</td>
                    <td></td>
                </tr>
                <?php
                        if(isset($_SESSION['mostrar-matricula-estado'])):
                             foreach($_SESSION['mostrar-matricula-estado'] as $datos):
                    ?>
                <tr>
                    <td><?php echo $datos['id_matricula']; ?></td>
                    <td><?php echo $datos['dni_padre']; ?></td>
                    <td><?php echo $datos['dni_hijo']; ?></td>
                    <td><?php echo $datos['nombre_hijo']; ?></td>
                    <td><?php echo $datos['appat_hijo']; ?></td>
                    <td><?php echo $datos['apmat_hijo']; ?></td>
                    <td><a href="../Controlador/matricula-control.php?id=<?php echo $datos['id_matricula']; ?>&accion=mostrar-matricula&tipo=gerencia">Revisar documentos</a></td>
                    <td></td>
                    <td>
                        <form action="../Controlador/matricula-control.php" method="post">
                            <input type="hidden" name="id_matricula" value="<?php echo $datos['id_matricula'] ?>">
                            <input type="hidden" name="nuevo-estado" value="revisado">
                            <input type="hidden" name="accion" value="cambiar-estado">
                            <input type="hidden" name="pagina" value="gerencia-rechazado">
                            <input type="submit" name="submit" value="Pendiente">
                        </form>
                    </td>

                </tr>
                <?php
                             endforeach;
                            endif;
                    ?>
            </table>
        </div>
    </section>

</body>

</html>