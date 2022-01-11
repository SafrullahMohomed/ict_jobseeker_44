<?php if ( empty(session_id()) ) session_start(); ?>
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
<!-- <body onload="BidLoad()"> -->
    <body onload="viewContract(<?php echo $data['Contract_ID']?>)">
     <!-- header part start  -->
<div class="header_div" >
        <?php include 'Header.php'?>
</div>
      <!-- header part end  -->
    
       <div class="main_container">


      
        
        <div class="job_detail_sub_container">
           
          <!-- load data from database -->

            
        </div>
        
        <!-- bid proposal parts start from here -->
        <div class="bid_part">
            <!-- <div class="bid_row">
           
            </div> -->
            <div class="bid_row">
                    <div class="first">
                     <div class="name">
                     Maneesha Yohani
                     </div>
                     <div class="rs_price">
                     <div class="rs">
                            Rs.1500
                        </div>
                        <div class="price">
                            1500
                        </div>  
                     </div>
                     
                    </div>
                    <div class="second">
                    I have more experience with other university projects.I would like to
             do my work within average time and average
             hourly rate.I will do my best.I have good typing speed because of my previous projects.
                    </div>
            </div>

        </div>

        <!-- bid proposal parts end from here -->
      
        <?php include 'Footer.php'?>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="<?php echo URL ?>views/JS/View_contract.js"></script>
<script src="<?php echo URL ?>views/JS/Contracts_main_page.js"></script>

</body>
</html>
