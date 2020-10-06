<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Vista/css/principal.css">
    <!-- <link rel="stylesheet" href="Vista/css/bootstrap.css"> -->
    <title>Colegio Letona</title>
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
    <footer>
        <div class="div-footer">
            Encuentranos en:
            <div class="logo">
                <p class="footer-img">
                    <a href="#"><img src="Vista/img/001-facebook.png" alt=""></a>
                </p>
                <p class="footer-img">
                    <a href="#"><img src="Vista/img/003-whatsapp.png" alt=""></a>
                </p>
            </div>
        </div>
        <div class="div-footer">
            Nuestros Locales:<br><br>
            - Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus rerum<br>
            - Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus rerum<br>
            - Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus rerum
        </div>
        <div class="div-footer">
            Horarios de atencion:<br><br>
            Lun - Vie de 9 am a 5 pm<br>
            Sab 9am a 1pm
        </div>
    </footer>
</body>

</html>