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
<body
<?php
#if user is logging and he click, click here button to view company profile .
#then it is his own profile.then show profile with edit profile option
if( isset($_SESSION['User_ID']) && $_SESSION['User_type']=="Contract provider" && $_SESSION['User_ID']==$data['User_ID']):?>
onload="cpData(<?php echo  $_SESSION['User_ID']?>)"


<?php
else:
?>
onload="cpData(<?php echo  $data['User_ID']?>)"

<?php endif; ?>

>

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
        <!-- load data from database (cp data) -->
        
         </div>


         <div  class="review">
          
             <!-- load data from database (cp rate and review data) -->
            
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
          <button class="loadmore_button"onclick="review(<?php echo  $data['User_ID']?>)">Submit</button>
      </div>
<?php endif;?>
    </div>
    <?php include 'views/Footer.php'?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?php echo URL ?>views/JS/Contract_provider_profile.js"></script>
</body>
</html>