function sendFormDataToPHP(receivedUrl,method,body){

    const url = receivedUrl;
    const settings = {
        method: method,
        body: body
    };
let success;
    fetch(url,settings)

        .then(function (response){

            return response.text();

        })

        .then(function (returnedPHPData){

            //Success/Error message from php
            document.getElementById('successReg').innerHTML = returnedPHPData;

        })

        .catch(function (err){

            //Error Message
            document.getElementById('successReg').innerHTML =
                "<svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">\n" +
                "            <symbol id=\"exclamation-triangle-fill\" fill=\"currentColor\" viewBox=\"0 0 16 16\">\n" +
                "                <path d=\"M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z\"/>\n" +
                "            </symbol>\n" +
                "        </svg>\n" +
                "        <div class=\"alert alert-danger d-flex align-items-center\" role=\"alert\">\n" +
                "            <svg class=\"bi flex-shrink-0 me-2\" width=\"24\" height=\"24\" role=\"img\" aria-label=\"Danger:\">\n" +
                "                <use xlink:href=\"#exclamation-triangle-fill\"/>\n" +
                "            </svg>\n" +
                "            <div>\n" +
                err +
                "            </div>\n" +
                "        </div>";
            return false;
        })
    return true;
}