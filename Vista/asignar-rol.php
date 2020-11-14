<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <section class="ventana">
		<form class="formulario" method="post" action="../Controlador/personal-control.php">
			<legend class="formulario-titulo">Registro</legend>
			
			<p>
				<label for="nombre">Nombre: </label>
				<input type="text" name="nombre" placeholder="ingrese su nombre" class="input-texto">
			</p>
			<p>
				<label for="apepat">Apellido paterno: </label>
				<input type="text" name="apepat" placeholder="ingrese su apellido" class="input-texto">
			</p>
			<p>
				<label for="apemat">Apellido materno: </label>
				<input type="text" name="apemat" placeholder="ingrese su apellido" class="input-texto">
			</p>
			<p>
				<label for="correo">Correo: </label>
				<input type="email" name="correo" class="input-texto">
			</p>
			<p>
				<label for="telefono">Teléfono: </label>
				<input type="tel" name="telef" placeholder="ingrese su telefono" class="input-texto">
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
				
				<input type="hidden" name="accion" value="nuevo-personal">
			</p>
		
			<p class="boton_submit">
				<input type="submit" name="submit" class="input-submit" >
			</p>
			
		</form>
	</section>
</body>
</html>