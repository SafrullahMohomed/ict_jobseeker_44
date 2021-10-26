<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
 <?php include "CSS/Faq.css" ?>

    </style>
   
    <title>FAQ</title>
   
</head>
<body>
    
 <!-- header part with css html js -->
 <div class="header_div" >
        <?php include 'Header.php'?>
</div>
      <!-- header part end  -->
    <div class="faq_container">
        <form action="" method="">
            <label for="fname">Name</label><br>
            <input type="text" id="name" name="name" placeholder="Your name..."><br>
        
            <label for="email">E-mail</label><br>
            <input type="email" id="email" name="email" placeholder="Your E-mail..."><br>
        
            <label for="question">Question</label><br>

             <input type="text" id="question" name="question" placeholder="Your question..."><br>
            <div class="btn">
                <button type="button"  onclick="successSend()" >Send</button>
                <!-- <button type="submit" onclick="successSend()"  >Send</button> -->
            </div> 
           
       
          </form>

    </div>
    <?php include 'Footer.php'?>  

<script src="<?php echo URL ?>views/JS/Faq.js"></script>
</body>
</html>