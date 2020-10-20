<?php 

class Personal_modelo{

	private $db;

	public function __construct(){
		require_once("../config/conexion.php");
		$this->db = Connect::connection();
	}

	public function mostrar_trabajador(){
		$query = $this->db->query("SELECT * FROM trabajador");//proceso almacenado
		while ($rows = $query->fetch_assoc()){
			$this->trabajador[] = $rows;
		}
		return $this->trabajador;
	}
	
	public function nuevo_personal($nombre, $apepat, $apemat, $correo, $contraseña, $tipo){
		$this->db->query("INSERT into padre (nombres, ap_materno, ap_paterno, correo, contraseña, tipo) values ('$nombre', '$apepat', '$apemat', '$correo', '$contraseña', '$tipo')");
	}

	public function cambio_rol($id_padre, $nuevo_rol){
		$this->db->query("UPDATE padre set tipo = '$nuevo_rol' where id_padre = '$id_padre'");
	}
}

?>

<!-- ........nuevo personal....... -->

<!-- include('conexion.php');
$nombre = mysqli_real_escape_string($link,$_POST['nombre']);
$apepat = mysqli_real_escape_string($link,$_POST['apepat']);
$apemat = mysqli_real_escape_string($link,$_POST['apemat']);
$correo = mysqli_real_escape_string($link,$_POST['correo']);
$contraseña = mysqli_real_escape_string($link,$_POST['contraseña']);
$rol = mysqli_real_escape_string($link,$_POST['rol']);

mysqli_query($link, "insert into padre (nombres, ap_materno, ap_paterno, correo, contraseña, tipo) values ('$nombre', '$apepat', '$apemat', '$correo', '$contraseña', '$rol')");

header("Location: ../Vista/gerencia-pendiente.php");

mysqli_close($link); -->



<!-- .......cambio de rol........ -->

<!-- session_start();
    include('conexion.php');

    $id_padre = mysqli_real_escape_string($link, $_POST['id_padre']);
    $nuevo_rol = mysqli_real_escape_string($link, $_POST['nuevo_rol']);

    $update = mysqli_query($link, "update padre set tipo = '$nuevo_rol' where id_padre = '$id_padre'");


    header("Location: ./../Vista/cambiar-rol.php"); -->
