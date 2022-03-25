<div class="container mt-5">

    <div id="successReg">

    </div>

    <h1 class="text-center my-3">Register</h1>

    <form id="regForm" class="was-validated loginForm bg-light shadow-lg">
        <div class="mb-3">
            <label for="usernameValidation" class="form-label">Username:</label>
            <input type="text" class="form-control is-invalid" name="username"
                   id="usernameValidation" placeholder="Username" required
                   pattern="^[a-zA-Z]+[a-zA-Z0-9_]{4,45}$" />
        </div>

        <div class="mb-3">
            <label for="emailValidation" class="form-label">Email:</label>
            <input type="email" class="form-control is-invalid" name="email"
                   id="emailValidation" placeholder="Email" required
                   pattern="^[a-z]+[a-z0-9_.]*[@][a-z]{3,}[.][a-z]{2,4}$" />
        </div>

        <div class="mb-3">
            <label for="passwordValidation" class="form-label">Password:</label>
            <input type="password" class="form-control is-invalid" name="password"
                   id="passwordValidation" placeholder="Password" required
                    pattern="^\S{8,45}$" />
        </div>

        <div class="mb-3">
            <label for="rePasswordValidation" class="form-label">Re-Password:</label>
            <input type="password" class="form-control is-invalid" name="re_password"
                   id="rePasswordValidation" placeholder="Re-Password" required
                   pattern="^\S{8,45}$" />
        </div>

        <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input" id="validationFormCheck1" required>
            <label class="form-check-label" for="validationFormCheck1">I accept the terms and privacy policy</label>
            <div class="invalid-feedback">You must agree before registering.</div>
        </div>

        <span>Already a member? </span><a href="login.php">Login</a>
        <br>
        <input id="regBtn" class="mainBtn mt-3" type="submit" value="Register">
    </form>

    <!-- Advertising Banner 728x90 -->
    <div class="row m-auto">
        <div class="border-3 border-dark shadow-lg"
             style="margin:30px auto; width: 728px; height: 90px;">
            <p class="text-center mt-4">Advertising banner 728x90</p>
        </div>
    </div>

</div>
<script src="assets/js/notifications.js"></script>
<script src="assets/js/formsValidation.js"></script>
<script src="core/ajax/sendFormDataToPHP.js"></script>
<script src="core/ajax/sendRegForm.js"></script>


