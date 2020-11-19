<?php
    session_start();
    $id_rol = $_SESSION['usuario']['id_rol'];
    if($id_rol == 1){
        header("location: ./../index.php");
    }
    else if($id_rol == 2){
        header("location: ./administracion.php");
    }
?>
<?php
    require_once("../Controlador/personal-control.php");
    $personal = Personal_control::mostrar_personal();
?>
<!DOCTYPE html>
<html lang="es">

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
        
        <div class="reportes" id="reportes">
            <table border=1>
                <tr>
                    <td>Nombre</td>
                    <td>Apellido materno</td>
                    <td>Apellido paterno</td>
                    <td>Teléfono</td>
                    <td>Correo</td>
                    <td>Rol</td>
                    <td></td>
                </tr>
                <?php
                        foreach($personal as $datos):
                    ?>
                <tr>
                    <td><?php echo $datos['nombres']; ?></td>
                    <td><?php echo $datos['apellidoPa']; ?></td>
                    <td><?php echo $datos['apellidoMa']; ?></td>
                    <td><?php echo $datos['telefono']; ?></td>
                    <td><?php echo $datos['correo']; ?></td>
                    <td><?php echo $datos['descripcion']; ?></td>
                    <!-- <td>
                        <form action="../Controlador/personal-control.php" method="post">
                            <input type="hidden" name="id_trabajador" value="<?php echo $datos['id_trabajador'] ?>">
                            <input type="hidden" name="nuevo_rol" value="<?php 
                            if($datos['descripcion'] == 'administracion'){
                                echo '3';
                            }
                            else if($datos['descripcion'] == 'gerencia'){
                                echo '2';
                            }
                            ?>">
                            <input type="hidden" name="accion" value="cambiar-rol">
                            <input type="submit" name="submit" value="Cambiar">
                        </form>
                    </td> -->
                    <td>
                        <a onclick="editar_datos(<?php echo $datos['id_trabajador'] ?>)"><input type="button" value="Editar"></a>
                        
                    </td>
                    <!-- <td>
                        <form action="../Controlador/personal-control.php" method="post">
                            <input type="hidden" name="id_trabajador" value="<?php $datos['id_trabajador'] ?>">
                            <input type="hidden" name="accion" value="eliminar_personal">
                            <input type="submit" name="submit" value="Eliminar">

                        </form>

                    </td> -->
                </tr>


                <?php
            endforeach;

        ?>



            </table>
        </div>
    </section>

</body>
<script>
    function editar_datos(val) {
            $.post("editar-datos.php", {val:val})
                    .done(function (data) {
                        $ ('#reportes'). html (data);
//                 console.log (datos);
                    });
        }
</script>
</html>