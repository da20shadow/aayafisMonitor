<?php
$title = "Admin Settings";
include "admin_header.php";
?>
<div class="container mt-5">

    <h1 class="text-center my-3">Administrator Settings</h1>

    <div class="row mt-4">
        <!--Change Password Form -->
        <div class="col-12 col-lg-6 mt-5">

            <form class="was-validated loginForm bg-light shadow-lg">

                <h3 class="text-center mb-4">Change Password:</h3>

                <div class="mb-3">
                    <label for="newPass" class="form-label">Enter New Password:</label>
                    <input type="password" class="form-control is-invalid" id="newPass" placeholder="New Password" required/>
                </div>
                <div class="mb-3">
                    <label for="newPassAgain" class="form-label">Enter New Password Again:</label>
                    <input type="password" class="form-control is-invalid" id="newPassAgain" placeholder="Re-Password" required/>
                </div>
                <div class="mb-3">
                    <label for="currentPass" class="form-label">Enter Current Password:</label>
                    <input type="password" class="form-control is-invalid" id="currentPass" placeholder="Current Password" required/>
                </div>

                <input class="mainBtn mt-3" type="submit" value="Save Changes">
            </form>

        </div>

        <div class="col-12 col-lg-6 mt-5">

            <form class="was-validated loginForm bg-light shadow-lg">

                <h4 class="text-center">Change Email</h4>
                <div class="mb-3">
                    <label for="emailValidation" class="form-label">New Email:</label>
                    <input type="email" class="form-control is-invalid" name="email"
                           id="emailValidation" placeholder="Email" required/>
                </div>
                <div class="mb-3">
                    <label for="email_again" class="form-label">New Email Again:</label>
                    <input type="email" class="form-control is-invalid" name="email_again"
                           id="email_again" placeholder="Email Again" required/>
                </div>
                <div class="mb-3">
                    <label for="passwordValidation" class="form-label">Password:</label>
                    <input type="password" class="form-control is-invalid" name="password"
                           id="passwordValidation" placeholder="Password" required/>
                </div>

                <input class="mainBtn mt-3" type="submit" value="Save Changes">
            </form>
        </div>

    </div>

</div>

<script src="assets/js/notifications.js"></script>
<script src="assets/js/formsValidation.js"></script>
<script src="core/ajax/sendFormDataToPHP.js"></script>
<script src="core/ajax/userLogin.js"></script>

