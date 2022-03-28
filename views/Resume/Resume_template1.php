<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Resume/Resume_template1.css">
    <script defer src="<?php echo URL ?>views/JS/Resume/Resume_template1.js"></script>

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
    <div class="resume_page">
        <!-- Header part starts here -->
        <div class="resume_header">
            <div class="candidate_name" ><?php echo $resume['First_name']." ".$resume['Last_name']?></div>
            <div class="candidate_address"><?php echo $resume['Address']?>, <span class="candidate_city"><?php echo $resume['City']?></span></div>
            <div class="candidate_email"><?php echo $resume['Email']?></div>
            <div class="candidate_phone"><?php echo $resume['Phone_no']?></div>
        </div>
        <!-- Header part ends here -->

        <!-- professional summary starts here -->
        <div class="professional_summary">
            <div class="summary_title sub_title">Professional Summary</div>
            <div class="summary_text"><?php echo $resume['About you']?></div>
        </div>

        <!-- skills starts here -->
        <div class="skills ">
            <div class="skills_title_head sub_title">Skills</div>
            <div class="skills_details" id="skills_details">

            </div>
            <input type="text" id="skills_details_hidden" hidden value="<?php echo $resume['Skills']?>">
        </div>


        <!-- experience starts here -->
        <div class="experience_title_head sub_title">Experience</div>
        <div class="experience">
            <!-- experience 1 -->
            <div class="experience1 experience_main">

                <!-- first div for experient details and timelines -->
                <div class="experience_timeline">
                    <div class="experience_employer">
                        <div class="experience_job_title"><?php echo $experience2a['Job_title']?></div>
                        <div class="experience_employer"><?php echo $experience2a['Employer']?></div>
                    </div>
                    <div class="experience_time_city">
                        <div class="timeline"><?php echo $experience2a['From']." - ".$experience2a['To']?></div>
                        <div class="experience_location"><?php echo $experience2a['City'].", ".$experience2a['Country']?></div>
                    </div>
                </div>

                <!-- experience points  -->
                <div class="experience_details">
                    <br>
                    <?php echo $experience2a['What_did_you_do_in_this_job']?>
<!--                    <ul>-->
<!--                        <li>experience point 1</li>-->
<!--                        <li>experience point 2</li>-->
<!--                        <li>experience point 3</li>-->
<!--                        <li>experience point 4</li>-->
<!--                    </ul>-->
                </div>
            </div>




            <!-- experience 2 -->
            <div class="experience2 experience_main">

                <!-- first div for experience details and timelines -->
                <div class="experience_timeline">
                    <div class="experience_employer">
                        <div class="experience_job_title"><?php echo $experience2b['Job_title']?></div>
                        <div class="experience_employer">at <?php echo $experience2b['Employer']?> </div>
                    </div>
                    <div class="experience_time_city">
                        <div class="timeline"><?php echo $experience2b['From']." - ".$experience2b['To']?></div>
                        <div class="experience_location"><?php echo $experience2b['City'].", ".$experience2b['Country']?></div>
                    </div>
                </div>

                <!-- experience points  -->
                <div class="experience_details">
                    <br>
                    <?php echo $experience2b['What_did_you_do_in_this_job']?>

                    <!--                    <ul>-->
<!--                        <li>experience point 1</li>-->
<!--                        <li>experience point 2</li>-->
<!--                        <li>experience point 3</li>-->
<!--                        <li>experience point 4</li>-->
<!--                    </ul>-->
                </div>
            </div>
            <!-- experience 3 -->
            <div class="experience3 experience_main">

                <!-- first div for experience details and timelines -->
                <div class="experience_timeline">
                    <div class="experience_employer">
                        <div class="experience_job_title"><?php echo $experience2c['Job_title']?></div>
                        <div class="experience_employer"> at <?php echo $experience2c['Employer']?> </div>
                    </div>
                    <div class="experience_time_city">
                        <div class="timeline"><?php echo $experience2c['From']." - ".$experience2c['To']?></div>
                        <div class="experience_location"><?php echo $experience2c['City'].", ".$experience2c['Country']?></div>
                    </div>
                </div>

                <!-- experience points  -->
                <div class="experience_details">
                    <br>
                    <?php echo $experience2c['What_did_you_do_in_this_job']?>

                    <!--                    <ul>-->
                    <!--                        <li>experience point 1</li>-->
                    <!--                        <li>experience point 2</li>-->
                    <!--                        <li>experience point 3</li>-->
                    <!--                        <li>experience point 4</li>-->
                    <!--                    </ul>-->
                </div>
            </div>


        </div>


        <!-- Education starts here -->
        <div class="education_title_head sub_title">Education</div>
        <div class="education">

            <!-- education 1-->
            <div class="education1 education_main">

                <!-- first div for education details and timelines -->
                <div class="education_timeline">
                    <div class="education_provider">
                        <div class="education_degree"><?php echo $education3a['Institute']?></div>
                        <div class="education_institute"><?php echo $education3a['Degree']?></div>
                    </div>
                    <div class="education_time_city">
                        <div class="timeline"><?php echo $education3a['From']." - ".$education3a['To']?></div>
                        <div class="education_location"><?php echo $education3a['City'].", ".$education3a['Country']?></div>
                    </div>
                </div>
            </div>


            <!-- education 2-->
            <div class="education2 education_main">

                <!-- first div for education details and timelines -->
                <div class="education_timeline">
                    <div class="education_provider">
                        <div class="education_degree"><?php echo $education3b['Institute']?></div>
                        <div class="education_institute"><?php echo $education3b['Degree']?></div>
                    </div>
                    <div class="education_time_city">
                        <div class="timeline"><?php echo $education3b['From']." - ".$education3b['To']?></div>
                        <div class="education_location"><?php echo $education3b['City'].", ".$education3b['Country']?></div>
                    </div>
                </div>
            </div>

<!--            education 3-->
            <div class="education3 education_main">

                <!-- first div for education details and timelines -->
                <div class="education_timeline">
                    <div class="education_provider">
                        <div class="education_degree"><?php echo $education3c['Institute']?></div>
                        <div class="education_institute"><?php echo $education3c['Degree']?></div>
                    </div>
                    <div class="education_time_city">
                        <div class="timeline"><?php echo $education3c['From']." - ".$education3c['To']?></div>
                        <div class="education_location"><?php echo $education3c['City'].", ".$education3c['Country']?></div>
                    </div>
                </div>
            </div>



        </div>




        <!-- project detals starts here -->

        <div class="project">
            <div class="project_title_head sub_title">Project</div>


            <!-- project1 -->
            <div class="project1">
                <div class="project_title"><?php echo $project5a['Project_title']?></div>
                <div class="project_details" id="project_details5a">


                </div>
            </div>
            <input type="text" id="project_details5a_hidden"  hidden value="<?php echo $project5a['Description']?>">

            <!-- project2 -->
            <div class="project2">
                <div class="project_title"><?php echo $project5b['Project_title']?></div>
                <div class="project_details" id="project_details5b">

                </div>
            </div>
            <input type="text" id="project_details5b_hidden" hidden value="<?php echo $project5b['Description']?>">

            <!-- project3 -->
            <div class="project3">
                <div class="project_title"><?php echo $project5c['Project_title']?></div>
                <div class="project_details" id="project_details5c">

                </div>
            </div>
            <input type="text" id="project_details5c_hidden" hidden value="<?php echo $project5c['Description']?>">

        </div>


    </div>

    <button id="print_button">click me</button>


</body>

</html>