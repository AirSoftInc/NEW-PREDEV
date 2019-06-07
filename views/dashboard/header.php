<header class="app-header top-bar">

    <nav class="navbar navbar-expand-md">

        <div class="navbar-header d-flex align-items-center" style="background: #091426;">
            <a href="javascript:void:(0)" class="mobile-toggle"><i class="ti ti-align-right"></i></a>
            <a class="navbar-brand" href="index.php">
                <img src="../../public/dist/img/img-dashboard/PREDEV.png" class="img-fluid logo-desktop" alt="logo" />
                <img src="../../public/dist/img/img-dashboard/logo-iconPre.png" class="img-fluid logo-mobile"
                    alt="logo" />
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="ti ti-align-left"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="navigation d-flex">
                <ul class="navbar-nav nav-left">
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link sidebar-toggle">
                            <i class="ti ti-align-right"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  " href="javascript:void(0)" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mega Menu
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <div class="dropdown-menu mega-menu animated fadeIn" aria-labelledby="navbarDropdown">
                            <div class="row no-gutters">
                                <div class="col-sm-2 p-20">
                                    <h4>UI Kit</h4>
                                    <ul>
                                        <li class="nav-link">
                                            <a href="#">Alerts</a>
                                        </li>
                                        <li class="nav-link">
                                            <a href="#">Buttons</a>
                                        </li>
                                        <li class="nav-link">
                                            <a href="#">Cards</a>
                                        </li>
                                        <li class="nav-link">
                                            <a href="#">Carousel</a>
                                        </li>

                                        <li class="nav-link">
                                            <a href="#">Dropdowns</a>
                                        </li>
                                        <li class="nav-link">
                                            <a href="#">List Group</a>
                                        </li>
                                        <li class="nav-link">
                                            <a href="#">Modals</a>
                                        </li>
                                        <li class="nav-link">
                                            <a href="#">Progress Bars</a>
                                        </li>
                                        <li class="nav-link">
                                            <a href="#">Tabs</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-2 p-20">
                                    <h4>Pages</h4>
                                    <ul>
                                        <li class="nav-link">
                                            <a href="#">Account Settings</a>
                                        </li>
                                        <li class="nav-link">
                                            <a href="#">Clients</a>
                                        </li>
                                        <li class="nav-link">
                                            <a href="#">Contacts</a>
                                        </li>
                                        <li class="nav-link">
                                            <a href="#">Gallery</a>
                                        </li>
                                        <li class="nav-link">
                                            <a href="#">Pricing</a>
                                        </li>
                                        <li class="nav-link">
                                            <a href="#">Task List</a>
                                        </li>
                                        <li class="nav-link">
                                            <a href="#">404</a>
                                        </li>
                                        <li class="nav-link">
                                            <a href="#">500</a>
                                        </li>
                                        <li class="nav-link">
                                            <a href="#">Coming Soon</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-4 p-20">
                                    <h4>Contact Us</h4>
                                    <div>
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="Password1"
                                                    placeholder="Enter Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" id="Email1"
                                                    placeholder="Enter Email">
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" placeholder="Message" id="Textarea1"
                                                    rows="3"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary text-uppercase">Submit</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="chart-wrap">
                                        <div class="p-20">
                                            <h4 class="mb-1">Page Views</h4>
                                            <p>Daily page visitors</p>
                                            <h2 class="text-primary font-xxl mt-2">80+</h2>
                                        </div>
                                        <div class="apexchart-wrapper">
                                            <div id="pageview"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item full-screen d-none d-lg-block" id="btnFullscreen">
                        <a href="javascript:void(0)" class="nav-link expand">
                            <i class="icon-size-fullscreen"></i>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav nav-right ml-auto">
                    <li class="nav-item">
                        <a class="nav-link search" href="javascript:void(0)">
                            <i class="ti ti-search"></i>
                        </a>
                        <div class="search-wrapper">
                            <div class="close-btn">
                                <i class="ti ti-close"></i>
                            </div>
                            <div class="search-content">
                                <form>
                                    <div class="form-group">
                                        <i class="ti ti-search magnifier"></i>
                                        <input type="text" class="form-control autocomplete" placeholder="Search Here"
                                            id="autocomplete-ajax" autofocus="autofocus">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown user-profile" >
                        <a href="javascript:void(0)" class="nav-link dropdown-toggle " id="navbarDropdown4"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="../../public/dist/img/img-dashboard/avtar/01.jpg" alt="avtar-img">
                            <span class="bg-success user-status"></span>
                        </a>
                        <div class="dropdown-menu animated fadeIn" aria-labelledby="navbarDropdown">
                            <div class=" px-4 py-3" style="background: #155FFF;">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="mr-1">
                                        <h4 class="text-white mb-0">Institución</h4>
                                        <small class="text-white">usuario@example.com</small>
                                    </div>
                                    <a href="../home/index.php" class="text-white font-20 tooltip-wrapper" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Logout"> <i
                                            class="zmdi zmdi-power"></i></a>
                                </div>
                            </div>
                            <div class="p-4">
                                <a class="dropdown-item d-flex nav-link " href="edit-profile.php">
                                    <i class="fa fa-user pr-2 text-success"></i> Perfil</a>
                                <!--<a class="dropdown-item d-flex nav-link" href="javascript:void(0)">
                                    <i class="fa fa-envelope pr-2 text-primary"></i> Inbox
                                    <span class="badge badge-primary ml-auto">6</span>
                                </a>-->
                                <a class="dropdown-item d-flex nav-link" href="javascript:void(0)">
                                    <i class=" ti ti-settings pr-2 text-info"></i> Configuración
                                </a>
                                <a class="dropdown-item d-flex nav-link" href="javascript:void(0)">
                                    <i class="fa fa-compass pr-2 text-warning"></i> Ayuda?</a>

                                <a class="dropdown-item d-flex nav-link" href="../home/index.php">
                                    <i class="fa fa-globe pr-2 text-danger"></i> PREDEV Web</a>
                                <!--<div class="row mt-2">
                                   <div class="col">
                                        <a class="bg-light p-3 text-center d-block" href="#">
                                            <i class="fe fe-mail font-20 text-primary"></i>
                                            <span class="d-block font-13 mt-2">My messages</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="bg-light p-3 text-center d-block" href="#">
                                            <i class="fe fe-plus font-20 text-primary"></i>
                                            <span class="d-block font-13 mt-2">Compose new</span>
                                        </a>
                                    </div>
                                </div>-->
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>