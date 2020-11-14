<?php
    $id_trabajador = $_POST['val'];
    require_once("../Controlador/personal-control.php");
    $trabajador = Personal_control::datos_personal($id_trabajador);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        foreach($trabajador as $datos):
    ?>
    <section class="ventana">
		<form class="formulario" method="post" action="../Controlador/personal-control.php">
			<legend class="formulario-titulo">Registro</legend>
			
			<p>
				<label for="nombre">Nombre: </label>
				<input type="text" name="nombre" value="<?php echo $datos['nombres'] ?>" class="input-texto">
			</p>
			<p>
				<label for="apepat">Apellido paterno: </label>
				<input type="text" name="apepat" value="<?php echo $datos['apellidoPa'] ?>" class="input-texto">
			</p>
			<p>
				<label for="apemat">Apellido materno: </label>
				<input type="text" name="apemat" value="<?php echo $datos['apellidoMa'] ?>" class="input-texto">
			</p>
			<p>
				<label for="correo">Correo: </label>
				<input type="email" name="correo" value="<?php echo $datos['correo'] ?>" class="input-texto">
			</p>
			<p>
				<label for="telefono">Teléfono: </label>
				<input type="tel" name="telef" value="<?php echo $datos['telefono'] ?>" class="input-texto">
			</p>
			<p>
				<label for="Contraseña">Contraseña: </label>
				<input type="password" name="contraseña" placeholder="ingrese su contraseña" class="input-texto">
			</p>

            <p>
                <label for="tipo">Elija rol: </label>
                <select name="tipo" id="tipo">
                    <option value="">Seleccione</option>
                    <option value="2">administracion</option>
                    <option value="3">Gerencia</option>
                </select>
			</p>
			<p>
                <input type="hidden" name="accion" value="editar_datos">
                <input type="hidden" name="id_trabajador" value="<?php echo $datos['id_trabajador'] ?>">
			</p>
		
			<p class="boton_submit">
				<input type="submit" name="submit" class="input-submit" >
			</p>
			
        </form>
    <?php
        endforeach;
    ?>
</body>
</html>