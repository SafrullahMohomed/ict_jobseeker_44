<?php if ( empty(session_id()) ) session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        <?php include "CSS/JobSeekerAccount.css" ?> 
    </style>
    <title>JobSeeker Account</title>
</head>
<body>
<div class="header_div" >
        <?php include 'Header.php'?>
</div>
<?php if ( isset($_SESSION['User_ID']) && $_SESSION['User_type']=="Jobseeker" ): ?>
    <div class="WelcomeBanner">
        <div class="PersonalDetails">
            <p id="name">Hello Sandaruwan,</p>
            <p id="info">To complete your profile, please fill out and submit the following information.</p>
        </div>       
    </div>
    <div class="ProfileBar">
        <img src='<?php echo URL ?>views/images/JobSeekerAccount/user.png' >
         <div class="row1">
            <label for="profile_pic" class="labelfield">Profile picture</label><br>
            <input type="file" id="profile_pic" name="profile_pic" class="inputfield" accept="image/*" onchange="loadFile(event)" ><br>
        </div>
    </div>
    <form class="main_container" name="myForm" method="post">
        <p id="titles">Check & Update The Personal Details In Your Profile</p>
        <div class="row">
            <label for="fname" class="labelfield">First Name</label><br>
            <input type="text" id="fname" name="fname" placeholder= "Enter Your First Name" class="inputfield" required onfocus=" hideFormError(fname_error)"><br>
            <span id="fname_error"></span>
        </div>
        <div class="row">
            <label for="lname" class="labelfield">Last Name</label><br>
            <input type="text" id="lname" name="lname" placeholder= "Enter Your Last Name" class="inputfield" required  onfocus=" hideFormError(lname_error)"><br>
            <span id="lname_error"></span>
        </div>
        <div class="row">
            <label for="email" class="labelfield">Email</label><br>
            <input type="email" id=email" name="email" placeholder="Enter Your Email" class="inputfield" required onfocus="hideFormError(email_error)"><br>
            <span id="email_error" class="error"></span>
        </div>
        <div class="row">
            <label for="gender" class="labelfield">Gender</label><br>
            <select name="gender" id="gender" class="inputfield">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select> 
        </div>
        <div class="row">
            <label for="age" class="labelfield">Age</label><br>
            <input type="text" id="age" age="age" placeholder= "Enter Your Age" class="inputfield" required><br>    
        </div>
        <div class="row">
            <label for="phonenumber" class="labelfield">Phone Number</label><br>
            <input type="text" id="phonenumber" name="phone_number" placeholder= "Enter Your Phone Number" class="inputfield" required onfocus=" hideFormError(phonenumber_error)"><br>    
            <span id="phonenumber_error"></span>
        </div>
        <div class="row">
            <label for="Residence" class="labelfield">Place Of Residence</label><br>
            <input type="text" id="Residence" name="address" placeholder= "Enter Place Of Your Residence" class="inputfield" required onfocus=" hideFormError(address_error)"><br>   
            <span id="address_error"></span> 
        </div>
        <p id="titles">About Me</p>
        <div class="row">
            <textarea  id="Message" rows="12"  class="inputfield" name="brief_description" placeholder="Enter Brief Introduction About Your Self And Overall Professional Experience " required></textarea><br>
            <span id="brief_description_error"></span>
        </div>  
        <p id="titles">On The Web</p>
        <div class="row">
            <label for="LinkedIn_link" class="labelfield">LinkedIn</label><br>
            <input type="url" id="LinkedIn_link" name="linkedin_url" placeholder= "Enter Your Linkedin Link" class="inputfield" onfocus=" hideFormError(linkedin_url_error)"><br>
            <span id="linkedin_url_error" class="error"></span>
        </div>         
        <div class="row">
            <label for="Facebook_link" class="labelfield">Facebook</label><br>
            <input type="url" id="Facebook_link" name="fb_url" placeholder= "Enter Your Facebook Link" class="inputfield" hideFormError(fburl_error)"><br>
            <span id="fburl_error" class="error"></span>
        </div>
        <div class="row">
            <label for="Twitter_link" class="labelfield">Twitter</label><br>
            <input type="url" id="Twitter_link" name="twitter_url" placeholder= "Enter Your Twitter Link" class="inputfield" onfocus=" hideFormError(twitter_url_error)"><br>
            <span id="twitter_url_error" class="error"></span>
        </div>
        <div class="row">
            <label for="website_link" class="labelfield">Website</label><br>
            <input type="url" id="website_link" name="web_url" placeholder= "Enter Your Website Link" class="inputfield" onfocus=" hideFormError(url_error)"><br>
            <span id="url_error"></span>
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
       <div class="submit">
        <label for="submit" class="labelfield"></label><br>
        <input type="submit" id="submit" name="submit"  class="submit_button" onclick="return validateForm()"><br>
       </div>
    </form>
    <?php endif; ?>
    <?php if ( !isset($_SESSION['User_ID'])||$_SESSION['User_type']!="Jobseeker") : ?>
        <div class="login_msg"> Before apply for a job you should login as Jobseeker</div>
        <a id="a_tag_login" href="<?php echo URL?>Login"><button class="submit_button"id="login_button">Login</button></a>
        <?php endif; ?>  
    <?php include 'Footer.php'?>
    <script src="<?php echo URL ?>views/JS/JobSeekerAccount.js"></script>
</body>
</html>