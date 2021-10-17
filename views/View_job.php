<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   
    <script src="https://kit.fontawesome.com/f299a8aeaa.js" crossorigin="anonymous"></script>
    
    <style>
        <?php include "CSS/View_job.css" ?>
    </style>
    <title>view_job</title>
</head>
<body>
     <!-- header part with css html js -->
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
                            Senior Engineer - C++
                        </div>
                        <div class="company">
                            Virtusa (Pvt.) Ltd  
                        </div>
                        <div class="social_media_icons">
                            <i class="fab fa-facebook-square"></i>
                            <i class="fab fa-linkedin"></i>
                            <i class="fab fa-twitter-square"></i>
                        </div>
                        
        
                    </div>
                   
                    <button onclick="applyJob()">Apply Now</button>
        
                </div>
                <div class="job_description_title">
                    Job Description
                </div>

                <div class="job_description_text">
                    Join us as a <br><br>

                    Senior Engineer – C ++<br><br>
                    
                    Expectations<br><br>
                    
                    Deep hands - on expertise in building components & 
                    leveraging data structure 5+ years of experience in Design
                     and Implementation of C ++ applications and familiarity with 
                     data architectures , data warehouse & data lake 5+ years experience
                      in Financial Services Capital and Securities market domain with query 
                      tuning , performance tuning & troubleshooting Experience building 
                      and deploying a range of data engineering pipelines into production
                       , including using automation best practices for Cl or CD Familiarity 
                       with databases and analytics technologies in the industry including
                        Data Warehousing or ETL & Relational Databases Experience
                         with performance tuning & troubleshooting Experience with
                          AWS is preferred& Relational Databases Experience
                               with performance tuning & troubleshooting Experience with
                                AWS is preferred
                    
                    Work Location - CMB , Sri Lanka
                    
                    Please send across resumes to ssulaiman@virtusa.com
                    
                    Virtusa

                </div>
                
                
                
                
            </div>
            <div class="job_detail_right">
                <div class="company_details">
                    <div class="mock_interview">
                        We would like to supply mock interviews
                    </div>
                   <p>
                       Click here to veiw company details</p> 
                   <button id="clickme" type="button" onclick="functionViewCompany()"> Click Here</button>
                </div>
                <div class="job_overview">
                    <div class="job_overview_text">
                        Job overview
                    </div>
                    <div class="application_deadline">
                        <div class="application_deadline_text">
                            Application deadline :
                        </div>
                        <div class="application_deadline_date">
                            2021/09/30
                        </div>
                       
                    </div>
                   <!--  <div class="salary">
                            <div class="salary_text">
                                Salary(LKR) :
                            </div>
                            <div class="salary_number">
                               25 000-30 000
                            </div>
                    </div> -->
                    <div class="Job_Type">
                         <div class="Job_Type_text">
                            Job Type :
                         </div>
                         <div class="Job_Type_answer">
                             Part Time
                         </div>
                    </div>
                    <div class="year_of_experience">
                        <div class="year_of_experience_text">
                            Year Of Experience :
                        </div>
                        <div class="year_of_experience_answer">
                            2 Years
                        </div>
                   </div>
                   <div class="phone_number">
                    <div class="phone_number_text">
                        Phone number :
                    </div>
                    <div class="phone_number_answer">
                        0112568942
                    </div>
               </div>
               <div class="Email">
                <div class="Email_text">
                       E-mail :
                </div>
                <div class="Email_answer">
                  virtusa@gmail.com
                </div>
           </div>

                </div>
                
            </div>


        </div>
      
   <div class="job_post_image">
   <img src='<?php echo URL ?>views/images/View_job/jobpost.jpg' > 
     
   </div>
   <!--FAQ session start from here--> 
    <div class="FAQ">
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
    
</div>
<?php include 'Footer.php'?>
<script src="<?php echo URL ?>views/JS/View_jobs.js"></script>
</body>
</html>
