<div class="container mt-5">

    <h1 class="text-center">Edit Account</h1>

    <hr class="divider">

    <div class="row mt-4">

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

                <br>
                <input class="mainBtn mt-3" type="submit" value="Save Changes">
            </form>

        </div>

        <div class="col-12 col-lg-6 mt-5">

            <form class="was-validated loginForm bg-light shadow-lg">

                <h3 class="text-center mb-4">Change Payment Processor</h3>

                <div class="mb-3">
                    <label for="perfectMoney" class="form-label">PerfectMoney Wallet:</label>
                    <input type="text" class="form-control is-invalid" id="perfectMoney" placeholder="Example: U1234567" required/>
                </div>
                <div class="mb-3">
                    <label for="payeer" class="form-label">Payeer Wallet:</label>
                    <input type="text" class="form-control is-invalid" id="payeer" placeholder="Example: P123456" required/>
                </div>

                <br>
                <input class="mainBtn mt-3" type="submit" value="Save Changes">
            </form>
        </div>

    </div>

</div>