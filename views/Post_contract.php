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
     <!-- header part start  -->
<div class="header_div" >
        <?php include 'Header.php'?>
</div>
      <!-- header part end  -->
    <div class="all">
    <div class="post_contract_bar">
        Post a Project 
    </div>
    <form class="main_container" action="../../successfully posted/successfully.html " method="get">
        
        <div class="row">
            <label for="projectname" class="labelfield">Project Name</label><br>
            <input type="text" id="project name" name="projectname" placeholder= "Enter your project name/title..." class="inputfield" required><br>
        </div>
        <div class="row">
            <label for="project_category" class="labelfield">Project Category (Skills)</label><br>
            <select type="text" id="project_category" name="name"  class="inputfield" required><br>
         <option>Select Category</option>      
        <option>Category1</option>
        <option>Category2</option>
        <option>Category3</option></select>
            </div>
        
        <div class="row">
            <label for="description" class="labelfield"> Brief description</label><br>
           <textarea  id="description" rows="4"  placeholder="Include an overview of what you need done..." class="inputfield" required></textarea><br>
        </div>
        
        <div class="row">
            <label for="deadline" class="labelfield">Deadline</label><br>
            <input type="date" id="deadline" deadline="deadline" placeholder= "deadline" class="inputfield" required><br>
        </div>
    
        <div class="row">
            <label for="avg_bid" class="labelfield">Averag_bid</label><br>
            <input type="text" id="avg_bid" avg_bid="Phone number" placeholder= "avg_bid" class="inputfield" required><br>    
        </div>
        

       <div class="submit">
        <label for="submit" class="labelfield"></label><br>
        <input type="submit" id="submit" submit="submit"  class="submit_button"><br>
       </div>
    </form>
   
    </div>
    <?php include 'Footer.php'?>
</body>
</html>