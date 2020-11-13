<?php 
require_once("../Modelo/matricula_modelo.php");
session_start();


    class Matricula_control{
        public function admin_pendiente(){

            $datos = new Matricula_modelo();
            $matricula = $datos->mostrar_matricula_estado();

            return $matricula;
        }
    }
    if(isset($_POST['submit'])){
        $accion = $_POST['accion'];
    
    if($accion == 'registrar-matricula'){

        $nombre_hijo = $_POST['nombre_hijo'];
        $appat_hijo = $_POST['appat_hijo'];
        $apmat_hijo = $_POST['apmat_hijo'];
        $vacante = $_POST['vacante'];
        $dni = $_FILES['dni']['tmp_name'];
        $img_dni = addslashes(file_get_contents($dni));
        $certificado = $_FILES['certificado']['tmp_name'];
        $img_certificado = addslashes(file_get_contents($certificado));
        $procedencia = $_FILES['procedencia']['tmp_name'];
        $img_procedencia = addslashes(file_get_contents($procedencia));
        $estado = $_POST['estado'];

        $matricula = new Matricula_modelo();
        $matricula->registrar_matricula ($nombre_hijo, $appat_hijo, $apmat_hijo, $vacante, $img_dni, $img_certificado, $img_procedencia, $estado);
        header("location: ./../index.php");
    }
    }
//     else if($accion == "cambiar-estado"){
//         $id_matricula =$_POST['id_matricula'];
//         $nuevo_estado = $_POST['nuevo-estado'];
//         $pagina = $_POST['pagina'];
        
//         $matricula = new Matricula_modelo();
//         $matricula->cambiar_estado($id_matricula, $nuevo_estado);
//         if($pagina == 'admin-pendiente'){
//             header("Location: matricula-control.php?accion=mostrar-matricula-estado&estado=pendiente&pagina=admin-pendiente");
//         }
//         else if($pagina == 'admin-revisado'){
//             header("Location: matricula-control.php?accion=mostrar-matricula-estado&estado=revisado&pagina=admin-revisado");
//         }
//         else if($pagina == 'admin-observado'){
//             header("Location: matricula-control.php?accion=mostrar-matricula-estado&estado=observado&pagina=admin-observado");
//         }
//         else if($pagina == 'gerencia-pendiente'){
//             header("Location: matricula-control.php?accion=mostrar-matricula-estado&estado=revisado&pagina=gerencia-pendiente");
//         }
//         else if($pagina == 'gerencia-aprobado'){
//             header("Location: matricula-control.php?accion=mostrar-matricula-estado&estado=aprobado&pagina=gerencia-aprobado");
//         }
//         else if($pagina == 'gerencia-rechazado'){
//             header("Location: matricula-control.php?accion=mostrar-matricula-estado&estado=rechazado&pagina=gerencia-rechazado");
//         }
//     }
//     else if($accion == "mostrar-matricula"){
//         $id_matricula = $_POST['id_matricula'];
//         $datos = new Matricula_modelo();
//         $matricula = $datos->mostrar_matricula($id_matricula);
//         $_SESSION['mostrar-matricula'] = $matricula;
//         header("location: ./../Vista/gerencia-pendiente.php");

//     }
// }else{
//     $accion = $_GET['accion'];

//     if($accion == "mostrar-matricula"){
//         $id_matricula = $_GET['id'];
//         $tipo = $_GET['tipo'];
//         $datos = new Matricula_modelo();
//         $matricula = $datos->mostrar_matricula($id_matricula);
//         $_SESSION['mostrar-matricula'] = $matricula;

//         if($tipo == 'gerencia'){
//             header("location: ./../Vista/revisar-solicitud-gerencia.php");
//         }
//         else if($tipo == 'administracion'){
//             header("location: ./../Vista/revisar-solicitud-admin.php");
//         }
         
//     }

//     if($accion == "mostrar-matricula-estado"){
//         $estado = $_GET['estado'];
//         $pagina = $_GET['pagina']; 
//         $datos = new Matricula_modelo();
//         $matricula = $datos->mostrar_matricula_estado($estado);
//         $_SESSION['mostrar-matricula-estado'] = $matricula;
        
//         if($pagina == 'admin-pendiente'){
//             header("location: ./../Vista/admin-pendiente.php");
//         }
//         else if($pagina == 'admin-revisado'){
//             header("Location: ./../Vista/admin-revisado.php");
//         }
//         else if($pagina == 'admin-observado'){
//             header("Location: ./../Vista/admin-observado.php");
//         }
//         else if($pagina == 'gerencia-pendiente'){
//             header("Location: ./../Vista/gerencia-pendiente.php");
//         }
//         else if($pagina == 'gerencia-aprobado'){
//             header("Location: ./../Vista/gerencia-aprobado.php");
//         }
//         else if($pagina == 'gerencia-rechazado'){
//             header("Location: ./../Vista/gerencia-rechazado.php");
//         }
//     }
    
// }

 ?>