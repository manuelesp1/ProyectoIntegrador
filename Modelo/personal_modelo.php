<?php 

class Personal_modelo{

	private $db;

	public function __construct(){
		require_once("../config/conexion.php");
		$this->db = Connect::connection();
	}

	public function mostrar_personal(){
		$query = $this->db->query("SELECT * FROM trabajador t1 inner join usuario t2 on t1.id_usuario = t2.id_usuario inner join roles t3 on t1.id_rol = t3.id_rol");//proceso almacenado
		$array = null;
		while ($fila = mysqli_fetch_assoc($query)){
			$array[] = $fila;
		}
		return $array;
	}
	
	public function nuevo_personal($nombre, $apepat, $apemat, $telefono, $correo, $contraseña, $tipo){
		$this->db->query("INSERT into usuario (correo, contraseña) values ('$correo', '$contraseña')");
		$this->db->query("INSERT into trabajador (nombres, apellidoPa, apellidoMa, telefono, id_usuario, id_rol) values ('$nombre', '$apepat', '$apemat', '$telefono', (SELECT max(id_usuario) from usuario), '$tipo')");
	}

	public function cambio_rol($id_trabajador, $nuevo_rol){
		$this->db->query("UPDATE trabajador set id_rol = '$nuevo_rol' where id_trabajador = '$id_trabajador'");
	}

	public function datos_personal($id_trabajador){
		$query = $this->db->query("SELECT * from trabajador t1 inner join usuario t2 on t1.id_usuario = t2.id_usuario where t1.id_trabajador = $id_trabajador");
		$array = null;
		while ($fila = mysqli_fetch_assoc($query)){
			$array[] = $fila;
		}
		return $array;
	}

	public function editar_datos($nombre, $apepat, $apemat, $telefono, $correo, $contraseña, $tipo, $id_trabajador){
		$this->db->query("UPDATE usuario t1 inner join trabajador t2 on t1.id_usuario = t2.id_usuario set correo = '$correo', contraseña = '$contraseña' where t2.id_trabajador = $id_trabajador");
		$this->db->query("UPDATE trabajador set nombres = '$nombre', apellidoPa = '$apepat', apellidoMa = '$apemat', telefono = '$telefono', id_rol = '$tipo' where id_trabajador = '$id_trabajador'");
	}
}

?>
