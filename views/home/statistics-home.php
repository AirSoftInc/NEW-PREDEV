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
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <?php
            require_once("footer.php");
        ?>
    </div>

    <?php
        require_once("libraries/js.php");
    ?>
    <script src="../../public/dist/js/apexcharts.js"></script>
    <script src="../../public/dist/js/home-js/statistics-home.js"></script>
    <script src="../../public/dist/helper/crud-function-service.js"></script>
    <script src="../../public/dist/helper/lodash.js"></script>
    <script src="../../public/dist/helper/scraping-helper.js"></script>
    <script src="../../service/scraping-service/scraping-service.js"></script>
</body>

</html>