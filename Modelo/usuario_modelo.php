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
        
        //$query = $this->db->query("CALL verificar_usuario('$correo', '$contraseña')");
        $query = $this->db->query("SELECT id_rol, id_usuario from usuario where correo ='$correo' and contraseña = '$contraseña'");
        $usuario = null;
        // SELECT t1.correo, t1.contraseña, t1.id_rol, t2.id_padre, t2.nombres as nombre_padre, t3.id_trabajador, t3.nombres as nombre_trabajador from usuario t1 inner join padre t2 on t1.id_usuario = t2.id_usuario inner join trabajador t3 on t1.id_usuario = t3.id_usuario where t1.correo =correo and t1.contraseña = contraseña
        while($rows = mysqli_fetch_assoc($query)){
            $usuario = $rows;
        }
        return $usuario;
    }
}

?>