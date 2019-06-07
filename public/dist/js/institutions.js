document.getElementById("institutions").className = "active";
document.getElementById("institutions").style = "background-color: #64e500;";

$(document).ready(function(){
    getUsers();

    function getUsers() {
        $.ajax({
            url: '../../service/get-institutions.php',
            type: 'GET',
            success: function (response) {
                let users = JSON.parse(response);
                let template = '';
                users.forEach(user => {
                    template += `
                    <tr userID="${user.id}">
                    <td>${user.id}</td>
                    <td>${user.name}</td>
                    <td>${user.email}</td>
                    <td>${user.name}</td>
                    <td><a href="javascript:void(0)" id="${user.email}" class="btn btn-icon btn-outline-primary btn-round mr-2 mb-2 mb-sm-0 status-update"><i class="ti ti-check-box"></i></a></a></td>
                    <td>
                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-primary btn-round mr-2 mb-2 mb-sm-0 "><i class="ti ti-pencil"></i></a>
                        <a href="javascript:void(0)" class="btn btn-icon btn-outline-danger btn-round user-delete"><i class="ti ti-close"></i></a>
                    </td>
                    `
                });
    
                $('#users').html(template);
            }
        });   
    }

    $(document).on('click', '.user-delete', function(){
        let element = $(this)[0].parentElement.parentElement;
        let id = $(element).attr('userID');

        $.post('../../service/delete-institution.php', {id}, function (respose){
            swal("Eliminado Correctamente", "El usuario se ha eliminado", "success");
            getUsers();
        });
    });

    $(document).on('click', '.status-update', function(){
        let email = $(this);
        let element = $(this)[0].parentElement.parentElement;
        let id = $(element).attr('userID');
        
        const userActive = {
            id: id,
            email: email[0].id
        }
        
        $.post('../../service/update-status.php', userActive , function (respose){
            console.log(respose);          
            swal("Se ha aceptado la solicitud", "El usuario ha sido aceptado", "success");
            getUsers();
        });
    })
});