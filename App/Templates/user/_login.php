<?php
/** @var ErrorDTO $error */
/** @var UserDTO $data */

use App\Data\ErrorDTO;
use App\Data\UserDTO;

?>
<div class="container mt-5">

    <div id="successLog">

    </div>

    <h1 class="text-center my-3">Login</h1>

    <?php if($error): ?>
        <span style="color: red"><?= $error->getMessage(); ?></span>
        <br /><br />
    <?php endif; ?>

    <form method="post" id="loginForm" class="was-validated loginForm bg-light shadow-lg">
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

</div>
