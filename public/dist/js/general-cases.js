document.getElementById("general-cases").className = "active";
document.getElementById("cases").className = "active";

$(document).ready(function(){
    onInit();

    function onInit(){
        getGeneralCases();
    }

    function getGeneralCases() {
        retrive("../../service/cases-service/general-cases-service.php", function(response){
            const cases = JSON.parse(response);
            let template = '';

            cases.forEach(caseSelected => {
                template += `
                <tr caseID="${caseSelected.id}">
                    <td>${caseSelected.title}</td>
                    <td>${caseSelected.date}</td>
                    <td><strong class="${caseSelected.status}">${caseSelected.status}</strong></td>
                    <td>
                        <a href="${caseSelected.link}" class="btn btn-icon btn-round btn-info"><i class="fa fa-info"></i></a>
                        <a href="javascript:void(0);" class="btn btn-icon btn-round btn-warning"><i class="fa fa-paint-brush"></i></a>
                        <a href="javascript:void(0);" class="btn btn-icon btn-round btn-danger"><i class="fa fa-trash"></i></a>
                        <a href="javascript:void(0);" class="btn btn-icon btn-round btn-success"><i class="fa fa-users"></i></a>
                    </td>
                </tr>
                `;
            });

            $('#generalCases').html(template);
        });
    }
});