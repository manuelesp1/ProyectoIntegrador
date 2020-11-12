<?php 
	class Connect{
		public static function connection(){
			$conexion = new mysqli("127.0.0.1:3306", "root", "", "proyectoleona");
			return $conexion;
		}
	}
?>