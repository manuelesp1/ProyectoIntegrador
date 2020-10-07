<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Administracion</title>

  <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/bootstrap-select.css" />
  <link rel="stylesheet" href="css/main_page_style.css" />
  <link rel="stylesheet" href="css/vira_and_industrial_registration.css" />

  <script type="text/javascript" src="../js/jquery-3.1.1.min.js" />
  </script>
  <script type="text/javascript" src="../js/bootstrap.min.js" />
  </script>

</head>

<body>

  <div id="top-navigation">
    <div id="header_logo"><img src="../img/header_log.png" class="img-responsive" alt="logo"
        style="float:left;width:150px; height:50px;position:relative;left:20px" /></div>
    <div id="student_name"><span style="color:rgb(255, 198, 0);font-size:1.1em"><em>Bienvenido,</em>&nbsp; </span><span
        style="font-family:serif"><?php echo $nombre;?></span></div>
  </div>

  <div id="left_side_bar">
    <ul id="menu_list">
      <a class="menu_items_link" href="../instructions_page/instructions_page.php">
        <li class="menu_items_list">Instrucciones</li>
      </a>
      <a class="menu_items_link" href="../Register_page/Register_page.php">
        <li class="menu_items_list" style="background-color:orange;padding-left:16px">Solicitudes pendientes</li>
      </a>
      <a class="menu_items_link" href="../student_assumption/student_assumption.php">
        <li class="menu_items_list">Solicitudes revisadas
        </li>
      </a>
      <a class="menu_items_link" href="../e-logbook/elogbook.php">
        <li class="menu_items_list">Cuaderno</li>
      </a>
      <a class="menu_items_link" href="../company_supervisor/company_supervisor_login.php">
        <li class="menu_items_list">Supervisor de la compañía</li>
      </a>
      <a class="menu_items_link" href="../visiting_supervisor/visiting_supervisor_login.php">
        <li class="menu_items_list">Supervisor visitante</li>
      </a>
      <a class="menu_items_link" href="../submit_report/submit_report.php">
        <li class="menu_items_list">Enviar reporte</li>
      </a>
      <a class="menu_items_link" href="../index.php">
        <li class="menu_items_list"><?php
      session_start();
      include("../Controlador/conexion.php");
      $consulta = mysqli_query($link, "select * from matricula");

      while($f = mysqli_fetch_array($consulta)){
        $dni = $f['dni_padre'];
      }
      echo $dni;
    ?></li>
      </a>
    </ul>
  </div>
  <div id="main_content">
    <div class="container-fluid">
      <div class="panel">
        <div class="panel-heading industrial_phead">
        <div>
<?php
      session_start();
      include("../Controlador/conexion.php");
      $consulta = mysqli_query($link, "select * from matricula");

      while($f = mysqli_fetch_array($consulta)){
        $dni = $f['dni_padre'];
      }
      echo $dni;
    ?>
</div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>