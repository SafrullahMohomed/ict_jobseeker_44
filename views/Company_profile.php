<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

<?php include "CSS/company_profile.css" ?>
 </style>
    
    <script src="https://kit.fontawesome.com/f299a8aeaa.js" crossorigin="anonymous"></script>
    <title>company_profile</title>
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
            <img src='<?php echo URL ?>views/images/Company_profile/company_logo1.jfif' >
               
            </div>  
            <div class="main_details_text">
               <div class="name">
                Virtusa (Pvt.) Ltd
               </div>
               <div class="address">
                40, Navam Mawatha, Colombo 02
               </div>
               <div class="phone_number">
                +94 11 244 8888
               </div>
               <div class="no_of_contracts">
                 2 job post
               </div>
               
            </div>  
         </div> 
       
         <div class="description">
          Virtusa Corporation is an American information technology services company founded in 1996 in Sri
           Lanka and has its headquarters in Southborough, Massachusetts, United State.At a scale and speed that
            defies traditional IT infrastructure. Learn how Virtusa
           provides solutions that help companies work smarter, faster. IT Strategy. Business Consulting. DPA.
         </div>
         <div class="description_vedio">
          <video autoplay muted controls id="vedioid">
            <source src='<?php echo URL ?>views/video/description_vedio1.mp4' type="video/mp4">
          
            Your browser does not support the video tag.
          </video>
                   </div>
         <div class="sub_parts">
      <div class="email">
          <div class="email_text">
            Email
          </div>
          <div class="email_data">
            <a href="virtusa@gmail.com"> virtusa@gmail.com </a>
          </div>
         
      </div>
      <div class="website">
          <div class="website_text">
              Web site
          </div>
          <div class="website_data">
            <a href="virtusa.com"> virtusa.com  </a> 
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
     

         </div>
        

    </div>
    <!-- header part with css html js -->
 
        <?php include 'Footer.php'?>

      <!-- header part end  -->
</body>
</html>