<?php if (empty(session_id())) session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Admin/Admin_add_lm.css">
    <style>
        <?php include "CSS/Admin_add_lm.css" ?> 
        
    </style>
    <title>Add Learning Materials</title>
</head>
<body>
    <!-- <div class="header_div" >
        <?php #include 'Header.php'?>
    </div> -->
    <!-- header part end  -->
    <div>
        
    </div>
    <div >
    <form class="MainContainer" name="myForm" action="<?php echo URL ?>admin/Admin_add_lm/AddLearningMaterials"  method="post">
        <div class="Title">
            Add Learning Materials
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
            <input type="radio" name="MaterialCategory" id="Tutorials" value="Tutorials" >
            <label for="Tutorials" id="Tutorials">Tutorials</label><br>
            <input type="radio" name="MaterialCategory" id="Videos" value="Videos" >
            <label for="Videos" id="Videos">Videos</label><br>
            <h3 id="disp" style= "color:red"> </h3>  
            <h4 id="error" style= "color:red"> </h4>  
        </div> 
        <div class="flex-container">
            <div class="AcademyImgRow">
                <label for="AcademyLogo" class="labelfield">Academy logo</label><br>
                <img src='<?php echo URL ?>views/images/LearningMaterials/academy.jpg' id="AcademyImg">
                <input type="file" id="AcademyFile">
                <label for="AcademyLogo" class="labelfield" id="AcademyLogoBtnUpload">Choose a photo</label><br>
            </div> 
            <div class="ResourceImgRow">
                <label for="ResourceLogo" class="labelfield">Resource logo</label><br>
                <img src='<?php echo URL ?>views/images/LearningMaterials/resource.jpg' id="ResourceImg">
                <input type="file" id="ResourceFile">
                <label for="ResourceLogo" class="labelfield" id="ResourceLogoBtnUpload">Choose a photo</label><br>
            </div>
        </div>
       <div class="submit">
        <label for="submit" class="labelfield"></label><br>
        <input type="submit" id="submit" value="Add"  class="submit_button" onclick="return validateForm()"><br>
    </form>
    </div>
     
    <!-- <?php #include 'Footer.php'?> -->
    <script src="<?php echo URL ?>views/JS/Admin_add_lm.js"></script>
</body>
</html>