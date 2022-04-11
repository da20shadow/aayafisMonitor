<?php
$user_id = $_SESSION['user_id'];

//TODO create class for the projects
$paidRCB = "45"; //get from rcb requests table all with status 2
$pendingRCB = "3"; //get from rcb requests table all with status 1
$totalRequestedRCB = "33" //get total rcb requests with user_id = user_id

?>
<div class="container mt-5">

    <h1 class="text-center">Hello <?php echo htmlspecialchars( $_SESSION['username']); ?>, welcome to your account!</h1>
    <hr class="divider">

    <!-- Account statistics boxes -->
    <div class="row m-auto">

        <div class="col-12 col-md-4 text-center">
            <div class="account-box-stat">
                <h5 class="fw-bold">$<?php echo htmlspecialchars($pendingRCB); ?></h5>
                <p>Pending RCB</p>
            </div>
        </div>
        <div class="col-12 col-md-4 text-center">
            <div class="account-box-stat">
                <h5 class="fw-bold">$<?php echo htmlspecialchars($paidRCB); ?></h5>
                <p>Total Paid RCB</p>
            </div>
        </div>
        <div class="col-12 col-md-4 text-center">
            <div class="account-box-stat">
                <h5 class="fw-bold"><?php echo htmlspecialchars($totalRequestedRCB); ?></h5>
                <p>Total RCB Requests</p>
            </div>
        </div>

    </div>

    <h3 class="mt-5 text-center">Pending RCB Requests</h3>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="table-dark">
            <tr>
                <th>Project</th>
                <th>Deposit</th>
                <th>RCB</th>
                <th>Status</th>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td>Projectname.com</td>
                <td>$50</td>
                <td>$5</td>
                <td>Pending</td>
            </tr>
            <tr>
                <td>Projectname2.com</td>
                <td>$510</td>
                <td>$51</td>
                <td>Pending</td>
            </tr>
            <tr>
                <td>Projectname3.com</td>
                <td>$530</td>
                <td>$53</td>
                <td>Pending</td>
            </tr>
            </tbody>

        </table>
    </div>

</div>
