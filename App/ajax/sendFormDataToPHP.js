function sendFormDataToPHP(receivedUrl,body,idNotificationMessage,redirectUrl = "#"){

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

                document.getElementById(idNotificationMessage)
                    .innerHTML = displaySuccess(returnedPHPData);
                setTimeout(function(){
                    document.getElementById(idNotificationMessage)
                        .innerHTML = "";
                }, 1200);

                if (redirectUrl === "refresh"){
                    setTimeout(function(){
                        location.reload();
                    }, 1300);
                }else if (redirectUrl !== "#"){
                    setTimeout(function(){
                        window.location.replace(redirectUrl);
                    }, 1300);
                }
            }else{
                document.getElementById(idNotificationMessage)
                    .innerHTML = displayError(returnedPHPData);
                setTimeout(function(){
                    document.getElementById(idNotificationMessage)
                        .innerHTML = "";
                }, 1300);
            }
            return returnedPHPData;
        })
        .catch(function (err){
            //Error Message
            document.getElementById(idNotificationMessage)
                .innerHTML = displayError(err);
            setTimeout(function(){
                document.getElementById(idNotificationMessage)
                    .innerHTML = "";
            }, 1300);
            return err;
        })
}
