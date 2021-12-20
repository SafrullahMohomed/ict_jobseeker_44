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
    <form class="MainContainer">
        <div class="Title">
            Manage Learning Materials
        </div>
        <div class="row" id="link">
            <label for="MaterialLink" class="labelfield">Learning Material Link </label><br>
            <input type="url" id="MaterialLink" name="MaterialLink" placeholder= "Enter Learning Material Link" class="inputfield" required><br>
        </div>
        <div class="row">
            <label for="MaterialTitle" class="labelfield">Learning Material Title </label><br>
            <input type="text" id="MaterialTitle" name="MaterialTitle" placeholder= "Enter Learning Material Title" class="inputfield" required><br>
        </div> 
        <div class="row">
            <label for="MaterialCategory" class="labelfield">Learning Material Category </label><br>
            <!-- <input type="text" id="MaterialCategory" name="MaterialCategory" placeholder= "Enter Learning Material Category" class="inputfield" required><br> -->
            <input type="radio" name="fav_language" id="Tutorials" value="Tutorials" >
            <label for="Tutorials" id="Tutorials">Tutorials</label><br>
            <input type="radio" name="fav_language" id="Videos" value="Videos" >
            <label for="Videos" id="Videos">Videos</label><br>
        </div> 
        
       <div class="submit">
        <label for="submit" class="labelfield"></label><br>
        <input type="submit" id="submit" value="Add"  class="submit_button"><br>
    </form>
    </div>
     
    <!-- <?php #include 'Footer.php'?> -->
</body>
</html>