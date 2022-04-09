<?php
include ("admin_header.php");
$paidRCB = "45"; //get from rcb requests table all
$pendingRCB = "3"; //get from rcb requests table all
$totalRequestedRCB = "33" //get from rcb requests table all
?>
<div class="container">

    <h1 class="text-center my-5">Monitor Statistics</h1>
    <hr class="divider">

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
</div>