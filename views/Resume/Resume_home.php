<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Normalize/Normalize.css">
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Resume/Resume_home.css">
    <title>Resume Home</title>
</head>
<body>
<div class="header_div">
    <?php include './views/Header.php' ?>
</div>

<div class="main-container">
    <!-- Title part -->
    <div class="template_title">Create Your Own Resume</div>

    <!-- Text -->
    <div class="template_text">Select a Template to create your resume like a pro</div>

    <!-- cv templates -->

    <div class="resume_templates">

        <!-- template 01 -->

        <a href="/ict_jobseeker_44/Resume/Resume_form_contact">
            <div class="resume_template1">
                <div class="template_preview"><img src="/ict_jobseeker_44/views/images/Resume/1.png" alt=""></div>
                <div class="template_name">Design 01</div>
            </div>
        </a>

        <!-- template 02 -->
        <a href="/ict_jobseeker_44/Resume/Resume_form_contact">
        <div class="resume_template2">
            <div class="template_preview"><img src="/ict_jobseeker_44/views/images/Resume/2.png" alt=""></div>
            <div class="template_name">Design 02</div>
        </div>
        </a>

        <!-- template 03 -->
        <a href="/ict_jobseeker_44/Resume/Resume_form_contact">
        <div class="resume_template3">
            <div class="template_preview"><img src="/ict_jobseeker_44/views/images/Resume/3.png" alt=""></div>
            <div class="template_name">Design 03</div>
        </div>
        </a>

    </div>
</div>


<?php include './views/Footer.php' ?>

</body>
</html>