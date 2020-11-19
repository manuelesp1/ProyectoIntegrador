<?php
    session_start();
    $id_rol = $_SESSION['usuario']['id_rol'];
    if($id_rol == 1){
        header("location: ./../index.php");
    }
    else if($id_rol == 3){
        header("location: ./gerencia.php");
    }
    $id_estado = 2;
    require_once("../Controlador/matricula-control.php");
    $matricula = Matricula_control::revisar_solicitud($id_estado);
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
    <h4>Solicitudes revisadas</h4>
<div class="reportes" id="tablero">
            <table border=1>
                <tr>
                    <td>DNI</td>
                    <td>Nombres</td>
                    <td>Apellido materno</td>
                    <td>Apellido paterno</td>
                    <td></td>
                </tr>
                     <?php
                        foreach($matricula as $datos):
                    ?>
                <tr>
                    <td><?php echo $datos['dni']; ?></td>
                    <td><?php echo $datos['nombres']; ?></td>
                    <td><?php echo $datos['apellidoMat']; ?></td>
                    <td><?php echo $datos['apellidoPat']; ?></td>

                    <td><a href="#" onclick="revisar_documentos(<?php echo $datos['id_solicitud']; ?>)">Revisar documentos</a></td>
                    </tr>
                    <?php
                             endforeach;
                            
                    ?>
            </table>
        </div>
</body>
<script>
        function revisar_documentos(val) {
            $.post("revisar-archivos.php", {val:val})
                    .done(function (data) {
                        $ ('#tablero'). html (data);
//                 console.log (datos);
                    });
        }
    </script>
</html>