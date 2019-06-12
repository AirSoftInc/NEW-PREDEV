<!DOCTYPE <!DOCTYPE html>
<html lang="en">

<head>
    <?php
        require_once("libraries/css.php");
    ?>
    <link rel="stylesheet" type="text/css" href="../../public/dist/css/home-css/mapa.css">
</head>

<body>
    <div class="page-wrapper">
        <?php
            require_once("header.php");
        ?>
        <section class="inner-area parallax-bg" data-background="../../public/dist/img/img-home/bg/px-1.jpg"
            data-type="parallax" data-speed="3">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-12">
                            <h4>Estadisticas</h4>
                            <p><a href="index.php" class="btn-link2">Home</a>  Estadisticas</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 bg-f7"></div>
                        <div class="col-2 bg-theme-color"></div>
                        <div class="col-5 bg-f7"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="service-details-section pb-80 bg-f10">
            <div class="container ">
                <div class="row ">
                    <div class="col-md-12 col-lg-7">
                        <div class="service-details ">
                            <div class="a">
                                <img class="alta" src="../../public/dist/img/img-home/mapa/Hausteca_alta.png">
                                <br>
                                <img class="baja" src="../../public/dist/img/img-home/mapa/huasteca_baja.png">
                                <br>
                                <img class="totonaca" src="../../public/dist/img/img-home/mapa/totonaca.png">
                                <br>
                                <img class="nautla" src="../../public/dist/img/img-home/mapa/nautla.png">
                                <br>
                                <img class="capital" src="../../public/dist/img/img-home/mapa/capital.png">
                                <br>
                                <img class="sotavento" src="../../public/dist/img/img-home/mapa/sotavento.png">
                                <br>
                                <img class="montanas" src="../../public/dist/img/img-home/mapa/las_montanas.png">
                                <br>
                                <img class="papaloapan" src="../../public/dist/img/img-home/mapa/papaloapan.png">
                                <br>
                                <div class="tuxtla">
                                    <img class="tuxtla1" src="../../public/dist/img/img-home/mapa/los_tuxtla.png">
                                </div>
                                <img class="olmeca" src="../../public/dist/img/img-home/mapa/olmeca.png">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-5">
                        <div class="service-details-sidebar">
                            <div class="contact-box">
                                <div class="contact-item statistics-chart">
                                    <h4>Porcentaje de discriminación por zona </h4>
                                    <div class="card text-dark bg-f9 col-sm-10">
                                    <div id="chart">
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div>
            <div id="chart">
            </div>
        </div>
        <?php
            require_once("footer.php");
        ?>
    </div>

    <?php
        require_once("libraries/js.php");
    ?>
    <script src="../../public/dist/js/apexcharts.js"></script>
    <script src="../../public/dist/js/home-js/statistics-home.js"></script>
    <script src="../../public/dist/helper/municipality-helper.js"></script>
    <script src="../../public/dist/helper/crud-function-service.js"></script>
    <script src="../../public/dist/helper/lodash.js"></script>
    <script src="../../public/dist/helper/scraping-helper.js"></script>
    <script src="../../service/scraping-service/scraping-service.js"></script>
</body>

</html>