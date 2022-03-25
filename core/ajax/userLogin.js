const loginForm = document.getElementById('loginForm');
loginForm.addEventListener('submit',function (e){
    //Prevent default form submit
    e.preventDefault();

    //Get form inputs by 'name'
    const loginFormData = new FormData(this);

    //Check if login details are valid
    let isLoginDetailsValid =
        loginFormValidation(loginFormData.get('email'),loginFormData.get('password'));

    if (isLoginDetailsValid){
        //Send Login Details to PHP
        const url = "../includes/_login_user.php";
        let successfullyLogged = sendFormDataToPHP(url,'POST',loginFormData);

        if (successfullyLogged){
            setTimeout(function(){
                window.location.replace("account.php");
            }, 1100);
        }
    }else{
        displayError("Login Error! Invalid Email or Password! Please, try again!")
    }

})
