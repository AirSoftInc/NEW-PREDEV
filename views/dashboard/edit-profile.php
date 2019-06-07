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
                                        <h1>Edición de perfil</h1>
                                    </div>
                                    <div class="ml-auto d-flex align-items-center">
                                        <nav>
                                            <ol class="breadcrumb p-0 m-b-0">
                                                <li class="breadcrumb-item">
                                                    <a href="index.php"><i class="ti ti-home"></i></a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    Edición de perfil
                                                </li>
                                                <li class="breadcrumb-item active text-primary" aria-current="page">
                                                    Edición de perfil</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row magnific-wrapper mt-8">
                    <div class="container">
                        <div class="row">
                            <div class="offset-2 col-sm-3 h-60">
                                <div class="avatar" id="containerAvatar">
                                    <img class="avatar" id="avatar" src="../../public/dist/img/img-avatar/avatar.jpg">
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label class="col-sm-12 color-blue">Nombre:</label>
                                        <label class="col-sm-12">Crash Bandicoot</label>
                                    </div>
                                    
                                    <div class="col-sm-12 mt-10">
                                        <label class="col-sm-12 color-blue">Correo electronico:</label>
                                        <label class="col-sm-12">Crash@bandicoot.com</label>
                                    </div>

                                    <div class="col-sm-12 mt-10">
                                        <label class="col-sm-12 color-blue">Telefono:</label>
                                        <label class="col-sm-12">+52 272-224-8559</label>
                                    </div>

                                    <div class="col-sm-12 mt-10">
                                        <label class="col-sm-12 color-blue">Direccion:</label>
                                        <label class="col-sm-12">Dirección UKA UKA</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-7 border-solid">
                                <form id="user-form" class="mt-10">
                                    <div class="row">
                                        <div class="col-lg-6 mb-3">
                                            <label for="name">Nombre</label>
                                            <div class="input-group input-radius">
                                                <div class="input-group-prepend">
                                                    <div id="color-i-icon" class="input-group-text"><i class="fas fa-user"></i></div>
                                                </div>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    placeholder="Nombre">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <label for="rfc">RFC</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div id="color-i-icon" class="input-group-text"><i class="fas fa-key"></i></div>
                                                </div>
                                                <input type="text" class="form-control" id="rfc" name="rfc" placeholder="RFC">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6 mb-3">
                                            <label for="lastName">Email</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div id="color-i-icon" class="input-group-text"><i class="fas fa-envelope"></i></div>
                                                </div>
                                                <input type="text" class="form-control" id="lastName"
                                                    name="lastName" placeholder="Correo electronico">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-3">
                                            <label for="lastName">Telefono</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div id="color-i-icon" class="input-group-text"><i class="fas fa-phone"></i></div>
                                                </div>
                                                <input type="text" class="form-control" id="lastName"
                                                    name="lastName" placeholder="Telefono">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12 mb-3">
                                            <label for="lastName">Foto de perfil</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend" id="color-i-icon">
                                                    <span class="input-group-text" id="color-i-icon"><i class="fas fa-image"></i></span>
                                                </div>
                                                <div class="custom-file">
                                                    <input style="box-shadow: none;" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                                    <label style="box-shadow: none;" class="custom-file-label" for="inputGroupFile01">Elige una foto de perfil</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12 mb-3">
                                            <label for="lastName">Dirección</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div id="color-i-icon" class="input-group-text"><i class="fas fa-envelope"></i></div>
                                                </div>
                                                <input type="text" class="form-control" id="lastName"
                                                    name="lastName" placeholder="Correo electronico">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-4 mb-3">
                                            <label for="name">Contraseña</label>
                                            <div class="input-group input-radius">
                                                <div class="input-group-prepend">
                                                    <div id="color-i-icon" class="input-group-text"><i class="fas fa-lock"></i></div>
                                                </div>
                                                <input type="password" class="form-control" id="name" name="name" placeholder="Contraseña">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label for="rfc">Contraseña</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div id="color-i-icon" class="input-group-text"><i class="fas fa-lock"></i></div>
                                                </div>
                                                <input type="password" class="form-control" id="rfc" name="rfc" placeholder="Contraseña">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-3 pos-buttom">
                                            <a type="button" class="btn btn-danger cancel border-buttom" data-dismiss="modal" 
                                            id="cancel" name="cancel" href="index.php">Cancelar</a>
                                            <button type="submit" id="btnSave" class="btn btn-success border-buttom">Guardar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
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
        <script src="../../public/dist/js/jquery.min.js"></script>
        <script src="../../public/dist/js/edit-profile.js"></script>
    </div>
</body>

</html>