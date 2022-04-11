<?php
$title = "Homepage";
include_once ("templates/header.php");

if (isset($_GET['id'])){
    $project =  ProjectCrud::getProjectById($_GET['id']);
    if ($project != null){

        $commission = $project['commission'];
        $rcb = $project['rcb'];


?>
    <div class="container">

        <form id="loginForm" class="was-validated loginForm bg-light shadow-lg my-5">

            <h3 class="text-center mb-4"><?php echo $project['project_name'] ?></h3>
            <h5 class="text-center">RCB: <?php echo $project['rcb'] ?>%</h5>

            <div class="mb-3">
                <label for="project_username" class="form-label">Username:</label>
                <input type="text" class="form-control is-invalid" name="project_username"
                       id="project_username"
                       placeholder="Username in <?php echo $project['project_name'] ?>" required/>
            </div>
            <div class="row">
                <div class="col-12 col-lg-7">

                    <div class="mb-3">
                        <label for="deposit" class="form-label">Your Deposit:</label>
                        <input type="number" class="form-control is-invalid" name="deposit"
                               id="deposit" placeholder="Deposit" step="0.01" required/>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <label for="rcb" class="form-label">You will get:</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-icon">$</span>
                        <input type="text" class="form-control" name="rcb"
                               id="rcb" step="0.01" aria-describedby="basic-icon" disabled/>
                    </div>
                </div>
            </div>
            <input class="mainBtn mt-3" type="submit" value="Request">
        </form>
        <input id="project_rcb" type="number" value="<?php echo htmlspecialchars($rcb) ?>" hidden>
        <input id="commission" type="number" value="<?php echo htmlspecialchars($commission) ?>" hidden>
    </div>
        <script>
            let deposit = document.getElementById('deposit');
            let commission = document.getElementById('commission').value;
            let displayRcb = document.getElementById('rcb');
            let rcb = document.getElementById('project_rcb').value;

            deposit.addEventListener('keyup', ()=>{
                displayRcb.value = ((((deposit.value / 100) * commission) / 100) * rcb).toFixed(2);
            })
        </script>
<?php
}else{
    echo "<h3 class='text-center text-danger my-5'>No such project!</h3>";

}
}

include_once ("templates/footer.php");