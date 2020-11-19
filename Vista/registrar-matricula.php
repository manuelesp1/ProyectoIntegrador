<?php
    session_start();
    require_once("../Controlador/padre-control.php");
    $id_usuario = $_SESSION['usuario']['id_usuario'];
    $datos_padre = Padre_control::mostrar_padre($id_usuario);
    foreach($datos_padre as $datos):
        $id_padre = $datos['id_padre'];
    endforeach;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/registrar-matricula.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>    
    <script type="text/javascript" src="js/registraM.js"></script>
</head>
<body>
    <header class="banner">
        <nav class="menu">
            <ul>

                <li><a href="../index.html">Inicio</a></li>
                <li><a href="#">Nosotros</a></li>
                <li><a href="#">Contactos</a></li>
                <li><a href="login.html">Login</a></li>

                <li><a href="../index.php">Inicio</a></li>
                <li><a href="#">Nosotros</a></li>
                <li><a href="#">Contactos</a></li>
                <!-- <li>Bienvenido, <?php echo $_SESSION['nombre']; ?></li> -->

            </ul>
            
        </nav>
    </header>

    <section class="principal">
        <div class="ventana">
            <form class="formulario" method="post" id="formulario" onsubmit="return validar();" action="../Controlador/matricula-control.php" enctype="multipart/form-data">
                <legend class="formulario-titulo">Registro</legend>                
                <p class="usuario">
                    <label for="dni">DNI del hijo: </label>
                    <input type="text" class="form-control" name="dni_hijo" id="dni_hijo" placeholder="ingrese el dni de su hijo" class="input-texto">
                </p>
                <p class="usuario">
                    <label for="nomb">Nombre del hijo: </label>
                    <input type="text" class="form-control" name="nombre_hijo" id="nombre_hijo" placeholder="ingrese su nombre" class="input-texto">
                </p>
                <p class="apellido">
                    <label for="apepat">Apellido paterno del hijo: </label>
                    <input type="text" class="form-control" name="appat_hijo" id="appat_hijo" placeholder="ingrese su apellido" class="input-texto">
                </p>
                <p class="apellido">
                    <label for="apemat">Apellido materno del hijo: </label>
                    <input type="text" class="form-control" name="apmat_hijo" id="apmat_hijo" placeholder="ingrese su apellido" class="input-texto">
                </p>
                <p class="usuario">
                    <label for="vacante">Ingrese el numero de vacante: </label>
                    <input type="text" class="form-control" name="vacante" id="vacante" placeholder="ingrese el numero de vacante" class="input-texto">
                </p>
                <p>
                    <label for="dni">DNI: </label>
                    <input type="file" class="input-texto" name="dni" id="dni">
                </p>
                <p>
                    <label for="dni">Certificado: </label>
                    <input type="file" class="input-texto" name="certificado">
                </p>
                <p>
                    <label for="dni">Colegio de procedencia: </label>
                    <input type="file" class="input-texto" name="procedencia">
                </p>
                <p>
                    <label for="comprobante">Comprobante de pago: </label>
                    <input type="file" class="input-texto" name="comprobante">
                </p>
                <p class="boton_submit">
                    <input type="hidden" name="accion" value="registrar-matricula">
                    <input type="hidden" name="estado" value="1">
                    <input type="hidden" name="id_padre" value="<?php echo $id_padre?>">
                    <input type="submit" name="submit" class="input-submit" >
                </p>
                <h6 id="error"></h6>
            </form>
        </div>
        <div class="info">
            <div>
                <h2>Proceso de matrícula</h2>
                <p>
                    Paso
                    POSTULACIÓN:
                    Ingresar a la sección Admisión 2021 en la página web (www.leona.edu.pe). Dar clic al botón “Matricularse”. Llenar la solicitud de postulación y adjuntar todos los documentos requeridos.
                </p>
                <p>
                    Paso
                    VALIDACIÓN:
                    El personal del colegio revisa que todos los datos sean correctos, envía por correo los documentos que el padre deberá firmar y le informa que ya puede cancelar la matrícula.
                </p> 
                <p>
                    Paso
                    MATRÍCULA:
                    Firmar, escanear/tomar foto y enviar los documentos por correo al remitente. Pagar el concepto de matrícula en el banco (Scotiabank, BBVA, Interbank o BCP).
                </p>
            </div>
            <img src="img/proceso-matricula.png" alt="">
        </div>
    </section>
</body>
</html>