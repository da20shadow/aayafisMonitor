<?php
$projectsArray = [
        "Project1" => ["project_id"=>"1",
            "Name"=>"ProjectName.com",
            "RCB"=>"90%"],
    "Project2" => ["project_id"=>"2",
        "Name"=>"ProjectName2.com",
        "RCB"=>"80%"],
    "Project3" => ["project_id"=>"3",
        "Name"=>"ProjectName3.com",
        "RCB"=>"70%"]
];
$setUsername = isset($_SESSION['username']);
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
            foreach ($projectsArray as $project){
                ?>

                <!--single project info box -->
                <div class="row monitored-project-info">

                    <div class="col-12 col-md-4">
                        <img class="img-thumbnail" src="https://instant-monitor.com/img/projects/usdpool.cc.jpg" alt="Sitename.com">
                    </div>

                    <div class="col-12 col-md-8">

                        <!-- Project status and launch date -->
                        <div class="row">

                            <div class="col-12 col-md-5">
                                <h5><?php echo $project['Name']; ?></h5>
                            </div>

                            <div class="col-12 col-md-3 text-end">
                                <span class="badge bg-secondary fs-6">WAITING</span>
                            </div>
                            <div class="col-12 col-md-4 text-end">Launch Date: 22/03/2022</div>

                        </div>

                        <!-- Project Description -->
                        <div class="row">
                            <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Ad consequatur consequuntur dolorem et ipsa iste perferendis?
                                Ad aliquam animi aspernatur eos fugiat magni possimus quam, quis, quisquam quo vero voluptatibus!
                                Investment plasn 4% daily! Affiliate commission is 10%. And some more info...
                            </p>
                        </div>
                        <div class="row">

                            <div class="col-12 col-md-8">

                                <div class="row">

                                    <div class="col-12 col-md-5">
                                        <h4>RCB: <?php echo $project['RCB']; ?></h4>
                                    </div>
                                    <div class="col-12 col-md-7">
                                        <button class="mainBtn" data-bs-toggle="modal"
                                                data-bs-target="#rcbFormModal<?php echo $project['project_id']; ?>">
                                            Request RCB</button>
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
                <!-- Modal -->
                <div class="modal fade mt-5" id="rcbFormModal<?php echo $project['project_id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">
                                    <?php echo $project["Name"];?> -
                                    <?php echo $project["RCB"];?> RCB
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <?php if($setUsername){ ?>
                            <div class="modal-body">

                                <form id="rcbForm" class="was-validated p-3">
                                    <div class="mb-3">
                                        <label for="project_username" class="form-label">Username:</label>
                                        <input type="text" class="form-control is-invalid" name="project_username"
                                               id="project_username" placeholder="Username in the project" required/>
                                    </div>
                                    <div class="mb-3">
                                        <label for="deposit" class="form-label">Deposit:</label>
                                        <input type="number" class="form-control is-invalid" name="deposit"
                                               id="deposit" placeholder="$100" step="0.01" required/>
                                    </div>
                                </form>

                            </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="mainBtn">Request</button>
                                </div>
                            <?php }else{ ?>
                            <div class="modal-body">
                                <h4 class="text-center text-danger">
                                    You Should Login To Your Account In Order To Request RCB
                                </h4>
                            </div>
                                <div class="modal-footer">
                                    <button type="button" class="mainBtn">Login</button>
                                    <button type="button" class="mainBtn">Register</button>
                                </div>
                            <?php } ?>


                        </div>
                    </div>
                </div>

            <?php
            }
            ?>

            <!--single project info box -->
            <div class="row monitored-project-info">

                <div class="col-12 col-md-4">
                    <img class="img-thumbnail" src="https://instant-monitor.com/img/projects/usdpool.cc.jpg" alt="Sitename.com">
                </div>

                <div class="col-12 col-md-8">

                    <!-- Project status and launch date -->
                    <div class="row">

                        <div class="col-12 col-md-5">
                            <h4>Sitename.com</h4>
                        </div>

                        <div class="col-12 col-md-2 text-center">
                            <span class="badge bg-secondary fs-6">WAITING</span>
                        </div>
                        <div class="col-12 col-md-5 text-end">Launch Date: 22/03/2022</div>

                    </div>

                    <!-- Project Description -->
                    <div class="row">
                        <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Ad consequatur consequuntur dolorem et ipsa iste perferendis?
                            Ad aliquam animi aspernatur eos fugiat magni possimus quam, quis, quisquam quo vero voluptatibus!
                            Investment plasn 4% daily! Affiliate commission is 10%. And some more info...
                        </p>
                    </div>
                    <div class="row">

                        <div class="col-12 col-md-8">

                            <div class="row">

                                <div class="col-12 col-md-5">
                                    <h4>RCB: 90%</h4>
                                </div>
                                <div class="col-12 col-md-7">
                                    <button class="mainBtn" data-bs-toggle="modal" data-bs-target="#rcbFormModal">Request RCB</button>
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
            <!--single project info box -->
            <div class="row monitored-project-info">

                <div class="col-12 col-md-4">
                    <img class="img-thumbnail" src="https://instant-monitor.com/img/projects/dollarbill.biz.jpg" alt="Sitename.com">
                </div>

                <div class="col-12 col-md-8">

                    <!-- Project status and launch date -->
                    <div class="row">

                        <div class="col-12 col-md-4">
                            <h4>Sitename.com</h4>
                        </div>

                        <div class="col-12 col-md-4 text-center">
                            <span class="badge bg-success fs-6">PAYING</span>
                        </div>
                        <div class="col-12 col-md-4 text-end">Launch Date: 22/03/2022</div>

                    </div>

                    <!-- Project Description -->
                    <div class="row">
                        <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Ad consequatur consequuntur dolorem et ipsa iste perferendis?
                            Ad aliquam animi aspernatur eos fugiat magni possimus quam, quis, quisquam quo vero voluptatibus!
                            Investment plasn 4% daily! Affiliate commission is 10%. And some more info...
                        </p>
                    </div>
                    <div class="row">

                        <div class="col-8">

                            <div class="row">

                                <div class="col-6">
                                    <h4>RCB: 90%</h4>
                                </div>
                                <div class="col-6">
                                    <button class="mainBtn">Request RCB</button>
                                </div>
                            </div>

                        </div>

                        <div class="col-4">
                            <a href="#" class="d-flex justify-content-end">
                                <img src="assets/img/hmetrics.png" width="90px" height="30px"
                                     alt="H-metrics Project info">
                            </a>
                        </div>

                    </div>

                </div>

            </div>
            <!--single project info box -->
            <div class="row monitored-project-info">

                <div class="col-12 col-md-4">
                    <img class="img-thumbnail" src="https://instant-monitor.com/img/projects/lightassetsltd.com.jpg" alt="Sitename.com">
                </div>

                <div class="col-12 col-md-8">

                    <!-- Project status and launch date -->
                    <div class="row">

                        <div class="col-12 col-md-4">
                            <h4>Sitename.com</h4>
                        </div>

                        <div class="col-12 col-md-4 text-center">
                            <span class="badge bg-warning text-dark fs-6">PROBLEM</span>
                        </div>
                        <div class="col-12 col-md-4 text-end">Launch Date: 22/03/2022</div>

                    </div>

                    <!-- Project Description -->
                    <div class="row">
                        <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Ad consequatur consequuntur dolorem et ipsa iste perferendis?
                            Ad aliquam animi aspernatur eos fugiat magni possimus quam, quis, quisquam quo vero voluptatibus!
                            Investment plasn 4% daily! Affiliate commission is 10%. And some more info...
                        </p>
                    </div>
                    <div class="row">

                        <div class="col-8">

                            <div class="row">

                                <div class="col-6">
                                    <h4>RCB: 90%</h4>
                                </div>
                                <div class="col-6">
                                    <button class="mainBtn">Request RCB</button>
                                </div>
                            </div>

                        </div>

                        <div class="col-4">
                            <a href="#" class="d-flex justify-content-end">
                                <img src="assets/img/hmetrics.png" width="90px" height="30px"
                                     alt="H-metrics Project info">
                            </a>
                        </div>

                    </div>

                </div>

            </div>
            <!--single project info box -->
            <div class="row monitored-project-info">

                <div class="col-12 col-md-4">
                    <img class="img-thumbnail" src="https://instant-monitor.com/img/projects/usdpool.cc.jpg" alt="Sitename.com">
                </div>

                <div class="col-12 col-md-8">

                    <!-- Project status and launch date -->
                    <div class="row">

                        <div class="col-12 col-md-4">
                            <h4>Sitename.com</h4>
                        </div>

                        <div class="col-12 col-md-4 text-center">
                            <span class="badge bg-danger fs-6">NOT PAYING</span>
                        </div>
                        <div class="col-12 col-md-4 text-end">Launch Date: 22/03/2022</div>

                    </div>

                    <!-- Project Description -->
                    <div class="row">
                        <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Ad consequatur consequuntur dolorem et ipsa iste perferendis?
                            Ad aliquam animi aspernatur eos fugiat magni possimus quam, quis, quisquam quo vero voluptatibus!
                            Investment plasn 4% daily! Affiliate commission is 10%. And some more info...
                        </p>
                    </div>
                    <div class="row">

                        <div class="col-8">

                            <div class="row">

                                <div class="col-6">
                                    <h4>RCB: 90%</h4>
                                </div>
                                <div class="col-6">
                                    <button class="mainBtn">Request RCB</button>
                                </div>
                            </div>

                        </div>

                        <div class="col-4">
                            <a href="#" class="d-flex justify-content-end">
                                <img src="assets/img/hmetrics.png" width="90px" height="30px"
                                     alt="H-metrics Project info">
                            </a>
                        </div>

                    </div>

                </div>

            </div>

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
                    <td style="text-align: right">33</td>
                </tr>
                <tr>
                    <td>Total RCB Paid:</td>
                    <td style="text-align: right">$233</td>
                </tr>
                <tr>
                    <td>Total RCB Processed:</td>
                    <td style="text-align: right">133</td>
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
