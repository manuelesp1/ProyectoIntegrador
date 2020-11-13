<?php
class Usuario_modelo{
    private $db;
    private $usuario;

    public function __construct(){
        require_once("../config/conexion.php");
        $this->db = Connect::connection();
        $this->usuario = array();
    }

    public function verificar_usuario($correo, $contraseña){
        
        $query = $this->db->query("SELECT t2.id_padre, t2.nombres, t1.correo, t1.contraseña, t2.id_rol from usuario t1 inner join padre t2 on t1.id_usuario = t2.id_usuario where t1.correo ='$correo' and t1.contraseña = '$contraseña'");//proceso almacenado

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