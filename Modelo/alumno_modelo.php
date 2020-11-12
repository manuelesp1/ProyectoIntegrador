<?php 

class Alumno_modelo
{

	private $db;
	private $alumno;

	public function __construct(){
		require_once("../config/conexion.php");
		$this->db = Connect::connection();
		$this->alumno = array();
	}

	public function get_alumno(){
		$query = $this->db->query("SELECT * FROM alumno");//proceso almacenado
		while ($rows = $query->fetch_assoc()){
			$this->alumno[] = $rows;
		}
		return $this->alumno;
    }
    
    public function Agregar(){
		try {
				$nom=parent::getNombre();
				$sql="insert into clientes (cod_cli,nom_cli,ruc) values ('$this->codigo','$nom','$this->ruc')";
		} catch (Exception $e) {
			die("error".$e->getMessage());
			echo "linea de error".$e->getLine();
		}
	}
	
}

?>