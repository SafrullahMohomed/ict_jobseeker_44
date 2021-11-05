<?php if ( empty(session_id()) ) session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <style>
 <?php include "CSS/Post_contract.css" ?>

    </style>
    <script src="https://kit.fontawesome.com/f299a8aeaa.js" crossorigin="anonymous"></script>
    <title>post_contract</title>
</head>
<body>
    <!-- header part with css html js -->
<div class="header_div" style="height:140px">
<?php  include 'Header.php'?>
</div>
      <!-- header part end  -->

      <!-- check user is contract provider or not -->
      <?php if ( isset($_SESSION['User_ID']) && $_SESSION['User_type']=="Contract provider" ): ?>
 <div class="all">
 <div class="post_contract_bar">
        Post a Project 
    </div>
    <form class="main_container" name="myForm" action="<?php echo URL ?>cp/insert_post_contract_data " method="post" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>>
        
        <div class="row">
            <label for="projectname" class="labelfield">Project Name</label><br>
            <input type="text" id="project name" name="contract_name"  placeholder= "Enter your project name/title..." class="inputfield" required onfocus=" hideFormError(contract_name_error)"><br>
            <span id="contract_name_error"></span>
        </div>
        <div class="row">
            <label for="project_category" class="labelfield">Project Category (Skills)</label><br>
            <select type="text" id="project_category" name="contract_category"  class="inputfield" required><br>
         <option>Select Category</option>      
        <option>Logo Design</option>
        <option>Mobile App Development</option>
        <option>Article Writing</option>
        <option>HTML</option>      
        <option>Graphic Design</option>
        <option>Front End Development</option>
        <option>Back End Development</option>
        <option>WordPress</option>
        <option>PHP</option>
        
        <option>Data Entry</option>
    
    
    </select>

            </div>
            
        <div class="row">
            <label for="description" class="labelfield"> Brief Description</label><br>
           <textarea  id="description" rows="4" name="description" onfocus=" hideFormError(description_error)" placeholder="Include an overview of what you need done..." class="inputfield" required></textarea><br>
           <span id="description_error"></span>
        </div>
        
        <div class="row">
            <label for="deadline" class="labelfield">Deadline</label><br>
            <input type="date" id="deadline" name="deadline" placeholder= "deadline" class="inputfield" required><br>
           
        </div>
    
        <div class="row">
            <label for="avg_bid" class="labelfield">Averag_bid</label><br>
            <input type="text" id="avg_bid" name="avg_bid" onfocus=" hideFormError(avg_bid_error)" placeholder= "avg_bid(Rs.)" class="inputfield" required><br>    
            <span id="avg_bid_error"></span>
        </div>
        

       <div class="submit">
        <label for="submit" class="labelfield"></label><br>
        <input type="submit" id="submit" name="submit"  class="submit_button" onclick="return validateForm()"><br>
       </div>
    </form>
 </div>
    <?php endif; ?>
    <!-- user is not contract provider -->
<?php if ( !isset($_SESSION['User_ID'])||$_SESSION['User_type']!="Contract provider") : ?>
        <div class="login_msg"> Before post a contract you should login as a Contract provider</div>
        <a id="a_tag_login" href="<?php echo URL?>Login"><button class="submit_button"id="login_button">Login</button></a>
<?php endif; ?>  

   
    <?php  include 'Footer.php'?>
    <script src="<?php echo URL ?>views/JS/Post_contract.js"></script>
</body>
</html>