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
<body>
     <!-- header part start  -->
         <div class="header_div" >
        <?php include 'Header.php'?>
         </div>
  <!-- header part end  -->
   <div class="all"> <div class="main_container">
        <div class="rating_overview_row">
            <div class="total_rate">
                4.0
            </div>
            <div class="star_row">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="false"></i>
            </div>
            <div class="rating_description">
                <p>based on <span>53</span> reviews</p>
            </div>
        </div>
        <div class="review">
            <hr>
             <div class="review_row">
                <div class="user_picture">
           
                <img src='<?php echo URL?>views/images/Sys_rate/review_user1.jpg' >  
                
                </div>
                <div class="review_detail">
                    <div class="review_detail_name">
                        Teran Gomaz
                     </div>
                     <div class="do_rate_star_row">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="false"></i>
                        <i class="fa fa-star-o" aria-hidden="false"></i>
                        <i class="fa fa-star-o" aria-hidden="false"></i>
                      </div>
                      <div class="date">
                          10/20/2021
                      </div>
                      <div class="review_para">
                        I could find a good jobs from this site.
                      </div>

                </div>
                 
             </div>
             <hr>
             <div class="review_row">
                <div class="user_picture">
                <img src='<?php echo URL?>views/images/Sys_rate/review_user2.jpg' >  
                
                </div>
                <div class="review_detail">
                    <div class="review_detail_name">
                        Chanax Fernado
                     </div>
                     <div class="do_rate_star_row">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="false"></i>
                        <i class="fa fa-star-o" aria-hidden="false"></i>
                      </div>
                      <div class="date">
                        10/02/2020
                      </div>
                      <div class="review_para">
                        Thanks for your projects.
                      </div>

                </div>
                  
             </div>
            
             <hr>
             
             <button class="loadmore_button"id="loadmore_btn" onclick=" loadmore()">Load more..</button>

          <span id="more"><hr>
            <div class="review_row">
               <div class="user_picture">
               <img src='<?php echo URL?>views/images/Sys_rate/review_user3.jfif' >  
                   
               </div>
               <div class="review_detail">
                   <div class="review_detail_name">
                       Chalani Fernado
                    </div>
                    <div class="do_rate_star_row">
                       <i class="fa fa-star" aria-hidden="true"></i>
                       <i class="fa fa-star" aria-hidden="true"></i>
                       <i class="fa fa-star" aria-hidden="true"></i>
                       <i class="fa fa-star-o" aria-hidden="false"></i>
                       <i class="fa fa-star-o" aria-hidden="false"></i>
                     </div>
                     <div class="date">
                       10/02/2020
                     </div>
                     <div class="review_para">
                       Thanks for your projects.
                     </div>

               </div>
                 
            </div>
            
            
            <hr>

            <hr>
            <div class="review_row">
               <div class="user_picture">
               <img src='<?php echo URL?>views/images/Sys_rate/review_user4.jfif' > 
                  
               </div>
               <div class="review_detail">
                   <div class="review_detail_name">
                      Nishali kemal
                    </div>
                    <div class="do_rate_star_row">
                       <i class="fa fa-star" aria-hidden="true"></i>
                       <i class="fa fa-star" aria-hidden="true"></i>
                       <i class="fa fa-star" aria-hidden="true"></i>
                       <i class="fa fa-star-o" aria-hidden="false"></i>
                       <i class="fa fa-star-o" aria-hidden="false"></i>
                     </div>
                     <div class="date">
                       10/02/2020
                     </div>
                     <div class="review_para">
                       Thanks for your projects.
                     </div>

               </div>
                 
            </div>
            





            
            <hr></span>


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
            <div class="star_row">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="false"></i>
            </div>
            
            <div class="row">        
                <textarea  id="brief_description" rows="4" brief_description="brief_description" placeholder="Write your review here..." class="inputfield" required></textarea><br>
            </div>
            <button class="loadmore_button">Submit</button>
        </div>
      
    </div></div>
    <?php include 'Footer.php'?>
    <script src="<?php echo URL ?>views/JS/Sys_rate.js"></script>
</body>
</html>