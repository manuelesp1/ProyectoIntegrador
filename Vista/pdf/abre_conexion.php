<?php
// Parametros a configurar para la conexion de la base de datos 
	$host = "localhost";    // sera el valor de nuestra BD 
	$basededatos = "AYT";    // sera el valor de nuestra BD 
	$usuariodb = "root";    // sera el valor de nuestra BD 
	$clavedb = "";    // sera el valor de nuestra BD 
	//Lista de Tablas
	$tabla_db1 = "producto"; 	   // tabla de usuarios
	//error_reporting(0); //No me muestra errores
	//primera forma de conexion
	$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);
	/* check connection */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    
    /* change character set to utf8 */
    if (!$conexion->set_charset("utf8")) {
        printf("Error loading character set utf8: %s\n", $conexion->error);
    } else {
        //mensaje de conexion
    }
    
	/*
	$con=mysql_connect($host,$usuariodb,$clavedb)
	msql_select_db($basededatos,$con)
	*/
	if ($conexion->connect_errno) {
	    echo "Nuestro sitio experimenta fallos....";
	    exit();
	}
?>

