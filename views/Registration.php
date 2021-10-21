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
                
                <form action="http://localhost/ict_jobseeker_44/Registration/UserRegistration" method="POST"  name="myForm">
                    <div class="input-container">
                    <select name="user_type" id="users">
                        <option value="Jobseeker">Job Seeker</option>
                        <option value="Company">Company</option>
                        <option value="Contract provider">Contract Provider</option>
                        <option value="Counsellor">Counsellor</option>
                    </select>
                </div>
                    <p id="label">First Name</p>
                    <input type="text" id="fname" name="fname" placeholder="Enter Your First Name" class="inputfield" required onfocus=" hideFormError(fname_error)"><br>
                    <span id="fname_error"> <?php echo $data['fname_err']?> </span>

                    <p id="label">Last Name</p>
                    <input type="text" id="lname" name="lname" placeholder="Enter Your Last Name" class="inputfield" required onfocus=" hideFormError(lname_error)"><br>
                    <span id="lname_error"><?php echo $data['lname_err']?></span>

                    <p id="label">Email</p>
                    <input type="email" id="email" name="email" placeholder="Enter Your Email" required onfocus="hideFormError(email_error)"><br>
                    <span id="email_error" class="error"><?php echo $data['email_err']?></span>

                    <p id="label">Password</p>
                    <input type="password" id="password" name="password" placeholder="Enter Your Password" onfocus="hideFormError(password_error)"><br>
                    <span id="password_error" class="error"><?php echo $data['password_err']?></span>

                    <p id="label">Confirm Password</p>
                    <input type="password" name="confirmPassword" placeholder="Confirm Your Password" onfocus="hideFormError(confirm_password_error)"><br>
                    <span id="confirm_password_error" class="error"><?php echo $data['confirmPassword_err']?></span>

                    <!-- <input type="submit" id="submit" name="submit" value="Register" onclick="return validateForm()"><br> -->
                    <input type="submit" id="submit" name="submit" value="Register" ><br>
                </form>
            </div>
        </div>
    </div>
    <?php include 'Footer.php'?>
    <script  src="<?php echo URL?>views/JS/Registration.js"></script>

</body>
</html>