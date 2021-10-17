

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
 <?php include "CSS/Contract_provider_account.css" ?>

    </style>
<title>contract_provider_account</title>
    
    <script src="https://kit.fontawesome.com/f299a8aeaa.js" crossorigin="anonymous"></script>
   
    
</head>
<body>
<?php 
require  'controllers/Form_validation/Contract_provider_account_validation.php';
?>
     <form class="main_container" name="myForm" action="<?php echo URL ?>DB/Cp_account_insert"  method="post" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>>
     <!-- <form class="main_container" name="myForm" action="../../../controller/form_validation_function.php"  method="post" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>> -->
        <div class="picture_bar">
        <img src='<?php echo URL ?>views/images/Contract_provider/user.png' id="output">
 <div class="row">
        <label for="profile_pic" class="labelfield">Profile picture</label><br>
        <input type="file" id="profile_pic" name="profile_pic" placeholder= "profile picture" class="inputfield" accept="image/*" onchange="loadFile(event)" ><br>
       </div>
        </div>
        <div class="row">
            <label for="fname" class="labelfield">First Name</label><br>
            <input type="text" id="fname" name="fname" placeholder= "Enter your first name..." require class="inputfield" onfocus=" hideFormError(fname_error)"><br>
            <span id="fname_error"><?php echo  $_SESSION["fnameErr"] ?></span>

           
        </div>
        <div class="row">
            <label for="lname" class="labelfield">Last Name</label><br>
            <input type="text" id="lname" name="lname" placeholder= "Enter your last name..." require class="inputfield" onfocus=" hideFormError(lname_error)"><br>
            <span id="lname_error"><?php echo  $_SESSION["lnameErr"]?></span>
        </div>
        <div class="row">
            <label for="address" class="labelfield">Address</label><br>
            <input type="text" id=address" name="address" placeholder="Address " class="inputfield"  onfocus=" hideFormError(address_error)"><br>
            <span id="address_error"><?php echo  $_SESSION["addressErr"] ?></span>
        </div>
        <div class="row">
            <label for="Phone_number" class="labelfield">Phone number</label><br>
            <input type="text" id="phonenumber" name="phone_number" placeholder= "use format 0775689756"  require class="inputfield" onfocus=" hideFormError(phonenumber_error)"><br>    
            <span id="phonenumber_error"><?php echo   $_SESSION["phone_numberErr"] ?></span>
        </div>
        <div class="row">
            <label for="NIC" class="labelfield">NIC</label><br>
            <input type="text" id="NIC" name="nic" placeholder= "NIC" class="inputfield" require onfocus=" hideFormError(nic_error)"><br>
            <span id="nic_error"><?php echo   $_SESSION["nicErr"]?></span>

        </div>
        
        <div class="row">
            <label for="brief_description" class="labelfield"> Brief description</label><br>
            
            <textarea  id="brief_description"name="brief_description" rows="4"   require placeholder="Type brief introduction about your self..." class="inputfield"></textarea><br>
            <span id="brief_description_error"><?php echo    $_SESSION["Brief_descriptionErr"]  ?></span>
        </div>
        
        <div class="row">
            <label for="email" class="labelfield">Email</label><br>
            <input type="email" id="email" name="email" placeholder= "Email" require class="inputfield" onfocus=" hideFormError(email_error)"><br>
            <span id="email_error" class="error"><?php echo   $_SESSION["emailErr"]?></span>
        </div>
    
        
    <div class="row">
       
        <label for="website_link" class="labelfield">Web site link</label><br>
        <input type="url" id="website_link" name="web_url" placeholder= "web site link"  class="inputfield" onfocus=" hideFormError(url_error)"><br>
        <span id="url_error"><?php echo   $_SESSION["web_urlErr"] ?></span>
    </div>
    
    <div class="row">
        <label for="fburl" class="labelfield">Facebook link</label><br>
        <input type="url" id="Facebook_link" name="fb_url" placeholder= "Facebook link" class="inputfield" onfocus=" hideFormError(fburl_error)"><br>
        <span id="fburl_error" class="error"><?php echo   $_SESSION["fb_urlErr"] ?></span>
    </div>
        
    <div class="row">
        <label for="linkedin_url" class="labelfield">LinkedIn link</label><br>
        <input type="url" id="LinkedIn_link" name="linkedin_url" placeholder= "LinkedIn link" class="inputfield" onfocus=" hideFormError(linkedin_url_error)"><br>
        <span id="linkedin_url_error" class="error"><?php echo  $_SESSION["linkedin_urlErr"] ?></span>
    
    </div>
        <div class="row">
            <label for="twitter_url" class="labelfield">Twitter link</label><br>
            <input type="url" id="Twitter_link" name="twitter_url" placeholder= "Twitter link" class="inputfield" onfocus=" hideFormError(twitter_url_error)"><br>
            <span id="twitter_url_error" class="error"><?php echo  $_SESSION["twitter_urlErr "]?></span>
        </div>
       
       
      

       <div class="submit">
        <label for="submit" class="labelfield"></label><br>
      <input type="submit" id="submit" name="submit"  class="submit_button"  onclick="return validateForm()"><br> 
       
       </div>
    </form>
   
    <div class="my_jobs">
        <div class="my_jobs_title">
            My Contract Posts
        </div>
        <div class="my_jobs_row_container">
            <div class="my_jobs_row">
               <div class="job_id">
                   <div class="job_id_text">
                    Contract ID
                   </div>
                   <div class="job_id_data">
                       0001
                   </div>

               </div> 
               <div class="job_title">
                <div class="job_title_text">
                    Contract Title
                </div>
                <div class="job_title_data">
                    Mockup UI Design
                </div>

            </div> 
            <div class="icon">
                <i class="fa fa-eye" aria-hidden="true"></i>
                <i class="fa fa-pencil" aria-hidden="true"></i>
                <i class="fa fa-trash-o" aria-hidden="true"></i>
            </div>
            </div>
            <div class="my_jobs_row">
                <div class="job_id">
                    <div class="job_id_text">
                        Contract ID
                    </div>
                    <div class="job_id_data">
                        0001
                    </div>
 
                </div> 
                <div class="job_title">
                 <div class="job_title_text">
                    Contract Title
                 </div>
                 <div class="job_title_data">
                    Data Entry
                 </div>
 
             </div> 
             <div class="icon">
                 <i class="fa fa-eye" aria-hidden="true"></i>
                 <i class="fa fa-pencil" aria-hidden="true"></i>
                 <i class="fa fa-trash-o" aria-hidden="true"></i>
             </div>
             </div>
        </div>
    </div>
    <script  src="<?php echo URL?>views/JS/Contract_provider_account.js"></script>
</body>
</html>