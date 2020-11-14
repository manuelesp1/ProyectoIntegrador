<?php 

class Matricula_modelo{

	private $db;
	private $matricula;

	public function __construct(){
		require_once("../config/conexion.php");
		$this->db = Connect::connection();
		$this->matricula = array();
	}

	public function registrar_matricula($nombre,  $appat_hijo, $apmat_hijo, $vacante, $img_dni, $img_certificado, $img_procedencia, $estado, $id_padre, $img_comprobante){
		$this->db->query("insert into alumno (nombres, apellidoMat, apellidoPat, id_padre) values ('$nombre', '$appat_hijo', '$apmat_hijo', '$id_padre')");

		$this->db->query("insert into solicitud (foto_dni, vacante, comprobante, certificado, cole_procedencia, id_estado, id_padre) values ('$img_dni', '$vacante', '$img_comprobante', '$img_certificado', '$img_procedencia', '$estado', '$id_padre')");
	}

	public function mostrar_archivos($id_solicitud){
		$query = $this->db->query("SELECT t1.foto_dni, t1.comprobante, t1.certificado, t1.cole_procedencia, t3.nombres, t3.apellidoMat, t3.apellidoPat from solicitud t1 inner join padre t2 on t1.id_padre = t2.id_padre inner join alumno t3 on t2.id_padre = t3.id_padre where t1.id_solicitud = $id_solicitud");//proceso almacenado
		$array = null;
		while ($fila = mysqli_fetch_assoc($query)){
			$array[] = $fila;
		}
		return $array;
	}

	public function cambiar_estado($id_solicitud, $nuevo_estado){
		$query = $this->db->query("UPDATE solicitud set id_estado = '$nuevo_estado' where id_solicitud = '$id_solicitud'");
	}

	public function mostrar_todo(){
		$query = $this->db->query("SELECT * from matricula");
		// $result = $this->db->query($query);  esta linea me ocasiona un error y no muestra datos de la bd
		$array = null;
		while($fila = mysqli_fetch_assoc($query)){
			$array[] = $fila;
		}
		return $array;
	}

	public function mostrar_matricula_estado($id_estado){
		$query = $this->db->query("SELECT t1.id_alumno, t1.nombres, t1.apellidoMat, t1.apellidoPat, t3.id_solicitud from alumno t1 inner join padre t2 on t1.id_padre = t2.id_padre inner join solicitud t3 on t2.id_padre = t3.id_padre where t3.id_estado = $id_estado");
		$array = null;
		while($fila = mysqli_fetch_assoc($query)){
			$array[] = $fila;
		}
		return $array;
	}

	public function mostrar_pendientes(){
		$query = $this->db->query("SELECT * from solicitud where id_estado = 1");
		$array = null;
		while($fila = mysqli_fetch_assoc($query)){
			$array[] = $fila;
		}
		return $array;
	}
	
	
}

?>