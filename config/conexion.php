<?php 
	class Connect{
		public static function connection(){
			$conexion = new mysqli("127.0.0.1:3307", "root", "", "proyectoleona");
			return $conexion;
		}
	}
?>