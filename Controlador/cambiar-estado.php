<?php
    session_start();
    include('conexion.php');

    $id_matricula = mysqli_real_escape_string($link, $_POST['id_matricula']);
    $estado = mysqli_real_escape_string($link, $_POST['estado']);
    $pagina = mysqli_real_escape_string($link, $_POST['pagina']);

    $update = mysqli_query($link, "update matricula set estado = '$estado' where id_matricula = '$id_matricula'");

   
    if($pagina == 'admin-pendiente'){
        header("Location: ./../Vista/admin-pendiente.php");
    }
    else if($pagina == 'admin-revisado'){
        header("Location: ./../Vista/admin-revisado.php");
    }
    else if($pagina == 'admin-observado'){
        header("Location: ./../Vista/admin-observado.php");
    }
    else if($pagina == 'gerencia-pendiente'){
        header("Location: ./../Vista/gerencia-pendiente.php");
    }
    else if($pagina == 'gerencia-aprobado'){
        header("Location: ./../Vista/gerencia-aprobado.php");
    }
    else if($pagina == 'gerencia-rechazado'){
        header("Location: ./../Vista/gerencia-rechazado.php");
    }
?>