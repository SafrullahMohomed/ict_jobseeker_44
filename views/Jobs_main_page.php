<?php if (empty(session_id())) session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs main page</title>
    <style>
        <?php include "CSS/Jobs_main_page.css" ?>
    </style>

    <script src="https://kit.fontawesome.com/f299a8aeaa.js" crossorigin="anonymous"></script>
</head>

<body onload="jobLoad()">
    <!-- header part with css html js -->
    <div class="header_div">

        <?php
        include 'Header.php' ?>
    </div>
    <!-- header part end  -->
    <!--search bar start-->
    <div class="resource-search-part">
        <div class="theme-image">
       
     <img src='<?php echo URL ?>views/images/Companies/hometheme.jpg' > 
    
          
        </div>
      
        <!-- theme image start here -->
        <div class="job-search-box">
            <div class="search-your-keywords">
                <input type="text"  require
                name="search-jobs" id="search-jobs" placeholder="Search jobs"
                onkeyup="ajaxload(this.value);"/>
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
                <select type="text" name="location" placeholder="location" >
                <option value="Ampara ">Ampara  </option>
              <option value="Anuradhapura ">Anuradhapura </option>
              <option value="Badulla ">Badulla </option>
              <option value="Batticaloa ">Batticaloa </option>
              <option value="Colombo">Colombo</option>
              <option value="Galle  ">Galle  </option>
              <option value="Gampaha">Gampaha</option>
              <option value="Hambanthota ">Hambanthota </option>
              <option value="Jaffna  ">Jaffna  </option>
              <option value="Kaluthara ">Kaluthara </option>
              <option value="Kandy  ">Kandy  </option>
              <option value="Kegalle ">Kegalle </option>
              <option value="Kilinochchi ">Kilinochchi </option>
              <option value="Kurunegala ">Kurunegala </option>
              <option value="Mannar ">Mannar </option>
              <option value="Matale  ">Matale  </option>
              <option value="Matara ">Matara </option>
              <option value="Monaragala ">Monaragala </option>
              <option value="Mulathivu  ">Mulathivu  </option>
              <option value="Nuwera Eliya ">Nuwera Eliya </option>
              <option value=" Polonnaruwa "> Polonnaruwa </option>
              <option value="Puttalam ">Puttalam </option>
              <option value="Rathnapura ">Rathnapura </option>
              <option value="Trincomalee  ">Trincomalee </option>
              <option value="Vauniya ">Vauniya </option>
                </select>
            </div>
            <div class="search-button">
                <button type="submit">Search</button>
            </div>
        </div>
    </div>
    <!-- themes image and job search part ends here -->
    <div class="main_container">



        <div class="top_trending_categories_title ">Top Trending Categories </div>

        <div class="top_trending_categories_container">

            <div class="top_trending_categories_box_row">

                <div class="top_trending_categories_box"><a href="">Computer Service Technician</a></div>


                <div class="top_trending_categories_box"><a href="">Software Engineer</a></div>


                <div class="top_trending_categories_box"><a href="">Data Analyst</a></div>




            </div>
            <!-- <div class="top_trending_categories_box_arrows">
    <i class="fa fa-chevron-left" ></i>
    <i class="fa fa-chevron-right" ></i>
</div> -->

            <div class="top_trending_categories_box_row">

                <div class="top_trending_categories_box"><a href="">Computer Service Technician</a></div>


                <div class="top_trending_categories_box"><a href="">Software Engineer</a></div>


                <div class="top_trending_categories_box"><a href="">Data Analyst</a></div>


            </div>

        </div>
        <div class="features_job">

<!-- load job data from data base -->
        </div>
    </div>
 <!-- pagination link -->
 <div id="pagination-link">
        </div>
    </div>

    <?php include 'Footer.php' ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?php echo URL ?>views/JS/Jobs_main_page.js"></script>

</body>

</html>