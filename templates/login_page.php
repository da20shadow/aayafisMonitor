<div class="container mt-5">

    <div id="successReg">

    </div>

    <h1 class="text-center my-3">Login</h1>

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
        <span>Not a member? </span><a href="register.php">Register</a>
        <br>
        <input class="mainBtn mt-3" type="submit" value="Login">
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
<script src="core/ajax/userLogin.js"></script>
