function sendFormDataToPHP(receivedUrl,body,idMessage,redirectUrl = "#"){

    const url = receivedUrl;
    const settings = {
        method: 'POST',
        body: body
    };
    fetch(url,settings)
        .then(function (response){
            return response.text();
        })

        .then(function (returnedPHPData){
            //Success/Error message from php
            if (returnedPHPData.indexOf("Success") >= 0){

                document.getElementById(idMessage)
                    .innerHTML = displaySuccess(returnedPHPData);

                if (redirectUrl !== "#"){
                    setTimeout(function(){
                        window.location.replace(redirectUrl);
                    }, 1300);
                }
            }else{
                document.getElementById(idMessage)
                    .innerHTML = displayError(returnedPHPData);
            }
            return returnedPHPData;
        })
        .catch(function (err){
            //Error Message
            document.getElementById(idMessage)
                .innerHTML = displayError(err);
            return err;
        })
}