function loginFormValidation(email,password){
    if (email.length < 10 || email.length > 150){
        displayError("The email must be between 13 and 45 characters!");
        return false;
    }else if (!email.match(/^[a-z]+[a-z0-9_.]*[@][a-z]{3,}[.][a-z]{2,4}$/)){
        displayError("Please enter valid email address!");
        return false;
    }else if (password.length < 8 || password.length > 75){
        displayError("The password must be between 8 and 75 characters!");
        return false;
    }
    return true;
}
//Reg Form Validation
function regFormValidation(username,email,password,re_password){
    //Inputs Validation
    if (username.length < 5 || username.length > 45){
        displayError("The username must be between 6 and 45 characters!");
        return false;
    }else if (!username.match(/^[a-zA-Z]+[a-zA-Z0-9_]{4,45}$/)){
        displayError("Username must start with letter and can contains only letters and digits!");
        return false;
    }else if (email.length < 13 || email.length > 150){
        displayError("The email must be between 13 and 45 characters!");
        return false;
    }else if (!email.match(/^[a-z]+[a-z0-9_.]*[@][a-z]{3,}[.][a-z]{2,4}$/)){
        displayError("Please enter valid email address!");
        return false;
    }else if (password.length < 8 || password.length > 75){
        displayError("The password must be between 8 and 75 characters!");
        return false;
    }else if (password.length !== re_password.length){
        displayError("Passwords doesn't match!");
        return false;
    }else if (password !== re_password){
        displayError("Passwords doesn't match!");
        return false;
    }else if (!document.getElementById('validationFormCheck1').checked){
        displayError("You must agree with the terms and privacy policy first!");
        return false;
    }
    return true;
}