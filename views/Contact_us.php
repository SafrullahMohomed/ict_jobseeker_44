<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        <?php include "CSS/Contact_us.css" ?>
    </style>
    <title>Contact_us</title>

</head>
<!-- header part with css html js -->
<div class="header_div" >
        <?php include 'Header.php'?>
</div>
      <!-- header part end  -->
<body>
<div class="container">
  <div style="text-align:center">
    <h1 >Contact Us</h1>
    <p> Leave us a message</p>
  </div>
  <div class="row">
    
    <div class="input_box">
      <form action="/action_page.php">
        
        <input type="text" id="fname" name="firstname" placeholder="Your name.."> 
        <input type="email" id="email" name="email" placeholder="Email">
        <textarea type="text" id="message" row = "10" name="message" placeholder="Message.."></textarea>
       
       
       

        <input type="submit" value="Submit" class="submit_button">
      </form>
    </div>
  </div>
</div>
<?php include 'Footer.php'?>
</body>
</html>