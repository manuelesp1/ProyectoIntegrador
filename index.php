<?php
session_start();
?>

<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Vista/css/principal.css">
    <link rel="stylesheet" href="Vista/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="Vista/css/bootstrap.css"> -->
    <title>Colegio Letona</title>
    <script type="text/javascript" src="Vista/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="Vista/js/bootstrap.js"></script>
</head>

<body>
    
    <header class="banner">
        <nav class="menu">
            <!-- <div class="slider">
                <p><img src="Vista/img/slider1.jpg" alt=""></p>
                <p><img src="Vista/img/slider2.jpg" alt=""></p>
                <p><img src="Vista/img/slider3.jpg" alt=""></p>
            </div> -->
            <ul>

                <li><a href="index.php">Inicio</a></li>
                <li><a href="#">Nosotros</a></li>
                <li><a href="#">Contactos</a></li>
                <?php 
					if(isset($_SESSION['nombre'])){
                ?>
                <li><a href="Controlador/logout.php">Logout</a></li>
                <li>Bienvenido, <?php echo $_SESSION['nombre']; ?></li>
                <?php				
					}
					else{
				 ?>
                <li><a href="Vista/login.html">Login</a></li>
                <?php 
				 	}
				  ?>
                <!-- <li><a href="vista/login.html">Login</a></li> -->
                <?php
                if (isset($_SESSION['nombre'])) {
                ?>
                    <li><a href="Controlador/logout.php"><?php echo $_SESSION['nombre']; ?></a></li>
                <?php
                } else {
                ?>
                    <li><a href="Vista/login.html">Login</a></li>
                <?php
                }
                ?>

            </ul>

        </nav>

        <div class="ola" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M-67.43,95.22 C225.45,180.09 312.36,58.70 501.41,134.70 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #f2f2f2;"></path>
            </svg></div>
        <a href="Vista/registrar-matricula.php"> 
            <div class="boton-matricula">
                <h1>Matricula 2021</h1>
                <p>Click aqui</p>
            </div>
        </a> 

        <div class="ola" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M-67.43,95.22 C225.45,180.09 312.36,58.70 501.41,134.70 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path>
            </svg></div>

    </header>
    <section>
        <article class="nosotros">
            <div>
                <h3>Quienes somos</h3>
                <p>Somos una institución    
                    de un excelente equipo de docentes que entregan constante formación a nuestros alumnos con el
                    objetivo de ser excelentes profesionales y grandes personas.
                </p>
            </div>
            <img src="Vista/img/nosotros.jpg" alt="">






            <!-- <h1>Matricula 2021</h1>
            <p>Debido a la situación actual que vivimos en todo el mundo y por la creciente tasa de contagios; el centro educativo La Leona se preocupa por la salud de las personas y desarrolló una aplicación web en el que podrá matricular a su hijo en la seguridad de su hogar. </p> -->
        </article>
        <!-- <img src="Vista/img/matricula_online2.jpg" alt=""> -->
        <article class="info">
            <div>
                <p class="img-sec"></p>
                <p class="texto">
                    <span>Nivel Secundaria</span><br>
                    Potenciamos la vocación de nuestros estudiantes, con formación pre-universitaria, que sean capaces
                    de acceder a cualquier campo y tengan la destreza de dominarlo.
                </p>
            </div>
            <div>
                <p class="img-virtual"></p>
                <p class="texto">
                    <span>Infraestructura Virtual</span><br>
                    Aprendo en línea, con la misma calidad de siempre, y el mismo compromiso de los docentes, desde
                    nuestra plataforma virtual.
                </p>
            </div>
            <div>
                <p class="img-admision"></p>
                <p class="texto">
                    <span>Extensión Académica</span><br>
                    Programas académicos desarrollados para complementar los conocimientos, destrezas y habilidades de
                    los alumnos, en cultura, competencia virtual, deportes, danza y ajedrez.
                </p>
            </div>
        </article>
    </section>
    <!-- Inicio de carrusel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="6"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="7"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Vista/img/est.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Vista/img/est1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Vista/img/est2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Vista/img/est3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Four slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Vista/img/est4.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Five slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Vista/img/est5.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Six slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Vista/img/est6.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Seven slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Vista/img/est8.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>End slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Inicio de carrusel -->
    <section class="talleres">

        <div>
            <img src="Vista/img/becas.png" alt="" class="iconos">
            <center>Becas</center>
        </div>
        <div>
            <img src="Vista/img/biblioteca.png" alt="" class="iconos">
            <center>Biblioteca</center>
        </div>
        <div>
            <img src="Vista/img/online.png" alt="" class="iconos">
            <center>Clases online</center>
        </div>
        <div>
            <img src="Vista/img/recursos.png" alt="" class="iconos">
            <center>Recursos</center>
        </div>
    </section>
    <section>

        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident, assumenda laborum delectus eveniet
            commodi excepturi, porro cumque accusantium quia architecto facere beatae nam aliquid repellendus aliquam
            ipsum fugiat repudiandae obcaecati?
            Non soluta ipsa aspernatur hic quidem suscipit nemo tempora, mollitia exercitationem sint, distinctio magni
            placeat molestias quo ullam. Possimus eaque ducimus provident, unde aut obcaecati itaque saepe rerum
            repellat natus.
            Temporibus aperiam obcaecati deleniti veritatis id dolorum. Id modi veritatis molestiae sint accusamus ipsam
            ipsa voluptate provident cumque? Iste deleniti ad hic quia temporibus obcaecati ipsum molestiae a saepe
            ullam!
            Molestiae laboriosam quia dolorem officiis assumenda corrupti voluptas explicabo dicta iure magni corporis
            voluptatem nulla nostrum mollitia, obcaecati error, excepturi temporibus adipisci exercitationem in
            voluptate? Aliquam molestias repellat est neque.</p>
    </section>
    <?php
    include("Vista/pieH.html");
    ?>


</html>