<?php if ( empty(session_id()) ) session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="company_account.css">
    <style>
 <?php include "views/CSS/Company/Company_account.css" ?>

    </style>
    <script src="https://kit.fontawesome.com/f299a8aeaa.js" crossorigin="anonymous"></script>
    <script src="company_account.js"></script>
    <title>company_account</title>
</head>
<body onload="my_jobs()">
     <!-- header part with css html js -->
 <div class="header_div" >
        <?php include 'views/Header.php'?>
</div>
 <!-- header part end with css html js -->
    <div class="all">
    <form class="main_container" name="myForm" method="POST" action="<?php echo URL ?>Company/Company_account/UserValidation"  enctype="multipart/form-data">
        <div class="picture_bar">
        <img src='<?php echo URL ?>views/images/Company/user.png' id="output">

        <div class="row">
        <label for="profile_pic" class="labelfield">Profile picture</label><br>
        <input type="file" id="profile_pic" name="profilepic" placeholder= "profile picture" class="inputfield" accept="image/*"  onchange="loadFile(event)"><br>
        <label for="profImg" class="labelfield" id="profImgBtnUpload">Choose a photo</label><br>

       </div>
        </div>
        <div class="row">
            <label for="name" class="labelfield  required">Company Name</label><br>
            <input value="<?php echo $data['Company_name']?>" autocomplete type="text" name="name" placeholder= "Name" class="inputfield" required onfocus=" hideFormError(name_error)"><br>
            <span  id="name_error" class="error"><?php echo $data['name_err']?></span>  

        </div>
        <div class="row">
            <label for="address" class="labelfield  required">Company Address</label><br>
            <input value="<?php echo  $data['address']?>" autocomplete type="text" id="address" name="address" placeholder="Company address " class="inputfield" required ><br>
            
        </div>
        <div class="row">
            <label for="phonenumber" class="labelfield">Phone number</label><br>
            <input value="<?php echo $data['phone_number']?>" autocomplete type="tel" name="Phone_number" placeholder= "0774225687" class="inputfield" onfocus=" hideFormError(phonenumber_error)"><br> 
            <span  id="phonenumber_error" class="error"><?php echo $data['phone_number_err']?></span>   
        </div>
        
        <div class="row">
            <label for="brief_description" class="labelfield"> Brief description</label><br>
            
            <textarea value="<?php echo  $data['brief_description']?>" autocomplete  id="brief_description" rows="4" name="brief_description" placeholder="Breif introduction about your company" class="inputfield" required> </textarea><br>
        </div>
        
        <div class="row">
            <label for="email" class="labelfield  required">Email</label><br>
            <input value="<?php echo  $data['email']?>" autocomplete  readonly type="email" id="email" name="email" placeholder= "Email" class="inputfield" required onfocus=" hideFormError(email_error)"><br>
            <span id="email_error" class="error"><?php echo $data['email_err']?></span>
        </div>
    
        
    <div class="row">
       
        <label for="website_link" class="labelfield">Websitelink</label><br>
        <input  value="<?php echo  $data['url']?>" autocomplete type="url" id="website_link" name="url" placeholder= "website link" class="inputfield" onfocus=" hideFormError(url_error)"><br>
        <span id="url_error"></span>
    </div>
    
    <div class="row">
        <label for="fburl" class="labelfield">Facebook link</label><br>
        <input value="<?php echo  $data['fburl']?>" autocomplete type="url" id="Facebook_link" name="fburl" placeholder= "Facebook link" class="inputfield" onfocus=" hideFormError(fburl_error)"><br>
        <span id="fburl_error" class="error"><?php echo $data['fburl_err']?></span>
    </div>
        
    <div class="row">
        <label for="linkedin_url" class="labelfield">LinkedIn link</label><br>
        <input value="<?php echo  $data['linkedin_url']?>" autocomplete type="url" id="LinkedIn_link" name="linkedin_url" placeholder= "LinkedIn link" class="inputfield" onfocus=" hideFormError(linkedin_url_error)"><br>
        <span id="linkedin_url_error" class="error"><?php echo $data['linkedin_url_err']?></span>
    
    </div>
        <div class="row">
            <label for="twitter_url" class="labelfield">Twitter link</label><br>
            <input value="<?php echo  $data['twitter_url']?>" autocomplete type="url" id="Twitter_link" name="twitter_url" placeholder= "Twitter link" class="inputfield" onfocus=" hideFormError(twitter_url_error)"><br>
            <span id="twitter_url_error" class="error"><?php echo $data['twitter_url_err']?></span>
        </div>
       
       <div class="row">
        <label for="short_introduction_video" class="labelfield">Short Introduction video</label><br>
        <input value="<?php echo $data['Company_name']?>" autocomplete type="file" id="short_introduction_video" name="shortintroductionvideo" placeholder= "Short Introduction Video" class="inputfield" accept="video/*"><br>
       </div>

       <div class="submit">
        <label for="submit" class="labelfield"></label><br>
        <!-- <input type="submit" id="submit" submit="submit"  class="submit_button" onclick="return validateForm()"><br> -->
        <input  type="submit" id="submit" submit="submit"  class="submit_button"><br>
       </div>
    </form>
    <div class="my_jobs">
        <div class="my_jobs_title">
            My Job Posts
        </div>
        <div class="my_jobs_row_container"> </div>
        
    </div>
    
    <?php include 'views/Footer.php'?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script  src="<?php echo URL?>views/JS/Company_account.js"></script>
</body>
</html>