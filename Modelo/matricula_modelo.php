<?php 

class Matricula_modelo{

	private $db;
	private $matricula;

	public function __construct(){
		require_once("../config/conexion.php");
		$this->db = Connect::connection();
		$this->matricula = array();
	}

	public function registrar_matricula($nombre,  $appat_hijo, $apmat_hijo, $vacante, $img_dni, $img_certificado, $img_procedencia, $estado){
		$id_padre = 7;
		$this->db->query("insert into alumno (nombres, apellidoMat, apellidoPat, id_padre) values ('$nombre', '$appat_hijo', '$apmat_hijo', '$id_padre')");

		$this->db->query("insert into solicitud (foto_dni, vacante, certificado, cole_procedencia, id_estado) values ('$img_dni', '$vacante', '$img_certificado', '$img_procedencia', '$estado')");
	}

	public function mostrar_matricula($id_matricula){
		$query = $this->db->query("SELECT * FROM matricula where id_matricula = $id_matricula");//proceso almacenado
		$array = null;
		while ($fila = mysqli_fetch_assoc($query)){
			$array[] = $fila;
		}
		return $array;
	}

	public function cambiar_estado($id_matricula, $nuevo_estado){
		$query = $this->db->query("UPDATE matricula set estado = '$nuevo_estado' where id_matricula = '$id_matricula'");
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

	public function mostrar_matricula_estado(){
		$query = $this->db->query("SELECT * from solicitud where id_estado = 1");
		$array = null;
		while($fila = mysqli_fetch_assoc($query)){
			$array[] = $fila;
		}
		return $array;
	}
	
	
}

?>