document.getElementById("general-cases").className = "active";
document.getElementById("cases").className = "active";

$(document).ready(function(){
    onInit();

    function onInit(){
        getGeneralCases();
        getStatus();
    }

    function getGeneralCases() {
        retrive("../../service/cases-service/general-cases-service.php", function(response){
            const cases = JSON.parse(response);
            let template = '';
            cases.forEach(caseSelected => {
                const assignedClass = caseSelected.isAssigned === "Sin asignar" ? "color: #e40059 !important;" : "assigned";
                template += `
                <tr>
                    <td>${caseSelected.title}</td>
                    <td>${caseSelected.date}</td>
                    <td><strong class="${caseSelected.status}">${caseSelected.status}</strong></td>
                    <td><strong style="${assignedClass}">${caseSelected.isAssigned}</strong></td>
                    <td>
                        <a href="${caseSelected.link}" class="btn btn-icon btn-round btn-info" 
                        data-toggle="tooltip" data-placement="top" title="Click para mas información"><i class="fa fa-info"></i></a>

                        <a href="javascript:void(0);" class="btn btn-icon btn-round btn-warning changue-status"
                        data-toggle="modal" data-target=".changueStatus" caseID="${caseSelected.id}"><i class="fa fa-paint-brush"></i></a>

                        <a href="javascript:void(0);" class="btn btn-icon btn-round btn-danger case-delete"><i class="fa fa-trash"></i></a>

                        <a href="javascript:void(0);" class="btn btn-icon btn-round btn-success assig-institution" 
                        data-toggle="modal" data-target=".assignToInstitution" caseID="${caseSelected.id}"><i class="fa fa-users"></i></a>
                    </td>
                </tr>
                `;
            });

            $('#generalCases').html(template);
        });
    }

    $(document).on('click', '.assig-institution', function () {
        const id = $(this).attr('caseID');
        idForm = {id: id};
        retriveWithParams("../../service/cases-service/get-case-by-id-service.php", idForm, function(response){
            const caseSelected = JSON.parse(response);
            const action = caseSelected.isAssigned != "Sin asignar" ? "Transferir" : "Asignar";
            const title = `<h3 class="title modal-title"><strong>${action} caso: </strong><label class="case-title">${caseSelected.title}</label></h3>`;
            $('#assignToInstitutionTitle').html(title);

            $(document).on('click', '#btnAssined', function () {

            });
        })
    });

    $(document).on('click', '.changue-status', function () {
        let statusSelected = "";
        let updateStatusForm = {};
        const id = $(this).attr('caseID');
        idForm = { id: id };
        retriveWithParams("../../service/cases-service/get-case-by-id-service.php", idForm, function (response) {
            const caseSelected = JSON.parse(response);
            const title = `<h3 class="title modal-title"><strong>Cambiar estatus del caso: </strong><label class="case-title">${caseSelected.title}</label></h3>`;
            $('#changueStatusTitle').html(title);

            $("#status").change(function () {
                statusSelected = document.getElementById("status").value;
                updateStatusForm = {
                    id: id,
                    status: statusSelected
                };
            });

            $(document).on('click', '#btnStatus', function () {
                putFormWithResponse("../../service/cases-service/update-status-service.php", updateStatusForm, function(response){
                    getGeneralCases();
                });
            });
        });
    });

    function getStatus() {
        const selectElement = document.getElementById("status");
        selectElement.innerHTML += "";
        CASE_STATUS_SELECT.forEach(status =>{
            selectElement.innerHTML += `<option value="${status}">${status}</option>`;
        });
    }
});
