<?php if ( empty(session_id()) ) session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <style>
     <?php include "views/CSS/Contract_provider_profile.css" ?>
    </style>
   
    <script src="https://kit.fontawesome.com/f299a8aeaa.js" crossorigin="anonymous"></script>
    <title>contract_provider_profile</title>
</head>
<body onload="cpData(<?php echo $_SESSION['User_ID']?>)">
     <!-- header part with css html js -->
 <div class="header_div" >
        <?php include 'views/Header.php'?>
</div>
      <!-- header part end  -->

      
      <!-- check user loging  -->

      <?php if ( isset($_SESSION['User_ID']) && $_SESSION['User_type']=="Contract provider" ): ?>  
         <!-- edit your profile -->
    <div class="edit_profile">
      <a href="<?php echo URL ?>Contract_provider/Contract_provider_account"><button>Edit your profile</button></a>  
    </div>
   <?php endif; ?>

    <div class="main_container">
        
         <div class="detail">
        <!-- load data from database -->
        
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
         <!-- rate us box show only for others except owner -->
         <?php if ( !isset($_SESSION['User_ID'])||$_SESSION['User_type']!="Contract provider") : ?>
         <div class="rate_us_box">
          <div class="rate_us_text">
              Rate me
          </div>
          <div class="star_row">
             <i class="fa fa-star-o" aria-hidden="false" id="s1" onclick="color_star(this)"></i>
             <i class="fa fa-star-o" aria-hidden="false" id="s2" onclick="color_star(this)"></i>
             <i class="fa fa-star-o" aria-hidden="false" id="s3" onclick="color_star(this)"></i>
             <i class="fa fa-star-o" aria-hidden="false" id="s4" onclick="color_star(this)"></i>
             <i class="fa fa-star-o" aria-hidden="false" id="s5" onclick="color_star(this)"></i>
          </div>
          
          <div class="row">        
              <textarea  id="review_text" rows="4" brief_description="brief_description" placeholder="Write your review here..." class="inputfield" required></textarea><br>
          </div>
          <button class="loadmore_button"onclick="review()">Submit</button>
      </div>
<?php endif;?>
    </div>
    <?php include 'views/Footer.php'?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?php echo URL ?>views/JS/Contract_provider_profile.js"></script>
</body>
</html>