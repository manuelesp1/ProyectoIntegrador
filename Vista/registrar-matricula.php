<?php
    session_start();
    if(!isset($_SESSION['nombre'])){
        header("Location: ./login.html");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/registrar-matricula.css">
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
                <li>Bienvenido, <?php echo $_SESSION['nombre']; ?></li>

            </ul>
            
        </nav>
    </header>

    <section class="principal">
        <div class="ventana">
            <form class="formulario" method="post" action="../Controlador/procesa-registroMatricula.php" enctype="multipart/form-data">
                <legend class="formulario-titulo">Registro</legend>
                
                
                <p>
                    <label for="dni">DNI del padre</label>
                    <input type="text" name="dni_padre" class="input-texto">
                </p>
                <p class="usuario">
                    <label for="nomb">Nombre del hijo: </label>
                    <input type="text" name="nombre_hijo" placeholder="ingrese su nombre" class="input-texto">
                </p>
                <p class="apellido">
                    <label for="apepat">Apellido paterno del hijo: </label>
                    <input type="text" name="appat_hijo" placeholder="ingrese su apellido" class="input-texto">
                </p>
                <p class="apellido">
                    <label for="apemat">Apellido materno del hijo: </label>
                    <input type="text" name="apmat_hijo" placeholder="ingrese su apellido" class="input-texto">
                </p>
                <p>
                    <label for="dni">DNI del hijo</label>
                    <input type="text" name="dni_hijo" class="input-texto">
                </p>
                <p>
                    <label for="dni">DNI del padre (Parte delantera)</label>
                    <input type="file" class="input-texto" name="dni_padre_img_del">
                </p>
                <p>
                    <label for="dni">DNI del padre (Parte trasera)</label>
                    <input type="file" class="input-texto" name="dni_padre_img_tra">
                </p>
                <p>
                    <label for="dni">DNI del hijo (Parte delantera)</label>
                    <input type="file" class="input-texto" name="dni_hijo_img_del">
                </p>
                <p>
                    <label for="dni">DNI del hijo (Parte trasera)</label>
                    <input type="file" class="input-texto" name="dni_hijo_img_tra">
                </p>
                <p>
                    <label for="dni">Certificado de estudios</label>
                    <input type="file" class="input-texto" name="certificado">
                </p>
                <p>
                    <label for="dni">Acta directorial</label>
                    <input type="file" class="input-texto" name="acta_directorial">
                </p>
                <p>
                    <label for="dni">Comprobante de pago</label>
                    <input type="file" class="input-texto" name="comprobante">
                </p>


                <p>
                    <input type="hidden" name="estado" value="pendiente">
                </p>

            
                <p class="boton_submit">
                    <input type="submit" name="submit" class="input-submit" >
                </p>
                
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