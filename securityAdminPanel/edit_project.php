<?php
$title = "Edit Project";
include ("admin_header.php");

if (isset($_GET['project_id']) && ProjectCrud::getProjectById($_GET['project_id'])){

$project = ProjectCrud::getProjectById($_GET['project_id']);
    $projectStatus = $project['status'];
?>
<div class="container">

    <h1 class="text-center my-5">
        Update Project <?php echo htmlspecialchars($project['project_name']); ?>
    </h1>
    <hr class="divider">

    <div class="col-12 m-auto mt-5">
        <div id="updatedMessage"></div>
        <form class="was-validated addProjectForm bg-light shadow-lg" id="updateForm">

            <input type="number" hidden name="project_id"
                   value="<?php echo htmlspecialchars($project['project_id']); ?>">

            <div class="mb-3">
                <label for="project_name" class="form-label">Project Name</label>
                <input type="text" class="form-control is-invalid" id="project_name" name="project_name"
                       placeholder="SiteName" value="<?php echo htmlspecialchars($project['project_name']); ?>" required/>
            </div>

            <div class="mb-3">
                <label for="url" class="form-label">Project URL</label>
                <input type="text" class="form-control is-invalid" id="url" name="url"
                       placeholder="https://sitename.com/ref=aayafi"
                       value="<?php echo htmlspecialchars($project['project_url']); ?>" required/>
            </div>

            <div class="mb-3">
                <label for="h_metrics" class="form-label">H-metrics Link</label>
                <input type="text" class="form-control is-invalid" id="h_metrics" name="h_metrics"
                       placeholder="https://h-metrics.com/project/citybuildtrade.com/"
                       value="<?php echo htmlspecialchars($project['h_metrics']); ?>" required/>
            </div>

            <div class="mb-3">
                <label for="img_url" class="form-label">Image URL</label>
                <input type="text" class="form-control is-invalid" id="img_url" name="img_url"
                       placeholder="https://sitename.com/ima/image.png"
                       value="<?php echo htmlspecialchars($project['img_url']); ?>" required/>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 mb-3">
                    <label for="commission" class="form-label">Affiliate Commission</label>
                    <input type="number" class="form-control is-invalid" id="commission" name="commission"
                           placeholder="15%" value="<?php echo htmlspecialchars($project['commission']); ?>" required/>
                </div>

                <div class="col-12 col-md-6 mb-3">
                    <label for="rcb" class="form-label">RCB</label>
                    <input type="number" class="form-control is-invalid" id="rcb" name="rcb"
                           placeholder="80%" value="<?php echo htmlspecialchars($project['rcb']); ?>" required/>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 mb-3">
                    <label for="date" class="form-label">Launch Date</label>
                    <input type="date" class="form-control is-invalid" id="date" name="launch_date"
                           value="<?php echo strftime('%Y-%m-%d',
                        strtotime($project['launch_date'])); ?>"
                           placeholder="80%" required/>
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <label for="status" class="form-label">Status:</label>
                    <select class="form-select" required aria-label="select example" name="status">
                        <option value="<?php echo $projectStatus; ?>">
                            <?php echo ($projectStatus == 0 ? "WAITING" :
                                ($projectStatus == 1 ? "PAYING" :
                                    ($projectStatus == 2 ? "PROBLEM" : "NOT PAYING")));
                            ?>
                        </option>
                        <option value="0">WAITING</option>
                        <option value="1">PAYING</option>
                        <option value="2">PROBLEM</option>
                        <option value="3">NOT PAYING</option>
                    </select>
                    <div class="invalid-feedback">Please, select status!</div>
                </div>
            </div>

            <div class="mb-3">
                <label for="textarea" class="form-label">Project info</label>
                <textarea class="form-control is-invalid" id="textarea" name="description" rows="5"
                          placeholder="Project info, investments plans etc." required><?php echo htmlspecialchars($project['description']); ?></textarea>
            </div>
            <input class="mainBtn mt-3" type="submit" value="Update Project">
        </form>
    </div>

</div>
    <script src="../App/Ajax/project/updateProject.js"></script>
    <script src="../App/Ajax/sendFormDataToPHP.js"></script>
    <script src="../assets/js/notifications.js"></script>
<?php
}else{
?>
<h1 class="text-center text-danger my-5">No such project!</h1>
<?php }