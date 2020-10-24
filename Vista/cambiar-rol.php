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
                <a href="../Controlador/matricula-control.php?accion=mostrar-matricula-estado&estado=pendiente"><li>Solicitudes pendientes</li></a>
                <a href="../Controlador/matricula-control.php?accion=mostrar-matricula-estado&estado=aprobado"><li>Solicitudes aprobadas</li></a>
                <a href="../Controlador/matricula-control.php?accion=mostrar-matricula-estado&estado=rechazado"><li>Solicitudes rechazadas</li></a>
                <a href="asignar-rol.html"><li>Nuevo personal</li></a>
                <a href="../Controlador/personal-control.php?accion=mostrar-personal"><li>Cambiar rol</li></a>
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
                        if(isset($_SESSION['mostrar-personal'])):
                             foreach($_SESSION['mostrar-personal'] as $datos):
                    ?>
                <tr>
                    <td><?php echo $datos['id_padre']; ?></td>
                    <td><?php echo $datos['nombres']; ?></td>
                    <td><?php echo $datos['ap_materno']; ?></td>
                    <td><?php echo $datos['ap_paterno']; ?></td>
                    <td><?php echo $datos['correo']; ?></td>
                    <td><?php echo $datos['tipo']; ?></td>
                    <td>
                        <form action="../Controlador/personal-control.php" method="post">
                            <input type="hidden" name="id_padre" value="<?php echo $datos['id_padre'] ?>">
                            <input type="hidden" name="nuevo_rol" value="<?php 
                            if($datos['tipo'] == 'administracion'){
                                echo 'gerencia';
                            }
                            else if($datos['tipo'] == 'gerencia'){
                                echo 'administracion';
                            }
                            ?>">
                            <input type="hidden" name="accion" value="cambiar-rol">
                            <input type="submit" name="submit" value="Cambiar">
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