<?php if ( empty(session_id()) ) session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="ChangePassword.css"> -->
    <style>
        <?php include "CSS/ChangePassword.css" ?>
        

    </style>
    <title>Change Password</title>
</head>
<body>
    <!-- header part start  -->
    <div class="header_div" >
        <?php include 'Header.php'?>
    </div>
    <!-- header part end  -->
    <div>
        <form class="MainContainer">
            <!-- Title of the page starts here -->
            <div class="Title">
                Change Password
            </div>
            <!-- Title of the page ends here -->

            <!-- Input fields starts here -->
            <div class="row">
                <label for="password" class="labelfield">Current Password</label><br>
                <input type="password" name="Password" placeholder="Enter Your Current Password"  class="inputfield" required>
            </div> 
            <div class="row">
                <label for="ConfirmPassword" class="labelfield">New Password</label><br>
                <input type="password" name="ConfirmPassword" placeholder="Enter Your New Password"  class="inputfield" required>
            </div>   
            <div class="row">
                <label for="ConfirmPassword" class="labelfield">Confirm New Password</label><br>
                <input type="password" name="ConfirmPassword" placeholder="Confirm Your New Password"  class="inputfield" required>
            </div>   
            <!-- Input fields ends here -->

            <!-- Change password button starts here -->
            <div class="submit">
                <label for="submit" class="labelfield"></label><br>
            <input type="submit" id="submit" value="Change Password" submit="submit"  class="submit_button"><br>
            <!-- Change password button ends here -->

        </form>
    </div>

    <!-- footer part starts here -->
    <?php include 'Footer.php'?>
    <!-- footer part ends here -->

    <!-- <script src="ChangePassword.js"></script> -->
    <script src="<?php echo URL ?>views/JS/ChangePassword.js"></script>
    
</body>
</html>
