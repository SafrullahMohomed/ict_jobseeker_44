<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
 <?php include "CSS/Success_post.css" ?>

    </style>
   
    <script src="https://kit.fontawesome.com/f299a8aeaa.js" crossorigin="anonymous"></script>
    <title>success</title>
</head>
<body>
<div class="header_div" >
        <?php include 'Header.php'?>
</div>

    <div class="main_container">
        <!-- <div class="circle">
            
            <i class="fas fa-check"></i>
 
           
        </div> -->
        <div class="text" >
            <div class="text1" >
            We have sent an email with a confirmation link to your email address. 
                    In order to complete the sign-up process, please click the confirmation link
               <?php #echo $info['mail_msg'];?>


</div> 
           
           <!-- <div class="text2" id="change">
               
           </div> -->
        </div> 
    </div>
    <?php include 'Footer.php'?>
</body>
</html>