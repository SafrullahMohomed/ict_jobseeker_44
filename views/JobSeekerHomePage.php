<?php if (empty(session_id())) session_start(); ?>

<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- <link href="<?php echo URL  ?>views/images/Home/favicon.ico" rel="shortcut icon" type="image/x-icon" /> -->
  <link rel="icon" type="image/png" sizes="64x64" href="<?php echo URL  ?>views/images/favicon/favicon.ico">
  <!-- <link rel="icon" type="image/png" sizes="32x32" href="<?php echo URL  ?>views/images/favicon/logo.png" /> -->
  <title>Home</title>

  <style>
    <?php include "CSS/Normalize/Normalize.css" ?><?php include "CSS/JobSeekerHomePage.css" ?>
  </style>

  <!--  <link rel="stylesheet" href="C:/xampp new/htdocs/ict_jobseeker_44/views/CSS/Home.css"/> -->

  <!-- link to font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>

</head>

<body>
  <!-- header of the page starts  -->
  <!-- header part with css html js -->
  <div class="header_div">
    <?php include 'Header.php' ?>
  </div>
  <!-- header part end  -->
  <!-- header  ends here -->
  <!-- theme image and jobs search part divisions starts here -->
  <div class="job-search-part">
        <div class="job-search-box" id="job-search">
            <div class="intro">
                <p>Find Your Next Dream Job</p>
            </div>
            <div class="find">
                <div class="search-your-keywords">
                    <input type="text" name="Search your keyword"  placeholder="Search your keyword"/>
                  </div>
                  <div class="category">
                    <select name="Category">
                      <option value="none" selected disabled hidden>
                        <span id="category-id-home">Select a Catogory</span>
                      </option>
                      <option value="Software Engineering">Software Engineering</option>
                      <option value="Qaulity Assurance">Qaulity Assurance</option>
                      <option value="Frontend Developing">Frontend Developing</option>
                      <option value="Backend Developing">Backend Developing</option>
                      <option value="Senior Sofware Engineering">Senior Sofware Engineering</option>
                      <option value="Fullstack developing">Fullstack developing</option>
                      <option value="Data Science">Data Science</option>
                    </select>
                  </div>
                  <div class="location">
                    <input type="text" name="location" placeholder="location" />
                  </div>
                  <div class="search-button">
                    <button type="submit">Search</button>
                  </div>
            </div>
        </div>
      <div class="theme-image">
        <img src='<?php echo URL ?>views/images/Home/hometheme.jpg'>
      </div>
      <!-- theme image ends here -->
      <div class="job-search-box" id="freelance-search">
          <div class="intro">
              <p>Find Your Next Freelance project</p>
          </div>
          <div class="find">
            <div class="search-your-keywords">
                <input type="text" name="Search your keyword"  placeholder="Search your keyword"/>
              </div>
              <div class="category">
                <select name="Category">
                  <option value="none" selected disabled hidden>
                    <span id="category-id-home">Select a Catogory</span>
                  </option>
                  <option value="Photoshop Editing">Photoshop Editing</option>
                  <option value="Logo Design">Logo Design</option>
                  <option value="Web Programming">Web Programming</option>
                  <option value="Video Editing">Video Editing</option>
                  <option value="UI Design">UI Design</option>
                  <option value="Article & Blog Posts">Article & Blog Posts</option>
                  <option value="Book Design">Book Design</option>
                </select>
              </div>
              <div class="location">
                <input type="text" name="location" placeholder="location" />
              </div>
              <div class="search-button">
                <button type="submit">Search</button>
              </div>
          </div>
      </div>
      
    </div>
  <!-- themes image and job search part ends here -->

  


 
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
    <hr class="horizontal-line" />
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
        <div class="create-resume service-name">
          <div class="create-resume-header service-name-header">
            Create and manage create resume
          </div>
          <div class="create-resume-text service-text">By clicking this section you can create a resume for free and can manage it as a jobseeker. we provide different templates to create your own resume</div>

        </div>
      </a>
      <a href="<?php echo URL ?>JobRanking">
        <div class="create-resume service-name">
          <div class="job-rankings-header service-name-header">Job Rankings</div>
          <div class="job-rankings-text service-text">In this field you can explore job rankings according to posted jobs in our system.</div>
        </div>
      </a>
    </div>
    <div class="second-row box-row">
      <a href="<?php echo URL ?>LearningMaterials">
        <div class="create-resume service-name">
          <div class="learning-materials-header service-name-header">
            Learning Materials
          </div>
          <div class="lm-text service-text">We provide learning material's links which are recommended by the ICT community</div>
        </div>
      </a>
      <a href="<?php echo URL ?>Counsellor/Counsellor_home_js">
        <div class="create-resume service-name">
          <div class="counselling-header service-name-header">
            Counselling & Mock interviews
          </div>
          <div class="counselling-text service-text">Before selecting a job you can consume a counselling service from our expertise and you can take mock interviews to get a better experience before facing an interview</div>

        </div>
      </a>
    </div>
  </div>
  <!-- service boxes ends here -->

  <!-- review part starts here -->
  <div class="main_container">
    <div class="left">
      <div class="tittle">
        Customer <br />
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


  <?php include 'Footer.php' ?>
  <!-- js links -->





  <script src="<?php echo URL ?>views/JS/Home.js"></script>

  <!-- <script defer src="JS/Home.js"></script> -->
</body>

</html>