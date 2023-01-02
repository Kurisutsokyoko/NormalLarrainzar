<?php 
    include('Backend/conexion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escuela Normal Primaria Lic. Manuel Larrainzar Licenciatura en Educación Primaria.</title>
    <meta name="description" content="Escuela Normal Licenciatura en Educación Primaria 'Lic. Manuel Larrainzar'" />
    <link rel="stylesheet" href="css/of-ed.css">
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
                            <!-- <li class="sub-menu-li"><a href="img/CONVOCATORIA_PARA_INGRESO_A_NORMALES_2022-2023.pdf" target="_blank" class="nav-a">Convocatoria</a></li> -->
                            <li class="sub-menu-li"><a href="ingreso.php" class="nav-a">Nuevo Ingreso</a></li>
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
        </section>
        <section class="text-all">
            <h1 class="title-text">FUNDAMENTACIÓN</h1><br><br><br>
            <p class="content-text">
                El Plan de Estudios tiene como principio atender al derecho pleno que tienen los grupos indígenas de ser tratados en igualdad de condiciones y equidad como seres humanos. Con esta idea, el Plan de Estudios está encaminado a que los estudiantes que se forman para la docencia en este ámbito, desarrollen y adquieran los conocimientos y competencias necesarias para atender la diversidad cultural, lingüística y étnica de los alumnos de educación primaria.
                <br><br>
                Profundizar en la interculturalidad, como una nueva modalidad pedagógica, ante realidades sociales y educativas cada vez más globalizadas y cambiantes se constituye en uno de los primeros retos a los que se enfrenta la formación de docentes. Atender la pluralidad cultural, lingüística, étnica, requiere de un conocimiento específico y profundo que permita articular el conjunto de saberes y prácticas locales, con las que se desarrollan a través de los programas de estudio para la educación primaria.
                <br><br>
                Acercar a los alumnos a los temas de currículum en su lengua originaria, conduce a garantizar el derecho de ser educado en el contexto de sus propias prácticas, sociales y culturales. Un aspecto relevante en el plan de estudios es el hecho de trazar una ruta de formación que coloca el aprendizaje de la lengua indígena para convertirla en una herramienta pedagógica fundamental al momento de desarrollar la docencia.
                <br><br>
                De este modo, el rediseño curricular responde al imperativo social y constitucional de preparar docentes para atender la diversidad cultural y lingüística del país.
                <br><br>
                La creciente heterogeneidad en las aulas de todo el mundo, debido a fenómenos actuales como el de la migración o las comunicaciones, así como la correspondiente necesidad de atender con pertinencia y equidad las particularidades de los escolares, ha derivado en una serie de transformaciones e innovaciones en los enfoques en distintos ámbitos educativos. Estas transformaciones constituyen un cambio de paradigma en el caso de la educación indígena y su enfoque intercultural bilingüe.
                <br><br>
                La educación y la defensa de las lenguas son objetivos prioritarios de la actual política pública. Estas demandas y necesidades, compartidas por amplios sectores de la población, se han cristalizado en leyes, declaraciones nacionales e internacionales, así como en reformas políticas, educativas y lingüísticas. Estas amparan y protegen, en un sentido social, ético y jurídico, distintos programas y proyectos educativos interculturales en México; y dan sustento, a las licenciaturas en educación que contribuyen al logro de la defensa cultural, justicia social e igualdad educativa.
                <br><br>
                Los cambios tecnológicos y socioculturales plantean, a todos los profesionales, una realidad compleja, rápidamente cambiante y heterogénea. El nuevo profesional de la educación entenderá y analizará la variabilidad entre los alumnos y los contextos. Además de promover el respeto y la igualdad entre distintas culturas y lenguas generarán conocimientos pedagógicos adecuados y pertinentes a ese contexto, lingüísticamente equilibrados.
                <br><br>
                Para lograr este fin se requiere de una formación que guíe en el aprovechamiento y disfrute de la diversidad, como recurso pedagógico y social. Pero también, una educación que recupere e investigue esa diversidad para generar un cambio educativo y social más amplio; que analice los enfoques y prácticas convencionales; y que provea a sus alumnos de una formación más equilibrada, pertinente y sensible a sus necesidades y a su contexto.
                <br><br>
                La investigación en el contexto educativo y de los alumnos constituye actualmente una prioridad en la mayoría de enfoques pedagógicos y propuestas de práctica docente. Esta capacidad para diagnosticar, analizar y articular las necesidades de los escolares se hace particularmente necesaria en contextos heterogéneos, más aún, en aquellos que, por razones históricas, políticas o culturales, han sido menos contemplados y sistematizados en su particularidad.
                <br><br>
                Las actuales corrientes educativas privilegian un aprendizaje centrado en el estudiante y su contexto, en la flexibilidad y en las competencias. La diversidad es, asimismo, otro de los retos que enfrentan los sistemas educativos contemporáneos.
                <br><br>
                El bagaje personal y cultural de estudiantes en contacto con diversas lenguas, formas de entender y vivir el mundo, constituyen un potencial educativo, como el de los propios escolares, que debe ser plenamente aprovechado y recuperado, con el fin de atender los retos de la diversidad y de una educación pertinente y de calidad. En correspondencia con el sustento adoptado en el Modelo Educativo para la Educación Obligatoria en el apartado de inclusión y equidad, es indispensable que los docentes atiendan la enseñanza en la lengua originaria de sus estudiantes.
                <br><br>
                Al igual que en la enseñanza situada, que considera el conocimiento como parte y producto de la actividad del contexto y de la cultura en que se desarrolla el enfoque intercultural, aplicado en educación, lo contempla desde un diálogo e interacción entre las diversas influencias y componentes culturales; así como desde una perspectiva interdisciplinar.
                <br><br>
                Además de sus implicaciones sociopolíticas, éticas, filosóficas o comunicativas, la interculturalidad está ampliando y trasformando algunas fronteras disciplinares y pedagógicas convencionales, promoviendo y renovando un diálogo entre saberes y estilos de enseñanza y aprendizaje, vinculándolos a experiencias comunitarias.
                <br><br>
                La educación indígena e intercultural, como acumulación de experiencias rigurosas y sistemáticas -que no sólo atienden, sino que emanan de la propia diversidad o características particulares del aula- han demostrado el enorme potencial de transformación e innovación de este enfoque interdisciplinar.
                <br><br>
                La interculturalidad aspira a analizar y mediar no sólo en los procesos concretos de enseñanza y aprendizaje dentro del aula, sino con relación a todo un contexto sociocultural, lingüístico o inter-lingüístico, que profundice en las distintas concepciones y motivaciones de los actores educativos, en sus aspectos cognitivos y emocionales que configuran una identidad personal, sociocultural o étnica.
                <br><br>
                Este Plan de Estudios, constituye un paso definitivo hacia un replanteamiento y transformación de prácticas educativas convencionales, que han resultado ser poco pertinentes o motivadoras, cuando no profundamente asimétricas y discriminatorias para un amplio sector de la población escolar.
                <br><br>
                Además de un abordaje particularmente interdisciplinar de sus contenidos y competencias -desde campos o sub-campos como el de la antropología, la etnolingüística, la lingüística aplicada, la psicología y la pedagogía culturales, el plan de estudios se funda en la construcción de valores, actitudes y competencias específicos.
                <br><br>
                Entre éstos se puede destacar el compromiso y la responsabilidad de profundizar en la lengua y la cultura de los pueblos originarios, que permita su equiparación en el ámbito educativo. Esto servirá, además, como un medio para repensar los procesos de investigación y práctica educativa, así como para establecer los fundamentos del análisis sociocultural, una de las principales bases para asegurar la pertinencia y equidad en la intervención educativa.
                <br><br>
                Para atender la desigual sistematización y normativización lingüística e investigación de las culturas indígenas u originarias del país, así como de los procesos de asimetría y discriminación sociopolítica, cultural y educativa que han experimentado estos y otros grupos, con características étnicas, religiosas, culturales o de género diferenciadas, se han implementado distintos cursos obligatorios y optativos en la licenciatura relacionados con esta problemática.
                <br><br>
                La actualización del Plan de Estudios para la formación inicial de maestros de educación primaria indígena se sustenta, además, en las tendencias actuales de la formación docente; en las diversas perspectivas teórico-metodológicas de las disciplinas que son objeto de enseñanza en la educación básica y de aquellas que explican el proceso educativo desde el enfoque intercultural bilingüe; en los desafíos que enfrenta la formación de maestros en las Escuelas Normales, en tanto instituciones de educación superior; en la naturaleza y desarrollo de las prácticas pedagógicas actuales y las emergentes, ante los nuevos problemas que el maestro enfrenta como resultado de los múltiples cambios que en lo social, cultural, económico, tecnológico y educativo experimenta nuestra sociedad e impactan de manera notable en el servicio educativo, en las instituciones y en los propios profesionales de la educación. Así mismo se sostiene en los marcos normativos y pedagógicos establecidos en el nuevo Modelo Educativo para la Educación Obligatoria.
                <br><br>
                Dimensión social. - Dado que la educación es una función social, su análisis permite dimensionar el papel de la escuela y del docente en el contexto de una sociedad que se transforma y experimenta desafíos importantes en el siglo XXI. Esto incide en la definición de políticas y estrategias a seguir para el fortalecimiento de la educación normal y para que los docentes que se formen en las Escuelas Normales satisfagan la demanda de educación básica.
                <br><br>
                Los diversos y complejos cambios en la sociedad como las formas de organización y de relación, la estructura familiar, los modos de producción, la incorporación de la mujer al mercado de trabajo, el avance y masificación de los medios de comunicación, la aparición de las redes sociales y los avances de la tecnología, la sociedad del conocimiento, la sostenibilidad y el advenimiento de un nuevo ciudadano, son sustento de la actualización del currículo para favorecer en los estudiantes una actitud ética ante la diversidad social, cultural, tecnológica, ideológica y ambiental que les permita retomar estos elementos como áreas de oportunidad para su intervención educativa.
                <br><br>
                Dimensión filosófica. - Nuestro sistema educativo sienta sus bases en el marco filosófico del artículo 3º de la Constitución Política de los Estados Unidos Mexicanos y en los principios que de él emanan. El derecho a la educación y los principios de laicidad, gratuidad, obligatoriedad y calidad orientan la reforma. De igual manera, los preceptos de igualdad, justicia, democracia y solidaridad en que se sustenta son fundamentales para desarrollar el sentido de responsabilidad social y de pertenencia de los futuros docentes.
                <br><br>
                Particularmente, el énfasis para garantizar la calidad en la educación obligatoria, coloca en el centro el derecho humano fundamental de que las niñas, niños y jóvenes alcancen el máximo logro de sus aprendizajes.
                <br><br>
                El marco filosófico en que se inserta la educación normal permea la definición de su normatividad, finalidades y propósitos educativos, así como las competencias a desarrollar por los docentes en formación para que conduzcan de manera pertinente los procesos de aprendizaje de los alumnos de educación básica, en el contexto de la transformación permanente de la sociedad.
                <br><br>
                Dimensión epistemológica. - Los fundamentos epistemológicos de la reforma curricular abordan la educación normal como un objeto de conocimiento y acción que se torna cada vez más complejo al constituirse en un campo de confluencia disciplinar. Las contribuciones de las ciencias de la educación, Pedagogía, Psicología, Historia, Filosofía, Antropología, Economía, entre otras, sus enfoques y formas de proceder deberán sustentar permanentemente la actualización de los currículos de la educación normal.
                <br><br>
                Producir y usar el conocimiento son principios que conducen a reflexionar de manera profunda sobre la forma en que se interpreta, comprende y explica la realidad; los avances de la ciencia son puntos de referencia para entender que el conocimiento se enriquece e incrementa todos los días y coexiste con el que se reproduce y recrea a través de las prácticas sociales y culturales de los pueblos originarios; así, los distintos campos de conocimiento relacionados con la educación avanzan, transformando sus propias teorías al igual que lo hacen otras disciplinas científicas.
                <br><br>
                Lo anterior permite concebir a la actualización del currículo como un proceso permanente de cambio, en el que los avances en el conocimiento del campo educativo se incorporan a la propuesta curricular para su transformación y para lograr una visión holística del fenómeno educativo, de sus condicionantes y efectos, que conduzcan a los actores de la educación normal a reflexionar, investigar y resolver problemas de manera pertinente. El seguimiento y la evaluación de la puesta en práctica del currículo son dos procesos inherentes a la reforma, cuyos resultados deberán sistematizarse para sustentar los cambios futuros.
                <br><br>
                Dimensión psicopedagógica.- Para atender los fines y propósitos de la educación normal y las necesidades básicas de aprendizaje de sus estudiantes, la actualización retoma los enfoques didáctico-pedagógicos actuales que se vinculan estrechamente con los contenidos y desarrollo de las áreas de conocimiento para que el futuro docente se apropie de: métodos de enseñanza, estrategias didácticas, formas de evaluación, tecnologías de la información y la comunicación y de la capacidad para crear ambientes de aprendizaje que respondan a las finalidades y propósitos de la educación básica y a las necesidades de aprendizaje de los alumnos; así como al contexto social y su diversidad.
                <br><br>
                La expectativa es que los docentes promuevan en sus estudiantes la adquisición de saberes disciplinares, el desarrollo de habilidades y destrezas, la interiorización razonada de valores y actitudes, la apropiación y movilización de aprendizajes complejos para la toma de decisiones, la solución innovadora de problemas y la creación colaborativa de nuevos saberes, como resultado de su participación en ambientes educativos experienciales y situados en contextos reales.
                <br><br>
                Por lo tanto, se demanda que posean un sólido conocimiento del contenido relacionado con lo que deben enseñar y su manera de enseñarlo, una comprensión sobre el desarrollo y el aprendizaje de todos los estudiantes, una habilidad general para organizar, explicar ideas, realizar diagnósticos, así como una gran capacidad de adaptación a las diferentes situaciones que se le presenten para encontrar las soluciones más adecuadas.
                <br><br>
                Dimensión profesional. - En la actualidad, la política educativa atribuye una gran responsabilidad a la escuela para la formación de los ciudadanos que el país requiere en el siglo XXI. En este sentido, el docente es pieza clave para materializar este propósito. Para lograrlo se han configurado distintas estrategias que van desde atraer a los mejores candidatos en la formación inicial, la actualización de los currículos de formación de docentes hasta la instalación de diversos procesos de selección al servicio profesional, lo que ha planteado nuevos desafíos a la profesión docente.
                <br><br>
                Los múltiples retos que enfrentan estos profesionales hacen necesario que la formación profesional posibilite el análisis y la comprensión de las implicaciones de su tarea. Durante décadas, la conformación sociodemográfica y el perfil académico de quienes se dedican a la docencia estuvieron definidos por la condición de género, el origen social y el capital cultural que poseen. La educación normal, era, por elección, la única opción para acceder a mejores condiciones de desarrollo profesional como personal. En los últimos años, la formación para el acceso a la profesión docente, particularmente en educación primaria indígena, dejó de ser exclusiva de las Escuelas Normales, así como los procesos de ingreso. Lo que agregó un nuevo componente a la comprensión de esta profesión. A partir de las políticas enunciadas en la LGSPD, por primera vez se han definido criterios, términos y condiciones para el ingreso, la promoción, el reconocimiento y la permanencia en el servicio. Situación que replantea las expectativas de los egresados de las licenciaturas y los involucra en procesos permanentes de desarrollo profesional.
                <br><br>
                La profesionalización de los docentes da unidad y sentido a las dimensiones social, filosófica, epistemológica, psicopedagógica, profesional e institucional de la actualización y orienta la definición e implicaciones del enfoque metodológico, de las competencias genéricas y profesionales, de la malla curricular y de otros componentes que sistematizan su diseño.
                <br><br>
                Dimensión institucional. - En lo que concierne al desarrollo institucional, las Escuelas Normales se transforman debido a su inserción en el tipo superior, lo cual favorece su consolidación en áreas en las que no habían incursionado totalmente como la investigación, la difusión de la cultura y la extensión académica.
                <br><br>
                Para lograr los propósitos educativos requieren fortalecer los procesos de gestión institucional con la participación de los miembros de la comunidad escolar, ya que la movilización y potenciación de los saberes, los tiempos, los recursos materiales y financieros, entre otros, implica planificar acciones, distribuir tareas y responsabilidades, dirigir, coordinar y evaluar los procesos y los resultados.
                <br><br>
                Sus responsabilidades y atribuciones como parte del sistema de educación superior constituyen áreas de oportunidad para fortalecer su estructura académica y organizacional, conservando en todo momento su identidad como instituciones formadoras de docentes para la educación básica.
                <br><br>
                Los fundamentos para lograr lo planteado retoman las teorías, metodologías y concepciones actuales acerca de la organización, la administración y la gestión educativa.
                <br><br>
                La actualización del Plan de Estudios pretende lograr que el estudiante de educación normal, al egresar, elija formas pertinentes para vincularse con la diversa información generada cotidianamente para aprender a lo largo de la vida, por lo que resulta de vital importancia sentar las bases para que desarrolle un pensamiento científico y una visión holística del fenómeno educativo, de sus condicionantes y efectos, que lo conduzcan a reflexionar, investigar y resolver problemas de manera permanente e innovadora. De este modo se puede aspirar a formar un docente de educación básica que utilice argumentos científicos, pedagógicos, metodológicos, técnicos e instrumentales para entender y hacer frente a las complejas exigencias que la docencia plantea.
            </p>
        </section>
    </main>
    <footer class="footer">
        <p class="footer-text">Todos los derechos reservados para Escuela Primaria Normal Larrainzar 2022</p>
        <p class="designer">Proyecto desarrollado por RosGon Freelancer y David Emiliano Rosales Gonzalez</p>
        <div class="bar"></div>
    </footer>
    </body>
</html>