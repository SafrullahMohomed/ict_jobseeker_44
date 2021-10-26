<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
 <?php include "CSS/View_contract.css" ?>

    </style>
   
    <script src="https://kit.fontawesome.com/f299a8aeaa.js" crossorigin="anonymous"></script>
    <title>view_contract</title>
</head>
<body>
     <!-- header part start  -->
<div class="header_div" >
        <?php include 'Header.php'?>
</div>
      <!-- header part end  -->
    
       <div class="main_container">


      
        
        <div class="job_detail_sub_container">
           
            <div class="job_detail_left">
                <div class="job_detail_title_and_apply_button">
                    <div class="job_detail_title_and_company">
                        <div class="job_detail_title">
                            I am looking for a react native expert
                        </div>
                        <div class="company">
                            Chamal Perera
                        </div>
                        <div class="social_media_icons">
                            <i class="fab fa-facebook-square"></i>
                            <i class="fab fa-linkedin"></i>
                            <i class="fab fa-twitter-square"></i>
                        </div>
                        
        
                    </div>
                   
                    <button>Bid Now</button>
        
                </div>
                <div class="job_description_title">
                    Contract Description
                </div>

                <div class="job_description_text">
                    We need a React Native developer to create a mobile
                     app similar to this one ASAP
                    https://apps.apple.com/in/app
                    
                    We will need a MVP version first at the first phase 
                    and then complete all the app.
                    

                </div>
                
                
                
                
            </div>
            <div class="job_detail_right">
                <div class="company_details">
                   <!--
<div class="mock_interview">
                        We would like to supply mock interviews
                    </div>
                   --> 
                   <p>
                    Click here to veiw contract provider details</p> 
                   <button id="clickme" onclick="contractProviderProfile()"> Click Here</button>
                </div>
                <div class="job_overview">
                    <div class="job_overview_text">
                        Contract overview
                    </div>
                    <div class="application_deadline">
                        <div class="application_deadline_text">
                            contract deadline :
                        </div>
                        <div class="application_deadline_date">
                            2021/09/30
                        </div>
                       
                    </div>
                    <div class="salary">
                            <div class="salary_text">
                                Avg Bid (RS) :
                            </div>
                            <div class="salary_number">
                              1500
                            </div>
                    </div>
                   
                   <div class="phone_number">
                    <div class="phone_number_text">
                        Phone number :
                    </div>
                    <div class="phone_number_answer">
                        077 2568942
                    </div>
               </div>
               <div class="Email">
                <div class="Email_text">
                       E-mail :
                </div>
                <div class="Email_answer">
                  chamal@gmail.com
                </div>
           </div>

                </div>
                
            </div>


        </div>
      
        <?php include 'Footer.php'?>

</div>
<script src="<?php echo URL ?>views/JS/View_contract.js"></script>

</body>
</html>
