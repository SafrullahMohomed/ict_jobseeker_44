<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        <?php include "CSS/ResetPassword.css" ?> 
    </style>
    <title>Reset Password</title>
</head>
<body>
       <!-- header part with css html js -->
    <div class="header_div" >
        <?php include 'Header.php'?>
    </div>
    <div>
        <form class="MainContainer">
            <div class="Title">
                Reset Password
            </div>
            <div class="row">
                <label for="password" class="labelfield">Password</label><br>
                <input type="password" name="Password" placeholder="Enter Your Password"  class="inputfield" required>
            </div> 
            <div class="row">
                <label for="ConfirmPassword" class="labelfield">Confirm Password</label><br>
                <input type="password" name="ConfirmPassword" placeholder="Confirm Your Password"  class="inputfield" required>
            </div>       
            <div class="submit">
                <label for="submit" class="labelfield"></label><br>
            <input type="submit" id="submit" value="Reset Password"  class="submit_button"><br>
        </form>
    </div>
    <?php include 'Footer.php'?>
    <script  src="<?php echo URL?>views/JS/ResetPassword.js"></script>
</body>
</html>
