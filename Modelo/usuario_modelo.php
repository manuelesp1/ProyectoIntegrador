<?php
class Usuario_modelo{
    private $db;
    private $usuario;

    public function __construct(){
        require_once("../config/conexion.php");
        $this->db = Connect::connection();
        $this->usuario = array();
    }

    public function verificar_usuario($nombre, $contraseña){
        
        $query = $this->db->query("SELECT * from padre where nombres ='$nombre' and contraseña = '$contraseña'");//proceso almacenado

        while($rows = mysqli_fetch_assoc($query)){
            $usuario = $rows;
        }
        return $usuario;

        // while($rows = $query->fetch_assoc()){
        //     $this->usuario[] = $rows;
        // }
        // return $this->usuario;
    }
}

// class users_model extends Connect
// {

// 	private $db;
// 	private $users;

// 	public function __construct(){
// 		$this->db = Connect::connection();
// 		$this->users = array();
// 	}

// 	public function get_users(){
// 		$query = $this->db->query("SELECT * FROM users");
// 		while ($rows = $query->fetch_assoc()){
// 			$this->users[] = $rows;
// 		}
// 		return $this->users;
// 	}
	
// }


?>