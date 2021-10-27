<?php if ( empty(session_id()) ) session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ForgotPassword.css">
    <title>Forgot Password</title>
    <style>
        <?php include "CSS/ForgotPassword.css" ?>
    </style>
</head>
<body>
        <!-- header part with css html js -->
    <div class="header_div" >
            <?php include 'Header.php'?>
    </div>
    <div>
    <form class="MainContainer">
        <div class="Title">
            Forgot Password
        </div>
        <div class="row" id="description">
            Forgot your password? Please enter your email address. You will receive a link to create a new password via email.
        </div>
        <div class="row">
            <label for="email" class="labelfield">Email</label><br>
            <input type="email" id="email" name="email" placeholder= "Enter Your Email" class="inputfield" required><br>
        </div> 
       <div class="submit">
        <label for="submit" class="labelfield"></label><br>
        <input type="submit" id="submit" name="submit" value="Send Reset Password Link" class="submit_button"><br>
    </form>
    </div>
    
<?php include 'Footer.php'?>
</body>

</html>