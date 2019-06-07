$(document).ready(function(){   

    onInit();

    function onInit(){
        const userType = document.getElementById("userType").value;
        userTypeCheck(userType);
    }
    
    $('#user-form').submit(function (e){
        switch ($('#userType').val()) {
            case "M":
                const userEmployeForm = {
                    name: $('#name').val(),
                    lastName: $('#lastName').val(),
                    surname: $('#surname').val(),
                    email: $('#email').val(),
                    userType: $('#userType').val(),
                    city: $('#city').val(),
                    zipCode: $('#zipCode').val(),
                    municipality: $('#municipality').val(),
                    validate: "OK"
                }
                
                // postFormWithResponse("../../service/test.php", userEmployeForm, function (respose){
                //     console.log(respose);
                // }); 
                
                $('#user-form').trigger('reset');
            break;

            case "I":
                const userInstitutionForm = {
                    name: $('#name').val(),
                    lastName: $('#lastName').val(),
                    surname: $('#surname').val(),
                    email: $('#email').val(),
                    userType: $('#userType').val(),
                    description: $('#description').val(),
                    rfc: $('#rfc').val(),
                    telephone: $('#telephone').val(),
                    address: $('#address').val(),
                    city: $('#city').val(),
                    zipCode: $('#zipCode').val(),
                    municipality: $('#municipality').val(),
                    webPage: $('#webPage').val(),
                    facebook: $('#facebook').val(),
                    twitter: $('#twitter').val(),
                    validate: "OK"
                }

                // postFormWithResponse("../../service/test.php", userInstitutionForm, function (respose) {
                //     console.log(respose);
                // }); 
                
                $('#user-form').trigger('reset');
            break;
        }
        
        e.preventDefault();
    });


    function userTypeCheck(userType){
        switch (userType) {
            case "M":
                document.getElementById("RFCContainer").innerHTML = "";
                document.getElementById("userAddres").innerHTML = getEmployeAddres();
                document.getElementById("aditionalInformation").innerHTML = "";  
            break;
            case "I":
                document.getElementById("RFCContainer").innerHTML = getRfcInput(); 
                document.getElementById("userAddres").innerHTML = getInstitutionAddres();
                document.getElementById("aditionalInformation").innerHTML = getAditionalIformation();   
            break;
        }
    }

    $(".userType").change(function () {
        const userType = document.getElementById("userType").value;
        userTypeCheck(userType);     
    });

    $(".cancel").click(function () {
        document.getElementById("name").value = "";
        document.getElementById("lastName").value = "";
        document.getElementById("surname").value = "";
        document.getElementById("email").value = "";
        document.getElementById("city").value = "";
        document.getElementById("zipCode").value = "";
        document.getElementById("municipality").value = "";
        if (document.getElementById("userType").value == "I") {
            document.getElementById("description").value = "";
            document.getElementById("rfc").value = "";
            document.getElementById("telephone").value = "";
            document.getElementById("address").value = "";
            document.getElementById("webPage").value = "";
            document.getElementById("facebook").value = "";
            document.getElementById("twitter").value = "";
        }
    });

});