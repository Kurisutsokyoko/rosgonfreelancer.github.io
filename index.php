<?php 
    include('Backend/conexion.php');
    $quer="SELECT * FROM convocatoria";
    $rest=mysqli_query($conn,$quer);
    $pdf=mysqli_fetch_array($rest);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css" />
    <title>Escuela Normal Primaria Lic. Manuel Larrainzar Licenciatura en Educación Primaria.</title>
    <meta name="description" content="Escuela Normal Licenciatura en Educación Primaria 'Lic. Manuel Larrainzar'" />
    <link rel="stylesheet" href="css/index.css">
    <link rel="shortcut icon" href="img/logo.ico">
    <script src="https://kit.fontawesome.com/3d9275c63e.js" crossorigin="anonymous"></script>
</head>
<body>
    <header class="header">
        <article class="img-top">
            <div class="color">
               <!-- Aqui va el color dorado -->
            </div>
            <div class="logo">
                <a href="index.php" class="logo-a">
                    <img src="img/logo-h.png" alt="logo-normal" class="logo-normal">
                </a>
            </div>
        </article>
        <article class="redes">
            <div class="redes-top">
                <ul class="redes-ul">
                    <li class="link">
                        <a href="https://www.facebook.com/Escuela-Normal-Lic-Manuel-Larrainzar-108927144986877/?ti=as" class="link-a link-a-f" target="_blank"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li class="link"><!-- Aqui falta el link de la red social -->
                        <a href="" class="link-a link-a-y" target="_blank"><i class="fab fa-youtube"></i></a>
                    </li>
                    <li class="link">
                        <a href="https://instagram.com/esc.prim.normal?utm_medium=copy_link" class="link-a link-a-i" target="_blank"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li class="link"><!-- Aqui falta el link de la red social -->
                        <a href="https://twitter.com/LarrainzarE?t=A6XmRHd1icwdDJWcswvHVQ&s=09" class="link-a link-a-t" target="_blank"><i class="fab fa-twitter-square"></i></a>
                    </li>
                    <li class="link"><!-- Aqui falta el link de la red social -->
                        <a href="mailto:normallarrainzarp@gmail.com" class="link-a link-a-e" target="_blank"><i class="fas fa-envelope"></i></a>
                    </li>
                    <li class="link"><!-- Aqui falta el link de la red social -->
                        <a href="tel:9671540805" class="link-a link-a-p" target="_blank"><i class="fas fa-phone-square-alt"></i></a>
                    </li>
                    <li class="link"><!-- Aqui falta el link de la red social -->
                        <a href="https://api.whatsapp.com/send?phone=5219671540805" class="link-a link-a-w" target="_blank"><i class="fa-brands fa-whatsapp-square"></i></a>
                    </li>
                </ul>
            </div>
        </article>
    </header>
    <main class="main">
        <section class="top">
            <span class="menu-button" id="btnMenu"><i class="fa-solid fa-bars"></i>Menú</span>
            <nav class="nav">
				<ul class="nav-ul" id="nav-ul">
					<li class="nav-li"><a href="index.php" class="nav-a">Inicio</a></li>
					<li class="nav-li container-sub-nav">
						<a href="#" class="nav-a sub-menu">Institución <i class="fa-solid fa-angle-down"></i></a>
						<ul class="sub-nav-ul">
							<li class="sub-menu-li"><a href="bienvenida.php" class="nav-a">Bienvenida</a></li>
							<li class="sub-menu-li"><a href="m-v.php" class="nav-a">Misión Y Visión</a></li>
							<li class="sub-menu-li"><a href="services.php" class="nav-a">Servicios</a></li>
                            <li class="sub-menu-li"><a href="areas-sustantivas.php" class="nav-a">Areas Sustantivas</a></li>
						</ul>
					</li>
					<li class="nav-li container-sub-nav">
						<a href="#" class="nav-a sub-menu">Docentes <i class="fa-solid fa-angle-down"></i></a>
						<ul class="sub-nav-ul">
							<li class="sub-menu-li"><a href="personal.php" class="nav-a">Personal</a></li>
							<li class="sub-menu-li"><a href="normatividad.php" class="nav-a">Normatividad</a></li>
							<li class="sub-menu-li"><a href="calendario.php" class="nav-a">Calendario Escolar</a></li>
						</ul>
					</li>
					<li class="nav-li container-sub-nav">
						<a href="#" class="nav-a sub-menu">Estudiantes <i class="fa-solid fa-angle-down"></i></a>
						<ul class="sub-nav-ul">
							<li class="sub-menu-li"><a href="egresados.php" class="nav-a">Egresados</a></li>
							<li class="sub-menu-li"><a href="becas.php" class="nav-a">Becas</a></li>
							<li class="sub-menu-li"><a href="cpanel/files/<?php echo $pdf['filee'] ?>" target="_blank" class="nav-a">Convocatoria</a></li>
							<li class="sub-menu-li"><a href="horarios.php" class="nav-a">Horarios</a></li>
						</ul>
					</li>
					<li class="nav-li">
						<a href="oferta-educativa.php" class="nav-a sub-menu">Oferta Educativa</a>
					</li>
                    <li class="nav-li"><a href="ciees.php" class="nav-a">CIEES</a></li>
					<li class="nav-li container-sub-nav">
						<a href="#" class="nav-a sub-menu">Multimedia <i class="fa-solid fa-angle-down"></i></a>
						<ul class="sub-nav-ul">
							<li class="sub-menu-li"><a href="imagenes.php" class="nav-a">Fotografías</a></li>
							<li class="sub-menu-li"><a href="videos.php" class="nav-a">Vídeos</a></li>
						</ul>
					</li>
					<li class="nav-li"><a href="contacto.php" class="nav-a">Contáctanos</a></li>
				</ul>
			</nav>
			<script src="js/menu.js"></script>
            <article class="slider">
                <!-- Aqui va el slider de la mini-galeria -->
                <div class="mySlides fade">
                    <img src="img/2.0.jpg" alt="" class="img-p-s">
                </div>
                <div class="mySlides fade">
                    <iframe src="https://www.youtube.com/embed/eEsMQMlcZWs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="img-p-s"></iframe>
                </div>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                <div style="text-align:center">
                  <span class="dot" onclick="currentSlide(1)"></span>
                  <span class="dot" onclick="currentSlide(2)"></span>
                </div>
            </article>
            <script src="js/slider.js"></script>
        </section>
    </main>

    <section class="card">
        <!-- Aqui van los cards de info -->
        <article class="info-relev">
            <div class="text-align">
               <a href="info-relev-link.php" class="link-for-cards">
                   <h2 class="title-card">Información Relevante</h2>
                </a>
            </div>
               <div class="info-card"></div>
                <div class="cards-info">
                    <?php 
                        $i1="SELECT * from informacion ORDER BY id DESC LIMIT 4";
                        $r2=mysqli_query($conn,$i1);
                        while($info=mysqli_fetch_array($r2)){
                    ?>
                    <div class="card-notice">
                        <a href="info.php?id=<?php echo $info['id']; ?>" class="info-link-a">
                            <img src="cpanel/imagenes/<?php echo $info['imagen'] ?>" alt="" class="card-img">
                            <h6 class="title-info"><?php echo $info['titulo']?></h6>
                            <div class="cuerpo">
                                <h6 class="cuerpo-texto"><?php echo $info['cuerpo'] ?></h6>
                            </div>
                        </a>
                    </div>
                    <?php 
                        }
                    ?>
                </div>
        </article>
        <article class="info-relev">
            <div class="text-align">
               <a href="notice-link.php" class="link-for-cards">
                   <h2 class="title-card">Noticias</h2>
                </a>
            </div>
            <div class="info-card"></div>
            <div class="cards-info">
                <?php 
                    $n1="SELECT * from notice ORDER BY id DESC LIMIT 4";
                    $r1=mysqli_query($conn,$n1);
                    while($notice=mysqli_fetch_array($r1)){
                ?>
                    <div class="card-notice">
                        <a href="noticia.php?id=<?php echo $notice['id']; ?>" class="info-link-a">
                            <img src="cpanel/imagenes/<?php echo $notice['imagen'] ?>" alt="" class="card-img">
                            <h6 class="title-info"><?php echo $notice['titulo']?></h6>
                            <div class="cuerpo">
                                <h6 class="cuerpo-texto"><?php echo $notice['cuerpo'] ?></h6>
                            </div>
                        </a>
                    </div>
                <?php 
                    }
                ?>
            </div>
        </article>
        <article class="notice">
            <div class="text-align">
                <a href="agenda-link.php" class="link-for-cards">
                    <h2 class="title-card">Agenda</h2>
                </a>
            </div>
            <div class="info-card"></div>
            <div class="cards-info">
            <?php 
                $a1="SELECT * from agenda ORDER BY id DESC LIMIT 4";
                $r3=mysqli_query($conn,$a1);
                while($agenda=mysqli_fetch_array($r3)){
            ?>
            <div class="card-notice">
                <a class="info-link-a">
                    <img src="cpanel/imagenes/<?php echo $agenda['imagen'] ?>" alt="" class="card-img">
                    <div class="text-card-text">
                        <h6 class="title-info"><?php echo $agenda['titulo']?></h6>
                        <h6 class="title-date"><?php echo $agenda['fecha'] ?></h6>
                    </div>
                </a>
            </div>
            <?php 
                }
            ?>
        </article>
    </section>
    <footer class="footer">
        <p class="footer-text">Todos los derechos reservados para Escuela Primaria Normal Larrainzar 2022</p>
        <p class="designer">Proyecto desarrollado por RosGon Freelancer y David Emiliano Rosales Gonzalez</p>
        <div class="bar"></div>
    </footer>
    </body>
</html>