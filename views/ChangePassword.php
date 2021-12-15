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

    <?php if ( isset($_SESSION['User_ID'])): ?>
    <div>
        <form class="MainContainer" name="myForm" action="<?php echo URL ?>ChangePassword/ChangingPassword" method="post">
            <!-- Title of the page starts here -->
            <div class="Title">
                Change Password
            </div>
            <!-- Title of the page ends here -->

            <!-- Input fields starts here -->
            <div class="row">
                <label for="CurrPassword" class="labelfield">Current Password</label><br>
                <input type="password" id="CurrPassword" name="CurrPassword" placeholder="Enter Your Current Password"  class="inputfield" required onfocus="hideFormError(curr_password_error)"><br>
                
            </div> 
            <div class="row">
                <label for="NewPassword" class="labelfield">New Password</label><br>
                <input type="password" id="NewPassword" name="NewPassword" placeholder="Enter Your New Password"  class="inputfield" required onfocus="hideFormError(new_password_error)"><br>
                
            </div>   
            <div class="row">
                <label for="ConfirmPassword" class="labelfield">Confirm New Password</label><br>
                <input type="password" id="ConfirmPassword" name="ConfirmPassword" placeholder="Confirm Your New Password"  class="inputfield" required required onfocus="hideFormError(confirm_password_error)"><br>
                
            </div>   
            <!-- Input fields ends here -->

            <!-- Change password button starts here -->
            <div class="submit">
                <label for="submit" class="labelfield"></label><br>
            <input type="submit" id="submit" value="Change Password" submit="submit"  class="submit_button" onclick="return validateForm()"><br>
            <!-- Change password button ends here -->

        </form>
    </div>
    <?php endif; ?>
    
    <!-- footer part including starts here -->
    <?php include 'Footer.php'?>
    <!-- footer part including ends here -->

    <!-- <script src="ChangePassword.js"></script> -->
    <script src="<?php echo URL ?>views/JS/ChangePassword.js"></script>

</body>
</html>
