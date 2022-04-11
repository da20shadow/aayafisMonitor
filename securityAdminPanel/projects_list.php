<?php
$title = "Projects List";
include ("admin_header.php");
$numberOfListedProjects = 3;
?>

<div class="container">

    <h3 class="mt-5 text-center">
        <?php echo htmlspecialchars($numberOfListedProjects); ?> Listed Projects
    </h3>

    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="table-dark">
            <tr>
                <th class="text-center">Project</th>
                <th class="text-center">Launch Date</th>
                <th class="text-center">RCB</th>
                <th class="text-center">Status</th>
                <th class="text-center">Action</th>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td class="text-center">Projectname.com</td>
                <td class="text-center">25/04/2022</td>
                <td class="text-center">90%</td>
                <td class="text-center">
                    <h6><span class="badge bg-success">PAYING</span></h6>
                </td>
                <td class="text-center">
                    <a href="edit_project.php" class="btn btn-secondary bg-gradient btn-sm">Edit</a>
                    <button class="btn btn-danger bg-gradient btn-sm">Delete</button>
                </td>
            </tr>
            <tr>
                <td class="text-center">Projectname2.com</td>
                <td class="text-center">24/04/2022</td>
                <td class="text-center">80%</td>
                <td class="text-center">
                    <h6><span class="badge bg-warning">PROBLEM</span></h6>
                </td>
                <td class="text-center">
                    <a href="edit_project.php" class="btn btn-secondary bg-gradient btn-sm">Edit</a>
                    <button class="btn btn-danger bg-gradient btn-sm">Delete</button>
                </td>

            </tr>
            <tr>
                <td class="text-center">Projectname3.com</td>
                <td class="text-center">21/04/2022</td>
                <td class="text-center">70%</td>
                <td class="text-center">
                    <h6><span class="badge bg-danger">NOT PAYING</span></h6>
                </td>
                <td class="text-center">
                    <a href="edit_project.php" class="btn btn-secondary bg-gradient btn-sm">Edit</a>
                    <button class="btn btn-danger bg-gradient btn-sm">Delete</button>
                </td>
            </tr>
            </tbody>

        </table>
    </div>


</div>
