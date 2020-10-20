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
		while ($rows = mysqli_fetch_assoc($query)){
			$matricula = $rows;
		}
		return $matricula;
	}

	public function cambiar_estado($id_matricula, $nuevo_estado){
		$query = $this->db->query("UPDATE matricula set estado = '$nuevo_estado' where id_matricula = '$id_matricula'");
	}

	public function mostrar_todo(){
		$query = $this->db->query("SELECT * from matricula");
	}
	
}

?>