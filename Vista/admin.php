<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table border=1>
        <tr>
            <td>id</td>
            <td>dni del padre</td>
            <td>dni del hijo</td>
            <td>nombre del hijo</td>
            <td>apellido paterno del hijo</td>
            <td>apellido materno del hijo</td>
            <td>estado</td>
            <td>Accion</td>
        </tr>
<?php
    
    
      session_start();
      include("../Controlador/conexion.php");
      $consulta = mysqli_query($link, "select * from matricula");

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
        <td><a href="revisar-archivos.php?id=<?php echo $id_matricula; ?>">Revisar documentos</a></td>
        
    </tr>


    <?php
      }
    ?>

    

    </table>
</body>
</html>