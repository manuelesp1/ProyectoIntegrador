<?php 

class Padre_modelo{
	private $db;

	public function __construct(){
		require_once("../config/conexion.php");
		$this->db = Connect::connection();
	}

	public function agregar_padre($dni, $nombre, $apepat, $apemat, $telef, $direccion, $correo, $contraseña, $rol){
		$this->db->query("INSERT INTO usuario (correo, contraseña) values ('$correo', '$contraseña')");
		$this->db->query("INSERT into padre (nombres, apellidoM, apellidoP, telefono, direccion, dni, id_usuario, id_rol) values ('$nombre', '$apemat', '$apepat', '$telef', '$direccion', '$dni', (SELECT max(id_usuario) from usuario), '$rol')");
	}

	public function editar_padre($dni, $nombre, $apepat, $apemat, $telef, $direccion, $correo, $contraseña, $id_padre){
		$this->db->query("UPDATE usuario t1 inner join padre t2 on t1.id_usuario = t2.id_usuario set correo = '$correo', contraseña = '$contraseña' where t2.id_padre = '$id_padre'");
		$this->db->query("UPDATE padre set nombres = '$nombre', apellidoM = '$apemat', apellidoP = '$apepat', telefono = '$telef', direccion = '$direccion', dni = '$dni' where id_padre = $id_padre");
	}

	public function mostrar_padre($id_padre){
		$query = $this->db->query("SELECT * from padre t1 inner join usuario t2 on t1.id_usuario = t2.id_usuario where t1.id_padre = '$id_padre'");
		$array = null;
		while ($fila = mysqli_fetch_assoc($query)){
			$array[] = $fila;
		}
		return $array;
	}
}

?>