//Reg form inputs data
const regForm = document.getElementById('regForm');

regForm.addEventListener("submit",function (e){
    e.preventDefault();

    const regFormData = new FormData(this);

    //Check if reg form data is valid
    let isDataValid = regFormValidation(regFormData.get('username'),
                                        regFormData.get('email'),
                                        regFormData.get('password'),
                                        regFormData.get('re_password'));

    if (isDataValid){
        //Sending data to PHP if data is valid!
        const url = "../includes/_register_user.php";
        sendFormDataToPHP(url,'POST',regFormData);
        setTimeout(function(){
            window.location.replace("login.php");
        }, 1300);
    }else{
        displayError("Registration Error! Please, try again!")
    }

})
