<?php if ( empty(session_id()) ) session_start(); ?>
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
                    <a href="<?php echo URL?>Registration">Register here</a>
                </form> 
            </div>
            <div class="right-container" >
                <div class="logo-container">
                    <!-- <img src="logo.jpg" alt=""> -->
                    <img src='<?php echo URL ?>views/images/Login/logo.jpg' >
                </div>
                <form action="http://localhost/ict_jobseeker_44/Login/UserAuthentication" method="POST"  name="myForm">
                    <p id="label">Email</p>
                    <input type="email" name="email" placeholder="Enter Your Email"   onfocus="hideFormError(email_error)"><br>
                    <span id="email_error" class="error"><?php echo $data['email_err']?></span>
                    <p id="label">Password</p>
                    <input type="password" name="password" placeholder="Enter Your Password"  onfocus="hideFormError(password_error)"><br>
                    <span id="password_error" class="error"><?php echo $data['password_err']?></span>
                    <input type="submit" id="submit" name="submit" value="Login" ><br>
                    <a href="<?php echo URL?>ForgotPassword">Forgot Your Password?</a><br>
                </form>
            </div>
        </div>
    </div>
    <?php include 'Footer.php'?>
    <script  src="<?php echo URL?>views/JS/Login.js"></script>
</body>
</html>




