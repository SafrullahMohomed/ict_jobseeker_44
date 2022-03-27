<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Resume/Resume_template3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script defer src="<?php echo URL ?>views/JS/Resume/Resume_template3.js"></script>
    <title>Document</title>
</head>

<!--php tags for define arrays-->
<?php
$resume = $data['resume'];

$experience2a = $data['experience2a'];
$experience2b = $data['experience2b'];
$experience2c = $data['experience2c'];

$education3a = $data['education3a'];
$education3b = $data['education3b'];
$education3c = $data['education3c'];

$project5a = $data['project5a'];
$project5b = $data['project5b'];
$project5c = $data['project5c'];
?>
<body>

<!-- resume division -->
<div class="resume-page">
    <div class="basic-info">
        <div class="profile-image"><img src="/ict_jobseeker_44/views/images/Resume/images.jpeg" alt=""></div>

        <div class="name-summary">
            <div class="candidate-name"><?php echo $resume['First_name'] . " " . $resume['Last_name'] ?></div>
            <div class="candidate-summary"><?php echo $resume['About you'] ?></div>
        </div>
    </div>


    <!-- name and summary part ends here -->

    <!-- main division starts here  -->
    <div class="main-div">
        <div class="first-col">

            <!-- experience -->
            <div class="experience">
                <div class="experience-title"><span class="experience-icon"><i class="fa fa-suitcase"
                                                                               style="font-size:25px;color:#45647e"></i>
                        </span> Work Experience
                </div>
                <hr>


                <!-- experience 1 -->
                <div class="experience1 experience-main">
                    <div class="experience-timeline">
                        <?php echo mb_substr($experience2a['From'], 0, 7) ?>
                        -</br> <?php echo mb_substr($experience2a['To'], 0, 7) ?>
                    </div>
                    <div class="experience-details">
                        <div class="experience-job-title"><?php echo strtoupper($experience2a['Job_title']) ?></div>
                        <div class="experience-employer"><?php echo $experience2a['Employer'] ?> -<span
                                    class="experience-location"><?php echo $experience2a['City'] . ", " . $experience2a['Country'] ?></span>
                        </div>

                        <!-- experience points -->
                        <div class="experience-detail-points">
                            <?php echo $experience2a['What_did_you_do_in_this_job'] ?>
                            <!--                                <ul>-->
                            <!--                                    <li>experience point 1</li>-->
                            <!--                                    <li>experience point 2</li>-->
                            <!--                                    <li>experience point 3</li>-->
                            <!--                                    <li>experience point 4</li>-->
                            <!--                                </ul>-->
                        </div>

                    </div>
                </div>

                <!-- experience 2 -->
                <div class="experience2 experience-main">
                    <div class="experience-timeline">
                        <?php echo mb_substr($experience2b['From'], 0, 7) ?>
                        -</br> <?php echo mb_substr($experience2b['To'], 0, 7) ?>
                    </div>
                    <div class="experience-details">
                        <div class="experience-job-title"><?php echo strtoupper($experience2b['Job_title']) ?></div>
                        <div class="experience-employer"><?php echo $experience2b['Employer'] ?> -<span
                                    class="experience-location"><?php echo $experience2b['City'] . ", " . $experience2b['Country'] ?></span>
                        </div>

                        <!-- experience points -->
                        <div class="experience-detail-points">
                            <?php echo $experience2b['What_did_you_do_in_this_job'] ?>
                            <!--                                <ul>-->
                            <!--                                    <li>experience point 1</li>-->
                            <!--                                    <li>experience point 2</li>-->
                            <!--                                    <li>experience point 3</li>-->
                            <!--                                    <li>experience point 4</li>-->
                            <!--                                </ul>-->
                        </div>

                    </div>
                </div>

                <!-- experience 3 -->
                <div class="experience3 experience-main">
                    <div class="experience-timeline">
                        <?php echo mb_substr($experience2c['From'], 0, 7) ?>
                        -</br> <?php echo mb_substr($experience2c['To'], 0, 7) ?>
                    </div>
                    <div class="experience-details">
                        <div class="experience-job-title"><?php echo strtoupper($experience2a['Job_title']) ?></div>
                        <div class="experience-employer"><?php echo $experience2a['Employer'] ?> -<span
                                    class="experience-location"><?php echo $experience2a['City'] . ", " . $experience2a['Country'] ?></span>
                        </div>

                        <!-- experience points -->
                        <div class="experience-detail-points">
                            <?php echo $experience2c['What_did_you_do_in_this_job'] ?>
                            <!--                                <ul>-->
                            <!--                                    <li>experience point 1</li>-->
                            <!--                                    <li>experience point 2</li>-->
                            <!--                                    <li>experience point 3</li>-->
                            <!--                                    <li>experience point 4</li>-->
                            <!--                                </ul>-->
                        </div>

                    </div>
                </div>
            </div>

            <!-- experience ends here -->


            <!-- education -->
            <div class="education">

                <div class="education-title"><span class="education-icon"><i class="fa fa-mortar-board"
                                                                             style="font-size:25px;color:#45647e"></i>
                        </span>Education
                </div>
                <hr>

                <!-- education 1 -->
                <div class="education1 education-main">
                    <div class="education-timeline">
                        <?php echo mb_substr($education3a['From'], 0, 7) ?>
                        -</br> <?php echo mb_substr($education3a['To'], 0, 7) ?>
                    </div>
                    <div class=education-details">
                        <div class="education-degree"><?php echo strtoupper($education3a['Degree']) ?></div>
                        <div class="education-employer"><?php echo $education3a['Institute'] ?> - <span
                                    class="education-location"><?php echo $education3a['City'] . ", " . $education3a['Country'] ?></span>
                        </div>


                    </div>
                </div>

                <!-- education 2 -->
                <div class="education2 education-main">
                    <div class="education-timeline">
                        <?php echo mb_substr($education3b['From'], 0, 7) ?>
                        -</br> <?php echo mb_substr($education3b['To'], 0, 7) ?>
                    </div>
                    <div class="education-details">
                        <div class="education-degree"><?php echo strtoupper($education3b['Degree']) ?></div>
                        <div class="education-employer"><?php echo $education3b['Institute'] ?> - <span
                                    class="education-location"><?php echo $education3b['City'] . ", " . $education3b['Country'] ?></span>
                        </div>

                    </div>
                </div>

                <!-- education 3 -->
                <div class="education3 education-main">
                    <div class="education-timeline">
                        <?php echo mb_substr($education3c['From'], 0, 7) ?>
                        -</br> <?php echo mb_substr($education3c['To'], 0, 7) ?>
                    </div>
                    <div class="education-details">
                        <div class="education-degree"><?php echo strtoupper($education3c['Degree']) ?></div>
                        <div class="education-employer"><?php echo $education3c['Institute'] ?> - <span
                                    class="education-location"><?php echo $education3c['City'] . ", " . $education3c['Country'] ?></span>
                        </div>

                    </div>
                </div>
            </div>

            <!-- education ends here -->

            <!-- project -->
            <div class="project">

                <div class="project-title1"><span class="project-icon"><i class="fa fa-handshake-o"
                                                                         style="font-size:25px;color:#45647e"></i>
                        </span>Project
                </div>
                <hr>

                <!-- project 1 -->
                <div class="project1 project-main">
                    <!-- project1 -->
                    <div class="project1">
                        <div class="project_title"><?php echo $project5a['Project_title'] ?></div>
                        <div class="project_details" id="project_details5a">


                        </div>
                        <input type="text" id="project_details5a_hidden" hidden
                               value="<?php echo $project5a['Description'] ?>">
                    </div>

                    <!-- project2 -->
                    <div class="project2">
                        <div class="project_title"><?php echo $project5b['Project_title'] ?></div>
                        <div class="project_details" id="project_details5b">


                        </div>
                    </div>
                    <input type="text" id="project_details5b_hidden" hidden
                           value="<?php echo $project5b['Description'] ?>">

                    <!-- project3 -->
                    <div class="project1">
                        <div class="project_title"><?php echo $project5c['Project_title'] ?></div>
                        <div class="project_details" id="project_details5c">


                        </div>
                    </div>
                    <input type="text" id="project_details5c_hidden" hidden
                           value="<?php echo $project5c['Description'] ?>">



                </div>
            </div>
        </div>


        <!-- second column starts here -->
        <div class="second-col">
            <div class="contact">
                <div class="education-title"><span class="education-icon"><i class='fa fa-address-book'
                                                                             style='font-size:25px;color:#45647e'></i>
                        </span>Contact
                </div>
                <hr>
                <div class="candidate-address candidate-personal-details"><span class="address-emoji"><i
                                class="fa fa-map-marker" style="font-size:18px;color:#45647e;width:20px"></i>
                        </span><?php echo $resume['Address'] ?>, <span
                            class="candidate-city "><?php echo $resume['City'] ?></span></div>
                <div class="candidate-email candidate-personal-details"><i class="fa fa-envelope"
                                                                           style="font-size:18px;color:#45647e;width:20px"></i>
                    <?php echo $resume['Email'] ?></div>
                <div class="candidate-phone candidate-personal-details"><i class="fa fa-phone"
                                                                           style="font-size:18px;color:#45647e;width:20px"></i>
                    <?php echo $resume['Phone_no'] ?></div>

            </div>

            <div class="skills">
                <div class="education-title"><span class="education-icon"><i class="fa fa-trophy"
                                                                             style="font-size:25px;color:#45647e"></i>
                        </span>Skills
                </div>
                <hr>
                <div class="skills_details" id="skills_details">

                </div>
                <input type="text" id="skills_details_hidden" hidden value="<?php echo $resume['Skills'] ?>">
            </div>
        </div>

        <!-- second column ends here  -->
    </div>


</div>


</body>

</html>