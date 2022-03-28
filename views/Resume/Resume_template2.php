<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Resume/Resume_template2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script defer src="<?php echo URL ?>views/JS/Resume/Resume_template2.js"></script>
    <title>Document</title>
</head>

<body>
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

<!-- resume division -->
<div class="resume_page">

    <!-- left box -->
    <div class="leftbox">

        <!-- profile image -->

        <div class="profile_image">
            <img src="/ict_jobseeker_44/views/images/Resume/images.jpeg" alt="profile picture">
        </div>

        <!-- Header part starts here -->
        <div class="resume_header">
            <div class="candidate_name"><?php echo $resume['First_name'] . " " . $resume['Last_name'] ?></div>
            <div class="candidate_address candidate_personal_details"><span class="address_emoji"><i
                            class="fa fa-map-marker" style="font-size:18px;color:white;width:20px"></i>
                    </span><?php echo $resume['Address'] ?>, <span
                        class="candidate_city "><?php echo $resume['City'] ?></span></div>
            <div class="candidate_email candidate_personal_details"><i class="fa fa-envelope"
                                                                       style="font-size:18px;color:white;width:20px"></i>
                <?php echo $resume['Email'] ?></div>
            <div class="candidate_phone candidate_personal_details"><i class="fa fa-phone"
                                                                       style="font-size:18px;color:white;width:20px"></i>
                <?php echo $resume['Phone_no'] ?></div>
        </div>
        <!-- Header part ends here -->

        <!-- skills starts here -->
        <div class="skills ">
            <div class="skills_title_head sub_title">SKILLS</div>
            <div class="skills_details" id="skills_details">

            </div>
            <input type="text" id="skills_details_hidden" hidden value="<?php echo $resume['Skills']?>">
        </div>

        <!-- skills ends here -->
    </div>
    <!-- left box ends here -->


    <!-- right box starts here -->
    <div class="rightbox">
        <!-- professional summary starts here -->
        <div class="professional_summary">
            <div class="summary_title sub_title">PROFESSIONAL SUMMARY</div>
            <div class="summary_text"><?php echo $resume['About you'] ?></div>
        </div>
        <!-- proffessional summary ends here -->


        <!-- experience starts here -->
        <div class="experience_title_head sub_title">EXPERIENCE</div>
        <div class="experience">
            <!-- experience 1 -->
            <div class="experience1 experience_main">

                <!-- first div for experient details and timelines -->
                <div class="experience_employer">
                    <div class="experience_location">
                        <div class="experience_job_title"><?php echo strtoupper($experience2a['Job_title']) ?></div>
                        <div class="experience_employer">at <?php echo $experience2a['Employer'] ?></div>
                        <div class="experience_location"><?php echo $experience2a['City'] . ", " . $experience2a['Country'] ?></div>
                    </div>

                    <div class="experience_timeline">
                        <div class="timeline"><?php echo $experience2a['From'] . " - " . $experience2a['To'] ?></div>
                    </div>

                </div>

                <!-- experience points  -->
                <div class="experience_details">
                    <div class="experience_details">
                        <br>
                        <?php echo $experience2a['What_did_you_do_in_this_job'] ?>
                    </div>
                </div>


                <!-- experience 2 -->
                <br>
                <div class="experience2 experience_main">

                    <!-- first div for experient details and timelines -->
                    <div class="experience_employer">
                        <div class="experience_location">
                            <div class="experience_job_title"><?php echo strtoupper($experience2b['Job_title']) ?></div>
                            <div class="experience_employer">at <?php echo $experience2b['Employer'] ?></div>
                            <div class="experience_location"><?php echo $experience2b['City'] . ", " . $experience2b['Country'] ?></div>
                        </div>

                        <div class="experience_timeline">
                            <div class="timeline"><?php echo $experience2b['From'] . " - " . $experience2b['To'] ?></div>
                        </div>

                    </div>

                    <!-- experience points  -->
                    <div class="experience_details">
                        <div class="experience_details">
                            <br>
                            <?php echo $experience2b['What_did_you_do_in_this_job'] ?>
                        </div>
                    </div>


                    <!-- experience 3 -->
                    <br>
                    <div class="experience3 experience_main">

                        <!-- first div for experient details and timelines -->
                        <div class="experience_employer">
                            <div class="experience_location">
                                <div class="experience_job_title"><?php echo strtoupper($experience2c['Job_title']) ?></div>
                                <div class="experience_employer">at <?php echo $experience2c['Employer'] ?></div>
                                <div class="experience_location"><?php echo $experience2c['City'] . ", " . $experience2c['Country'] ?></div>
                            </div>

                            <div class="experience_timeline">
                                <div class="timeline"><?php echo $experience2c['From'] . " - " . $experience2c['To'] ?></div>
                            </div>

                        </div>

                        <!-- experience points  -->
                        <div class="experience_details">
                            <div class="experience_details">
                                <br>
                                <?php echo $experience2c['What_did_you_do_in_this_job'] ?>
                            </div>
                        </div>


                        <!--            experience ends here-->

                        <!-- Education starts here -->
                        <div class="education_title_head sub_title">EDUCATION</div>
                        <div class="education">

                            <!-- education 1-->
                            <div class="education1 education_main">

                                <!-- first div for education details and timelines -->
                                <div class="education_provider">
                                    <div class="education_degree"><?php echo $education3a['Degree'] ?></div>
                                    <div class="education_institute"><?php echo $education3a['Institute'] ?></div>
                                    <div class="education_location"><?php echo $education3a['City'] . ", " . $education3a['Country'] ?></div>
                                </div>

                                <div class="education_timeline">
                                    <div class="timeline"><?php echo $education3a['From'] . " - " . $education3a['To'] ?></div>
                                </div>

                            </div>


                            <!-- education 2-->
                            <div class="education2 education_main">

                                <!-- first div for education details and timelines -->
                                <div class="education_provider">
                                    <div class="education_degree"><?php echo $education3b['Degree'] ?></div>
                                    <div class="education_institute"><?php echo $education3b['Institute'] ?></div>
                                    <div class="education_location"><?php echo $education3b['City'] . ", " . $education3b['Country'] ?></div>
                                </div>

                                <div class="education_timeline">
                                    <div class="timeline"><?php echo $education3b['From'] . " - " . $education3b['To'] ?></div>
                                </div>

                            </div>

                            <!-- education 3-->
                            <div class="education3 education_main">

                                <!-- first div for education details and timelines -->
                                <div class="education_provider">
                                    <div class="education_degree"><?php echo $education3c['Degree'] ?></div>
                                    <div class="education_institute"><?php echo $education3c['Institute'] ?></div>
                                    <div class="education_location"><?php echo $education3c['City'] . ", " . $education3c['Country'] ?></div>
                                </div>

                                <div class="education_timeline">
                                    <div class="timeline"><?php echo $education3c['From'] . " - " . $education3c['To'] ?></div>
                                </div>

                            </div>


                        </div>

                        <!-- education ends here -->


                        <!-- project detals starts here -->
                        <div class="project">
                            <div class="project_title_head sub_title">Project</div>

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

                        <!-- rightbox ends here -->


                    </div>
                        </div>

<!--            <button onclick="window.print()">click me</button>-->


</body>
<!--                            to choose color-->
<!--<div id="choose_color">-->
<!--    <input type="color" id="resume_color" name="resume_color">-->
<!--</div>-->

</html>