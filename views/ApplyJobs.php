<?php if ( empty(session_id()) ) session_start(); ?>
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
     <!-- check user loging  -->

     <?php if ( isset($_SESSION['User_ID']) && $_SESSION['User_type']=="Jobseeker" ): ?>
    <div class="CompanyBanner">
        <div class="CompanyLogo" style="background-image:url('http://localhost/ict_jobseeker_44/views/images/Jobseeker/4.png');">
        </div>
        <div class="JobDetails">
            <p>Senior Software Engineer(C++)</p>
            <p>Virtusa Pvt Limited, 752 Dr Danister De Silva Mawatha, Colombo 00900</p>
        </div>       
    </div>
    <form class="main_container" method="POST" name="myForm" action="<?php echo URL ?>Jobseeker/ApplyJobs/update_jobseeker_data">
        <p id="titles">Personal Details</p>
        <div class="row">
            <label for="fname" class="labelfield">First Name</label><br>
            <input type="text" id="fname" name="fname" placeholder= "Enter Your First Name" value = "<?php echo $data['First_name'] ?>" class="inputfield" required onfocus=" hideFormError(fname_error)"><br>
            <span id="fname_error"></span>
        </div>
        <div class="row">
            <label for="lname" class="labelfield">Last Name</label><br>
            <input type="text" id="lname" name="lname" placeholder= "Enter Your Last Name" value = "<?php echo $data['Last_name'] ?>" class="inputfield" required onfocus=" hideFormError(lname_error)"><br>
            <span id="lname_error"></span>
        </div>
        <div class="row">
            <label for="email" class="labelfield">Email</label><br>
            <input type="email" id=email" name="email" placeholder="Enter Your Email" value="<?php echo $data['Email'] ;?>" class="inputfield" required onfocus="hideFormError(email_error)"><br>
            <span id="email_error" class="error"></span> 
        </div>
        <div class="row">
            <label for="email" class="labelfield">Confirm Email</label><br>
            <input type="email" id="email" name="confirm_email" placeholder= "Confirm Your Email" class="inputfield" required onfocus="hideFormError(confirm_email_error)"><br>   
            <span id="confirm_email_error" class="error"></span> 
        </div>
        <div class="row">
            <label for="phonenumber" class="labelfield">Phone Number</label><br>
            <input type="text" id="phonenumber" name="phonenumber" placeholder= "Enter Your Phone Number" value="<?php echo $data['Phone_number'] ;?>"  class="inputfield" required onfocus="hideFormError(phonenumber_error)"><br>    
            <span id="phonenumber_error" class="error"></span>
        </div>
        <div class="row">
            <label for="Residence" class="labelfield">Place Of Residence</label><br>
            <input type="text" id="Residence" name="residence" placeholder= "Enter Place Of Your Residence" value="<?php echo $data['Address']?>" class="inputfield" required onfocus="hideFormError(residence_error)"><br>  
            <span id="residence_error" class="error"></span> 
        </div>
        <p id="titles">On The Web</p>
        <div class="row">
            <label for="LinkedIn_link" class="labelfield">LinkedIn</label><br>
            <input type="url" id="LinkedIn_link" name="LinkedInlink" placeholder= "Enter Your Linkedin Link" value="<?php echo $data['Jobseeker_In']?>" class="inputfield" onfocus="hideFormError(LinkedInlink_error)"><br>
            <span id="LinkedInlink_error" class="error"></span>  
        </div>         
        <div class="row">
            <label for="Facebook_link" class="labelfield">Facebook</label><br>
            <input type="url" id="Facebook_link" name="Facebooklink" placeholder= "Enter Your Facebook Link" value="<?php echo $data['Jobseeker_Fb']?>" class="inputfield" onfocus="hideFormError(Facebooklink_error)"><br>
            <span id="Facebooklink_error" class="error"></span> 
        </div>
        <div class="row">
            <label for="Twitter_link" class="labelfield">Twitter</label><br>
            <input type="url" id="Twitter_link" name="Twitterlink" placeholder= "Enter Your Twitter Link" value="<?php echo $data['Jobseeker_Twitter']?>" class="inputfield" onfocus="hideFormError(Twitterlink_error)"><br>
            <span id="Twitterlink_error" class="error"></span>  
        </div>
        <div class="row">
            <label for="website_link" class="labelfield">Website</label><br>
            <input type="url" id="website_link" name="websitelink" placeholder= "Enter Your Website Link" value="<?php echo $data['Jobseeker_Web']?>" class="inputfield" onfocus="hideFormError(websitelink_error)"><br>
            <span id="websitelink_error" class="error"></span> 
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
        <input type="submit" id="submit" submit="submit"  class="submit_button" onclick="return validateForm()"><br>
       </div>
    </form>
    
    <?php endif; ?>
    <?php if ( !isset($_SESSION['User_ID'])||$_SESSION['User_type']!="Jobseeker") : ?>
        <div class="login_msg"> Before apply for a job you should login as Jobseeker</div>
        <a id="a_tag_login" href="<?php echo URL?>Login"><button class="submit_button"id="login_button">Login</button></a>
        <?php endif; ?>  
    <?php include 'Footer.php'?>
    <script  src="<?php echo URL?>views/JS/ApplyJobs.js"></script>
</body>
</html>