//Update Project form inputs data
const updateForm = document.getElementById('updateForm');

updateForm.addEventListener("submit",function (e){
    e.preventDefault();

    const updateFormData = new FormData(this);

    //Check if reg form data is valid
    // let isDataValid = regFormValidation(updateFormData.get('project_name'),
    //     updateFormData.get('url'),
    //     updateFormData.get('commission'),
    //     updateFormData.get('rcb'));

    // if (isDataValid){
        //Sending data to PHP if data is valid!
        const url = "../includes/_update_project.php";

        sendFormDataToPHP(url,updateFormData,"updatedMessage","refresh");

    // }else{
    //     document.getElementById('successReg')
    //         .innerHTML = displayError("Registration Error! Please, try again!");
    // }

})
