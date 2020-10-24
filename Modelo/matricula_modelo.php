<?php 

class Matricula_modelo{

	private $db;
	private $matricula;

	public function __construct(){
		require_once("../config/conexion.php");
		$this->db = Connect::connection();
		$this->matricula = array();
	}

	public function agregar_matricula($dni_padre, $nombre_hijo, $appat_hijo, $apmat_hijo, $dni_hijo, $dni_padre_img_del, $dni_padre_img_tra, $dni_hijo_img_del, $dni_hijo_img_tra, $certificado, $comprobante, $estado){
		$this->db->query("insert into matricula (dni_padre, dni_hijo, nombre_hijo, appat_hijo, apmat_hijo, dni_padre_img_del,dni_padre_img_tra, dni_hijo_img_del,dni_hijo_img_tra, certificado, comprobante, estado) values ('$dni_padre', '$nombre_hijo', '$appat_hijo', '$apmat_hijo', '$dni_hijo', '$dni_padre_img_del', '$dni_padre_img_tra', '$dni_hijo_img_del', '$dni_hijo_img_tra', '$certificado', '$comprobante', '$estado')");
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

	public function mostrar_matricula_estado($estado){
		$query = $this->db->query("SELECT * from matricula where estado = '$estado'");
		$array = null;
		while($fila = mysqli_fetch_assoc($query)){
			$array[] = $fila;
		}
		return $array;
	}
	
	
}

?>