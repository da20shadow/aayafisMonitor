<?php
$title = "Add New Project";
include ("admin_header.php");
?>
<div class="container">

    <h1 class="text-center my-5">Add New Investment Project</h1>
    <hr class="divider">

    <div class="col-12 m-auto mt-5">

        <form class="was-validated addProjectForm bg-light shadow-lg">

            <div class="mb-3">
                <label for="project_name" class="form-label">Project Name</label>
                <input type="text" class="form-control is-invalid" id="project_name"
                       placeholder="SiteName" required/>
            </div>

            <div class="mb-3">
                <label for="date" class="form-label">Launch Date</label>
                <input type="date" class="form-control is-invalid" id="date"
                       placeholder="80%" required/>
            </div>

            <div class="mb-3">
                <label for="url" class="form-label">Project URL</label>
                <input type="text" class="form-control is-invalid" id="url"
                       placeholder="https://sitename.com/ref=aayafi" required/>
            </div>

            <div class="mb-3">
                <label for="h_metrics" class="form-label">H-metrics Link</label>
                <input type="text" class="form-control is-invalid" id="h_metrics"
                       placeholder="https://h-metrics.com/project/citybuildtrade.com/" required/>
            </div>

            <div class="mb-3">
                <label for="img_url" class="form-label">Image URL</label>
                <input type="text" class="form-control is-invalid" id="img_url"
                       placeholder="https://sitename.com/ima/image.png" required/>
            </div>

            <div class="mb-3">
                <label for="commission" class="form-label">Affiliate Commission</label>
                <input type="number" class="form-control is-invalid" id="commission"
                       placeholder="15%" required/>
            </div>

            <div class="mb-3">
                <label for="rcb" class="form-label">RCB</label>
                <input type="number" class="form-control is-invalid" id="rcb"
                       placeholder="80%" required/>
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
                          placeholder="Project info, investments plans etc." required></textarea>
                <div class="invalid-feedback">
                    Please enter details about the project.
                </div>
            </div>

            <br>
            <input class="mainBtn mt-3" type="submit" value="Add Project">
        </form>
    </div>

</div>
