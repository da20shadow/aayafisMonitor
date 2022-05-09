function getData(phpHandlerURL,renderID){

    fetch(phpHandlerURL)

        .then(function (response){
            return response.text();
        })

        .then(function (returnedPHPData){

            document.getElementById(renderID)
                .innerHTML = returnedPHPData;
        })

        .catch(function (err){
            console.log(err);
        })
}