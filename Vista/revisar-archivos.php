<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archivos</title>
</head>

<body>
    <?php
        $id_solicitud = $_POST['val'];
        session_start();
        include("../Controlador/matricula-control.php");
        $archivos = Matricula_control::mostrar_archivos($id_solicitud);
    ?>
    <table border=1>
        <tr>
            <td>Nombres</td>
            <td>Apellido paterno</td>
            <td>Apellido materno</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <?php
        foreach($archivos as $datos):
        ?>

            <tr>
                <td><?php echo $datos['nombres']; ?> </td>
                <td><?php echo $datos['apellidoPat']; ?> </td>
                <td><?php echo $datos['apellidoMat'] ?> </td>
                <td>
                <form action="../Controlador/matricula-control.php" method="post">
                        <input type="hidden" name="id_solicitud" value="<?php echo $id_solicitud ?>">
                        <input type="hidden" name="nuevo-estado" value="1">
                        <input type="hidden" name="pagina" value="administracion">
                        <input type="hidden" name="accion" value="cambiar-estado">
                        <input type="submit" name="submit" value="Pendiente">
                    </form>
                </td>
                <td>
                    <form action="../Controlador/matricula-control.php" method="post">
                        <input type="hidden" name="id_solicitud" value="<?php echo $id_solicitud ?>">
                        <input type="hidden" name="nuevo-estado" value="2">
                        <input type="hidden" name="pagina" value="administracion">
                        <input type="hidden" name="accion" value="cambiar-estado">
                        <input type="submit" name="submit" value="Revisado">
                    </form>
                </td>
                <td>
                    <form action="../Controlador/matricula-control.php" method="post">
                        <input type="hidden" name="id_solicitud" value="<?php echo $id_solicitud ?>">
                        <input type="hidden" name="nuevo-estado" value="3">
                        <input type="hidden" name="pagina" value="administracion">
                        <input type="hidden" name="accion" value="cambiar-estado">
                        <input type="submit" name="submit" value="Observado">
                    </form>
                </td>
            </tr>

        </table>
        <img src="data:image/jpg;base64,<?php echo base64_encode($datos['foto_dni']); ?>">
        <img src="data:image/jpg;base64,<?php echo base64_encode($datos['comprobante']); ?>">
        <img src="data:image/jpg;base64,<?php echo base64_encode($datos['certificado']); ?>">
        <img src="data:image/jpg;base64,<?php echo base64_encode($datos['cole_procedencia']); ?>">
        <?php
 
        endforeach;
    ?>

</body>

</html>