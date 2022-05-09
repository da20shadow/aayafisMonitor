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
            <div class="stat-box-header">
                <h5>MONITOR STATISTIC</h5>
            </div>
            <table style="width: 100%">

                <tr>
                    <td>Total Members:</td>
                    <td id="totalMembers" style="text-align: right">33</td>
                </tr>
                <tr>
                    <td>Total RCB Paid:</td>
                    <td id="paidRCB" style="text-align: right">$233</td>
                </tr>
                <tr>
                    <td>Total RCB Processed:</td>
                    <td id="processedRCB" style="text-align: right">133</td>
                </tr>

            </table>

            <!-- Recently paid RCB -->
            <div class="stat-box-header">
                <h5>Recently Paid RCB</h5>
            </div>
            <table style="width: 100%">

                <tr>
                    <td>Username</td>
                    <td style="text-align: right">$3,33</td>
                </tr>
                <tr>
                    <td>brave</td>
                    <td style="text-align: right">$4,55</td>
                </tr>
                <tr>
                    <td>someone</td>
                    <td style="text-align: right">$13,37</td>
                </tr>
                <tr>
                    <td>another</td>
                    <td style="text-align: right">$3,34</td>
                </tr>
                <tr>
                    <td>person</td>
                    <td style="text-align: right">$9,92</td>
                </tr>
                <tr>
                    <td>username</td>
                    <td style="text-align: right">$3,95</td>
                </tr>
                <tr>
                    <td>user13</td>
                    <td style="text-align: right">$13,13</td>
                </tr>
                <tr>
                    <td>another</td>
                    <td style="text-align: right">$3,34</td>
                </tr>
                <tr>
                    <td>person</td>
                    <td style="text-align: right">$9,92</td>
                </tr>
                <tr>
                    <td>username</td>
                    <td style="text-align: right">$3,95</td>
                </tr>
                <tr>
                    <td>user13</td>
                    <td style="text-align: right">$13,13</td>
                </tr>

            </table>

            <!--Advertising banner 300x250 -->
            <div class="border border-3 mt-3 m-auto"
                 style="width: 300px; height: 250px; text-align: center;">
                Advertising Banner 300x250
            </div>

        </div>

    </div>

</div>