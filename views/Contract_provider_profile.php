<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
     <?php include "CSS/Contract_provider_profile.css" ?>
    </style>
   
    <script src="https://kit.fontawesome.com/f299a8aeaa.js" crossorigin="anonymous"></script>
    <title>contract_provider_profile</title>
</head>
<body>
     <!-- header part with css html js -->
 <div class="header_div" >
        <?php include 'Header.php'?>
</div>
      <!-- header part end  -->
    <div class="main_container">
        <div class="main_details">
            <div class="picture">
            <img src='<?php echo URL ?>views/images/Contract_provider_profile/contract provider.jfif' >
               
             
            </div>  
            <div class="main_details_text">
               <div class="name">
                   Chamal Perera
               </div>
               <div class="address">
                   52,Senayaka Road,Colomb0 02
               </div>
               <div class="phone_number">
                   +94 71 244 1238
               </div>
               <div class="no_of_contracts">
                 6 contract post
               </div>
                <div class="rating">
                    <i class="fa fa-star-o" aria-hidden="false"></i>
                    <div class="no_of_rating">4.2</div>
                </div>
            </div>  
         </div> 
         <div class="description">
            As a contract provider I would like to meet many 
            trusted jobseekers and work with them
         </div>
         <div class="sub_parts">
      <div class="email">
          <div class="email_text">
            Email
          </div>
          <div class="email_data">
            <a href="chamal@gmail.com"> chamal@gmail.com  </a>
          </div>
         
      </div>
      <div class="website">
          <div class="website_text">
              Web site
          </div>
          <div class="website_data">
            <a href="chamalcontract.com"> chamalcontract.com  </a> 
          </div>
        
      </div>
      <div class="social_media">
          <div class="social_media_text">Social media</div>
          <div class="social_media_links">
            <i class="fab fa-facebook-square"></i>
            <i class="fab fa-linkedin"></i>
            <i class="fab fa-twitter-square"></i>
           </div>
        
      </div>
     <!--  <div class="do_rate">
          <div class="do_rate_text">
              Rate
          </div>
          <div class="do_rate_star_row">
            <i class="fa fa-star-o" aria-hidden="false"></i>
            <i class="fa fa-star-o" aria-hidden="false"></i>
            <i class="fa fa-star-o" aria-hidden="false"></i>
            <i class="fa fa-star-o" aria-hidden="false"></i>
            <i class="fa fa-star-o" aria-hidden="false"></i>
          </div>

      </div> -->

         </div>
         <div class="review">
             <hr>
             <div class="review_row">
                <div class="user_picture">
                <img src='<?php echo URL ?>views/images/Contract_provider_profile/review_user1.jpg' >
                   
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
                        Thank you for give  more value to my project. 
                      </div>

                </div>
                 
             </div>
             <hr>
             <div class="review_row">
                <div class="user_picture">
                <img src='<?php echo URL ?>views/images/Contract_provider_profile/review_user2.jpg' >
                   
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
         </div>
         <div class="rate_us_box">
          <div class="rate_us_text">
              Rate me
          </div>
          <div class="star_row">
             <i class="fa fa-star-o" aria-hidden="false"></i>
             <i class="fa fa-star-o" aria-hidden="false"></i>
             <i class="fa fa-star-o" aria-hidden="false"></i>
             <i class="fa fa-star-o" aria-hidden="false"></i>
              <i class="fa fa-star-o" aria-hidden="false"></i>
          </div>
          
          <div class="row">        
              <textarea  id="brief_description" rows="4" brief_description="brief_description" placeholder="Write your review here..." class="inputfield" required></textarea><br>
          </div>
          <button class="loadmore_button">Submit</button>
      </div>

    </div>
    <?php include 'Footer.php'?>
</body>
</html>