<?php if (empty(session_id())) session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Manage_learning_materials.css">
    <style>
        <?php include "CSS/Manage_learning_materials.css" ?> 
        
    </style>
    <title>Manage Learning Materials</title>
</head>
<body>
    <!-- <div class="header_div" >
        <?php #include 'Header.php'?>
    </div> -->
    <!-- header part end  -->
    
    <div>
    <form class="MainContainer" name="myForm" action="<?php echo URL ?>admin/Admin_add_lm/AddLearningMaterials"  method="post">
        <div class="Title">
            Manage Learning Materials
        </div>
        <div class="row" id="link">
            <label for="MaterialLink" class="labelfield">Learning Material Link </label><br>
            <input type="url" id="MaterialLink" name="MaterialLink" placeholder= "Enter Learning Material Link" class="inputfield" required onfocus=" hideFormError(MaterialLink_error)><br>
            <span id="MaterialLink_error"><?php #echo  $_SESSION["fnameErr"] ?></span>
        </div>
        <div class="row">
            <label for="MaterialTitle" class="labelfield">Learning Material Title </label><br>
            <input type="text" id="MaterialTitle" name="MaterialTitle" placeholder= "Enter Learning Material Title" class="inputfield" required onfocus=" hideFormError(MaterialTitle_error)><br>
            <span id="MaterialTitle_error"><?php #echo  $_SESSION["fnameErr"] ?></span>
        </div> 
        <div class="row">
            <label for="MaterialCategory" class="labelfield">Learning Material Category </label><br>
            <!-- <input type="text" id="MaterialCategory" name="MaterialCategory" placeholder= "Enter Learning Material Category" class="inputfield" required><br> -->
            <input type="radio" name="fav_language" id="Tutorials" value="Tutorials" >
            <label for="Tutorials" id="Tutorials">Tutorials</label><br>
            <input type="radio" name="fav_language" id="Videos" value="Videos" >
            <label for="Videos" id="Videos">Videos</label><br>
            <h3 id="disp" style= "color:red"> </h3>  
            <h4 id="error" style= "color:red"> </h4>  
        </div> 
        
       <div class="submit">
        <label for="submit" class="labelfield"></label><br>
        <input type="submit" id="submit" value="Add"  class="submit_button" onclick="return validateForm()"><br>
    </form>
    </div>
     
    <!-- <?php #include 'Footer.php'?> -->
    <script src="<?php echo URL ?>views/JS/AddLearningMaterials.js"></script>
</body>
</html>