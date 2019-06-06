<head>
    <link rel="stylesheet" href="../../public/dist/alerts/alertify.default.css">
    <link rel="stylesheet" href="../../public/dist/alerts/alertify.core.css">
</head>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content bg-f10">
            <div class="modal-header bg-f7">
                <div style="margin: 0 auto 1px;" class="section-title h2">
                    <h2 style="font-size: 30px;">Información de <span>la cuenta</span></h2>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <section class="contact-details pb-60">
                    <div class="container">
                        <div class="section-content">
                            <div class="row register-container">
                                <div class="col-12 col-sm-12 col-md-7 col-lg-12">
                                    <h3 style="font-size: 25px;" class="title">Datos <span>principales</span></h3>
                                    <form id="user-form">
                                        <div class="row">
                                            <p class="title-register col-lg-12">¿Qué tipo de usuario eres?</p>
                                            <div class="form-group col-lg-4">
                                                <select id="userType" name="userType" class="form-control userType">
                                                    <option value="E">Colaborador</option>
                                                    <option value="I">Institución</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 mb-3">
                                                <label for="name">Nombre(s)</label>
                                                <div class="input-group input-radius">
                                                    <div class="input-group-prepend">
                                                        <div id="color-div" class="input-group-text"><i id="color-i-icon" class="fas fa-user"></i></div>
                                                    </div>
                                                    <input type="text" class="form-control" id="name" name="name"
                                                        placeholder="Nombre"  onblur="validateAlphanumeric(this.value, 'Nombre')">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label for="lastName">Primer apellido</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div id="color-div" class="input-group-text"><i id="color-i-icon" class="fas fa-user"></i></div>
                                                    </div>
                                                    <input type="text" class="form-control" id="lastName"
                                                        name="lastName" placeholder="Primer apellido"  onblur="validateAlphanumeric(this.value, 'Apellido')">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 mb-3">
                                                <label for="surname">Segundo apellido</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div id="color-div" class="input-group-text"><i id="color-i-icon" class="fas fa-user"></i></div>
                                                    </div>
                                                    <input type="text" class="form-control" id="surname" name="surname"
                                                        placeholder="Segundo apellido"  onblur="validateAlphanumeric(this.value, 'Apellido')">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label for="email">Email</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div id="color-div" class="input-group-text"><i id="color-i-icon" class="fas fa-envelope"></i></div>
                                                    </div>
                                                    <input type="email" class="form-control" id="email" name="email"
                                                        placeholder="Email"  onblur="validateEmail(this.value, 'Email')">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 mb-3" id="RFCContainer"></div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12 mb-3">
                                                <h3 style="font-size: 25px;" class="title">Ubica<span>ción</span></h3>
                                            </div>
                                        </div>
                                        <div class="row" id="userAddres"></div>
                                        <div class="row">
                                            <div class="col-lg-6 mb-3">
                                                <label for="zipCode">Codigo Postal</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div id="color-div" class="input-group-text"><i id="color-i-icon" class="fas fa-hashtag"></i></div>
                                                    </div>
                                                    <input type="text" class="form-control" id="zipCode"
                                                        name="zipCode" placeholder="Codigo postal"  onblur="validateZipCode(this.value, 'Codigo Postal')">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label for="municipality">Municipio</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div id="color-div" class="input-group-text"><i id="color-i-icon" class="fas fa-city"></i></div>
                                                    </div>
                                                    <input type="text" class="form-control" id="municipality"
                                                        name="municipality" placeholder="Municipio"  onblur="validateAlphanumeric(this.value, 'Ciudad')">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pt-20" id="aditionalInformation"></div>

                                        <div class="row">
                                            <div class="col-lg-4 offset-lg-8">
                                                <button type="button" class="btn btn-danger cancel"
                                                    data-dismiss="modal" id="cancel" name="cancel" >Cancelar</button>
                                                <button type="submit" id="btnSave" class="btn btn-success">Registrar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

<script src="../../public/dist/js/sweetalert.min.js"></script>
<script src="../../public/dist/js/jquery.min.js"></script>
<script src="../../public/dist/helper/crud-function-service.js"></script>
<script src="../../public/dist/helper/register-inputs-html.js"></script>
<script src="../../public/dist/js/home-js/register-modal.js"></script>
<script src="../../public/dist/js/validator.js"></script>
<script src="../../public/dist/alerts/alertify.min.js"></script>