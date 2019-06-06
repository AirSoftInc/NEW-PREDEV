<!DOCTYPE html>
<html>

<head>
    <?php
        require_once("libraries/css.php");    
    ?>
</head>

<body>
    <div class="app">
        <div class="app-wrap">
            <?php
                require_once("loader.php");           
            ?>
            <?php
                require_once("header.php");           
            ?>
            <div class="app-container">
                <div class="app-navbar">
                    <?php
                        require_once("menu.php");
                    ?>
                </div>

                <div class="app-main" id="main">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 m-b-30">
                                <div class="d-block d-lg-flex flex-nowrap align-items-center">
                                    <div class="page-title mr-4 pr-4 border-right">
                                        <h1>Dashboard</h1>
                                    </div>
                                    <div class="breadcrumb-bar align-items-center">
                                        <nav>
                                            <ol class="breadcrumb p-0 m-b-0">
                                                <li class="breadcrumb-item">
                                                    <a href="index.php"><i class="ti ti-home"></i></a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    Dashboard
                                                </li>
                                                <li class="breadcrumb-item active text-primary" aria-current="page">
                                                    Home</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row magnific-wrapper">
                            <h1 class="page-title welcome">Bienvenidos a</h1>
                            <span>
                             <img class="text-center" src="../../public/dist/img/img-dashboard/PREDEV.png" alt="gallery-img" width="250" height="75">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                require_once("footer.php");
            ?>
        </div>
        <?php
        require_once("libraries/js.php");
        ?>
        <script src="../../public/dist/js/index.js"></script>
    </div>
</body>

</html>