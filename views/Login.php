<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login ICT jobseeker</title>
    <style>
        <?php include "CSS/Login.css" ?>   
     </style>
</head>
<body>
<div class="header_div" style="height:140px">
<?php include 'Header.php'?>
</div>
    <div class="container">
        <div class="flex-container">
            <div class="left-container" style="background-image:url('http://localhost/ict_jobseeker_mvc_final/views/images/Login/login1.jpg');" >

                <h3 id="login">Login</h3>
                <form id="reg_link">
                    <p>Don't have an account?</p>
                    <a href="#">Register here</a>
                </form> 
            </div>
            <div class="right-container" >
                <div class="logo-container">
                    <!-- <img src="logo.jpg" alt=""> -->
                    <img src='<?php echo URL ?>views/images/Login/logo.jpg' >
                </div>
                <form>
                    <p id="label">Email</p>
                    <input type="email" name="email" placeholder="Enter Your Email"  required onfocus="hideFormError(email_error)">
                    <span id="email_error" class="error"></span>
                    <p id="label">Password</p>
                    <input type="password" name="" placeholder="Enter Your Password">
                    <input type="submit" id="submit" name="submit" value="Login" onclick="return validateForm()"><br>
                    <a href="#">Forgot Your Password?</a><br>
                </form>
            </div>
        </div>
    </div>
    <?php include 'Footer.php'?>
    <script src="Login.js"></script>
</body>
</html>



