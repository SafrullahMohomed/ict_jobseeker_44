<?php if ( empty(session_id()) ) session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   
    <script src="https://kit.fontawesome.com/f299a8aeaa.js" crossorigin="anonymous"></script>
    
    <style>
        <?php include ("views/CSS/View_job.css" )?>
      
    </style>
    <title>view_job</title>
</head>
<body onload="viewJob(<?php echo $data['Job_ID']?>)">
     <!-- header part with css html js -->
   <div class="header_div" >
   <?php include ("views/Header.php" )?>
</div>
      <!-- header part end  -->
     
       <div class="main_container">
 
        <div class="job_detail_sub_container">
           <!-- load data from data base -->



        </div>
      
   <div class="job_post_image">
   <img src='<?php echo URL ?>views/images/View_job/jobpost.jpg' > 
     
   </div>
   <!--FAQ session start from here--> 
    <!-- <div class="FAQ">
        <div class="FAQ_button">
            <button onclick="openfaqForum()">Post Forum Question</button>
        </div>
     
    </div>
    <div class="Q_and_A">
            <p>Frequently Asked Questions </p>
            <div class="Q_and_A_container">
                <div class="Q">
                    <div class="Q_letter">Q .</div>
                    <div class="Q_text">
                    Can I apply for other jobs advertised by your company?
                    </div>
                   
                </div>
                <div class="A">
                    <div class="A_letter">A .</div>
                    <div class="A_text">
                        Yes,Sure
                    </div>
                    
                </div>
            </div>
            <div class="Q_and_A_container">
                <div class="Q">
                    <div class="Q_letter">Q .</div>
                    <div class="Q_text">
                    I would like to know if your company can provide us transport facilities with the current covid situation
                    </div>
                   
                </div>
                <div class="A">
                    <div class="A_letter">A .</div>
                    <div class="A_text">
                     Not yet.Sorry for the inconvenience
                    </div>
                    
                </div>
            </div>

    </div>
    
</div> -->

<?php include  ("views/Footer.php" )?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="<?php echo URL ?>views/JS/View_jobs.js"></script>
<script src="<?php echo URL ?>views/JS/Jobs_main_page.js"></script>
</body>
</html>
