<head>
    <link rel="stylesheet" href="../../public/dist/alerts/alertify.default.css">
    <link rel="stylesheet" href="../../public/dist/alerts/alertify.core.css">
</head>
<div class="modal fade changueStatus" tabindex="-1" role="dialog" aria-labelledby="changueStatus" id="statusModal"
    aria-hidden="true">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content bg-f10">
            <div class="modal-header bg-f7">
                <div id="changueStatusTitle"></div>
            </div>

            <div class="modal-body">
                <div class="row">
                    <p class="title-register col-lg-12">Selecciona un estatus:</p>
                    <div class="form-group col-lg-6">
                        <select id="status" name="status" class="form-control">
                            <option>Selecciona un estatus</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-2">
                        <button type="submit" id="btnStatus" class="btn btn-success">Cambiar Estatus</button>
                    </div>
                    <div class="offset-1 form-group col-lg-2">
                        <button type="button" id="statusCancel" class="btn btn-danger cancel" data-dismiss="modal" id="cancel" name="cancel" >Cancelar</button>
                    </div>
                </div>
            </div>
            <br><br><br>
        </div>
    </div>
</div>

<div class="modal fade assignToInstitution" tabindex="-1" role="dialog" aria-labelledby="assignToInstitution"
    aria-hidden="true">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content bg-f10">
            <div class="modal-header bg-f7">
                <div id="assignToInstitutionTitle"></div>
            </div>

            <div class="modal-body">
                <div class="row">
                    <p class="title-register col-lg-12">A que institución quieres asignar el caso:</p>
                    <div class="form-group col-lg-8">
                        <select id="institution" name="institution" class="form-control">
                            <option value="NULL">Selecciona una institución</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-2">
                        <button type="submit" id="btnAssined" class="btn btn-success">Asignar</button>
                    </div>
                    <div class="form-group col-lg-2">
                        <button type="button" id="assignedCanel" class="btn btn-danger cancel" data-dismiss="modal" id="cancel" name="cancel" >Cancelar</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="../../public/dist/js/sweetalert.min.js"></script>
<script src="../../public/dist/js/jquery.min.js"></script>
<script src="../../public/dist/alerts/alertify.min.js"></script>
<script src="../../public/dist/helper/crud-function-service.js"></script>
<script src="../../public/dist/helper/enums-helper.js"></script>