<?php if ( empty(session_id()) ) session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

<?php include "views/CSS/Company/Company_profile.css" ?>
 </style>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <script src="https://kit.fontawesome.com/f299a8aeaa.js" crossorigin="anonymous"></script>
    <title>company_profile</title>
</head>
<body
<?php
#if user is logging and he click, click here button to view company profile .
#then it is his own profile.then show profile with edit profile 

if( isset($_SESSION['User_ID'])&&$_SESSION['User_type']=="Company" && $_SESSION['User_ID']==$data['User_ID']):?>
onload="companyData(<?php echo $_SESSION['User_ID']?>)"
 
<?php
else:
?>
onload="companyData(<?php echo $data['User_ID']?>)"
<?php endif; ?>
>
    <!-- header part with css html js -->
 <div class="header_div" >
        <?php include 'views/Header.php'?>
</div>
      <!-- header part end  -->
    <div class="main_container">

    <!-- check user loging  -->

    <?php if ( isset($_SESSION['User_ID']) && $_SESSION['User_type']=="Company" && $_SESSION['User_ID']==$data['User_ID'] ): ?>  
      <!-- edit your profile -->
    <div class="edit_profile">
      <a href="<?php echo URL ?>Company/company_account"><button>Edit your profile</button></a>
      
    </div>
    <?php endif; ?>
<div class="detail">
<!-- load data from database -->
</div>
        
        

    </div>
    <!-- header part with css html js -->
 
        <?php include 'views/Footer.php'?>
        
      <!-- header part end  -->
      
      <script src="<?php echo URL ?>views/JS/Company_profile.js"></script>

</body>
</html>