<?php if ( empty(session_id()) ) session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f299a8aeaa.js" crossorigin="anonymous"></script>
    <style>
        <?php include "CSS/JobSeekerProfile.css" ?> 
    </style>
    <title>JobSeeker Profile</title>
</head>
<body>
<div class="header_div" >
        <?php include 'Header.php'?>
</div>
    <div class="MainContainer">
        <div class="MainDetails">
            <div class="ProfilePic">
                <img src='<?php echo URL ?>views/images/JobSeekerProfile/JobSeeker.jpg' >
            </div>
            <div class="Intro">
                <div class="Name">
                    Chamal Perera
                </div>
                <div class="Post">
                    Software Engineer
                </div>
            </div>
           
        </div>
        <div class="SubContainer">
            <div class="Contact">
                <div class="Address">
                    52,Senanayake Road,Colombo 02
                </div>
                <div class="ContactNumber">
                    +94 71 244 1238
                </div>
                <div class="Projects">
                    10 Projects
                </div>
                <div class="Rating">
                    <i class="fa fa-star-o" aria-hidden="false"></i>
                    <div class="NoOfRating">4.2</div>
                </div>
            </div>
            <div class="SocialLinks">
                <div class="email">
                    <div class="email_text">
                      <p id="topic">Email</p>
                    </div>
                    <div class="email_data">
                      <a href="chamal@gmail.com"> chamal@gmail.com  </a>
                    </div>
                   
                </div>
                <div class="website">
                    <div class="website_text">
                        <p id="topic">Web site</p>
                    </div>
                    <div class="website_data">
                      <a href="chamalcontract.com"> chamalcontract.com  </a> 
                    </div>
                  
                </div>
                <div class="social_media">
                    <div class="social_media_text">
                        <p id="topic">Social media</p>
                    </div>
                    <div class="social_media_links">
                      <i class="fab fa-facebook-square"></i>
                      <i class="fab fa-linkedin"></i>
                      <i class="fab fa-twitter-square"></i>
                     </div>
                  
                </div>
            </div>
        </div>
        <div class="About">
            <div class="JobSeekerDetails">
                <p id="titles">About Me</p>
                <div class="row">
                   Software engineer with through hands on experience in all levels of testing 
                   including performance, functional integration, system and user acceptance testing.
                </div>  
                <p id="titles">Experience</p>
                <div class="row">
                    <p id="Jobs"><span>Software engineer</span> WSO2(2019-present)</p>
                    <ul id="works">
                        <li>Direct software design</li>
                        <li>Evaluate interface between hardware and software</li>
                        <li>Advice customers regarding maintenance of software system</li>
                    </ul>
                    <p id="Jobs"><span>Junior software engineer</span> Arimac(2017-2019)</p>
                    <ul id="works">
                        <li>Stored, retieved and manipulated data</li>
                        <li>Modified existing softwares to correct errors</li>
                        <li>Prepaired detailed reports</li>
                    </ul>
                </div>  
                <p id="titles">Skills</p>
                <div class="Skills">
                    <ul>
                        <li>Performance and scalability optimisation</li>
                        <li>Sharepoint</li>
                        <li>API design</li>
                        <li>Data warehousing and analitics</li>
                    </ul>
                </div>
                <p id="titles">Education</p>
                <div class="Education">
                    <ul>
                        <li>BSc(Computer Science) University Of Colombo School Of Computing(2013-2017)</li>
                    </ul>
                </div>
                <p id="titles">Resume</p>
                <div class="resume">
                    <a href="#" id="link">Click here</a>
                    <span id="resumeDetails">to view my resume</span>
                </div>
            </div>
        </div>
        <p id="titles">Reviews</p>
        <div class="review">
            <hr>
            <div class="review_row">
               <div class="user_picture">
                    <img src='<?php echo URL ?>views/images/JobSeekerProfile/review1.jpg' >
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
                       What a fantastic effort. 
                     </div>

               </div>
                
            </div>
            <hr>
            <div class="review_row">
               <div class="user_picture">
                    <img src='<?php echo URL ?>views/images/JobSeekerProfile/review2.jpg' >
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
                       Thanks for your dedication.
                     </div>

               </div>
                 
            </div>
            <hr>
            <p id="titles">Your Review</p>
            <div class="YourReview">
                <div class="rate_me_text">
                    Rate Me
                </div>
                <div class="star_row">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="false"></i>
                </div>
                <!-- <div class="Review1">
                    <input type="email" id="email" email="email" placeholder= "Email" class="inputfield" required><br>
                </div> -->
                <div class="Review1">        
                    <textarea  id="brief_description" rows="8" brief_description="brief_description" placeholder="Write your review here..." class="inputfield" required></textarea><br>
                </div>
                <button class="submit_button">Submit</button>
            </div>
        </div>
    </div>
    <?php include 'Footer.php'?>
    <script src="<?php echo URL ?>views/JS/JobSeekerProfile.js"></script>
</body>
</html>