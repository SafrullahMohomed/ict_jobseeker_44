<?php if ( empty(session_id()) ) session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
 <?php include "CSS/Sys_rate.css" ?>

    </style>
    <script src="https://kit.fontawesome.com/f299a8aeaa.js" crossorigin="anonymous"></script>
    <title>rate_and_review_main_page</title>
</head>
<body  onload="reviewLoad()">
     <!-- header part start  -->
         <div class="header_div" >
        <?php include 'Header.php'?>
         </div>
  <!-- header part end  -->
   <div class="all"> <div class="main_container">
        <div  class="rating_overview_row">
           <!-- load total star  rating  data from database    -->
        </div>

        <div class="review">    
          <!-- load review data from database    -->
        </div>

        <div class="description">
                As one of our preferred users, your feedback
                is of the utmost importance to us. We are 
                constantly striving to provide the ideal service for our users,
                and your input help
                us to define that experience.
                That being said, if you could take a minute to post
                a review, we would so appreciate it.
        </div>
        <div class="rate_us_box">
            <div class="rate_us_text">
                Rate Us
            </div>
            <div class="star_row" >
           
                <i class="fa fa-star-o" aria-hidden="false" id="s1"onclick="color_star(this)"></i>
                <i class="fa fa-star-o" aria-hidden="false"id="s2" onclick="color_star(this)"></i>
                <i class="fa fa-star-o" aria-hidden="false" id="s3" onclick="color_star(this)"></i>
                <i class="fa fa-star-o" aria-hidden="false" id="s4" onclick="color_star(this)"></i>
                <i class="fa fa-star-o" aria-hidden="false" id="s5" onclick="color_star(this)"></i>
                
            </div>
           
            <div class="row">        
                <textarea  id="review_text" rows="4" name="brief_description" placeholder="Write your review here..." class="inputfield"  ></textarea><br>
            </div>
            <button class="loadmore_button" onclick="review()">Submit</button>
        </div>
      <div id="star_count"></div>
    </div>
  
  </div>
    <?php include 'Footer.php'?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?php echo URL ?>views/JS/Sys_rate.js"></script>
</body>
</html>