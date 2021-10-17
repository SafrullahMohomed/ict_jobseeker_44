

<!DOCTYPE html> 

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="<?php echo URL  ?>views/images/Home/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    
    <title>Home</title>
    
     <style>

    <?php include "CSS/Home.css" ?>
    <?php include "CSS/normalize.css" ?>

     </style>
    
   <!--  <link rel="stylesheet" href="C:/xampp new/htdocs/ict_jobseeker_44/views/CSS/Home.css"/> -->
  
    <!-- link to font awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script   src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script   src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
    <script   src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
   
  </head>

  <body>
    <!-- header of the page starts  -->
       <!-- header part with css html js -->
 <div class="header_div" >
        <?php include 'Header.php'?>
</div>
      <!-- header part end  -->
    <!-- header ends here -->

    <!-- theme image and jobs search part divisions starts here -->
    <div class="job-search-part">
      <div class="theme-image">
      <img src='<?php echo URL ?>views/images/Home/hometheme.jpg' >
      
      </div>
      <!-- theme image ends here -->
      <div class="job-search-box">
        <div class="search-your-keywords">
          <input
            type="text"
            name="Search your keyword"
            placeholder="Search your keyword"
          />
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
            <option value="Senior Sofware Engineering">
              Senior Sofware Engineering
            </option>
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
        <a href="#"
          ><div class="create-resume service-name">
            Create and manage create resume
          </div></a
        >
        <a href="#"
          ><div class="job-rankings service-name">Job Rankings</div></a
        >
      </div>
      <div class="second-row box-row">
        <a href="#"
          ><div class="learning-materials service-name">
            Learning Materials
          </div></a
        >
        <a href="#"
          ><div class="counselling service-name">
            Counselling & Mock interviews
          </div></a
        >
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
        <div class="button" type="onclick="loadRateAndreview()" > More</div>
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
<?php #include("../../rate and review-sys/1/sys_rate_and_review.html");?>
    <!-- footer part starts here -->
   

    <?php include 'Footer.php'?>
     <!-- js links -->
  
 
  


<script  src="<?php echo URL?>views/JS/Home.js"></script>   

    <!-- <script defer src="JS/Home.js"></script> -->
  </body>
</html>
