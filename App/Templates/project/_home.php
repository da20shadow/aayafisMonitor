<?php /** @var ProjectDTO $data */

use App\Data\ProjectDTO;

?>

<div class="container">

    <div class="row">

        <!--Investment Projects List -->
        <div class="col-12 col-lg-9">

            <!-- Advertising Banner 728x90 -->
            <div class="row m-auto">
                <div class="border-3 border-dark shadow-lg"
                     style="margin:30px auto; width: 728px; height: 90px;">
                    <p class="text-center mt-4">Advertising banner 728x90</p>
                </div>
            </div>

            <!-- Investment List Title -->
            <h1 class="box-background shadow">
                INVESTMENT PROJECTS
            </h1>

            <?php
            foreach ($data as $project):
                $projectID = htmlspecialchars($project->getProjectID());
                $projectName = htmlspecialchars($project->getProjectName());
                $projectURL = htmlspecialchars($project->getProjectURL());
                $projectDescription = htmlspecialchars($project->getProjectDescription());
                $projectCommission = htmlspecialchars($project->getCommission());
                $projectRCB = htmlspecialchars($project->getRCB());
                $projectStatus = htmlspecialchars($project->getStatus());
                $projectIMG = htmlspecialchars($project->getProjectIMG());
                $projectHMetrics = htmlspecialchars($project->getHMetrics());
                $projectLaunchDate = $project->getLaunchDate();
                $projectAdded = $project->getAdded();
                ?>

                <!--single project info box -->
                <div class="row monitored-project-info">

                    <div class="col-12 col-md-4">
                        <img class="img-thumbnail" src="<?= $projectIMG ?>" alt="<?= $projectName ?>">
                    </div>

                    <div class="col-12 col-md-8">

                        <!-- Project status and launch date -->
                        <div class="row">

                            <div class="col-12 col-md-5">
                                <h5><?= $projectName ?></h5>
                            </div>

                            <div class="col-12 col-md-3 text-end">
                                <?php if ($projectStatus == 0): ?>
                                <span class="badge bg-secondary fs-6">WAITING</span>
                                <?php elseif ($projectStatus == 1): ?>
                                <span class="badge bg-success fs-6">PAYING</span>
                                <?php elseif ($projectStatus == 2): ?>
                                <span class="badge bg-warning fs-6">PROBLEM</span>
                                <?php elseif ($projectStatus == 3): ?>
                                <span class="badge bg-danger fs-6">NOT PAYING</span>
                                <?php endif; ?>
                            </div>

                            <div class="col-12 col-md-4 text-end">Launch Date: <?= $projectLaunchDate ?></div>

                        </div>

                        <!-- Project Description -->
                        <div class="row">
                            <p class="mt-3">
                                <?= $projectDescription ?>
                            </p>
                        </div>

                        <div class="row">

                            <div class="col-12 col-md-8">

                                <div class="row">

                                    <div class="col-12 col-md-5">
                                        <h4>RCB: <?= $projectRCB ?>%</h4>
                                    </div>
                                    <div class="col-12 col-md-7">
                                        <a href="rcb_request.php?id=<?= $projectID ?>">
                                            <button class="mainBtn">Request RCB</button>
                                        </a>
                                    </div>
                                </div>

                            </div>

                            <div class="col-12 col-md-4">
                                <a href="#" class="d-flex justify-content-end">
                                    <img src="assets/img/hmetrics.png" width="90px" height="30px"
                                         alt="H-metrics Project info">
                                </a>
                            </div>

                        </div>

                    </div>

                </div>

                <?php endforeach; ?>

        </div>

        <!--Right Sidebar-->
        <div class="col-12 col-lg-3">

            <!--Advertising banner 300x250 -->
            <div class="border border-3 mt-3 m-auto"
                 style="width: 300px; height: 250px; text-align: center;">
                Advertising Banner 300x250
            </div>

            <!--Monitor statistic -->
            <div id="monitor_stat">

            </div>

            <!--Advertising banner 300x250 -->
            <div class="border border-3 mt-3 m-auto"
                 style="width: 300px; height: 250px; text-align: center;">
                Advertising Banner 300x250
            </div>

        </div>

    </div>

</div>