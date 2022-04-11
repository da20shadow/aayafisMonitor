<?php
$title = "Pending RCB Requests";
include ("admin_header.php");
$numberOfRCBRequests = 3;
?>
<div class="container">

    <h3 class="mt-5 text-center">
        <?php echo htmlspecialchars($numberOfRCBRequests); ?> Pending RCB Requests
    </h3>

    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="table-dark">
            <tr>
                <th class="text-center">Project</th>
                <th class="text-center">Username</th>
                <th class="text-center">RCB</th>
                <th class="text-center">Wallet</th>
                <th class="text-center">Action</th>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td class="text-center">Projectname.com</td>
                <td class="text-center">username123</td>
                <td class="text-center">$5</td>
                <td class="text-center">U1234567</td>
                <td class="text-center">
                    <button class="btn btn-secondary bg-gradient btn-sm">Approve</button>
                    <button class="btn btn-danger bg-gradient btn-sm">Delete</button>
                </td>
            </tr>
            <tr>
                <td class="text-center">Projectname2.com</td>
                <td class="text-center">username65443</td>
                <td class="text-center">$51</td>
                <td class="text-center">P123435</td>
                <td class="text-center">
                    <button class="btn btn-secondary bg-gradient btn-sm">Approve</button>
                    <button class="btn btn-danger bg-gradient btn-sm">Delete</button>
                </td>

            </tr>
            <tr>
                <td class="text-center">Projectname3.com</td>
                <td class="text-center">miki_mouse</td>
                <td class="text-center">$53</td>
                <td class="text-center">U1234567</td>
                <td class="text-center">
                    <button class="btn btn-secondary bg-gradient btn-sm">Approve</button>
                    <button class="btn btn-danger bg-gradient btn-sm">Delete</button>
                </td>
            </tr>
            </tbody>

        </table>
    </div>

    <h3 class="mt-5 text-center">RCB Requests History</h3>

    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="table-dark">
            <tr>
                <th class="text-center">Project</th>
                <th class="text-center">Username</th>
                <th class="text-center">RCB</th>
                <th class="text-center">Wallet</th>
                <th class="text-center">Status</th>
                <th class="text-center">Action</th>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td class="text-center">Projectname.com</td>
                <td class="text-center">username123</td>
                <td class="text-center">$5</td>
                <td class="text-center">U1234567</td>
                <td class="text-center">
                    <span class="badge bg-success small">Paid</span>
                </td>
                <td class="text-center">
                    <button class="btn btn-danger bg-gradient btn-sm">Delete</button>
                </td>
            </tr>
            <tr>
                <td class="text-center">Projectname2.com</td>
                <td class="text-center">username65443</td>
                <td class="text-center">$51</td>
                <td class="text-center">P123435</td>
                <td class="text-center">
                    <span class="badge bg-danger small">Rejected</span>
                </td>
                <td class="text-center">
                    <button class="btn btn-danger bg-gradient btn-sm">Delete</button>
                </td>

            </tr>
            <tr>
                <td class="text-center">Projectname3.com</td>
                <td class="text-center">miki_mouse</td>
                <td class="text-center">$53</td>
                <td class="text-center">U1234567</td>
                <td class="text-center">
                    <span class="badge bg-success small">Paid</span>
                </td>
                <td class="text-center">
                    <button class="btn btn-danger bg-gradient btn-sm">Delete</button>
                </td>
            </tr>
            </tbody>

        </table>
    </div>


</div>
