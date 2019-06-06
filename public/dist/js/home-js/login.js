$(document).ready(function(){
    
    $('#login-form').submit(function (e){
        const login = {
            email: $('#email').val(),
            password: $('#password').val(),
            validate: "OK"
        }        

        // console.log(user);

        $.post('../../service/outLogin.php', login, function (respose){
            console.log(respose);
            $('#btn2').attr('href', '../../views/dashboard/index.php');
        });

        e.preventDefault();
    });
    
});