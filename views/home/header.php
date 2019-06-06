<header class="header header-style-1 clearfix">
    <div class="menu-style menu-style-1 bg-transparent clearfix">
        <div class="main-navigation main-mega-menu animated">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container">
                    <a class="navbar-brand" href="index.php">
                        <img id="logo_img" src="../../public/dist/img/img-dashboard/PREDEV.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-1"
                        aria-controls="navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar-collapse-1">
                        <ul class="navbar-nav ml-xl-auto">
                            <li class="nav-item" id="home">
                                <a href="index.php" class="nav-link" aria-haspopup="true"
                                    aria-expanded="false">Home</i></a>
                            </li>
                            <li class="nav-item" id="statistics-home">
                                <a href="statistics-home.php" class="nav-link" aria-haspopup="true"
                                    aria-expanded="false">Estadisticas</i></a>
                            </li>
                            <!-- <li class="nav-item dropdown">
                                <a href="#" class="nav-link" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">Services <i class="fas fa-angle-down"></i></a>
                                <div class="dropdown-menu left-1">
                                    <div class="dropdown">
                                        <a class="dropdown-item" href="#">Industry
                                            Construction</a>
                                        <a class="dropdown-item" href="#">Risk Analysis</a>
                                        <a class="dropdown-item" href="#">Industial law</a>
                                        <a class="dropdown-item" href="#">Manufacturing</a>
                                        <a class="dropdown-item" href="#">Petroleum and Gas</a>
                                        <a class="dropdown-item" href="#">Welding Engineering</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link " data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">Pages <i class="fas fa-angle-down"></i></a>
                                <div class="dropdown-menu left-1">
                                    <div class="dropdown">
                                        <a class="dropdown-item" href="#">About Us</a>
                                        <a class="dropdown-item" href="#">Our Team</a>
                                        <a class="dropdown-item" href="#">Testimonials</a>
                                        <div class="dropdown">
                                            <a class="dropdown-toggle dropdown-item" data-toggle="dropdown" href="#">our
                                                services</a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">services style one</a>
                                                <a class="dropdown-item" href="#">services style two</a>
                                            </div>
                                        </div>
                                        <a class="dropdown-item" href="#">Shop</a>
                                        <a class="dropdown-item" href="#">Shop details</a>
                                        <a class="dropdown-item" href="#">Faq</a>
                                        <a class="dropdown-item" href="#">404</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown ">
                                <a href="#" class="nav-link" id="seventh-dropdown" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">Blog <i
                                        class="fas fa-angle-down"></i></a>
                                <div class="dropdown-menu navbar-right" aria-labelledby="seventh-dropdown">
                                    <a class="dropdown-item" href="#">Blog</a>
                                    <a class="dropdown-item" href="#">Blog right sidebar</a>
                                    <a class="dropdown-item" href="#">Blog left sidebar</a>
                                    <a class="dropdown-item" href="#">Blog full width</a>
                                    <a class="dropdown-item" href="#">Blog details</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">Contact <i class="fas fa-angle-down"></i></a>
                                <div class="dropdown-menu navbar-right">
                                    <div class="dropdown">
                                        <a class="dropdown-item" href="#">Contact style 1</a>
                                        <a class="dropdown-item" href="#">Contact style 2</a>
                                    </div>
                                </div>
                            </li>-->
                        </ul>
                        <div class="dropdown-buttons">
                            <div class="btn-group menu-search-box">
                                <button type="button" class="btn dropdowdropdown-toggle" id="header-drop-3"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-search"></i></button>
                                <ul class="dropdown-menu dropdown-menu-right dropdown-animation"
                                    aria-labelledby="header-drop-3">
                                    <li>
                                        <form role="search" class="search-box">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Search">
                                                <i class="fas fa-search"></i>
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <a href="#" class="btn dropdowdropdown-toggle" id="seventh-dropdown" style="padding-top: 2px;"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                        class="fas fa-user-lock"></i></a>
                                <div class="dropdown-menu navbar-right" aria-labelledby="seventh-dropdown">
                                    <a class="dropdown-item option-dropdown" href="#" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-user-plus"></i> REGISTRARSE</a>
                                    <a class="dropdown-item option-dropdown" href="login.php"><i class="fas fa-user-lock"></i> INICIAR SESIÓN</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
<?php
    require_once("register-modal.php");
?>

