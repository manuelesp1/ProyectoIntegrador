<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archivos</title>
</head>
<body>
    <?php
        $id = $_GET['id'];
        session_start();
        include("../Controlador/conexion.php");
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
</body>
</html>