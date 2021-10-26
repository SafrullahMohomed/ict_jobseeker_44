<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="ApllyJobs.css"> -->
    <script src="https://kit.fontawesome.com/f299a8aeaa.js" crossorigin="anonymous"></script>
    <title>Apply Jobs Form</title>
    <style>
        <?php include "CSS/ApplyJobs.css" ?>
    </style>
</head>
<body>
    <?php include 'Header.php'?>
    <div class="CompanyBanner">
        <div class="CompanyLogo" style="background-image:url('http://localhost/ict_jobseeker_44/views/images/Jobseeker/wso2logo.png');">
        </div>
        <div class="JobDetails">
            <p>Software Engineer(JAVA)</p>
            <p>WSO2 Sri Lanaka, 20 Palm Grove, Colombo 00300</p>
        </div>       
    </div>
    <form class="main_container">
        <p id="titles">Personal Details</p>
        <div class="row">
            <label for="fname" class="labelfield">First Name</label><br>
            <input type="text" id="fname" name="fname" placeholder= "Enter Your First Name" class="inputfield" required><br>
        </div>
        <div class="row">
            <label for="lname" class="labelfield">Last Name</label><br>
            <input type="text" id="lname" name="name" placeholder= "Enter Your Last Name" class="inputfield" required><br>
        </div>
        <div class="row">
            <label for="email" class="labelfield">Email</label><br>
            <input type="email" id=email" email="email" placeholder="Enter Your Email" class="inputfield" required><br>
        </div>
        <div class="row">
            <label for="email" class="labelfield">Confirm Email</label><br>
            <input type="email" id="email" email="email" placeholder= "Confirm Your Email" class="inputfield" required><br>    
        </div>
        <div class="row">
            <label for="phonenumber" class="labelfield">Phone Number</label><br>
            <input type="text" id="phonenumber" phonenumber="Phone number" placeholder= "Enter Your Phone Number" class="inputfield" required><br>    
        </div>
        <div class="row">
            <label for="Residence" class="labelfield">Place Of Residence</label><br>
            <input type="text" id="Residence" Residence="Residence" placeholder= "Enter Place Of Your Residence" class="inputfield" required><br>    
        </div>
        <p id="titles">On The Web</p>
        <div class="row">
            <label for="LinkedIn_link" class="labelfield">LinkedIn</label><br>
            <input type="url" id="LinkedIn_link" LinkedIn_link="LinkedInlink" placeholder= "Enter Your Linkedin Link" class="inputfield"><br>
        </div>         
        <div class="row">
            <label for="Facebook_link" class="labelfield">Facebook</label><br>
            <input type="url" id="Facebook_link" Facebook_link="Facebooklink" placeholder= "Enter Your Facebook Link" class="inputfield"><br>
        </div>
        <div class="row">
            <label for="Twitter_link" class="labelfield">Twitter</label><br>
            <input type="url" id="Twitter_link" Twitter_link="Twitterlink" placeholder= "Enter Your Twitter Link" class="inputfield"><br>
        </div>
        <div class="row">
            <label for="website_link" class="labelfield">Website</label><br>
            <input type="url" id="website_link" website_link="websitelink" placeholder= "Enter Your Website Link" class="inputfield"><br>
        </div>
        <p id="titles">Resume</p>
        <div class="Resume">
            <div class="attach">
                <p id="resume">Already Created A Resume?</p><br>
                <a href="#" id="attach1">Attach Your Resume</a>
            </div>
            <div class="create">
                <p id="create">Dont Have A Resume?</p><br>
                <a href="#" id="attach2">Create Your Resume Now</a>
            </div>  
        </div>
        <p id="titles">Message</p>
        <div class="row">
            <textarea  id="Message" rows="12"  class="inputfield" required></textarea><br>
        </div>   
       <div class="submit">
        <label for="submit" class="labelfield"></label><br>
        <input type="submit" id="submit" submit="submit"  class="submit_button"><br>
       </div>
    </form>
    <div>
        
    </div>
    <?php include 'Footer.php'?>
    <script  src="<?php echo URL?>views/JS/ApplyJobs.js"></script>
</body>
</html>