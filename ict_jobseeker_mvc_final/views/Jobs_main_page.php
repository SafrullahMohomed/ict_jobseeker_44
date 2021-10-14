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
<body>
<div class="header_div" style="height:140px">
<?php include 'Header.php'?>
</div>
    
    <div class="main_container">
    <div class="top_trending_categories_title ">Top Trending Categories </div>

<div class="top_trending_categories_container">
   
<div class="top_trending_categories_box_row">

    <div class="top_trending_categories_box"><a href="">Computer Service Technician</a></div>


    <div class="top_trending_categories_box"><a href="">Software Engineer</a></div>  


    <div class="top_trending_categories_box"><a href="">Data Analyst</a></div>

    
    

</div>
<div class="top_trending_categories_box_arrows">
    <i class="fa fa-chevron-left" ></i>
    <i class="fa fa-chevron-right" ></i>
</div>

<div class="top_trending_categories_box_row">

    <div class="top_trending_categories_box"><a href="">Computer Service Technician</a></div>


    <div class="top_trending_categories_box"><a href="">Software Engineer</a></div>  


    <div class="top_trending_categories_box"><a href="">Data Analyst</a></div>
    

</div>

</div>
<div class="features_job">
    
        <div class="features_job_row">
            <div class="features_job_row_picture">
            <?php
      echo "<img src='http://localhost/ict_jobseeker_mvc_final/views/images/Jobs_main_page/3.JFIF' >"; 
    ?>
               
            </div>
            <div class="features_job_row_job_and_company">
                    <div class="features_job_row_job">
                       Software Engineer
    
    
                    </div>
                    <div class="features_job_row__company">
                        Dialog PVT Limited
                    </div>
            </div>
            <div class="features_job_row_location">
                
                    <i class="fas fa-map-marker-alt"></i>
               
                <div class="features_job_row_location_name">
                 Gampaha  
                </div>
            </div>
            <div class="features_job_row_job_type">
                <i class="fas fa-clock"></i>
                <div class="features_job_row_job_type_name">
                    Part Time
                </div>
            </div>
    
            <div class="features_job_row_deadline_and_urgent">
               <div class="features_job_row_deadline">
               
                <div class="features_job_row_deadline_date_container">
                    <p>Expires on </p>
                <div class="features_job_row_deadline_date">
                    2021/08/30
                </div>
                </div>
                
    
                </div>
                <div class="features_job_row_urgent">
                    Urgent
                </div>
               
               </div>
               
            </div>
            <div class="features_job_row">
                <div class="features_job_row_picture">
                <?php
      echo "<img src='http://localhost/ict_jobseeker_mvc_final/views/images/Jobs_main_page/2.JFIF' >"; 
    ?>
                   
                </div>
                <div class="features_job_row_job_and_company">
                        <div class="features_job_row_job">
                            Graphic Designer
        
        
                        </div>
                        <div class="features_job_row__company">
                            Lanka PVT Limited
                        </div>
                </div>
                <div class="features_job_row_location">
                    
                        <i class="fas fa-map-marker-alt"></i>
                   
                    <div class="features_job_row_location_name">
                      Colombo  
                    </div>
                </div>
                <div class="features_job_row_job_type">
                    <i class="fas fa-clock"></i>
                    <div class="features_job_row_job_type_name">
                        Full Time
                    </div>
                </div>
        
                <div class="features_job_row_deadline_and_urgent">
                   <div class="features_job_row_deadline">
                   
                    <div class="features_job_row_deadline_date_container">
                        <p>Expires on </p>
                    <div class="features_job_row_deadline_date">
                        2021/08/28
                    </div>
                    </div>
                    
        
                    </div>
                    <div class="features_job_row_urgent">
                        Urgent
                    </div>
                   
                   </div>
                   
                </div>
                <div class="features_job_row">
                    <div class="features_job_row_picture">
                    <?php
          echo "<img src='http://localhost/ict_jobseeker_mvc_final/views/images/Jobs_main_page/1.png' >"; 
              ?>
                  
                    </div>
                    <div class="features_job_row_job_and_company">
                            <div class="features_job_row_job">
                                Web Designer
            
            
                            </div>
                            <div class="features_job_row__company">
                                SLT PVT Limited
                            </div>
                    </div>
                    <div class="features_job_row_location">
                        
                            <i class="fas fa-map-marker-alt"></i>
                       
                        <div class="features_job_row_location_name">
                          Colombo  
                        </div>
                    </div>
                    <div class="features_job_row_job_type">
                        <i class="fas fa-clock"></i>
                        <div class="features_job_row_job_type_name">
                            Full Time
                        </div>
                    </div>
            
                    <div class="features_job_row_deadline_and_urgent">
                       <div class="features_job_row_deadline">
                       
                        <div class="features_job_row_deadline_date_container">
                            <p>Expires on </p>
                        <div class="features_job_row_deadline_date">
                            2021/08/28
                        </div>
                        </div>
                        
            
                        </div>
                        <div class="features_job_row_urgent">
                            Urgent
                        </div>
                       
                       </div>
                       
                    </div>
                    <button class="load_more" id="loadmore_btn" onclick="loadmore()">Load More...</button>
<div id="more">
            
<div class="features_job_row" onclick = "functionView()">
    
    <div class="features_job_row_picture">
    <?php
      echo "<img src='http://localhost/ict_jobseeker_mvc_final/views/images/Jobs_main_page/company_logo1.jfif' >"; 
    ?>
        
    </div>
    <div class="features_job_row_job_and_company">
            <div class="features_job_row_job">
                Senior Engineer

            </div>
            <div class="features_job_row__company">
                Virtusa (Pvt.) Ltd
            </div>
    </div>
    <div class="features_job_row_location">
        
            <i class="fas fa-map-marker-alt"></i>
       
        <div class="features_job_row_location_name">
          Colombo  
        </div>
    </div>
    <div class="features_job_row_job_type">
        <i class="fas fa-clock"></i>
        <div class="features_job_row_job_type_name">
            Full Time
        </div>
    </div>

    <div class="features_job_row_deadline_and_urgent">
       <div class="features_job_row_deadline">
       
        <div class="features_job_row_deadline_date_container">
            <p>Expires on </p>
        <div class="features_job_row_deadline_date">
            2021/10/29
        </div>
        </div>
        

        </div>
        <div class="features_job_row_urgent">
            Urgent
        </div>
       
       </div>
       
    </div>
    <div class="features_job_row">
        <div class="features_job_row_picture">

        <?php
          echo "<img src='http://localhost/ict_jobseeker_mvc_final/views/images/Jobs_main_page/1.png' >"; 
        ?>
        
        
        </div>
        <div class="features_job_row_job_and_company">
                <div class="features_job_row_job">
                    Web Designer


                </div>
                <div class="features_job_row__company">
                    SLT PVT Limited
                </div>
        </div>
        <div class="features_job_row_location">
            
                <i class="fas fa-map-marker-alt"></i>
           
            <div class="features_job_row_location_name">
              Colombo  
            </div>
        </div>
        <div class="features_job_row_job_type">
            <i class="fas fa-clock"></i>
            <div class="features_job_row_job_type_name">
                Full Time
            </div>
        </div>

        <div class="features_job_row_deadline_and_urgent">
           <div class="features_job_row_deadline">
           
            <div class="features_job_row_deadline_date_container">
                <p>Expires on </p>
            <div class="features_job_row_deadline_date">
                2021/08/28
            </div>
            </div>
            

            </div>
            <div class="features_job_row_urgent">
                Urgent
            </div>
           
           </div>
           
        </div>

</div>

    </div>
</div>
    </div>
    
    <?php include 'Footer.php' ?>

  <script type="text/javascript" src='JS/Jobs_main_page.js'></script>   
</body>
</html>





