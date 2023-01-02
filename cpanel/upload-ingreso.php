<?php 
  include('../Backend/conexion.php');
  $query="SELECT * FROM ingreso";
  $result=mysqli_query($conn,$query);
  $pdf=$result->fetch_array(MYSQLI_ASSOC)
  #while($pdf=mysqli_fetch_array($result)){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escuela Normal Primaria Lic. Manuel Larrainzar Licenciatura en Educación Primaria.</title>
    <meta name="description" content="Escuela Normal Licenciatura en Educación Primaria 'Lic. Manuel Larrainzar'" />
    <link rel="stylesheet" href="../css/upload-convocatoria.css">
    <script type="text/javascript" src="../ckeditor-complete/ckeditor.js"></script>
    <link rel="shortcut icon" href="../img/logo.ico">
    <script src="https://kit.fontawesome.com/3d9275c63e.js" crossorigin="anonymous"></script>
</head>
<body>
    <header class="header">
        <article class="img-top">
            <div class="color">
               <!-- Aqui va el color dorado -->
            </div>
            <div class="logo">
                <a href="../index.php" class="logo-a">
                    <img src="../img/logo-h.png" alt="logo-normal" class="logo-normal">
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
					<li class="nav-li"><a href="../index.php" class="nav-a">Inicio</a></li>
					<li class="nav-li container-sub-nav">
						<a href="#" class="nav-a sub-menu">Institución <i class="fa-solid fa-angle-down"></i></a>
						<ul class="sub-nav-ul">
							<li class="sub-menu-li"><a href="../bienvenida.php" class="nav-a">Bienvenida</a></li>
							<li class="sub-menu-li"><a href="../m-v.php" class="nav-a">Misión Y Visión</a></li>
							<li class="sub-menu-li"><a href="../services.php" class="nav-a">Servicios</a></li>
                            <li class="sub-menu-li"><a href="../areas-sustantivas.php" class="nav-a">Areas Sustantivas</a></li>
						</ul>
					</li>
					<li class="nav-li container-sub-nav">
						<a href="#" class="nav-a sub-menu">Docentes <i class="fa-solid fa-angle-down"></i></a>
						<ul class="sub-nav-ul">
							<li class="sub-menu-li"><a href="../personal.php" class="nav-a">Personal</a></li>
							<li class="sub-menu-li"><a href="../normatividad.php" class="nav-a">Normatividad</a></li>
							<li class="sub-menu-li"><a href="../calendario.php" class="nav-a">Calendario Escolar</a></li>
						</ul>
					</li>
					<li class="nav-li container-sub-nav">
						<a href="#" class="nav-a sub-menu">Estudiantes <i class="fa-solid fa-angle-down"></i></a>
						<ul class="sub-nav-ul">
							<li class="sub-menu-li"><a href="../egresados.php" class="nav-a">Egresados</a></li>
							<li class="sub-menu-li"><a href="../becas.php" class="nav-a">Becas</a></li>
							<!-- <li class="sub-menu-li"><a href="../cpanel/files/<?php echo $pdf['filee'] ?>" target="_blank" class="nav-a">Convocatoria</a></li> -->
                            <li class="sub-menu-li"><a href="../ingreso.php" class="nav-a">Nuevo Ingreso</a></li>
							<li class="sub-menu-li"><a href="../horarios.php" class="nav-a">Horarios</a></li>
						</ul>
					</li>
					<li class="nav-li">
						<a href="../oferta-educativa.php" class="nav-a sub-menu">Oferta Educativa</a>
					</li>
                    <li class="nav-li"><a href="../ciees.php" class="nav-a">CIEES</a></li>
					<li class="nav-li container-sub-nav">
						<a href="#" class="nav-a sub-menu">Multimedia <i class="fa-solid fa-angle-down"></i></a>
						<ul class="sub-nav-ul">
							<li class="sub-menu-li"><a href="../imagenes.php" class="nav-a">Fotografías</a></li>
							<li class="sub-menu-li"><a href="../videos.php" class="nav-a">Vídeos</a></li>
						</ul>
					</li>
					<li class="nav-li"><a href="../contacto.php" class="nav-a">Contáctanos</a></li>
				</ul>
			</nav>
			<script src="../js/menu.js"></script>
        </section>

        <section class="contenido">
            <div class="menu">
                <div class="data-user">
                    <?php 
                        $user = "SELECT * FROM personal WHERE nombre = 'ONELIA HERNÁNDEZ TORRES' LIMIT 1";
                        $data = mysqli_query($conn,$user);
                        while($watch = mysqli_fetch_array($data)){
                    ?>
                        <img src="../cpanel/imagenes/<?php echo $watch['imagen'] ?>" alt="" class="photo">
                        <h3 class="name"><?php echo $watch['nombre'] ?></h3>
                    <?php } ?>
                </div>
                <div class="sub-menuu">
                    <a href="upload-notice.php" class="options">Noticias</a>
                    <a href="upload-agenda.php" class="options">Agenda</a>
                    <a href="upload-inf-relev.php" class="options">Info. Relevante</a>
                    <a href="upload-personal.php" class="options">Personal</a>
                    <a href="upload-photos.php" class="options">Fotografias</a>
                    <a href="upload-videos.php" class="options">Videos</a>
                    <a href="upload-cal-esc.php" class="options">Calendario Escolar</a>
                    <a href="upload-becas.php" class="options">Becas</a>
                    <a href="upload-ingreso.php" class="options">Nuevo Ingreso</a>
                    <a href="upload-horarios.php" class="options">Horarios</a>
                </div>
            </div>

            <div class="container">
                <h2 class="title-container">Subir Documento</h2>
                <!--
                <div class="menu-content">
                    <a href="upload-becas.php" class="menu-content-a">Nuevo Elemento</a>
                </div>
                -->
                <form action="sub-data.php" method="post" class="formulario" enctype="multipart/form-data">
                    <div class="content-form">
                        <div class="form-group">
                            <label class="label"  for="my-input">Archivo PDF</label><br><br>
                            <input id="my-input" class="imagen-xd" type="file" name="pdf" value=""><br><br>
                            <label for="my-input" class="label">Nombre del Documento</label><br><br>
                            <input type="text" name="document_name" id="" class="document_name"><br><br>
                            <label class="label"  for="my-input">Imagen</label><br><br>
                            <input id="my-input" class="imagen" type="file" name="imagen"><br><br>
                            <!-- <img src="imagenes/<?php echo $res['imagen']; ?>" alt=""> -->
                        </div>
                        <input type="hidden" id="id" name="id">
                        <input type="submit" value="Guardar" class="boton" name="Guardar-Ingreso">
                    </div>
                </form>
            </div>
            <div class="container-conv">
                <h2 class="title-container">Documentos Actuales</h2>

                <?php
                    $query="SELECT * FROM ingreso";
                    $result=mysqli_query($conn,$query);
                    while($see=mysqli_fetch_array($result)){
                ?>
                    <div class="all-data">
                        <p class="beca-name"><?php echo $see['title'] ?></p>
                        <img src="imagenes/<?php echo $see['imagen'] ?>" alt="" class="photo-beca">
                        <div class="buttons-options">
                            <a href="edit-ingreso.php?id=<?php echo $see['id']; ?>" class="but-op">edit</a>
                            <a href="delete-ingreso.php?id=<?php echo $see['id']; ?>" class="but-op" name="delete">delete</a>
                        </div>
                    </div>
                <?php
                    }
                ?>
            </div>
        </section>
    </main>
    <footer class="footer">
        <p class="footer-text">Todos los derechos reservados para Escuela Primaria Normal Larrainzar 2022</p>
        <p class="designer">Proyecto desarrollado por RosGon Freelancer y David Emiliano Rosales Gonzalez</p>
        <div class="bar"></div>
    </footer>
    </body>
</html>
<?php # } ?>