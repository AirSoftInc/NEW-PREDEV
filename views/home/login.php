<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Admin template that can be used to build dashboards for CRM, CMS, etc." />
    <meta name="author" content="Potenza Global Solutions" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="../../public/dist/img/img-dashboard/logo-iconPre.png">
    <link rel="stylesheet" type="text/css" href="../../public/dist/css/vendors.css"/>
    <link rel="stylesheet" type="text/css" href="../../public/dist/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="../../public/dist/css/general-style.css"/>
</head>
<body class="bg-white">
    <div class="app">
        <div class="app-wrap">

            <div class="app-contant">
                <div class="bg-white">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters">
                            <div class="col-sm-6 col-lg-5 col-xxl-3  align-self-center order-2 order-sm-1">
                                <div class="d-flex align-items-center h-100-vh">
                                    <div class="login p-50">
                                    <img id="logo_img" src="../../public/dist/img/img-dashboard/PREDEV.png"   width= "300px" height= "100px"> 
                                        <h1 class="mb-2">Colabora con PREDEV</h1>
                                        <p>Bienvenido, por favor ingresa a tu cuenta.</p>
                                        <form id="login-form" action="" name="login" method="post" class="mt-3 mt-sm-5">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="form-control2" class="control-label">Nombre de usuario*</label>
                                                        <input type="text" class="form-control" id="email" name="email"
                                                            placeholder="Correo" />
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Contraseña*</label>
                                                        <input type="password" class="form-control" id="password" name="password"
                                                            placeholder="Contraseña" />
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="d-block d-sm-flex  align-items-center">
                                
                                                        <a id="text-color2" href="javascript:void(0);" class="ml-auto">Olvide mi contraseña
                                                            ?</a>
                                                    </div>
                                                </div>
                                                <div class="col-12 mt-3">
                                                    <a type="cancel"  class="btn btn-secondary" href="../home/index.php">REGRESAR</a>
                                                    <a type="submit" id="btn2" class="btn btn-success" href="../dashboard/index.php">Ingresar</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xxl-9 col-lg-7 bg-gradient o-hidden order-1 order-sm-2">
                                <div class="row align-items-center h-100">
                                    <img class="img-fluid" src="../../public/dist/img/img-dashboard/bg/login.jpg" alt="" style="
                                    height: 660px;width: 7620px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../../public/dist/js/vendors.js"></script>
    <script src="../../public/dist/js/jquery.min.js"></script>
    <script src="../../public/dist/js/sweetalert.min.js"></script>

</body>
</html>