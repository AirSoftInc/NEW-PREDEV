<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        require_once("libraries/css.php");
    ?>
    <script src="../../public/dist/js/jquery.min.js"></script>
    <script src="../../public/dist/js/home-js/home.js"></script>
</head>

<body>
    <div class="page-wrapper">
        <?php
            require_once("header.php");
        ?>
        <section class="slider-wrapper p-0">
            <div id="slider-style-one" class="carousel slide bs-slider control-round indicators-line"
                data-ride="carousel" data-pause="hover" data-interval="5000">
                <ol class="carousel-indicators">
                    <li data-target="#slider-style-one" data-slide-to="0" class="active"></li>
                    <li data-target="#slider-style-one" data-slide-to="1"></li>
                    <li data-target="#slider-style-one" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img id="slider-img" src="../../public/dist/img/img-home/slider/head1.jpg" alt="Slider Images"
                            class="slide-image" />
                        <div class="bs-slider-overlay"></div>

                        <div class="container">
                            <div class="row">
                                <div class="slide-text slide-style-left">
                                    <div class="sub-title">
                                        <h4>Buscamos posicionarnos</h4>
                                    </div>
                                    <div class="title-box">
                                        <h2>Como la plataforma de confianza <br> en Veracruz </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img id="slider-img" src="../../public/dist/img/img-home/slider/head2.jpg" alt="Slider Images"
                            class="slide-image" />
                        <div class="bs-slider-overlay"></div>

                        <div class="container">

                            <div class="row">
                                <!-- Slide Text Layer -->
                                <div class="slide-text slide-style-right">
                                    <div class="sub-title">
                                        <h4>Buscamos posicionarnos</h4>
                                    </div>
                                    <div class="title-box">
                                        <h2>Como la plataforma de confianza<br> en Veracruz </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img id="slider-img" src="../../public/dist/img/img-home/slider/head3.jpg" alt="Slider Images"
                            class="slide-image" />
                        <div class="bs-slider-overlay"></div>
                        <div class="container">
                            <div class="row">
                                <div class="slide-text slide-style-center">
                                    <div class="sub-title">
                                        <h4>Buscamos posicionarnos</h4>
                                    </div>
                                    <div class="title-box">
                                        <h2>Como la plataforma de confianza<br> en Veracruz </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#slider-style-one" role="button" data-slide="prev">
                    <span class="fas fa-angle-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#slider-style-one" role="button" data-slide="next">
                    <span class="fas fa-angle-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>

        <section class="welcome-feature-section pb-40">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="welcome-feature">
                            <div class="thumb">
                                <img id="objetive" src="../../public/dist/img/img-home/features/objetive1.jpg" alt="features img" width="200" height="100">
                            </div>
                            <div class="content">
                                <div class="icon-box">
                                    <i class="fas fa-hands"></i>
                                </div>
                                <h2>Contribuir a combatir la discriminación</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="welcome-feature">
                            <div class="thumb">
                                <img id="objetive" src="../../public/dist/img/img-home/features/objetive2.jpg" alt="features img" width="200" height="100">
                            </div>
                            <div class="content">
                                <div class="icon-box">
                                    <i class="fas fa-hands"></i>
                                </div>
                                <h2>Mejora continua en la sociedad</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="welcome-feature">
                            <div class="thumb">
                                <img id="objetive" src="../../public/dist/img/img-home/features/objetive3.jpg" alt="features img" width="200" height="100">
                            </div>
                            <div class="content">
                                <div class="icon-box">
                                    <i class="fas fa-hands"></i>
                                </div>
                                <h2>concientizar sobre la discriminación</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="service-section4 bg-f9 pb-40">
            <div class="container">
                <div class="row">
                    <div class="section-title">
                        <h4>Colaboradores</h4>
                        <h2>Principales <span>Instituciones</span></h2>
                        <p>
                            Éstas son las principales instituciones con las cuales
                            estamos asociados para combatir la discriminación.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="service-item style-4">
                            <div class="thumb">
                                <img alt="service img" src="../../public/dist/img/img-home/service/institution1.jpg">
                                <div class="service-link-box">
                                    <a href="https://www.conapred.org.mx/index.php">Ver más</a>
                                </div>
                            </div>
                            <div class="content">
                                <h3>CONAPRED</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-item style-4">
                            <div class="thumb">
                                <img alt="service img" src="../../public/dist/img/img-home/service/institution2.jpg">
                                <div class="service-link-box">
                                    <a href="https://www.inegi.org.mx/default.html">Ver más</a>
                                </div>
                            </div>
                            <div class="content">
                                <h3>INEGI</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-item style-4">
                            <div class="thumb">
                                <img alt="service img" src="../../public/dist/img/img-home/service/institution3.jpg">
                                <div class="service-link-box">
                                    <a href="http://www.cndh.org.mx/">Ver más</a>
                                </div>
                            </div>
                            <div class="content">
                                <h3>CNDH</h3>
                            </div>
                        </div>
                    </div>
                    <!--<div class="col-md-4">
                        <div class="service-item style-4">
                            <div class="thumb">
                                <img alt="service img" src="../../public/dist/img/img-home/service/4.jpg">
                                <div class="service-link-box">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            <div class="content">
                                <h3>Asbestos Remediation</h3>
                                <h4>Industrial</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-item style-4">
                            <div class="thumb">
                                <img alt="service img" src="../../public/dist/img/img-home/service/5.jpg">
                                <div class="service-link-box">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            <div class="content">
                                <h3>Painting and Protective</h3>
                                <h4>Painting</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-item style-4">
                            <div class="thumb">
                                <img alt="service img" src="../../public/dist/img/img-home/service/6.jpg">
                                <div class="service-link-box">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            <div class="content">
                                <h3>Pharmaceutical Research</h3>
                                <h4>Industrial</h4>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>

        <section class="company-section">
            <div class="container">
                <div class="row about-features">
                    <div class="col-md-8">
                        <div class="content">
                            <h5>Consientizate</h5>
                            <h1>cómo combatir la <span>Discriminación</span></h1>
                            <p>
                                1. Recuerda que todos somos humanos y que estamos propensos a tomar decisiones incorrectas.
                            </p>
                            <br>
                            <p>
                                2. Trata de entender que la otra persona tiene sentimientos y que nosotros con nuestras acciones/actitudes podemos dañarlos.
                            </p>
                            <br>
                            <p>
                                3. Tomarte un momento antes de expresar una opinion negativa acerca de alguien.
                            </p>
                            <br>
                            <p>
                                4. Si tu comentario no es positivo, mejor resérvatelo.
                            </p>
                            <br>
                            <p>
                                5. Aplica la regla de oro “trata a otros como quisieras que te trataran a ti.”
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumb">
                            <video width="420" height="340" controls="controls">
                                <source src="../../public/dist/videos/video.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="projects-section over-layer-white parallax-bg" style="background-image:url(../../public/dist/img/img-home/bg/px-2.jpg);"
            data-type="parallax" data-speed="5">
            <div class="container">
                <div class="row">
                    <div class="section-title">
                        <h4>Casos de discriminación</h4>
                        <h2>Algunos casos en<span> Veracruz</span></h2>
                        <p>
                            En éste apartado se presentan algunos de los casos
                            de discriminación más recientes.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="projects_carousel" class="owl-carousel">
                            <div class="item">
                                <div class="projects-item">
                                    <div class="thumb">
                                        <img src="../../public/dist/img/img-home/projects/case1.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <h1>01</h1>
                                        <h3>Mujeres discapacitadas sufren discriminación</h3>
                                        <p>
                                            La profesora Yolanda Pérez Cazarín aseguró que los fuertes golpes que le ha dado la vida,
                                            no se comparan con la lucha que tiene que emprender diariamente, para exigir respeto
                                        </p>
                                        <a class="project-btn" href="https://www.eldictamen.mx/2018/03/boca-ver/mujeres-discapacitadas-sufren-discriminacion/">Ver más</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="projects-item">
                                    <div class="thumb">
                                        <img src="../../public/dist/img/img-home/projects/case2.jpg" alt="" width="100" height="100">
                                    </div>
                                    <div class="content">
                                        <h1>02</h1>
                                        <h3>No hay avance en bodas y adopción gay</h3>
                                        <p>
                                            La armonización normativa en Veracruz en materia de reconocimiento de derechos de
                                            la población LGBTTTI se encuentra en“números rojos”, apenas alcanza 50.91% de
                                            concretización en la legislación estatal.
                                        </p>
                                        <a class="project-btn" href="https://www.elsoldecordoba.com.mx/local/no-hay-avance-en-bodas-y-adopcion-gay-2876546.html">Ver más</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="projects-item">
                                    <div class="thumb">
                                        <img src="../../public/dist/img/img-home/projects/case3.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <h1>03</h1>
                                        <h3>violencia y discriminación: Luna</h3>
                                        <p>
                                            CÓRDOBA, Ver. (OEM-Informex).- Veracruz seubica en tercer lugar nacional en casos de
                                            violencia,discriminación y homofobia hacia personas lésbico-gay.
                                        </p>
                                        <br>
                                        <a class="project-btn" href="#">Ver más</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="projects-item">
                                    <div class="thumb">
                                        <img src="../../public/dist/img/img-home/projects/case4.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <h1>04</h1>
                                        <h3>Embarazadas con VIH sufren discriminación en hospitales</h3>
                                        <p>
                                            En los hospitales del Sector Salud sigue siendo un problema recurrente la discriminación hacia
                                            mujeres embarazadas con virus deinmunodeficiencia humana.
                                        </p>
                                        <a class="project-btn" href="#">Ver más</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonials-section pb-70">
            <div class="container">
                <div class="row">
                    <div class="section-title">
                        <h4>Nuestro equipo</h4>
                        <h2>Miembros del equipo <span>PREDEV</span></h2>
                        <p>
                        Estos son los importantes miembros del equipo PREDEV. gracias a ellos todo
                        ésto es posible.
                        </p>
                    </div>
                </div>
                <div class="row testimonials-post">
                    <div class="col-md-12">
                        <div id="testimonials_carousel" class="owl-carousel">
                            <div class="item">
                                <div class="testimonials-item">
                                    <div class="thumb">
                                        <img src="../../public/dist/img/img-home/testimonials/1.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <p><i class="fas fa-quote-left"></i>
                                            Estará a cargo del equipo de proyecto y de los roles de los integrantes del equipo,
                                            así como administrar de manera correcta las tareas a cada uno de los participantes.
                                        <i class="fas fa-quote-right"></i></p>
                                        <small><strong>Arath Yael Gonzalez Peralta</strong> - Lider de proyecto</small>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonials-item">
                                    <div class="thumb">
                                        <img src="../../public/dist/img/img-home/testimonials/2.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <p><i class="fas fa-quote-left"></i>
                                            Estructura de manera correcta la arquitectura del sistema con base a la información obtenida y especificada
                                            del líder de proyecto para el correcto desarrollo del mismo.
                                        <i class="fas fa-quote-right"></i></p>
                                        <small><strong>Roberto Lidio Garcés Tello</strong> - Analista del sistema</small>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonials-item">
                                    <div class="thumb">
                                        <img src="../../public/dist/img/img-home/testimonials/3.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <p><i class="fas fa-quote-left"></i>
                                            Desarrollará los artefactos del proyecto con los requerimientos
                                            asignados correctamente.
                                        <i class="fas fa-quote-right"></i></p>
                                        <small><strong>Eddy López Bravo</strong> - Desarrollador</small>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonials-item">
                                    <div class="thumb">
                                        <img src="../../public/dist/img/img-home/testimonials/2.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <p><i class="fas fa-quote-left"></i>
                                            Organiza de manera lógica la información del sistema en los servidores y su 
                                            correcto funcionamiento.
                                        <i class="fas fa-quote-right"></i></p>
                                        <small><strong>Jonathan Carlos Rojas Huerta</strong> - Administrador de base de datos</small>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonials-item">
                                    <div class="thumb">
                                        <img src="../../public/dist/img/img-home/testimonials/2.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <p><i class="fas fa-quote-left"></i>
                                            Estudia la estructura del sistema y genera reportes financieros de los entregables del proyecto.
                                        <i class="fas fa-quote-right"></i></p>
                                        <small><strong>Christian Paul Chávez Martínez</strong> -Analista de procesos de negocios</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
            require_once("footer.php");
        ?>
    </div>
    <?php
        require_once("libraries/js.php");
    ?>
</body>

</html>