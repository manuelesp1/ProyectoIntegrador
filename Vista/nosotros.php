<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/nosotros.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Nosotros</title>
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</head>

<body>
    <!--<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="Vista/index.php">Inicio</a></li>
            <li class="breadcrumb-item"><a href="Vista/nosotros.php">Nosotros</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
    </nav><br>-->
    <div class="jumbotron text-center" style="margin-bottom:0">
        <h1>Colegio letona</h1>
        <p>Formadores del futuro del Perú</p>
    </div>
    <nav class="navbar navbar-light" style="background-color:  #8fe513;">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="#">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Nosotros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
    </nav>
    <br>
    <!-- Inicio de nuestra historia -->
    <div class="container">
        <div class="row">
            <div class="card" style="max-width: 1440px;">
                <div class="row">
                    <div class="col-md-6" background="#5dade2">
                        <img src="img/historia.jpg" class="card-img" alt="">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title">Nuestra historia</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br>
    <!-- fin de nuestra historia -->
    <!-- Inicio de nuestra Vision -->
    <div class="container">
        <div class="row">
            <div class="card mb-3" style="max-width: 1440px;">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title">Visión</h5>
                            <p class="card-text">Llegar a ser una de las mejores instituciones formadores de líderes mundiales que buscan mejorar el país, con responsabilidad social, cuidado del medio ambiente e investigadores.</p>
                            <h5 class="card-title">Misión</h5>
                            <p class="card-text">Brindar educación de calidad formando personas con responsabilidad social e investigadora.</p>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="img/vision-mision.jpg" class="card-img" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fin de nuestra Vision -->
    <?php
    include("pie.html");
    ?>
</body>

</html>