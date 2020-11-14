<?php
    session_start();
    $id_padre = $_SESSION['usuario']['id_padre'];
    require_once("../Controlador/padre-control.php");
    $padre = Padre_control::mostrar_padre($id_padre);
?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>  
        <link rel="stylesheet" href="css/bootstrap.css">       
        <link rel="stylesheet" href="css/login.css" />        
        <title>Inicio de sesión</title>
        <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="js/vali.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        
  </head>
  <body>
 
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="../index.php">Inicio</a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarText"
            aria-controls="navbarText"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="../Vista/nosotros.html">Nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../index.html">Contactos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../Vista/login.html">Login</a>
              </li>
            </ul>
            <img src="img/escudo-laLetona-n.png" alt="" width="2.5%" height="2.5%"><span class="navbar-text">  Colegio La leona</span>
          </div>
        </nav>

        <?php
        foreach($padre as $datos):
        ?>
        <section class="ventana">
          <form  class="formulario" method="post" id="formulario" onsubmit="return validar();" action="../Controlador/padre-control.php">
            <legend class="formulario-titulo">Registro</legend>
            <p>
              <label for="dni">DNI: </label>
              <input
                type="dni"
                class="form-control"
                name="dni"
                value="<?php echo $datos['dni'] ?>"
                id="dni"
                class="input-texto" 
              />
            </p>
            <p>
              <label for="nombre">Nombre: </label>
              <input
            type="text"
            class="form-control"
            id="nombre"
            value="<?php echo $datos['nombres'] ?>"
            name="nombre"
            required
          />
            </p>
            <p>
              <label for="apepat">Apellido paterno: </label>
              
              <input
                type="text"
                class="form-control"
                name="apepat"
                value="<?php echo $datos['apellidoP'] ?>"
                id="apepat"
                class="input-texto" 
              />
            </p>
            <p>
              <label for="apemat">Apellido materno: </label>
              <input
                type="text"
                class="form-control"
                name="apemat"
                value="<?php echo $datos['apellidoM'] ?>"
                id="apemat"
                class="input-texto" 
              />
            </p>
            <p>
              <label for="telef">Teléfono: </label>
              <input
                type="text"
                class="form-control"
                name="telef"
                value="<?php echo $datos['telefono'] ?>"
                id="telef"
                class="input-texto" 
              />
            </p>
            <p>
              <label for="direccion">Dirección: </label>
              <input
                type="text"
                class="form-control"
                name="direccion"
                value="<?php echo $datos['direccion'] ?>"
                id="direccion"
                class="input-texto" 
              />
            </p>
            <p>
              <label for="correo">Correo: </label>
              <input
                type="email"
                class="form-control"
                name="correo"
                id="correo"
                value="<?php echo $datos['correo'] ?>"
                class="input-texto" 
              />
            </p>
            <p>
              <label for="Contraseña">Contraseña: </label>
              <input
                type="password"
                class="form-control"
                name="contraseña"
                id="contraseña"
                placeholder="ingrese su nueva contraseña"
                class="input-texto" 
              />
            </p>
            <p class="boton_submit">
              <input type="hidden" name="id_padre" value="<?php echo $id_padre ?>">
              <input type="hidden" name="accion" value="editar_datos_padre">
              <input
                type="submit"
                class="btn btn-warning"
                name="submit"
                id="submit"
                
                class="input-submit" 
              />
            </p>
            <h6 id="error"></h6>
          </form>
          <?php
                endforeach;
          ?>
        </section>
      </body>
    </html>
  </body>
</html>
