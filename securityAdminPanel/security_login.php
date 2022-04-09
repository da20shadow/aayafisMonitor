<?php
include "admin_header.php";
?>
<div class="container mt-5">

    <div id="successReg">

    </div>

    <h1 class="text-center my-3">Admin Panel</h1>

    <form id="loginForm" class="was-validated loginForm bg-light shadow-lg">
        <div class="mb-3">
            <label for="emailValidation" class="form-label">Email:</label>
            <input type="email" class="form-control is-invalid" name="email"
                   id="emailValidation" placeholder="Email" required/>
        </div>
        <div class="mb-3">
            <label for="passwordValidation" class="form-label">Password:</label>
            <input type="password" class="form-control is-invalid" name="password"
                   id="passwordValidation" placeholder="Password" required/>
        </div>
        <div class="mb-3">
            <label for="pin" class="form-label">Pin:</label>
            <input type="password" class="form-control is-invalid" name="pin"
                   pattern="[0-9]{8}"
                   id="pin" placeholder="Pin" required/>
        </div>
        <input class="mainBtn mt-3" type="submit" value="Login">
    </form>


</div>

<script src="assets/js/notifications.js"></script>
<script src="assets/js/formsValidation.js"></script>
<script src="core/ajax/sendFormDataToPHP.js"></script>
<script src="core/ajax/userLogin.js"></script>

