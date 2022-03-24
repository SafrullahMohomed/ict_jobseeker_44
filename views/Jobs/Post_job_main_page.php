<?php if ( empty(session_id()) ) session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
 <?php include ("views/CSS/Post_job.css" )?>

    </style>
  
  <title>Post Jobs</title>
</head>
<body>
     <!-- header part with css html js -->
 <div class="header_div" >
        <?php include ("views/Header.php" )?>
</div>
      <!-- header part end  -->

<!-- check user is company or not -->
      <?php if ( isset($_SESSION['User_ID']) && $_SESSION['User_type']=="Company" ): ?>

  <div class="post_job_description" style="background-image:url('<?php echo URL?>views/images/Post_job/1.png');" >
    <div class="post_job_description_left">

      <div class="post_job_description_left_text">If you are NEW <br>
        try with our initial <br>
        SIX-month
         <br>
         FREE trial<br> and get more<br> and more benefits.<br>Oh!!! Do not worry,<br>otherwise
          you can go with <br>flexible packages</div>

              <button  class="post_job_description_left_button">FREE Trial</button>
        
              <button class="post_job_description_left_button">Pay</button>
    </div>
    

<div class="post_job_description_text">It is time to post your new job </div>

  </div>



<?php endif; ?>
<!-- user is not company -->
<?php if ( !isset($_SESSION['User_ID'])||$_SESSION['User_type']!="Company") : ?>
        <div class="login_msg"> Before post a job you should login as a Company</div>
        <a id="a_tag_login" href="<?php echo URL?>Login"><button class="submit_button"id="login_button">Login</button></a>
<?php endif; ?>  

<?php include  ("views/Footer.php" )?>
<script  src="<?php echo URL?>views/JS/Post_job.js"></script>

</body>
</html>


