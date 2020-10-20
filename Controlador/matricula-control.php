<?php 
require_once("../Modelo/matricula_modelo.php");

if(isset($_POST['submit'])){
    $accion = $_POST['accion'];


    if($accion == 'registrar-matricula'){
        $dni_padre = $_POST['dni_padre'];
        $nombre_hijo = $_POST['nombre_hijo'];
        $appat_hijo = $_POST['appat_hijo'];
        $apmat_hijo = $_POST['apmat_hijo'];
        $dni_hijo = $_POST['dni_hijo'];

        $dni_padre_del = $_FILES['dni_padre_img_del']['tmp_name'];
        $dni_padre_img_del = addslashes(file_get_contents($dni_padre_del));

        $dni_padre_tra = $_FILES['dni_padre_img_tra']['tmp_name'];
        $dni_padre_img_tra = addslashes(file_get_contents($dni_padre_tra));

        $dni_hijo_del = $_FILES['dni_hijo_img_del']['tmp_name'];
        $dni_hijo_img_del = addslashes(file_get_contents($dni_hijo_del));

        $dni_hijo_tra = $_FILES['dni_hijo_img_tra']['tmp_name'];
        $dni_hijo_img_tra = addslashes(file_get_contents($dni_hijo_tra));

        $certif = $_FILES['certificado']['tmp_name'];
        $certificado = addslashes(file_get_contents($certif));

        $comprob = $_FILES['comprobante']['tmp_name'];
        $comprobante = addslashes(file_get_contents($comprob));

        $estado = $_POST['estado'];
        $nuevo_estado = $_POST['nuevo_estado'];

        $matricula = new Matricula_modelo();
        $matricula->agregar_matricula($dni_padre, $nombre_hijo, $appat_hijo, $apmat_hijo, $dni_hijo, $dni_padre_img_del, $dni_padre_img_tra, $dni_hijo_img_del, $dni_hijo_img_tra, $certificado, $comprobante, $estado);
        header("location: ./../index.php");
    }

    else if($accion == "cambiar-estado"){
        $id_matricula =$_POST['id_matricula'];
        $estado = $_POST['estado'];
        $pagina = $_POST['pagina'];

        
        $matricula = new Matricula_modelo();
        $matricula->cambiar_estado($id_matricula, $nuevo_estado);
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
    }
    else if($accion == "mostrar-matricula"){
        $id_matricula = $_POST['id_matricula'];
        $datos = new Matricula_modelo();
        $matricula = $datos->mostrar_matricula($id_matricula);
        $_SESSION['matricula'] = $matricula;
        header("location: ./../Vista/gerencia-pendiente.php");
    }
}

$datos = new Matricula_modelo();
$matricula = $datos->mostrar_todo();
header("location: ./../Vista/gerencia-pendiente.php");





// include('conexion.php');
// $dni_padre = mysqli_real_escape_string($link,$_POST['dni_padre']);
// $nombre_hijo = mysqli_real_escape_string($link,$_POST['nombre_hijo']);
// $appat_hijo = mysqli_real_escape_string($link,$_POST['appat_hijo']);
// $apmat_hijo = mysqli_real_escape_string($link,$_POST['apmat_hijo']);
// $dni_hijo = mysqli_real_escape_string($link,$_POST['dni_hijo']);

// $dni_padre_del = $_FILES['dni_padre_img_del']['tmp_name'];
// $dni_padre_img_del = addslashes(file_get_contents($dni_padre_del));

// $dni_padre_tra = $_FILES['dni_padre_img_tra']['tmp_name'];
// $dni_padre_img_tra = addslashes(file_get_contents($dni_padre_tra));

// $dni_hijo_del = $_FILES['dni_hijo_img_del']['tmp_name'];
// $dni_hijo_img_del = addslashes(file_get_contents($dni_hijo_del));

// $dni_hijo_tra = $_FILES['dni_hijo_img_tra']['tmp_name'];
// $dni_hijo_img_tra = addslashes(file_get_contents($dni_hijo_tra));

// $certif = $_FILES['certificado']['tmp_name'];
// $certificado = addslashes(file_get_contents($certif));

// $comprob = $_FILES['comprobante']['tmp_name'];
// $comprobante = addslashes(file_get_contents($comprob));

// $estado = mysqli_real_escape_string($link,$_POST['estado']);

// mysqli_query($link, "insert into matricula (dni_padre, dni_hijo, nombre_hijo, appat_hijo, apmat_hijo, dni_padre_img_del,dni_padre_img_tra, dni_hijo_img_del,dni_hijo_img_tra, certificado, comprobante, estado) values ('$dni_padre', '$nombre_hijo', '$appat_hijo', '$apmat_hijo', '$dni_hijo', '$dni_padre_img_del', '$dni_padre_img_tra', '$dni_hijo_img_del', '$dni_hijo_img_tra', '$certificado', '$comprobante', '$estado')");

// header("Location: ./../index.php");

// mysqli_close($link);
 ?>