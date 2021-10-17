<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

<?php include "CSS/Companies.css" ?>


 </style>
   
    <title>company main page</title>
</head>
<body>
   <!-- header part with css html js -->
   <div class="header_div" >
        <?php include 'Header.php'?>
</div>
      <!-- header part end  -->
    <div class="resource-search-part">
        <div class="theme-image">
       
     <img src='<?php echo URL ?>views/images/Companies/hometheme.jpg' > 
    
          
        </div>
        <!-- theme image ends here -->
       <div class="resource-search-box">
          <div class="search-your-keywords">
            <input
              type="text"
              name="Search your keyword"
              placeholder="Company Name"
            />
          </div>
          <div class="category">
            <select name="Category">
              <option value="none" selected disabled hidden>
                <span id="category-id-home">Select a City</span>
              </option>
              <option value="Tutorials">Colombo</option>
              <option value="Videos">Matara</option>
              <option value="Videos">Galle</option>
              <option value="Videos">Kandy</option>
              <option value="Videos">Anuradhapura</option>
              <option value="Videos">Jaffna</option>
              
            </select>
          </div>
          <div class="search-button">
            <button type="submit" >Search</button>
          </div>
        </div> 
       
      </div>
      <div class="Trending">Companies</div>
      <a href="<?php echo URL ?>Company_profiles/Company_profile" class="ResourceRow" type = " button" onclick="loadCompanyProfile()">
          <div class="Academy">
          <img src='<?php echo URL ?>views/images/Companies/company_logo1.jfif' > 
        
           
          </div>
          <div class="Tutorial">
              Virtusa PVT Limited
          </div>
         <!--  <div class="Lesson">
            <img src="images/2.jfif" alt="company icon">
          </div> -->
</a>
      <div class="ResourceRow">
        <div class="Academy">
        <img src='<?php echo URL ?>views/images/Companies//2.jfif' > 
       
    
         
        </div>
        <div class="Tutorial">
          Lanka PVT Limited
        </div>
        <!-- <div class="Lesson">
          <img src="js.png" alt="Lesson icon">
        </div> -->
      </div>
        <div class="ResourceRow">
            <div class="Academy">
            <img src='<?php echo URL ?>views/images/Companies//3.jfif' > 
            
             
            </div>
            <div class="Tutorial">
               Dialog
            </div>
            <!-- <div class="Lesson">
              <img src="css3-.png" alt="Lesson icon">
            </div> -->
        </div>
      <!-- <div class="resource-boxes">
        <div class="first-row">
          <div class="Resource"><a href="#" id="link">Tutorials</a></div>
          <div class="Resource"><a href="#" id="link">Videos</a></div>
        </div> -->
        <!-- <div class="second-row">
          <div class="Resource"><a href="#" id="link">Exercises</a></div>
          <div class="Resource"><a href="#" id="link">Quizes</a></div>
        </div> -->
      </div>
      <?php include 'Footer.php'?>
      <!-- <a src="../company_profile/company_profile.html"></a> -->
      <script src = "companies_search.js"></script>
</body>
</html>