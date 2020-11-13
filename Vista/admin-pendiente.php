<?php

    require_once("../Controlador/matricula-control.php");
    $matricula = Matricula_control::admin_pendiente();
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
    
        <div class="reportes">
            <table border=1>
                <tr>
                    <td>ID solicitud</td>
                    <td>Vacante</td>
                    <td></td>
                </tr>
                     <?php
                        foreach($matricula as $datos):
                    ?>
                <tr>
                    <td><?php echo $datos['id_solicitud']; ?></td>
                    <td><?php echo $datos['vacante']; ?></td>

                    <td><a href="../Controlador/matricula-control.php?id=<?php echo $datos['id_matricula']; ?>&accion=mostrar-matricula&tipo=administracion">Revisar documentos</a></td>
                    </tr>
                    <?php
                             endforeach;
                            
                    ?>
            </table>
        </div>
    </section>

</body>

</html>