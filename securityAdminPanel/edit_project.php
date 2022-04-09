<?php
include ("admin_header.php");
$projectName = "SiteName";
$projectURL = "https://sitename.com/ref=aayafi";
$projectImgURL = "https://sitename.com/image.png";
$hMetricsURL = "https://h-metrics.com/project/site.com";
$projectAffComm = 15;
$projectRCB = 80;
$projectDetails = "Some Details About the project investment plans etc."
?>
<div class="container">

    <h1 class="text-center my-5">
        Update Project <?php echo htmlspecialchars($projectName); ?>
    </h1>
    <hr class="divider">

    <div class="col-12 m-auto mt-5">

        <form class="was-validated addProjectForm bg-light shadow-lg">

            <div class="mb-3">
                <label for="project_name" class="form-label">Project Name</label>
                <input type="text" class="form-control is-invalid" id="project_name"
                       placeholder="SiteName" value="<?php echo htmlspecialchars($projectName); ?>" required/>
            </div>

            <div class="mb-3">
                <label for="url" class="form-label">Project URL</label>
                <input type="text" class="form-control is-invalid" id="url"
                       placeholder="https://sitename.com/ref=aayafi"
                       value="<?php echo htmlspecialchars($projectURL); ?>" required/>
            </div>

            <div class="mb-3">
                <label for="h_metrics" class="form-label">H-metrics Link</label>
                <input type="text" class="form-control is-invalid" id="h_metrics"
                       placeholder="https://h-metrics.com/project/citybuildtrade.com/"
                       value="<?php echo htmlspecialchars($hMetricsURL); ?>" required/>
            </div>

            <div class="mb-3">
                <label for="img_url" class="form-label">Image URL</label>
                <input type="text" class="form-control is-invalid" id="img_url"
                       placeholder="https://sitename.com/ima/image.png"
                       value="<?php echo htmlspecialchars($projectImgURL); ?>" required/>
            </div>

            <div class="mb-3">
                <label for="commission" class="form-label">Affiliate Commission</label>
                <input type="number" class="form-control is-invalid" id="commission"
                       placeholder="15%" value="<?php echo htmlspecialchars($projectAffComm); ?>" required/>
            </div>

            <div class="mb-3">
                <label for="rcb" class="form-label">RCB</label>
                <input type="number" class="form-control is-invalid" id="rcb"
                       placeholder="80%" value="<?php echo htmlspecialchars($projectRCB); ?>" required/>
            </div>

            <div class="mb-3">
                <select class="form-select" required aria-label="select example">
                    <option value="">Select Status</option>
                    <option value="1">WAITING</option>
                    <option value="2">PAYING</option>
                    <option value="3">PROBLEM</option>
                    <option value="3">NOT PAYING</option>
                </select>
                <div class="invalid-feedback">Please, select status!</div>
            </div>

            <div class="mb-3">
                <label for="textarea" class="form-label">Project info</label>
                <textarea class="form-control is-invalid" id="textarea"
                          placeholder="Project info, investments plans etc." required><?php echo htmlspecialchars($projectDetails); ?></textarea>
            </div>

            <br>
            <input class="mainBtn mt-3" type="submit" value="Add Project">
        </form>
    </div>

</div>
