<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

<?php include "CSS/Search_jobseeker.css" ?>


 </style>
   
    <title>Applied Jobseekers</title>
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
              placeholder="Jobseeker name/Qulification"
            />
          </div>
         <!--  <div class="category">
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
          </div> -->
          <div class="search-button">
            <button type="submit" >Search</button>
          </div>
        </div> 
       
      </div>
      <div class="Trending">Applied Jobseekers</div>
      <a href="<?php echo URL ?>Company_profiles/Company_profile" class="ResourceRow" type = " button" onclick="loadCompanyProfile()">
          <div class="Academy">
          <img src='<?php echo URL ?>views/images/Jobseeker/j1.jfif' > 
        
           
          </div>
          <div class="Tutorial">
             Kasun Perera
          </div>
         <!--  <div class="Lesson">
            <img src="images/2.jfif" alt="company icon">
          </div> -->
</a>
      <div class="ResourceRow">
        <div class="Academy">
        <img src='<?php echo URL ?>views/images/Jobseeker/j3.jfif' > 
       
    
         
        </div>
        <div class="Tutorial">
          Binuri Herath
        </div>
        <!-- <div class="Lesson">
          <img src="js.png" alt="Lesson icon">
        </div> -->
      </div>
        <div class="ResourceRow">
            <div class="Academy">
            <img src='<?php echo URL ?>views/images/Jobseeker/j2.jfif' > 
            
             
            </div>
            <div class="Tutorial">
              Supun Sandaruwan
            </div>
           
        </div>
      
      </div>
      <?php include 'Footer.php'?>
     
      <script src = "companies_search.js"></script>
</body>
</html>