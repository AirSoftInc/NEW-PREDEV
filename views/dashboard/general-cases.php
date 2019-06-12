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
                                    <div class="page-title mb-2 mb-sm-0">
                                        <h1>Casos</h1>
                                    </div>
                                    <div class="ml-auto d-flex align-items-center">
                                        <nav>
                                            <ol class="breadcrumb p-0 m-b-0">
                                                <li class="breadcrumb-item">
                                                    <a href="index.php"><i class="ti ti-home"></i></a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                Casos
                                                </li>
                                                <li class="breadcrumb-item active text-primary" aria-current="page">
                                                Casos</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card card-statistics clients-contant">
                                    <div class="card-body py-0 table-responsive">
                                        <table class="table clients-contant-table mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Titulo</th>
                                                    <th scope="col">Fecha</th>
                                                    <th scope="col">Estatus</th>
                                                    <th scope="col">Asignado a</th>
                                                    <th scope="col">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody id="generalCases">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                require_once("footer.php");
                require_once("cases-modals.php");
            ?>
        </div>
        <?php
        require_once("libraries/js.php");
        ?>
        <script src="../../public/dist/js/jquery.min.js"></script>
        <script src="../../public/dist/helper/crud-function-service.js"></script>
        <script src="../../public/dist/js/general-cases.js"></script>
    </div>
</body>

</html>