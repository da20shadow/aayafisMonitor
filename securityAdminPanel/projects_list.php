<?php
$title = "Projects List";
include_once ("admin_header.php");
include_once ("../models/project/ProjectCrud.php");
$numberOfListedProjects = ProjectCrud::getTotalProjects();

$projects = ProjectCrud::getAllProjects();

?>

<div class="container">
    <div id="message"></div>

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
            <?php
            foreach ($projects as $project){
                $classStatus = '';
                $status = '';
                if ($project['status'] == 1){
                    $classStatus = "paying";
                    $status = "PAYING";
                }else if ($project['status'] == 2){
                    $classStatus = "problem";
                    $status = "PROBLEM";
                }else if ($project['status'] == 3){
                    $classStatus = "not-paying";
                    $status = "NOT PAYING";
                }else {
                    $classStatus = "waiting";
                    $status = "WAITING";
                }
            ?>
                <tr>
                    <td class="text-center"><?php echo $project['project_name']; ?></td>
                    <td class="text-center"><?php echo $project['launch_date']; ?></td>
                    <td class="text-center"><?php echo $project['rcb']; ?>%</td>
                    <td class="text-center">

                        <form id="changeStatus<?php echo $project['project_id']; ?>">
                            <input type="text" name="project_id" value="<?php echo htmlspecialchars($project['project_id']); ?>" hidden>
                            <label for="selectProjectId<?php echo $project['project_id']; ?>"></label>
                            <select class="<?php echo $classStatus; ?>"
                                    name="status" id="selectProjectId<?php echo $project['project_id']; ?>">

                                <option value="<?php echo $project['status']; ?>"><?php echo $status; ?></option>
                                <option class="waiting" value="0">
                                    WAITING
                                </option>
                                <option class="paying" value="1">
                                    PAYING
                                </option>
                                <option class="problem" value="2">
                                    PROBLEM
                                </option>
                                <option class="not-paying" value="3">
                                    NOT PAYING
                                </option>
                            </select>
                        </form>
                    </td>
                    <td class="text-center">
                        <a href="edit_project.php?project_id=<?php echo $project['project_id']; ?>"
                           class="btn btn-secondary bg-gradient btn-sm">Edit</a>
                        <button class="btn btn-danger bg-gradient btn-sm">Delete</button>
                    </td>
                </tr>
                <script>
                    let selectStatus<?php echo $project['project_id']; ?> = document.getElementById('selectProjectId<?php echo $project['project_id']; ?>');
                    selectStatus<?php echo $project['project_id']; ?>.addEventListener('change',()=>{

                        let status = selectStatus<?php echo $project['project_id']; ?>.value;

                        if (status === '1'){
                            selectStatus<?php echo $project['project_id']; ?>.className = 'paying';
                        }else if(status === '2'){
                            selectStatus<?php echo $project['project_id']; ?>.className = 'problem';
                        }else if (status === '3'){
                            selectStatus<?php echo $project['project_id']; ?>.className = 'not-paying';
                        }else {
                            selectStatus<?php echo $project['project_id']; ?>.className = 'waiting';
                        }

                        let changeStatusForm = document.getElementById('changeStatus<?php echo $project['project_id']; ?>');
                        const statusFormData = new FormData(changeStatusForm);


                        const url = '../includes/_update_project_status.php';
                        sendFormDataToPHP(url,statusFormData,'message');
                    })
                </script>
            <?php
            }
            ?>
<!--            <tr>-->
<!--                <td class="text-center">Projectname.com</td>-->
<!--                <td class="text-center">25/04/2022</td>-->
<!--                <td class="text-center">90%</td>-->
<!--                <td class="text-center">-->
<!---->
<!--                    <form id="changeStatus">-->
<!--                        <label for="selectProjectId"></label>-->
<!--                        <select class="selectStatus --><?php //echo $classStatus; ?><!--" name="status" id="selectProjectId">-->
<!---->
<!--                            <option id="waiting" class="waiting" value="0">-->
<!--                                WAITING-->
<!--                            </option>-->
<!--                            <option id="paying" class="paying" value="1">-->
<!--                                PAYING-->
<!--                            </option>-->
<!--                            <option id="problem" class="problem" value="2">-->
<!--                                PROBLEM-->
<!--                            </option>-->
<!--                            <option id="problem" class="not-paying" value="3">-->
<!--                                NOT PAYING-->
<!--                            </option>-->
<!--                        </select>-->
<!--                    </form>-->
<!--                </td>-->
<!--                <td class="text-center">-->
<!--                    <a href="edit_project.php" class="btn btn-secondary bg-gradient btn-sm">Edit</a>-->
<!--                    <button class="btn btn-danger bg-gradient btn-sm">Delete</button>-->
<!--                </td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <td class="text-center">Projectname2.com</td>-->
<!--                <td class="text-center">24/04/2022</td>-->
<!--                <td class="text-center">80%</td>-->
<!--                <td class="text-center">-->
<!--                    <h6><span class="badge bg-warning">PROBLEM</span></h6>-->
<!--                </td>-->
<!--                <td class="text-center">-->
<!--                    <a href="edit_project.php" class="btn btn-secondary bg-gradient btn-sm">Edit</a>-->
<!--                    <button class="btn btn-danger bg-gradient btn-sm">Delete</button>-->
<!--                </td>-->
<!---->
<!--            </tr>-->
<!--            <tr>-->
<!--                <td class="text-center">Projectname3.com</td>-->
<!--                <td class="text-center">21/04/2022</td>-->
<!--                <td class="text-center">70%</td>-->
<!--                <td class="text-center">-->
<!--                    <h6><span class="badge bg-danger">NOT PAYING</span></h6>-->
<!--                </td>-->
<!--                <td class="text-center">-->
<!--                    <a href="edit_project.php" class="btn btn-secondary bg-gradient btn-sm">Edit</a>-->
<!--                    <button class="btn btn-danger bg-gradient btn-sm">Delete</button>-->
<!--                </td>-->
<!--            </tr>-->
            </tbody>

        </table>
    </div>
</div>
<script src="../App/Ajax/project/changeProjectStatus.js"></script>
<script src="../App/Ajax/sendFormDataToPHP.js"></script>
<script src="../assets/js/notifications.js"></script>
