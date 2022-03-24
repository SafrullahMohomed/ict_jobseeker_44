<?php if ( empty(session_id()) ) session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        <?php include "CSS/Contact_us.css" ?>
    </style>
    <title>Contact_us</title>

</head>
<!-- header part with css html js -->
<div class="header_div" >
        <?php include 'Header.php'?>
</div>
      <!-- header part end  -->
<?php if ( isset($_SESSION['User_ID']) && ($_SESSION['User_type']=="Jobseeker" || $_SESSION['User_type']=="Company" || $_SESSION['User_type']=="Contract provider" || $_SESSION['User_type']=="Counsellor")): ?>
<body>
<div class="container">
  <div style="text-align:center">
    <h1 >Contact Us</h1>
    <p> Leave us a message</p>
  </div>
  <div class="row">
    <div class="input_box">
      <form name="myForm" action="<?php echo URL ?>Contact_us/InsertMessage" method="post" id="jobseeker_form">
        
        <input type="text" id="name" name="name" placeholder="Enter Your Name" required onfocus=" hideFormError(name_error)"><br>  
        <span id="name_error"> </span>
        <input type="email" id="email" name="email" placeholder="Enter Your Email" required onfocus="hideFormError(email_error)"><br>
        <span id="email_error"> </span>
        <textarea rows="10" id="message" name="message"  placeholder="Inquiry Or Message " required onfocus=" hideFormError(message_error)"></textarea><br>
        <span id="message_error"></span>
        
       

        <input type="submit" value="Submit" class="submit_button">
      </form>
    </div>
  </div>
</div>
<?php endif; ?>
    <?php if ( !isset($_SESSION['User_ID'])||$_SESSION['User_type']=="Jobseeker" || $_SESSION['User_type']=="Company" || $_SESSION['User_type']=="Contract provider" || $_SESSION['User_type']=="Counsellor") : ?>
        <div class="login_msg"> Before enter to this page you should login as User</div>
        <a id="a_tag_login" href="<?php echo URL?>Login"><button class="submit_button"id="login_button">Login</button></a>
    <?php endif; ?> 
<?php include 'Footer.php'?>
<script  src="<?php echo URL?>views/JS/ContactUs.js"></script>
</body>
</html>