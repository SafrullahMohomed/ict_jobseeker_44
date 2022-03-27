<?php if (empty(session_id())) session_start(); ?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- <link href="<?php echo URL ?>views/images/Home/favicon.ico" rel="shortcut icon" type="image/x-icon" /> -->
    <link rel="icon" type="image/png" sizes="64x64" href="<?php echo URL ?>views/images/favicon/favicon.ico">
    <!-- <link rel="icon" type="image/png" sizes="32x32" href="<?php echo URL ?>views/images/favicon/logo.png" /> -->
    <title>Home</title>

    <style>
        <?php include "CSS/Normalize/Normalize.css" ?><?php include "CSS/Home.css" ?>
    </style>

    <!--  <link rel="stylesheet" href="C:/xampp new/htdocs/ict_jobseeker_44/views/CSS/Home.css"/> -->

    <!-- link to font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>

</head>

<body>
<!-- header of the page starts  -->
<!-- header part with css html js -->
<div class="header_div">
    <?php include './views/Header.php' ?>
</div>
<!-- header part end  -->

<!-- theme image and jobs search part divisions starts here -->

<div class="theme-image">
    <img src='<?php echo URL ?>views/images/Home/hometheme.jpg'>
</div>


<!-- posing part start here -->
<div class="post_button">
    <a href="<?php echo URL ?>jobs/Post_job">
        <div class="post_but" id="post_job_but">Post a Job</div>
    </a>
    <!---->
    <!---->
    <a href="<?php echo URL ?>Contracts/Post_contract">
        <div class="post_but" id="post_contract_but"> Post a Contract</div>
    </a>
    <!---->
</div>
<!-- posting part end here -->

<!-- theme image ends here -->

<div class="job-search-part">
    <!--  job search part starts here-->

    <div class="job-search-box">
        <div class="search-your-keywords">
            <input type="text" name="Search your keyword"
             placeholder="Search jobs(Title,Location)"
             onkeyup="ajaxload(this.value);"
             />
        </div>
       <!--  <div class="category">
            <select name="Category">
                <option value="none" selected disabled hidden>
                    <span id="category-id-home">Select a Catogory</span>
                </option>
                <option value="Software Engineering">Software Engineering</option>
                <option value="Qaulity Assurance">Qaulity Assurance</option>
                <option value="Frontend Developing">Frontend Developing</option>
                <option value="Backend Developing">Backend Developing</option>
                <option value="Senior Sofware Engineering">
                    Senior Sofware Engineering
                </option>
                <option value="Fullstack developing">Fullstack developing</option>
                <option value="Data Science">Data Science</option>
            </select>
        </div>
        <div class="location">
           
            <select type="text" id="City" name="City" placeholder="" class="inputfield" aria-multiselectable=><br>
                <option value="Ampara ">Ampara</option>
                <option value="Anuradhapura ">Anuradhapura</option>
                <option value="Badulla ">Badulla</option>
                <option value="Batticaloa ">Batticaloa</option>
                <option value="Colombo">Colombo</option>
                <option value="Galle  ">Galle</option>
                <option value="Gampaha">Gampaha</option>
                <option value="Hambanthota ">Hambanthota</option>
                <option value="Jaffna  ">Jaffna</option>
                <option value="Kaluthara ">Kaluthara</option>
                <option value="Kandy  ">Kandy</option>
                <option value="Kegalle ">Kegalle</option>
                <option value="Kilinochchi ">Kilinochchi</option>
                <option value="Kurunegala ">Kurunegala</option>
                <option value="Mannar ">Mannar</option>
                <option value="Matale  ">Matale</option>
                <option value="Matara ">Matara</option>
                <option value="Monaragala ">Monaragala</option>
                <option value="Mulathivu  ">Mulathivu</option>
                <option value="Nuwera Eliya ">Nuwera Eliya</option>
                <option value="Polonnaruwa "> Polonnaruwa</option>
                <option value="Puttalam ">Puttalam</option>
                <option value="Rathnapura ">Rathnapura</option>
                <option value="Trincomalee  ">Trincomalee</option>
                <option value="Vauniya ">Vauniya</option>

            </select>
        </div> -->
        <!-- <div class="search-button">
            <button type="submit">Search</button>
        </div> -->
    </div>
</div>

<!--  job search part ends here -->


<!-- counting part starts here -->
<div class="counting-part">
    <div class="posted-jobs">
        <div class="posted-jobs-heading">Posted&nbsp;jobs</div>
        <div class="posted-jobs-value">1250</div>
    </div>
    <div class="companies">
        <div class="companies-heading">Companies</div>
        <div class="companies-value">55</div>
    </div>
    <div class="jobseekers">
        <div class="jobseekers-heading">Jobseekers</div>
        <div class="jobseekers-value">28560</div>
    </div>
</div>
<!-- counting part ends here -->

<!-- our services and text part starts here -->
<div class="our-services">
    <hr class="horizontal-line"/>
    <div class="our-services-text">
        our <span id="services">Services</span>
    </div>
    <div class="descriptive-text">
        Grab many <span class="ict">ICT</span> facilities from here to be
        success in your future career!
    </div>
</div>
<!-- our services and text part ends here -->

<!-- Service boxes starts here -->
<div class="service-boxes">
    <div class="first-row box-row">

        <a href="<?php echo URL ?>Resume/Resume_home">
            <div class="service-main-content" id="service-main-content-resume">
                <div class="service-name" id="create-resume">
                    <div class="service-name-header" id="create-resume-header">
                    </div>
                    <div class="service-text" id="create-resume-text" >
                    </div>
                </div>

                <div class="service-default-content-parent">
                    <div class="service-default-content" id="service-default-content-resume">
                        Create and manage create resume
                    </div>
                </div>
            </div>

        </a>
        <a href="<?php echo URL ?>JobRanking">
            <div class="service-main-content" id="service-main-content-job-ranking">
                <div class="service-name" id="job-rankings">
                    <div class="service-name-header" id="job-rankings-header"></div>
                    <div class="service-text" id="job-rankings-text">
                    </div>

                </div>
                <div class="service-default-content-parent">
                    <div class="service-default-content" id="service-default-content-jobr">
                        Job Rankings
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="second-row box-row">
        <a href="<?php echo URL ?>LearningMaterials">
            <div class="service-main-content" id="service-main-content-learning-materials">
                <div class="service-name" id="learning-materials">
                    <div class="service-name-header" id="learning-materials-header">
                    </div>
                    <div class="service-text" id="learning-materials-text">
                    </div>
                </div>
                <div class="service-default-content-parent">
                    <div class="service-default-content" id="service-default-content-lm">
                        Learning Materials
                    </div>
                </div>
            </div>
        </a>
        <a href="<?php echo URL ?>Counsellor/Counsellor_home_js">
            <div class="service-main-content" id="service-main-content-counselling">

                <div class="service-name" id="counselling-services">
                    <div class="service-name-header" id="counselling-header">
                    </div>
                    <div class="service-text" id="counselling-text">
                    </div>

                </div>
                <div class="service-default-content-parent">
                    <div class="service-default-content" id="service-default-content-counselling">
                        Counselling & Mock interviews
                    </div>
                </div>


            </div>
        </a>
    </div>
</div>
<!-- service boxes ends here -->
<!-- review part starts here -->
<div class="main_container">
    <div class="left">
        <div class="tittle">
            Customer <br/>
            Review
        </div>
        <div class="description">
            As one of our preferred users, your feedback is of the utmost
            importance to us. We are constantly striving to provide the ideal
            service for our users, and your input help us to define that
            experience. That being said, if you could take a minute to post a
            review, we would so appreciate it.
        </div>
        <div class="button" type="button" onclick="loadRateAndreview()">
            <div class="btn_div">More</div>
        </div>
    </div>
    <div class="right_picture">
        <?php
        echo "<img src='http://localhost/ict_jobseeker_44/views/images/Home/rightimage.png' >";
        ?>
        <!-- <img
            src="/images/home/rightimage.png"
            alt="image of a rate and review part with some star images"
          /> -->
    </div>
</div>

<!-- review part ends here -->
<!--  <a href="../../rate and review-sys/1/sys_rate_and_review.html"></a> -->

<!--  include review part -->
<?php #include("../../rate and review-sys/1/sys_rate_and_review.html");
?>
<!-- footer part starts here -->

<!--theme image 2-->
<!--<div class="theme-image" id="theme-image2">-->
<!--    <img src='http://localhost/ict_jobseeker_44/views/images/Home/themeimage2.jpeg' alt="theme image 2">-->
<!--</div>-->

<?php include './views/Footer_home.php' ?>
<!-- js links -->


<?php include 'Inquire.php' ?>
<script src="<?php echo URL ?>views/JS/Home.js"></script>

<!-- <script defer src="JS/Home.js"></script> -->
</body>

</html>