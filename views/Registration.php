<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register ICT jobseeker</title>
    <style>
        <?php include "CSS/Registration.css" ?>   
     </style>
    <link rel="stylesheet" href="Register.css">
</head>
<body>
<div class="header_div" style="height:140px">
<?php include 'Header.php'?>
</div>
    <div class="container">
        <div class="flex-container">
            <div class="left-container" style="background-image:url('http://localhost/ict_jobseeker_44/views/images/Registration/login1.jpg');">
                <h3 id="register">Register</h3>
                <form id="log_link">
                    <p>Already Registered?</p>
                    <a href="#">Login here</a>
                </form>
            </div>
            <div class="right-container" >
                <div class="input-container">
                    <select name="users" id="users">
                        <option value="jobseeker">Job Seeker</option>
                        <option value="company">Company</option>
                        <option value="contract provider">Contract Provider</option>
                        <option value="counsellor">Counsellor</option>
                    </select>
                </div>
                <form action="http://localhost/ict_jobseeker_44/Registration" method="POST" >
                    <p id="label">First Name</p>
                    <input type="text" id="fname" name="fname" placeholder="Enter Your First Name" class="inputfield" required onfocus=" hideFormError(fname_error)">
                    <span id="fname_error"></span>
                    <p id="label">Last Name</p>
                    <input type="text" id="lname" name="lname" placeholder="Enter Your Last Name" class="inputfield" required onfocus=" hideFormError(lname_error)">
                    <p id="label">Email</p>
                    <input type="email" id="email" name="email" placeholder="Enter Your Email" required onfocus="hideFormError(email_error)">
                    <span id="email_error" class="error"></span>
                    <p id="label">Password</p>
                    <input type="password" id="password" name="password" placeholder="Enter Your Password">
                    <p id="label">Confirm Password</p>
                    <input type="password" name="" placeholder="Confirm Your Password">
                    <input type="submit" id="submit" name="submit" value="Register" onclick="return validateForm()"><br>
                    
                </form>
            </div>
        </div>
    </div>
    <?php include 'Footer.php'?>
    <script  src="<?php echo URL?>views/JS/Register.js"></script>

</body>
</html>

